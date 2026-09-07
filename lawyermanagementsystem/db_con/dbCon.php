<?php
// Database connection using environment variables for Vercel deployment
// Load .env if present (for local/testing environments)
$envFile = dirname(__DIR__, 2) . '/.env';
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $trimmed = trim($line);
        if ($trimmed === '' || strpos($trimmed, '#') === 0) continue;
        if (strpos($trimmed, '=') !== false) {
            list($name, $val) = explode('=', $trimmed, 2);
            $name = trim($name);
            $val  = trim($val);
            if (getenv($name) === false) {
                putenv("$name=$val");
                $_ENV[$name] = $val;
            }
        }
    }
}

function connect($setup = FALSE){
    $servername = getenv("DB_HOST")   ?: "localhost";
    $username   = getenv("DB_USER")   ?: "root";
    $password   = getenv("DB_PASS")   ?: "";
    $database   = getenv("DB_NAME")   ?: "lawyermanagement";
    $port       = (int)(getenv("DB_PORT") ?: 3306);
    $ssl        = getenv("DB_SSL") ? filter_var(getenv("DB_SSL"), FILTER_VALIDATE_BOOLEAN) : ($servername !== "localhost" && $servername !== "127.0.0.1");

    $con = mysqli_init();
    if (!$con) {
        die("mysqli_init failed");
    }

    if ($ssl) {
        $con->ssl_set(NULL, NULL, NULL, NULL, NULL);
    }

    $dbName = $setup ? "" : $database;
    $flags = $ssl ? MYSQLI_CLIENT_SSL : 0;

    if (!@$con->real_connect($servername, $username, $password, $dbName, $port, NULL, $flags)) {
        // Fallback without SSL if connection fails and DB_SSL is not explicitly forced
        if ($ssl && getenv("DB_SSL") === false) {
            $con = new mysqli($servername, $username, $password, $dbName, $port);
            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }
            return $con;
        }
        die("Connection failed: " . mysqli_connect_error());
    }

    return $con;
}
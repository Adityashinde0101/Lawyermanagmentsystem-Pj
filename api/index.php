<?php
ob_start();
/**
 * Single-entry PHP router for Vercel Hobby plan (12 function limit)
 * Routes all requests to the correct file in lawyermanagementsystem/
 */

// Get requested path and strip query string
$requestPath = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$requestPath  = trim($requestPath, "/");

// Map root to index
if ($requestPath === "" || $requestPath === "/") {
    $requestPath = "index.php";
}

$baseDir     = dirname(__DIR__) . "/lawyermanagementsystem/";

// If path is a directory (or ends with slash), append index.php
if (is_dir($baseDir . $requestPath)) {
    $requestPath = rtrim($requestPath, "/") . "/index.php";
} elseif (!str_contains($requestPath, ".") && file_exists($baseDir . $requestPath . ".php")) {
    $requestPath .= ".php";
}

$targetFile  = $baseDir . $requestPath;

// Security: prevent directory traversal
$realBase   = realpath($baseDir);
$realTarget = realpath($targetFile);

if ($realTarget === false || strpos($realTarget, $realBase) !== 0) {
    http_response_code(403);
    echo "403 Forbidden";
    exit;
}

if (!file_exists($realTarget)) {
    // Check if image filename has year mismatch between 2026 and 2024
    if (str_contains($targetFile, "2026")) {
        $altTarget = str_replace("2026", "2024", $targetFile);
        if (file_exists($altTarget)) {
            $realTarget = realpath($altTarget);
        }
    } elseif (str_contains($targetFile, "2024")) {
        $altTarget = str_replace("2024", "2026", $targetFile);
        if (file_exists($altTarget)) {
            $realTarget = realpath($altTarget);
        }
    }
}

if (!$realTarget || !file_exists($realTarget)) {
    http_response_code(404);
    echo "404 Not Found: " . htmlspecialchars($requestPath);
    exit;
}

$ext = strtolower(pathinfo($realTarget, PATHINFO_EXTENSION));

// Serve PHP files
if ($ext === "php") {
    $targetDir = dirname($realTarget);
    chdir($targetDir);
    require $realTarget;
    exit;
}

// Serve static files with correct MIME type
$mimeTypes = [
    "css"  => "text/css",
    "js"   => "application/javascript",
    "jpg"  => "image/jpeg",
    "jpeg" => "image/jpeg",
    "png"  => "image/png",
    "gif"  => "image/gif",
    "svg"  => "image/svg+xml",
    "ico"  => "image/x-icon",
    "webp" => "image/webp",
    "woff" => "font/woff",
    "woff2"=> "font/woff2",
    "ttf"  => "font/ttf",
    "eot"  => "application/vnd.ms-fontobject",
];

$mime = $mimeTypes[$ext] ?? "application/octet-stream";
if (ob_get_level()) {
    ob_end_clean();
}
header("Content-Type: $mime");
header("Cache-Control: public, max-age=31536000");
header("Content-Length: " . filesize($realTarget));
readfile($realTarget);
exit;
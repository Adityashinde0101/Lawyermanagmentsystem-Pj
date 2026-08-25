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

// Ensure .php extension for extensionless routes
if (!str_contains($requestPath, ".")) {
    $requestPath .= ".php";
}

$baseDir     = dirname(__DIR__) . "/lawyermanagementsystem/";
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
    http_response_code(404);
    echo "404 Not Found: " . htmlspecialchars($requestPath);
    exit;
}

$ext = pathinfo($realTarget, PATHINFO_EXTENSION);

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
    "woff" => "font/woff",
    "woff2"=> "font/woff2",
    "ttf"  => "font/ttf",
    "eot"  => "application/vnd.ms-fontobject",
];

$mime = $mimeTypes[$ext] ?? "application/octet-stream";
header("Content-Type: $mime");
header("Cache-Control: public, max-age=31536000");
readfile($realTarget);
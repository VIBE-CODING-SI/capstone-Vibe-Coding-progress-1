<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        require 'index.html';
        break;
    case '/dashboard':
        require 'dashboard.php';
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}

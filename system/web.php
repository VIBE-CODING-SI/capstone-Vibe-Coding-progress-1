<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        require 'index.html';
        break;
    case '/dashboard':
        require 'dashboard.php';
        break;
    case '/predict-admin':
        require 'predict-admin.php'; 
        break;
    case '/submit_predict':
        require 'submit_predict.php'; 
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}

<?php

//putenv('PASSWORD=test');
define("CORRECT_PASSWORD", getenv('PASSWORD'));

if (in_array($_SERVER['REQUEST_URI'], ['/', '/index.php'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['password']) && strtolower($_POST['password']) === CORRECT_PASSWORD) {
            echo file_get_contents('dr.html');
        } else {
            include('form_err.php');
        }
        return;
    }
    echo file_get_contents('form.html');
} else {
    $filename = trim($_SERVER['REQUEST_URI'], '/');
    header('content-type', mime_content_type($filename));
    echo file_get_contents($filename);
}

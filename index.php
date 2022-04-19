<?php

//putenv('PASSWORD=test');
define("CORRECT_PASSWORD", getenv('PASSWORD'));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['password']) && $_POST['password'] === CORRECT_PASSWORD) {
        include 'dr.html';
        return;
    }
}

include 'form.html';

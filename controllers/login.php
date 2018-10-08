<?php

$view = 'login';
$salt = '12345';

$username = $_POST['username'] ?? null;
$password = md5($_POST['password'].$salt) ?? null;

if ($username) {
    if ($username === $user['username'] && $password === md5($user['password'].$salt)) {
        $_SESSION['username'] = $username;
    } else {
        $vars['error'] = 'Username and Password mismatch';
    }
}

if (isset($_SESSION['username'])) {
    $vars['username'] = $_SESSION['username'];
    $view = 'welcome';
}

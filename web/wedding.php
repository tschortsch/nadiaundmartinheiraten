<?php
require('../vendor/autoload.php');

if(isset($_POST['login_submit'])) {
    $viewAperoPassword = '485c903c9c1fdff5c55e68555a2a6eef';
    $viewEsssenPassword = 'c0ea1b785cee9fba54efbcfa9b678eb0';

    $hashedPassword = md5($_POST['password']);
    if($hashedPassword == $viewAperoPassword) {
        $view = 'apero';
    } elseif($hashedPassword == $viewEsssenPassword) {
        $view = 'essen';
    } else {
        header("Location: index.php?wrongpassword=1");
    }
} else {
    header("Location: index.php");
    exit;
}
?>
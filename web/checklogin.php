<?php
/*
 * checks login data and returns the view
 */
function checkLogin($password = '') {
    if(!empty($password)) {
        $viewAperoPassword = '485c903c9c1fdff5c55e68555a2a6eef';
        $viewEsssenPassword = 'c0ea1b785cee9fba54efbcfa9b678eb0';

        $hashedPassword = md5($password);
        if($hashedPassword == $viewAperoPassword) {
            return 'apero';
        } elseif($hashedPassword == $viewEsssenPassword) {
            return 'essen';
        } else {
            header("Location: index.php?wrongpassword=1");
        }
    } else {
        header("Location: index.php");
        exit;
    }
}
?>
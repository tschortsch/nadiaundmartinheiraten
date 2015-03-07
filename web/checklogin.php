<?php
/*
 * checks login data and returns the view
 */
function checkLogin($password = '') {
    if(!empty($password)) {
        $viewAperoPassword = '093ef96957de80044663a930a551d089';
        $viewEsssenPassword = '1fbe25e6fff04c567326d9a79e2ab171';

        $hashedPassword = md5(strtolower($password));
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

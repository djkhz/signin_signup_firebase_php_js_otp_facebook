<?php
session_start();
require 'dbconfig.php';

try {
    //auth.php?phone=+8562055466166
    // $user = $auth->getUser('some-uid');
    // $user = $auth->getUserByPhoneNumber('+8562055466166');
    // $user = $auth->getUserByPhoneNumber('+49-123-456789');
    echo $_GET['phone'];
    // $user = $auth->getUserByPhoneNumber($_GET['phone']);
    $user = $auth->getUserByPhoneNumber('+8562055466161');
    
    // $user = $auth->getUserByEmail($_GET['phone']);
    echo 'test2';
} catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
    echo 'test3';
    echo $e->getMessage();
}

?>
<?php
session_start();
require 'dbconfig.php';

try {
    //auth.php?phone=+8562055466166
    // $user = $auth->getUser('some-uid');
    // $user = $auth->getUserByPhoneNumber('+8562055466166');
    echo 'test';
    $user = $auth->getUserByPhoneNumber($_GET['phone']);
    
    // $user = $auth->getUserByEmail('djkhz@yahoo.com');
    echo 'test2';
} catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
    echo 'test3';
    echo $e->getMessage();
}

?>
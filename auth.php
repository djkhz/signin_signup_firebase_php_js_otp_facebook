<?php
require 'dbconfig.php';

try {
    //auth.php?phone=+8562055466166
    // $user = $auth->getUser('some-uid');
    // $user = $auth->getUserByEmail('user@domain.tld');
    // $user = $auth->getUserByPhoneNumber('+8562055466166');
    echo 'test';
    $user = $auth->getUserByPhoneNumber($_GET['phone']);
    echo $user;
    echo 'test2';
} catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
    echo $e->getMessage();
}

?>
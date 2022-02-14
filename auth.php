<?php
require 'dbconfig.php';

try {
    //auth.php?phone=+8562055466166
    // $user = $auth->getUser('some-uid');
    // $user = $auth->getUserByEmail('user@domain.tld');
    // $user = $auth->getUserByPhoneNumber('+8562055466166');
    $user = $auth->getUserByPhoneNumber($_GET['phone']);
    echo $user;
} catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
    echo $e->getMessage();
}

?>
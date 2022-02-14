<?php
require 'dbconfig.php';

try {
    // $user = $auth->getUser('some-uid');
    // $user = $auth->getUserByEmail('user@domain.tld');
    $user = $auth->getUserByPhoneNumber('+8562055466166');
} catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
    echo $e->getMessage();
}

?>
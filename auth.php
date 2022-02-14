<?php
session_start();
require 'dbconfig.php';
$number = $_POST['data']

try {
    //auth.php?phone=+8562055466166
    // $user = $auth->getUser('some-uid');
    // $user = $auth->getUserByPhoneNumber('+8562055466166');
    // $user = $auth->getUserByPhoneNumber('+49-123-456789');
    echo $_GET['phone'];
    // $user = $auth->getUserByPhoneNumber($_GET['phone']);
    $user = $auth->getUserByPhoneNumber('+8562055466161');
    
    // $user = $auth->getUserByEmail($_GET['phone']);
    // $data = [ 'name' => 'God', 'age' => -1 ];
    echo json_encode(['check' => true]);
    // print json_encode($_POST);
} catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
    echo json_encode(['check' => $e->getMessage()]);
}

?>
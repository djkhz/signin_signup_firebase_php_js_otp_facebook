<?php
header('Content-type: application/json');
session_start();
require 'dbconfig.php';
$number = $_POST['number'];

try {
    //auth.php?phone=+8562055466166
    // $user = $auth->getUser('some-uid');
    // $user = $auth->getUserByPhoneNumber('+8562055466166');
    // $user = $auth->getUserByPhoneNumber('+49-123-456789');
    // echo $_GET['phone'];
    // $user = $auth->getUserByPhoneNumber($_GET['phone']);
    $user = $auth->getUserByPhoneNumber($number);
    
    // $user = $auth->getUserByEmail($_GET['phone']);
    // $data = [ 'name' => 'God', 'age' => -1 ];
    // echo json_encode(['check' => true]);
    echo json_encode(['check' => true], JSON_UNESCAPED_UNICODE);
    // echo json_encode(array('check' => true));
    // print json_encode($_POST);
} catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
    echo json_encode(['check' => $e->getMessage()]);
}

?>
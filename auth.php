<?php
// header('Content-type: application/json');
require 'vendor/autoload.php';
// require 'dbconfig.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/kerrili-firebase-adminsdk-h2y2z-d8a2a21d61.json');
$firebase=(new Factory)
    ->withServiceAccount($serviceAccount)
    ->withDatabaseUri('https://authentication-php-default-rtdb.asia-southeast1.firebasedatabase.app/')
    ->Create();

$auth = $firebase->getAuth();

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
    $response= array('check' => true);
    // http_response_code(200);
    echo json_encode($response);//,JSON_UNESCAPED_UNICODE);
    // echo json_encode(array('check' => true));
    // print json_encode($_POST);
} catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
    echo json_encode(array('check' => $e->getMessage()));
}

?>
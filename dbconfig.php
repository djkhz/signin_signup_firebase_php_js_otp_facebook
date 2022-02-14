<?php
    require 'vendor/autoload.php';

    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;
    
// $firebase = (new Factory)
// ->withServiceAccount('authentication-php-firebase-adminsdk-vj6un-aa68f86e1c.json')
// ->withProjectId('my-project')
// ->withDatabaseUri('https://authentication-php-default-rtdb.asia-southeast1.firebasedatabase.app/');


    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/kerrili-firebase-adminsdk-h2y2z-d8a2a21d61.json');
    $firebase=(new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://authentication-php-default-rtdb.asia-southeast1.firebasedatabase.app/')
        ->Create();
    
    $database = $firebase->getDatabase();
?>
<!-- The core Firebase JS SDK is always required and must be listed first -->

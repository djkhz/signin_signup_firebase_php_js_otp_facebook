<?php
    require __DIR__.'/vendor/autoload.php';
    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;
    // use Kreait\Firebase\Auth;
    
// $firebase = (new Factory)
// ->withServiceAccount('authentication-php-firebase-adminsdk-vj6un-aa68f86e1c.json')
// ->withProjectId('my-project')
// ->withDatabaseUri('https://authentication-php-default-rtdb.asia-southeast1.firebasedatabase.app/');
// $factory = (new Factory ())->withServiceAccount(__DIR__.'/dengue-fever-database-6da72-firebase-adminsdk-96c66-8cdfbb7728.json');

// $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/kerrili-firebase-adminsdk-h2y2z-d8a2a21d61.json');
// $firebase=(new Factory())
//         ->withServiceAccount($serviceAccount)
//         ->withDatabaseUri('https://authentication-php-default-rtdb.asia-southeast1.firebasedatabase.app/');

//         $database = $firebase->createDatabase();

        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/kerrili-firebase-adminsdk-h2y2z-d8a2a21d61.json')
        ->withDatabaseUri('https://authentication-php-default-rtdb.asia-southeast1.firebasedatabase.app/');

$database = $factory->createDatabase();

$fetchdata = $database->getReference('New')->getValue();
    
    
    
    foreach($fetchdata as $key => $value)
    {
        echo $value['phone'];
        // if ($email  == ($value['phone']) && $password == ($value['password']))
        // {
        //  $itemFound=true;
        //  break;
} 
header("location: index.php");
// $firebase = (new Factory())->withDatabaseUri('https://dengue-fever-database-6da72-default-rtdb.asia-southeast1.firebasedatabase.app');
// echo "test2";
// echo __DIR__;
// $test = (new Factory())->withServiceAccount(__DIR__.'/authentication-php-firebase-adminsdk-vj6un-b930c1683a.json');
// echo "test3";
// $tesxt = (new Factory())->withServiceAccount('authentication-php-firebase-adminsdk-vj6un-b930c1683a.json');
// echo "test4";
// $firebase = (new Factory())
//     ->withServiceAccount(__DIR__.'/dengue-fever-database-6da72-firebase-adminsdk-96c66-8cdfbb7728.json')
//     ->withDatabaseUri('https://dengue-fever-database-6da72-default-rtdb.asia-southeast1.firebasedatabase.app');

// // Create a Firebase Realtime Database instance
// $database = $firebase->createDatabase();
// $factory->withDatabaseUri('https://dengue-fever-database-6da72-default-rtdb.asia-southeast1.firebasedatabase.app/');
// $firebase=(new Factory())
// ->withServiceAccount(__DIR__.'/dengue-fever-database-6da72-firebase-adminsdk-96c66-8cdfbb7728.json')
// ->withDatabaseUri('https://dengue-fever-database-6da72-default-rtdb.asia-southeast1.firebasedatabase.app/');
//->Create();

// // $auth = $firebase->createAuth();
//   $database = $firebase->createDatabase();
//   ////////////////////////////////////////////////////////////////////////////////////
//    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/test.json');
//     $firebase=(new Factory)
//         ->withServiceAccount($serviceAccount)
//         ->withDatabaseUri('https://dengue-fever-database-6da72-default-rtdb.asia-southeast1.firebasedatabase.app/')
//         ->Create();
//     // $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/kerrili-firebase-adminsdk-h2y2z-d8a2a21d61.json');
//     // $firebase=(new Factory)
//     //     ->withServiceAccount($serviceAccount)
//     //     ->withDatabaseUri('https://authentication-php-default-rtdb.asia-southeast1.firebasedatabase.app/')
//     //     ->Create();
    
//     $database = $firebase->getDatabase();

//     $auth = $firebase->getAuth();
//     ////////////////////////////////////////////////////////////////////////////////////
// $realtimeDatabase = $factory->createDatabase();
// $cloudMessaging = $factory->createMessaging();
// $remoteConfig = $factory->createRemoteConfig();
// $cloudStorage = $factory->createStorage();
// $firestore = $factory->createFirestore();
?>
<!-- The core Firebase JS SDK is always required and must be listed first -->

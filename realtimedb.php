<?php

require __DIR__.'/vendor/autoload.php';

// use Kreait\Firebase\Factory;
// use Kreait\Firebase\ServiceAccount;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/kerrili-firebase-adminsdk-h2y2z-d8a2a21d61.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();

$database = $firebase->getDatabase();

$newPost = $database
    ->getReference('blog/posts')
    ->push([
        'title' => 'Post title',
        'body' => 'This should probably be longer.'
    ]);

$newPost->getChild('title')->set('Changed post title');
$newPost->getValue(); // Fetches the data from the realtime database
$newPost->remove();

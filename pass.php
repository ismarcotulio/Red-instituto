<?php 
require_once('vendor/autoload.php');

$username = "18722444930";
$nickname = "gregg";
$password = "IM7EdgrQzk9NOgQ8izrDb5uOyTw="; // The one we got registering the number
$debug = true;

// Create a instance of WhastPort.
$w = new WhatsProt($username, $nickname, $debug);

$w->connect(); // Connect to WhatsApp network
$w->loginWithPassword($password); // logging in with the password we got!
$target = '50498990315'; // The number of the person you are sending the message
$message = 'este es un mensaje de prueba.';

$w->sendMessage($target , $message);
 ?>
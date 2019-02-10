<?php 

require_once('vendor/phpsms/src/PHPSMS/PHPSMS.php');
require_once('vendor/phpsms/src/PHPSMS/Providers.php');


//number to text
$number = '40724798384';

//message to be sent
$message = 'intl test';
$region='intl';

//with a different From



//not sending to the us - note totally untested

$phpsms = new PHPSMS\PHPSMS($number,$message);


 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<button onclick="sms()">darclick</button>
 	<script src="pruebasms.js"></script>
 </body>
 </html>
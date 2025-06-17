<?php
require __DIR__ . '/vendor/autoload.php';

use Cowsayphp\Farm;

header('Content-Type: text/plain');

$text = "I can accept a message using ?message=<message here>";
if(isset($_GET['message']) && $_GET['message'] != '') {
	$text = htmlspecialchars($_GET['message']);
}

$cow = Farm::create(\Cowsayphp\Farm\Cow::class);
echo $cow->say($text);

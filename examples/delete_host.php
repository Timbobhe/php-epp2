<?php

// debug
error_reporting(E_ALL);
ini_set('display_errors', true);

require '../src/AfriCC/autoload.php';

use AfriCC\EPP\Frame\Command\Delete\Host as DeleteHost;

$frame = new DeleteHost;
$frame->setHost('ns1.google.com');
echo $frame;

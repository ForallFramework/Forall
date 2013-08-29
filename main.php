<?php namespace main;

use \forall\core\core\Core;

//Include autoloader.
$loader = require_once 'packages/autoload.php';

//Run the initialization sequence.
Core::getInstance()->setLoader($loader)->initialize();

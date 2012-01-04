<?php

require_once 'system/app/bootstrap.php';

use RoxyFramework\Application;
use Roxy\Http\Request;
use Roxy\Config\Config;

$config = new Config();
$application = new Application();
$application->getResponse(new Request())->send();

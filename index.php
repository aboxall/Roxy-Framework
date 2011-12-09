<?php

require_once 'system/app/bootstrap.php';

use RoxyFramework\Application;
use Roxy\Http\Request;

$application = new Application();
$application->getResponse(new Request())->send();

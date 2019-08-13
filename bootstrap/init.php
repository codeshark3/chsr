<?php

/**
if session not already started start session
*/
if(!isset($_SESSION)) session_start();

//load environment variable
require_once __DIR__ . '/../vendor/altorouter/altorouter/AltoRouter.php';
require_once __DIR__ . '/../app/config/_env.php';

require_once __DIR__ . '/../app/routing/routes.php';
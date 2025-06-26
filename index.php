<?php
require_once 'api/shared/main.php';
require_once 'shared/main.php';

header('Content-Type: application/json');

sendResponse(['apiVersion' => uupApiVersion()]);

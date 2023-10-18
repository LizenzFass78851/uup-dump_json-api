<?php
$webApiVersion = '0.2.3';

function sendResponse($apiResponse) {
    global $webApiVersion;

    $response = [
        'response' => $apiResponse,
        'jsonApiVersion' => $webApiVersion,
    ];

    header('Access-Control-Allow-Origin: *');
    echo json_encode($response)."\n";
}

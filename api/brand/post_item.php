<?php

require_once __DIR__ . '/brand_controller.php';

if ($httpMethod !== 'POST') {
    setResponse(405);
    return;
}

$item = 'Entity not found';
$code = 204;

if ($body !== null) {

    if (!isset($body['name']) || count($body) > 1) {
        setResponse(400);
        return;
    }

    $item = $brandRepository->create($body);

    if ($item !== null) {
        $code = 201;
    }
}

setResponse($code);
echo json_encode($item);
<?php

require_once __DIR__ . '/brand_controller.php';

if ($httpMethod !== 'PUT') {
    setResponse(405);
    return;
}

$item = 'Entity not found';
$code = 204;

if ($id !== null && $body !== null) {

    if (!isset($body['name']) || count($body) > 1) {
        setResponse(400);
        return;
    }

    $item = $brandRepository->updateById($id, $body);

    if ($item !== null) {
        $code = 200;
    }
}

setResponse($code);
echo json_encode($item);
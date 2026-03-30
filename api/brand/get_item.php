<?php

require_once __DIR__ . '/brand_controller.php';

$item = 'Entity not found';
$code = 204;

if ($id !== null) {
    $item = $brandRepository->findOneById($id);
    if ($item !== null) {
        $code = 200;
    }
}

setResponse($code);
echo json_encode($item);
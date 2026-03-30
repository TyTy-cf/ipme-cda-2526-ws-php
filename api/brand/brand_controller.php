<?php

require_once __DIR__ . '/../../config/BrandRepository.php';
require_once __DIR__ . '/../../utils/dump.php';
require_once __DIR__ . '/../../entity/Brand.php';

$brandRepository = new BrandRepository();

$id = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$body = json_decode(file_get_contents('php://input'), true);

$httpMethod = $_SERVER['REQUEST_METHOD'];

function setResponse(int $code = 200): void
{
    header('Content-Type: application/json; charset=utf-8', false, $code);
}
<?php

require_once __DIR__ . '/../../config/BrandRepository.php';
require_once __DIR__ . '/../../utils/dump.php';
require_once __DIR__ . '/../../entity/Brand.php';

$brandRepository = new BrandRepository();

$id = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

function setResponse(int $code = 200): void
{
    header('Content-Type: application/json; charset=utf-8', false, $code);
}
<?php

require_once __DIR__ . '/../../config/BrandRepository.php';
require_once __DIR__ . '/../../utils/dump.php';
require_once __DIR__ . '/../../entity/Brand.php';

$brandRepository = new BrandRepository();
$entities = $brandRepository->findAll();

header('Content-Type: application/json; charset=utf-8');

echo json_encode($entities, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_LINE_TERMINATORS);
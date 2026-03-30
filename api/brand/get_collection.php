<?php

require_once __DIR__ . '/brand_controller.php';

$entities = $brandRepository->findAll();

setResponse();
echo json_encode($entities);
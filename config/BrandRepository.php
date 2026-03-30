<?php

use entity\Brand;

require_once __DIR__ . '/AbstractPDO.php';
require_once __DIR__ . '/../entity/Brand.php';

class BrandRepository extends AbstractPDO
{

    public function __construct()
    {
        parent::__construct(Brand::class, 'brand');
    }

}
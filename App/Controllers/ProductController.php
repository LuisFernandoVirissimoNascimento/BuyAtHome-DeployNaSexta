<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController
{
    public function product()
    {
        $products = new ProductModel();

        $products->findAll();

        echo json_encode($products->getData());
    }    
}


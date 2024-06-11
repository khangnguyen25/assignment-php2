<?php

namespace Asm\Controllers\Client;

use Asm\Commons\Controller;
use Asm\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $productModel = new Product();
        $products = $productModel->all(); // Lấy tất cả sản phẩm từ database
        $this->renderViewClient('home', ['products' => $products]);
    }
}

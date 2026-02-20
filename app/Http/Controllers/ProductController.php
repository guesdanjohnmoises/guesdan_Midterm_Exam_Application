<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                "name" => "iPhone 15",
                "brand" => "Apple",
                "price" => "₱56,990"
            ],
            [
                "name" => "Galaxy S24",
                "brand" => "Samsung",
                "price" => "₱52,990"
            ],
            [
                "name" => "ROG Phone 8",
                "brand" => "Asus",
                "price" => "₱49,995"
            ],
            [
                "name" => "Redmi Note 13",
                "brand" => "Xiaomi",
                "price" => "₱11,999"
            ]
        ];

        return view('products', compact('products'));
    }
}
  


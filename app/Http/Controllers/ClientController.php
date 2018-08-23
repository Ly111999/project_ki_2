<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Seller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home()
    {
        $arr = [];
        $products = Product::all();
        foreach ($products as $key => $product) {
            $productWithCategoryId =
                [
                    "categoryId" => $product->categoryId,
                    "product" => $product
                ];

            array_push($arr, $productWithCategoryId);
        }
        $categories = Category::all();

        return view('home.home')
            ->with('categories', $categories)
            ->with([
                    "list_Product" => Seller::all(),
                    "listProduct" => $arr,
                    "obj_view" => $products
                ]
            );
    }
}

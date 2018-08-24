<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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

    public function contact()
    {
        $categories = Category::all();
        return view('home.contact')
            ->with('categories', $categories);

    }

    public function listProduct()
    {
        $categories = Category::all();
        $limit = 10;
        $selected_categoryId = 0;
        $start_price = 0;
        $end_price = 3000000;
        $selected_category = new Category();
        $selected_category->name = 'All products';
        $product_filter = Product::where('status', 1);
        if (Input::has('categoryId') && Input::get('categoryId') != 0) {
            $selected_categoryId = Input::get('categoryId');
            $selected_category = Category::find($selected_categoryId);
            $product_filter = $product_filter->where('categoryId', $selected_categoryId);
        }
        if (Input::has('startPrice') && Input::get('startPrice') != 0) {
            $start_price = Input::get('startPrice');
            $product_filter = $product_filter->whereRaw('(price-(discount/100))>=' . $start_price);
        }
        if (Input::has('endPrice') && Input::get('endPrice') != 0) {
            $end_price = Input::get('endPrice');
            $product_filter = $product_filter->whereRaw('(price-(discount/100))<=' . $end_price);
        }
        $list_product = $product_filter->orderBy('created_at', 'DESC')->paginate($limit);
        return view('home.list-product')
            ->with('categories', $categories)
            ->with('selected_category', $selected_category)
            ->with('end_price', $end_price)
            ->with('start_price', $start_price)
            ->with('selected_categoryId', $selected_categoryId)
            ->with('list_product', $list_product);
    }
}

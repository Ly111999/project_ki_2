<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Seller;
use Illuminate\Support\Facades\Input;

class ClientController extends Controller
{
    public function home()
    {
        $obj_slider = Product::all();
        $categories = Category::all();
        $keyword = Input::get('key');
        $data = Input::get();
        $obj = Product::orderBy('created_at', 'desc');
        if (isset($keyword) && Input::get('key')) {
            $obj = $obj->where('name', 'like', '%' . $keyword . '%');
        } else {
            $data['key'] = '';
        }
        $obj = $obj->paginate(10);
        return view('home.home')
            ->with('categories', $categories)
            ->with('obj', $obj)
            ->with('obj_slider', $obj_slider)
            ->with('data', $data);
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
        $limit = 12;
        $selected_categoryId = 0;
        $start_price = 0;
        $end_price = 3000000;
        $keyword = Input::get('key');
        $data = Input::get();
        $selected_category = new Category();
        $selected_category->name = 'Tất cả';
        $product_filter = Product::where('status', 1);
        if (Input::has('categoryId') && Input::get('categoryId') != 0) {
            $selected_categoryId = Input::get('categoryId');
            $selected_category = Category::find($selected_categoryId);
            $product_filter = $product_filter->where('categoryId', $selected_categoryId);

        }
        if (Input::has('startPrice') && Input::get('startPrice') != 0) {
            $start_price = Input::get('startPrice');
            $product_filter = $product_filter->whereRaw('(price-(price*discount/100))>=' . $start_price);
        }
        if (Input::has('endPrice') && Input::get('endPrice') != 0) {
            $end_price = Input::get('endPrice');
            $product_filter = $product_filter->whereRaw('(price-(price*discount/100))<=' . $end_price);
        }
        $list_product = $product_filter->orderBy('created_at', 'DESC');
        if (isset($keyword) && Input::get('key')) {
            $list_product = $list_product->where('name', 'like', '%' . $keyword . '%');
        } else {
            $data['key'] = '';
        }
        $list_product = $list_product->paginate($limit);
        return view('home.list-product')
            ->with('categories', $categories)
            ->with('selected_category', $selected_category)
            ->with('end_price', $end_price)
            ->with('start_price', $start_price)
            ->with('selected_categoryId', $selected_categoryId)
            ->with('list_product', $list_product)
            ->with('data', $data);
    }

    public function showProductDetail($id)
    {
        $categories = Category::all();
        $selected_categoryId = 1;
        $selected_category = Category::find($selected_categoryId);

        $product = Product::find($id);
        $obj = Product::all();

        if ($product == null) {
            return view('errors.404');
        }
        return view('home.pro-detail')
            ->with('obj_view', $product)
            ->with('obj', $obj)
            ->with('selected_categoryId', $selected_categoryId)
            ->with('selected_category', $selected_category)
            ->with('categories', $categories);
    }

}

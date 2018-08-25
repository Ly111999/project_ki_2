<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\Seller;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
            ->with('data', $data)
            ->with([
                    "list_Product" => Seller::all()
                ]
            );
    }
}

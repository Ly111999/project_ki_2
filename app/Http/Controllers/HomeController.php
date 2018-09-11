<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
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
        $obj_slider = Product::all();
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
            ->with('obj_slider', $obj_slider)
            ->with('obj', $obj)
            ->with('data', $data);
    }

}

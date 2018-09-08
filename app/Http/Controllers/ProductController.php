<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreProductPost;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function homeAdmin()
    {
        $total = 0;
        $cart = 0;
        $list_obj = Order::all();
        $memberOnl = User::all();
        foreach ($list_obj as $obj) {
            $total = $total + $obj->total_price;
            $cart = count($list_obj);
        }
        $member = count($memberOnl);
        return view('admin.layout.home')
            ->with('total', $total)
            ->with('member', $member)
            ->with('cart', $cart);

    }

    public function index()
    {
        $categories = Category::all();
        $categoryId = Input::get('categoryId');
        if ($categoryId == null || $categoryId == 0) {
            $obj = Product::orderBy('created_at', 'desc')->paginate(10);
            return view('admin.product.list')
                ->with('list_obj', $obj)
                ->with('categories', $categories)
                ->with('categoryId', $categoryId);
        } else {
            $obj = Product::where('categoryId', Input::get('categoryId'))->orderBy('created_at', 'desc')->paginate(10);
            return view('admin.product.list')
                ->with('list_obj', $obj)
                ->with('categories', $categories)
                ->with('categoryId', $categoryId);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductPost $post)
    {
        $post->validated();

        $product = new Product();
        $product->name = Input::get('name');
        $product->price = Input::get('price');
        $product->discount = Input::get('discount');
        $product->categoryId = Input::get('categoryId');
        $product->description = Input::get('description');
        $product->image = Input::get('image');

        $product->save();
        return redirect('/admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return view('errors.404-admin');
        }
        $categories = Category::all();
        return view('admin.product.edit')
            ->with('obj_view', $product)
            ->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return view('errors.404-admin');
        }
        $product->name = Input::get('name');
        $product->price = Input::get('price');
        $product->discount = Input::get('discount');
        $product->categoryId = Input::get('categoryId');
        $product->description = Input::get('description');
        $product->image = Input::get('image');

        $product->save();
        return redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Product::find($id);
        if ($obj == null) {
            return response()->json(['error' => 'not found'], 404);
        }
        $obj->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }

    public function destroyMany()
    {
        Product::destroy(Input::get('ids'));
        return Input::get('ids');
    }
}




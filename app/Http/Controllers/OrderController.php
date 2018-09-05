<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
    public function index()
    {
        $list_obj = Order::orderBy('created_at','desc')->paginate(7);
        return view('admin.order.list')->with('list_obj', $list_obj);
    }
    public function getChartDataApi()
    {
        $start_date = '2018-07-20';
        $end_date = '2018-08-25';
        $chart_data = Order::select(DB::raw('sum(total_price) as revenue'), DB::raw('date(created_at) as day'))
            ->whereBetween('created_at', array($start_date, $end_date))
            ->groupBy('day')
            ->orderBy('day', 'desc')
            ->get();
        return $chart_data;
    }
    public function changeStatus()
    {
        $id = Input::get('id');
        $status = Input::get('status');
        $order = Order::find($id);
        if ($order == null) {
            return view('errors.404-admin');
        }
        $order->status = $status;
        $order->save();
        return redirect('/admin/order');
    }
}

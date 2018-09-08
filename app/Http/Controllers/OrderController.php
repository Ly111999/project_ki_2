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
        $total= 0;
        $start_date = null;
        $end_date = null;
        $list_obj = Order::orderBy('created_at', 'desc');
        if(Input::has('start') && Input::has('end')){
            $start_date = Input::get('start');
            $end_date = Input::get('end');
            $list_obj = $list_obj->whereBetween('created_at', array($start_date .' 00:00:00', $end_date . ' 23:59:59'));
        }
        $list_obj = $list_obj->paginate(6);
        foreach ($list_obj as $obj){
            $total =$total+$obj->total_price;
        }
        return view('admin.order.list')->with('list_obj', $list_obj)
            ->with('total', $total)
            ->with('start', $start_date)
            ->with('end', $end_date);
    }
    public function getChartDataApi()
    {
        $start_date = Input::get('startDate');
        $end_date = Input::get('endDate');
        $chart_data = Order::select(DB::raw('sum(total_price) as revenue'), DB::raw('date(created_at) as day'))
            ->whereBetween('created_at', array($start_date.'00:00:00', $end_date.'23:59:59'))
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

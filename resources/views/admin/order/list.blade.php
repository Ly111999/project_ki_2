@extends('admin.layout.default',[
    'current_menu' => 'order_manager',
    'page_title'=>'Danh sách đơn hàng'
])

@section('content')

    <div class="section__content section__content">

        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title-5 m-b-35">Đơn hàng</h2>
                    </div>
                </div>
                <div class="toolbar">

                </div>
                @if (\Illuminate\Support\Facades\Session::has('message'))
                    <div
                        class="alert {{ \Illuminate\Support\Facades\Session::get('message-class') }}">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
                @endif

                <div class="table-responsive table-responsive-data2" style="overflow-x: hidden;">
                    @if(count($list_obj)>0)
                        <table class="table table-data3 table-hover">
                            <thead>
                            <tr class="row">
                                <th class="col-md-1">ID</th>
                                <th class="col-md-1">Người đặt</th>
                                <th class="col-md-2">Người nhận</th>
                                <th class="col-md-2">Thời gian</th>
                                <th class="col-md-2">Thông tin</th>
                                <th class="col-md-1">Trạng thái</th>
                                <th class="col-md-3">Thao tác</th>

                            </tr>
                            </thead>

                            @foreach($list_obj as $item)
                                <tr class="row">
                                    <td class="col-md-1">{{$item->id}}</td>
                                    <td class="col-md-1">{{$item->ship_name}}</td>
                                    <td class="col-md-2">{!! $item->shipInformation !!}</td>
                                    <td class="col-md-2">{{$item->created_at}}</td>
                                    <td class="col-md-2">
                                        <ul>
                                            @foreach($item->details as $order_detail)
                                                <li>{{$order_detail->product->name}}
                                                    - {{$order_detail->quantity}}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="col-md-1">{{$item->statusLabel}}</td>
                                    <td class="col-md-3">
                                        @if($item->status==0)
                                            <a href="/admin/order/change-status?id={{$item->id}}&status=1"
                                               onclick="return confirm('Bạn có chắc muốn xác nhận đơn hàng?')"
                                               class="btn btn-simple btn-icon edit"><i class="fas fa-check"></i></a>
                                        @elseif($item->status==1)
                                            <a href="/admin/order/change-status?id={{$item->id}}&status=2"
                                               onclick="return confirm('Bạn có chắc muốn hoàn thành đơn hàng?')"
                                               class="btn btn-simple  btn-icon edit"><i class="fas fa-star"></i></a>
                                        @elseif($item->status==0)
                                            <a href="/admin/order/change-status?id={{$item->id}}&status=-1"
                                               onclick="return confirm('Bạn có chắc muốn hủy đơn hàng?')"
                                               class="btn btn-simple  btn-icon edit"><i class="far fa-times-circle"></i></a>
                                        @endif
                                        @if($item->status==0)
                                            <a href="{{$item->id}}"
                                               class="btn btn-simple btn-icon remove btn-delete"><i
                                                    class="fas fa-star"></i></a>
                                        @endif
                                        @if($item->status==0)
                                            <a href="/admin/order/change-status?id={{$item->id}}&status=-1"
                                               class="btn btn-simple btn-icon remove btn-delete"><i
                                                    class="fas fa-times-circle"></i></a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach


                        </table>

                    @else
                        <div class="alert alert-info">Hiện tại không có đơn hàng.
                        </div>
                    @endif
                </div>
            </div>
            <div class="row float-right mr-lg-5">
                {{$list_obj->appends($_GET)->links()}}
            </div>
        </div>
    </div>

@stop

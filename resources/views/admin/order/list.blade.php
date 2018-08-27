@extends('admin.layout.default')

@section('content')

    <div class="section__content section__content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title-5 m-b-35">List orders</h2>
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
                            <tr role="row">
                                <th class="col-1">ID</th>
                                <th class="col-1">Orderer</th>
                                <th class="col-2">Receiver</th>
                                <th class="col-2">Time</th>
                                <th class="col-2">Infor</th>
                                <th class="col-1">Status</th>
                                <th class="col-3">Action</th>
                            </tr>
                            </thead>
                            @foreach($list_obj as $item)
                                <tr role="row" class="odd">
                                    <td class="col-1">{{$item->id}}</td>
                                    <td class="col-1">huongly</td>
                                    <td class="col-2">{!! $item->shipInformation !!}</td>
                                    <td class="col-2">{{$item->created_at}}</td>
                                    <td class="col-2">
                                        <ul>
                                            @foreach($item->details as $order_detail)
                                                <li>{{$order_detail->product->name}}
                                                    - {{$order_detail->quantity}}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="col-1">{{$item->statusLabel}}</td>
                                    <td class="col-3">
                                        @if($item->status==0)
                                            <a href="/admin/order/change-status?id={{$item->id}}&status=1"
                                               onclick="return confirm('Bạn có chắc muốn xác nhận đơn hàng?')"
                                               class="btn btn-simple btn-success btn-icon edit"><i
                                                    class="material-icons">how_to_reg</i></a>
                                        @elseif($item->status==1)
                                            <a href="/admin/order/change-status?id={{$item->id}}&status=2"
                                               onclick="return confirm('Bạn có chắc muốn hoàn thành đơn hàng?')"
                                               class="btn btn-simple btn-success btn-icon edit"><i
                                                    class="material-icons">done</i></a>
                                        @endif
                                        @if($item->status==0)
                                            <a href="{{$item->id}}"
                                               class="btn btn-simple btn-danger btn-icon remove btn-delete"><i
                                                    class="material-icons">close</i></a>
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
            <div class="row">
                <div class="col-sm-5">
                </div>
                <div class="col-sm-7">
                    {{ $list_obj->links() }}
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>




@stop

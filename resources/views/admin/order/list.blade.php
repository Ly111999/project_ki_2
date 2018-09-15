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

                <div class="table-data__tool">
                    <div class="table-data__tool-left ml-3 form-group">
                        <label for="">Thời gian: &nbsp;&nbsp;</label>
                        <input class="form-control" style="width: 300px; margin-left: 70px; margin-top: -40px;"
                               type="text" name="datefilter" value="{{$start}} đến {{$end}}"/>
                        <div style="margin-left: 420px; margin-top: -30px"> Tổng tiền: {{number_format($total)}}vnd
                        </div>
                    </div>
                </div>

                <div class="table-responsive table-responsive-data2 ">
                    @if(count($list_obj)>0)
                        <table id="table_id" style="width:100%;"
                               class="table table-data3 dt-responsive nowrap table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Người đặt</th>
                                <th>Người nhận</th>
                                <th>Thời gian</th>
                                <th class="ml-2">Thông tin</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>

                            </tr>
                            </thead>
                            <tbody style="margin-left: -50px">
                            @foreach($list_obj as $item)
                                <tr class="OrderRow">
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->ship_name}}</td>
                                    <td>{!! $item->shipInformation !!}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td class="ml-3">
                                        <ul>
                                            @foreach($item->details as $order_detail)
                                                <li>{{$order_detail->product->name}}
                                                    - {{$order_detail->quantity}}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>{{$item->statusLabel}}</td>
                                    <td>
                                        @if($item->status==0)
                                            <a href="/admin/order/change-status?id={{$item->id}}&status=1"
                                               onclick="return confirm('Bạn có chắc muốn xác nhận đơn hàng?')" title="Xác nhận"
                                               class="btn btn-simple btn-icon edit"><i
                                                    class="fas fa-check"></i></a>
                                        @elseif($item->status==1)
                                            <a href="/admin/order/change-status?id={{$item->id}}&status=2" title="Hoàn thành"
                                               onclick="return confirm('Bạn có chắc muốn hoàn thành đơn hàng?')"
                                               class="btn btn-simple btn-icon edit"><i
                                                    class="fas fa-star"></i></a>
                                        @endif
                                        @if($item->status==0)
                                            <a href="/admin/order/change-status?id={{$item->id}}&status=-1" title="Hủy"
                                               onclick="return confirm('Bạn có chắc muốn hủy đơn hàng?')"
                                               class="btn btn-simple btn-icon remove"><i
                                                    class="far fa-times-circle"></i></a>

                                        @endif
                                        {{--@if($item->status==0)--}}
                                        {{--<a href="/admin/order/change-status?id={{$item->id}}&status=1"--}}
                                        {{--onclick="return confirm('Bạn có chắc muốn xác nhận đơn hàng?')"--}}
                                        {{--class="btn btn-simple btn-icon edit"><i class="fas fa-check"></i></a>--}}
                                        {{--@elseif($item->status==1)--}}
                                        {{--<a href="/admin/order/change-status?id={{$item->id}}&status=2"--}}
                                        {{--onclick="return confirm('Bạn có chắc muốn hoàn thành đơn hàng?')"--}}
                                        {{--class="btn btn-simple  btn-icon edit"><i class="fas fa-star"></i></a>--}}
                                        {{--@elseif($item->status==0)--}}
                                        {{--<a href="/admin/order/change-status?id={{$item->id}}&status=-1"--}}
                                        {{--onclick="return confirm('Bạn có chắc muốn hủy đơn hàng?')"--}}
                                        {{--class="btn btn-simple  btn-icon edit"><i class="far fa-times-circle"></i></a>--}}
                                        {{--@endif--}}
                                        {{--@if($item->status==0)--}}
                                        {{--<a href="{{$item->id}}"--}}
                                        {{--class="btn btn-simple btn-icon remove btn-delete"><i--}}
                                        {{--class="fas fa-star"></i></a>--}}
                                        {{--@endif--}}
                                        {{--@if($item->status==0)--}}
                                        {{--<a href="/admin/order/change-status?id={{$item->id}}&status=-1"--}}
                                        {{--class="btn btn-simple btn-icon remove btn-delete"><i--}}
                                        {{--class="fas fa-times-circle"></i></a>--}}
                                        {{--@endif--}}
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>

                    @else
                        <div class="alert alert-info">Không có đơn hàng.
                        </div>
                    @endif
                </div>
            </div>
            <div class="row float-right mr-lg-5">
                {{$list_obj->appends($_GET)->links()}}
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $('#table_id').DataTable(
                {
                    "language": {
                        "lengthMenu": "Hiển thị _MENU_ bản ghi",
                        "search": "Tìm:",
                        "sInfo": "Đang xem _START_ đến _END_",
                        "oPaginate": {
                            "sFirst": "Đầu",
                            "sPrevious": "Trước",
                            "sNext": "Tiếp",
                            "sLast": "Cuối"
                        }
                    }
                }
            );
        });

        $(function () {
            // $('input[name="datefilter"]').daterangepicker();
            $('input[name="datefilter"]').daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                }
            });

            $('input[name="datefilter"]').on('apply.daterangepicker', function (ev, picker) {
                // $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                var startDate = picker.startDate.format('YYYY-MM-DD');
                var endDate = picker.endDate.format('YYYY-MM-DD');

                window.location.href = '/admin/order?start=' + startDate + '&end=' + endDate;
            });

            $('input[name="datefilter"]').on('cancel.daterangepicker', function (ev, picker) {
                $(this).val('');
            });

        });

    </script>
@stop

@extends('admin.layout.default',[
    'current_menu' => 'user'
])
@section('content')
    <h1>List User</h1>

    <div class="table-responsive table-responsive-data2" style="overflow-x: hidden; margin-top: 30px">
        <table class="table table-data3 table-hover">
            <thead>
            <tr class="row">
                <th class="col-md-1">Id</th>
                <th class="col-md-2">Họ và tên</th>
                <th class="col-md-4">Email</th>
                <th class="col-md-2">Trang thái</th>
                <th class="col-md-3">Thao tác</th>
            </tr>
            </thead>
            @foreach($list_obj as $item)
                <tbody>
                <tr class="row">

                    <td class="col-md-1">{{$item->id}}</td>
                    <td class="col-md-2">{{$item->name}}</td>
                    <td class="col-md-4">{{$item->email}}</td>
                    <td class="col-md-2">{{$item->getStatusLabelAttribute()}}</td>
                    <td class="col-md-3">
                        {{--@if($item->status==0)--}}
                            {{--<a href="/admin/user/change-status?id={{$item->id}}&adminLevel=1"--}}
                               {{--onclick="return confirm('Bạn có chắc muốn xác nhận quyền admin cho tài khoản này?')"--}}
                               {{--class="btn btn-simple btn-success btn-icon edit"><i--}}
                                    {{--class="material-icons">how_to_reg</i></a>--}}
                        {{--@elseif($item->status==1)--}}
                            {{--<a href="/admin/order/change-status?id={{$item->id}}&status=0"--}}
                               {{--onclick="return confirm('Bạn có chắc muốn hoàn thành đơn hàng?')"--}}
                               {{--class="btn btn-simple btn-success btn-icon edit"><i--}}
                                    {{--class="material-icons">done</i></a>--}}
                        {{--@endif--}}
                        {{--@if($item->status==0)--}}
                            {{--<a href="{{$item->id}}"--}}
                               {{--class="btn btn-simple btn-danger btn-icon remove btn-delete"><i--}}
                                    {{--class="material-icons">close</i></a>--}}
                        {{--@endif--}}
                    </td>
                </tr>
                </tbody>
            @endforeach

        </table>
        <div class="">
            <div class="row float-right mr-lg-5">
                {{$list_obj->appends($_GET)->links()}}
            </div>
        </div>
    </div>

@stop


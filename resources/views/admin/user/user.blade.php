@extends('admin.layout.default',[
    'current_menu' => 'user',
    'page_title'=>'Danh sách tài khoản khách hàng'
])
@section('content')
    <h1>List User</h1>
    <div class="row justify-content-center" style="margin-top: 10px; margin-right: -550px;">
        <form style="width: 25%;">
            <div class="input-group">
                <input type="text" class="form-control" name="key" value="{{$data['key']}}"
                       placeholder="Tìm kiếm">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="table-responsive table-responsive-data2" style="overflow-x: hidden; margin-top: 30px">
        @if(count($list_obj)>0)


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
                            @if($item->adminLevel==0)
                                <a href="/admin/user/change-status?id={{$item->id}}&adminLevel=1" title="admin"
                                   onclick="return confirm('Bạn có chắc muốn xác nhận quyền admin cho tài khoản này?')"
                                   class="btn btn-simple btn-icon edit"><i class="fas fa-check"></i></a>
                            @elseif($item->adminLevel==1)
                                <a href="/admin/user/change-status?id={{$item->id}}&adminLevel=0" title="client"
                                   onclick="return confirm('Bạn có chắc muốn bỏ quyền admin cho tài khoản này?')"
                                   class="btn btn-simple btn-icon edit"><i class="fas fa-star"></i></a>
                            @endif


                        </td>
                    </tr>
                    </tbody>
                @endforeach
                @else
                    <div class="alert alert-info">Không tìm thấy kết quả phù hợp.
                    </div>
                @endif
            </table>
            <div class="">
                <div class="row float-right mr-lg-5">
                    {{$list_obj->appends($_GET)->links()}}
                </div>
            </div>
    </div>

@stop


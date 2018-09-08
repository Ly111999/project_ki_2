@extends('admin.layout.default',[
    'current_menu' => 'category_manager',
    'page_title'=>'Danh sách sản phẩm'
])

@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-5 ">Danh sách chủng loại</h2>
                    <div class="alert alert-success d-none" role="alert" id="messageSuccess"></div>
                    <div class="alert alert-danger d-none" role="alert" id="messageError"></div>
                    <div class="table-data__tool-left float-right mb-5 mt-1 ">
                        <a href="/admin/category/create">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>Tạo mới
                            </button>
                        </a>
                    </div>
                    <div class="table-responsive table-responsive-data2" style="overflow-x: hidden;">
                        @if(count($list_obj)>0)
                            <table class="table table-data3">
                                <thead>
                                <tr class="row">
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-2">Tên</th>
                                    <th class="col-md-3">Ảnh</th>
                                    <th class="col-md-4">Mô tả</th>
                                    <th class="col-md-2">Thao tác</th>

                                </tr>
                                </thead>
                                @foreach($list_obj as $item)
                                    <tbody>
                                    <tr class="row">
                                        <th scope="row" class="col-md-1">{{$item -> id}}</th>
                                        <td class="col-md-2">{{$item->name}}</td>
                                        <td class="col-md-3">
                                            <div>
                                                <img src="{{$item->image}}" alt="" style="width: 150px; height: 170px">
                                            </div>
                                        </td>
                                        <td class="col-md-4">{{$item->description}}</td>
                                        <td class="col-md-2">
                                            <a href="/admin/category/{{$item -> id}}/edit" style="color: #000000"><i
                                                    class="fas fa-edit"></i></a>   
                                            <a href="{{$item -> id}}" id="{{$item -> id}}"
                                               class="delete-obj" style="color: #000000"><i
                                                    class="fas fa-trash-alt"></i></a>

                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                            <div>
                                <div class="row float-right">
                                    {{$list_obj->appends($_GET)->links()}}
                                </div>
                            </div>
                        @else
                            <div class="alert alert-info" role="alert">
                                Không có chủng loại, nhấn vào <a href="/admin/category/create">đây</a> để tạo mới.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('.delete-obj').click(function () {
            var thisButton = $(this);
            swal({
                title: "Xóa",
                text: "Bạn có chắc muốn xóa danh mục này?",
                type: 'warning',
                buttons: true,
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: 'Đồng ý',
                CancelButtonText: 'Huỷ bỏ',
                buttonsStyling: false
            }).then(function (confirm) {
                if (confirm) {
                    var id = thisButton.attr('href');
                    $.ajax({
                        'url': '/admin/category/' + id,
                        'method': 'DELETE',
                        'data': {
                            '_token': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            swal({
                                title: "Xóa",
                                text: 'Danh mục đã bị xoá.',
                                type: 'success',
                                confirmButtonClass: "btn btn-success",
                                buttonsStyling: false
                            })
                            setTimeout(function () {
                                window.location.reload();
                            }, 2 * 1000);
                        },
                        error: function () {
                            swal({
                                title: "Xóa",
                                text: 'Có lỗi xảy ra, vui lòng thử lại sau.',
                                type: 'warning',
                                confirmButtonClass: "btn btn-danger",
                                buttonsStyling: false
                            })
                        }
                    });
                }

            });
            return false;
        })
    </script>
    <script src="{{asset('js/myScript.js')}}"></script>

@stop

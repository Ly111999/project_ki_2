@extends('admin.layout.default',[
    'current_menu' => 'product_manager',
    'page_title'=>'Danh sách sản phẩm'
])
@section('content')
    <div class="section__content section__content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-5 m-b-35">Danh sách sản phẩm</h2>
                    <div class="alert alert-success d-none" role="alert" id="messageSuccess"></div>
                    <div class="alert alert-danger d-none" role="alert" id="messageError"></div>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left ml-3">
                            <div class="rs-select2--light rs-select2--md">
                                <div class="row">
                                    <form action="/admin/product" method="GET" class="form-inline" name="category-form">
                                        <div class="form-group">
                                            <label>Chon : </label>
                                            <select name="categoryId" class="form-control m-3">
                                                <option value="0">Tất cả</option>
                                                @foreach($categories as $category)
                                                    <option
                                                            value="{{$category->id}}" {{$category->id==$categoryId?'selected':''}}>{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="table-data__tool-right">
                            <a href="/admin/product/create">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>Tạo mới
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2" style="overflow-x: hidden;">
                        @if(count($list_obj)>0)
                            <table class="table table-data3 table-hover">
                                <thead>
                                <tr class="row">
                                    <th class="col-md-1"></th>
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-1">Tên</th>
                                    <th class="col-md-2">Ảnh</th>
                                    <th class="col-md-2">Gía</th>
                                    <th class="col-md-3">Mô tả</th>
                                    <th class="col-md-2">Thao tác</th>
                                </tr>
                                </thead>
                                @foreach($list_obj as $item)
                                    <tbody>
                                    <tr class="row" id="row-item-{{$item->id}}">
                                        <td class="col-md-1">
                                            <input type="checkbox" class="check-item">
                                        </td>
                                        <td class="col-md-1">{{$item->id}}</td>
                                        <td class="col-md-1">{{$item->name}}</td>
                                        <td class="col-md-2">
                                            <div>
                                                <img src="{{$item->image}}" alt="" style="width: 150px; height: 150px;">
                                            </div>
                                        </td>
                                        <td class="col-md-2" style="margin-left: -7px">{{$item->discountPriceString}}</td>
                                        <td class="col-md-3">{!!$item->description !!}</td>
                                        <td class="col-md-2">
                                            <a href="/admin/product/{{$item -> id}}/edit" style="color: #000000"><i class="fas fa-edit"></i></a>   
                                            <a href="{{$item->id}}" id="{{$item->id}}" class="delete-obj" style="color: #000000"><i class="material-icons"><i class="fas fa-trash-alt"></i></i></a>


                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach

                            </table>
                            <div class="row">
                                <div class="col-md-8 form-inline">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="check-all">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Tất cả
                                        </label>
                                    </div>
                                    <div class="form-group mx-sm-3 mb-2">
                                        <select id="select-action" class="form-control">
                                            <option selected value="0">--Thao tác--</option>
                                            <option value="1">Xóa tất cả</option>
                                            <option value="2">Thao tác khác</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2" id="btn-apply">Chọn</button>
                                </div>
                                <div class="col-md-4 ">
                                    <div class="row float-right mr-lg-5">
                                        {{$list_obj->appends($_GET)->links()}}
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="alert alert-info" role="alert">
                                Không có sản phẩm, nhấn vào <a href="/admin/product/create">đây</a> để tạo mới.
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
                text: "Bạn có chắc muốn xóa sản phẩm này?",
                type: 'warning',
                buttons: true,
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: 'Đồng ý',
                CancelButtonText: 'Huỷ bỏ',
                buttonsStyling: false
            }).then(function(confirm) {
                if(confirm){
                    var id = thisButton.attr('href');
                    $.ajax({
                        'url': '/admin/product/' + id,
                        'method': 'DELETE',
                        'data':{
                            '_token':$('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            swal({
                                title:"Xóa",
                                text: 'Danh mục đã bị xoá.',
                                type: 'success',
                                confirmButtonClass: "btn btn-success",
                                buttonsStyling: false
                            })
                            setTimeout(function () {
                                window.location.reload();
                            }, 2*1000);
                        },
                        error: function () {
                            swal({
                                title:"Xóa",
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



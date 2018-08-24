@extends('admin.layout.default')
@section('content')
    <div class="section__content section__content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-5 m-b-35">List products</h2>
                    <div class="alert alert-success d-none" role="alert" id="messageSuccess"></div>
                    <div class="alert alert-danger d-none" role="alert" id="messageError"></div>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left ml-3">
                            <div class="rs-select2--light rs-select2--md">
                                <div class="row">
                                    <form action="/admin/product" method="GET" class="form-inline" name="category-form">
                                        <div class="form-group">
                                            <label>Choose a category: </label>
                                            <select name="categoryId" class="form-control m-3">
                                                <option value="0">All category</option>
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
                                    <i class="zmdi zmdi-plus"></i>Create
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
                                    <th class="col-md-2">Name</th>
                                    <th class="col-md-2">Image</th>
                                    <th class="col-md-1">Price</th>
                                    <th class="col-md-3">Description</th>
                                    <th class="col-md-2">Action</th>
                                </tr>
                                </thead>
                                @foreach($list_obj as $item)
                                    <tbody>
                                    <tr class="row" id="row-item-{{$item->id}}">
                                        <td class="col-md-1">
                                            <input type="checkbox" class="check-item">
                                        </td>
                                        <td class="col-md-1">{{$item->id}}</td>
                                        <td class="col-md-2">{{$item->name}}</td>
                                        <td class="col-md-2">
                                            <div>
                                                <img src="{{$item->image}}" alt="" style="width: 150px">
                                            </div>
                                        </td>
                                        <td class="col-md-1">{{$item->price}}</td>
                                        <td class="col-md-3">{{$item->description}}</td>
                                        <td class="col-md-2">
                                            <a href="/admin/product/{{$item -> id}}/edit">Edit</a>   
                                            <a href="{{$item->id}}" class="btn btn-simple btn-danger btn-icon remove btn-delete"><i class="material-icons">Delete</i></a>
                                            {{--<div class="container">--}}
                                                {{--<!-- Trigger the modal with a button -->--}}
                                                {{--<a data-token="{{ csrf_token() }}" data-toggle="modal" data-target="#myModal" class="btn btn-simple btn-danger btn-icon remove delete_obj" href="#/admin/product/{{$item -> id}}" >Delete</a>--}}
                                            {{--</div>--}}
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
                                            Check all
                                        </label>
                                    </div>
                                    <div class="form-group mx-sm-3 mb-2">
                                        <select id="select-action" class="form-control">
                                            <option selected value="0">--Select Action--</option>
                                            <option value="1">Delete All Checked</option>
                                            <option value="2">Another Action</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2" id="btn-apply">Apply</button>
                                </div>
                                <div class="col-md-4 ">
                                    <div class="row float-right mr-lg-5">
                                        {{$list_obj->appends($_GET)->links()}}
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="alert alert-info" role="alert">
                                Have no product, click <a href="/admin/product/create">here</a> to create new.
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $('.btn-delete').click(function () {
            var thisButton = $(this);
            swal({
                text: "Bạn có chắc muốn xoá danh mục này không?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: 'Đồng ý',
                cancelButtonText: 'Huỷ bỏ',
                buttonsStyling: false
            }).then(function() {
                var id = this.id;
                $.ajax({
                    'url': '/admin/product/' + id,
                    'method': 'DELETE',
                    'data':{
                        '_token':$('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        swal({
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
                            text: 'Có lỗi xảy ra, vui lòng thử lại sau.',
                            type: 'warning',
                            confirmButtonClass: "btn btn-danger",
                            buttonsStyling: false
                        })
                    }
                });
            });
            return false;
        })
    </script>




    <!-- Modal -->
    {{--<div class="modal" id="myModal" style="margin-top: 100px">--}}
        {{--<div class="modal-dialog">--}}
            {{--<!-- Modal content-->--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}

                    {{--<h4 class="modal-title " style="margin-right: 300px" > Delete</h4>--}}
                    {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<p class="text-center">--}}
                        {{--Are you sure you want to delete this?--}}
                    {{--</p>--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button href="#/admin/product/{{$item -> id}}" type="button" class="btn btn-default">Delete</button>--}}
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}

@stop



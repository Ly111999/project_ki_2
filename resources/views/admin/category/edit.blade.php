@extends('admin.layout.default',[
    'current_menu' => 'category_manager',
    'page_title'=>'Sửa thông tin'
])

@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-5 ">Sửa thông tin chủng loại</h2>
                    <form action="/admin/category/{{$obj_view -> id}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        {{csrf_field()}}

                        <div>
                            <a href="/admin/category/create" style="margin-left: 10px;"><i
                                        class="far fa-plus-square"></i>Tạo mới</a>
                            <div class="clearfix"></div>
                            <a href="/admin/category" style="margin-left: 10px; "><i class="fas fa-list-ul"></i>Danh sách
                                </a>
                        </div>

                        <div class="form-group mt-3">
                            <label> Tên</label>
                            <input type="text" name="name" class="form-control w-50 mr-2" value="{{$obj_view -> name}}">
                        </div>

                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea name="description" id="" cols="30" rows="7"
                                      class="form-control w-75 mr-2">{!!$obj_view->description!!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Ảnh</label>
                            <div class="clearfix"></div>
                            <input type="text" name="image" value="{{$obj_view -> image}}" class="form-control w-75">
                            <div>
                                <img src="{{$obj_view -> image}}" alt="" style="width: 200px; height: 200px;">
                            </div>
                        </div>
                        <div>
                            <input type="submit" value="Lưu" class="btn btn-primary">
                            <input type="reset" value="Làm lại" class="btn btn-dark">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@extends('admin.layout.default',[
    'current_menu' => 'category_manager',
    'page_title'=>'Tạo mới danh mục'
])

@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-5 ">Tạo mới chủng loại</h2>
                    <a href="/admin/category" class="float-right"><i class="fas fa-list-ul"></i>Danh sách </a>
                    <div class="clearfix"></div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Vui lòng sửa lỗi và thử lại .
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/admin/category" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Tên</label>
                            <div class="row ml-1">
                                <input type="text" name="name" class="form-control w-25 mr-2">
                                @if($errors->has('name'))
                                    <label class="text-danger">*{{$errors->first('name')}}</label>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Ảnh</label>
                            <div class="row ml-1">
                                <input type="text" name="image" class="form-control w-75">
                                @if($errors->has('image'))
                                    <label class="text-danger">*{{$errors->first('image')}}</label>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea name="description" id="" cols="30" rows="7"
                                      class="form-control w-75 mr-2"></textarea>
                            @if($errors->has('description'))
                                <label class="text-danger">*{{$errors->first('description')}}</label>
                            @endif
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

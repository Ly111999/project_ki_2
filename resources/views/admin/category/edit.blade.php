@extends('admin.layout.default')

@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-5 ">Edit category</h2>
                    <form action="/admin/category/{{$obj_view -> id}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        {{csrf_field()}}

                        <div>
                            <a href="/admin/category/create" style="margin-left: 10px;"><i
                                        class="far fa-plus-square"></i>Create</a>
                            <div class="clearfix"></div>
                            <a href="/admin/category" style="margin-left: 10px; "><i class="fas fa-list-ul"></i>List
                                categories</a>
                        </div>

                        <div class="form-group mt-3">
                            <label> Category name</label>
                            <input type="text" name="name" class="form-control w-50 mr-2" value="{{$obj_view -> name}}">
                        </div>

                        <div class="form-group">
                            <label>Category description</label>
                            <textarea name="description" id="" cols="30" rows="10"
                                      class="form-control w-75 mr-2">{{$obj_view -> description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Category image</label>
                            <div class="clearfix"></div>
                            <input type="text" name="image" value="{{$obj_view -> image}}" class="form-control w-75">
                            <div>
                                <img src="{{$obj_view -> image}}" alt="" style="width: 150px">
                            </div>
                        </div>
                        <div>
                            <input type="submit" value="Save" class="btn btn-primary">
                            <input type="reset" value="Reset" class="btn btn-dark">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
@extends('admin.layout.default')

@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-5 ">Edit product</h2>
                    <form action="/admin/product/{{$obj_view -> id}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        {{csrf_field()}}
                        <div>
                            <a href="/admin/product/create" style="margin-left: 10px;"><i class="far fa-plus-square"></i>Create</a>
                            <div class="clearfix"></div>
                            <a href="/admin/product" style="margin-left: 10px; "><i class="fas fa-list-ul"></i>List products</a>
                        </div>

                        <div class="form-group mt-4">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control w-50 mr-2" value="{{$obj_view -> name}}">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control w-25 mr-2" value="{{$obj_view -> price}}">
                        </div>
                        <div class="form-group">
                            <label>Discount</label>
                            <input type="number" name="discount" class="form-control w-25 mr-2" value="{{$obj_view -> discount}}">
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="categoryId" class="form-control w-25 mr-2">
                                @foreach($categories as $item)
                                    <option
                                            value="{{$item->id}}" {{$obj_view -> categoryId == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="" cols="30" rows="7"
                                      class="form-control w-75 mr-2">{{$obj_view -> description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <div class="clearfix"></div>
                            <input type="text" name="image" class="form-control w-75" value="{{$obj_view -> image}}">
                            <div>
                                <img src="{{$obj_view -> image}}" alt="" style="width: 200px; height: 200px">
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

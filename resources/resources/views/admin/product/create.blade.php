@extends('admin.layout.default')

@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-5 ">Create products</h2>
                    <a href="/admin/product" class="float-right"><i class="fas fa-list-ul"></i>List products</a>
                    <div class="clearfix"></div>
                    <form action="/admin/product" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Product name</label>
                            <div class="row ml-1">
                                <input type="text" name="name" class="form-control w-50 mr-2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <div class="row ml-1">
                                <input type="number" name="price" class="form-control w-25 mr-2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="categoryId" class="form-control w-25">
                                @foreach($categories as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control w-75 mr-2"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <div class="row ml-1">
                                <input type="text" name="image" class="form-control w-75">
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
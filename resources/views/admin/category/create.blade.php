@extends('admin.layout.default')

@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-5 ">Create category</h2>
                    <a href="/admin/category" class="float-right"><i class="fas fa-list-ul"></i>List categories</a>
                    <div class="clearfix"></div>

                    <form action="/admin/category" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Category name</label>
                            <div class="row ml-1">
                                <input type="text" name="name" class="form-control w-25 mr-2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Category image</label>
                            <div class="row ml-1">
                                <input type="text" name="image" class="form-control w-75">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Category description</label>
                            <textarea name="description" id="" cols="30" rows="10"
                                      class="form-control w-75 mr-2"></textarea>
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
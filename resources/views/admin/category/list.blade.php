@extends('admin.layout.default')

@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-5 ">List categories</h2>
                    <div class="alert alert-success d-none" role="alert" id="messageSuccess"></div>
                    <div class="alert alert-danger d-none" role="alert" id="messageError"></div>
                    <div class="table-data__tool-left float-right mb-5 mt-1 ">
                        <a href="/admin/category/create">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>Create
                            </button>
                        </a>
                    </div>
                    <div class="table-responsive table-responsive-data2" style="overflow-x: hidden;">
                        @if(count($list_obj)>0)
                            <table class="table table-data3">
                                <thead>
                                <tr class="row">
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-2">Category Name</th>
                                    <th class="col-md-3">Category Image</th>
                                    <th class="col-md-4">Category Description</th>
                                    <th class="col-md-2">Action</th>

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
                                            <a href="/admin/category/{{$item -> id}}/edit" style="color: #000000"><i class="fas fa-edit"></i></a>   
                                            <a href="#/admin/category/{{$item -> id}}" id="{{$item -> id}}"
                                               class="delete-obj" style="color: #000000"><i class="fas fa-trash-alt"></i></a>
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
                                Have no category, click <a href="/admin/category/create">here</a> to create new.
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
            var id = this.id;
            var user_confirm = confirm('Are you sure you want to delete this category? ');
            if (user_confirm) {
                $.ajax({
                    url: 'http://127.0.0.1:8000/admin/category/' + id,
                    method: 'DELETE',
                    data: {
                        '_token': "{{ csrf_token() }}"
                    },
                    success: function () {
                        alert('Deleted');
                        alert('Success!');
                        window.location.reload();
                    },
                    error: function () {
                        alert('Error.');
                    }
                });
            } else {
                alert('!Okie');
            }
        });
    </script>
    <script src="{{asset('js/myScript.js')}}"></script>

@stop

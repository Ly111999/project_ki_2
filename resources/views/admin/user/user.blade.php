@extends('admin.layout.default')
@section('content')
    <h1>List User</h1>

    <div class="table-responsive table-responsive-data2" style="overflow-x: hidden; margin-top: 30px" >
    <table class="table table-data3 table-hover">
        <thead>
        <tr class="row">
            <th class="col-md-1">Id</th>
            <th class="col-md-2">Name</th>
            <th class="col-md-5">Email</th>
            <th class="col-md-1">Status</th>
            <th class="col-md-3">Action</th>
        </tr>
        </thead>
        @foreach($list_obj as $item)
            <tbody>
            <tr class="row">

                <td class="col-md-1">{{$item->id}}</td>
                <td class="col-md-2">{{$item->name}}</td>
                <td class="col-md-5">{{$item->email}}</td>
                <td class="col-md-1">{{$item->status}}</td>
                <td class="col-md-3"></td>
            </tr>
            </tbody>
        @endforeach

    </table>
    </div>

@stop


@extends('admin.layout.default)

@section('content')
    <div class="main-content" style="margin-top: -70px">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div style="text-align: center">
                    <img src="https://i1.wp.com/manhhieu.net/wp-content/uploads/2015/02/Loi-404.png" alt="">
                </div>
                <div>
                    <a href="{{route('home')}}">
                        <button type="button" class="btn btn-primary" style="margin-left: 600px;">Go to home</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection


@extends('home.default', ['page_title'=>'Giỏ hàng'])
@section('content')
    <div class="container-fluid" style="height: 500px;">
        <div class="main_slider" style="background-image:url({{asset('image/GDproject.png')}})">
            <div class="container fill_height">
                <div class="row align-items-center fill_height">
                    <div class="col">
                        <div class="main_slider_content">
                            <h3>Bạn đã đặt hàng thành công!</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection

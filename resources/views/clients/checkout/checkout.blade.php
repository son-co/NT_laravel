@extends('clients.layouts.page')

@section('slider')
    <div class="w-full h-full font-mono">
        <div class="slider relative">
            <img src="../images/bg_breadcrumb.jpg" alt="">
            <div class="absolute top-0 right-0 left-0 h-full flex flex-col justify-center items-center">
                <p class="text-2xl text-white font-medium">Xác Nhận Đơn Hàng</p>
               
            </div>
        </div>

        <div class="container">
            <div class="grid grid-cols-3 my-5 gap-5">
                <div class="col-span-2 w-full">a</div>
                <div class="bg-gray-50">b</div>
            </div>
        </div>
    </div>
@endsection
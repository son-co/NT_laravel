@extends('clients.layouts.page')

@section('slider')
    <div class="w-full h-full font-mono">
        <div class="slider relative">
            <img src="../images/bg_breadcrumb.jpg" alt="">
            <div class="absolute top-0 right-0 left-0 h-full flex flex-col justify-center items-center">
                <p class="text-2xl text-white font-medium">GIỎ HÀNG</p>
                <div>
                    <a href="{{route('home')}}" class="text-white font-medium hover:text-neutral-14">Trang chủ</a>
                    <span class="text-white font-bold mx-2 "><i class="fa-solid fa-angle-right"></i></span>
                    <span class="text-neutral-14">Giỏ hàng</span>
                </div>
            </div>
        </div>

        <div class="container py-10">
            <h1 class="text-3xl font-bold ">Giỏ hàng của bạn</h1>
            <div class="my-5 px-5 py-5 border-neutral-14 border-2 divide-neutral-14 divide-y-[1px]">
                <div class="grid grid-cols-2 ">
                    <div class="col-span-1 pl-10 font-medium text-lg pb-3">
                        <p>Sản phẩm</p>
                    </div>
                    <div class="col-span-1 px-5 grid grid-cols-7 place-items-center font-medium text-lg pb-3 ">
                        <p  class="col-span-2">Giá</p>
                        <p  class="col-span-2">Số lượng</p>
                        <p class="col-span-2">Thành tiền</p>
                        <p class="col-span-1"></p>
                    </div>
                </div>
                <form action="" class="divide-y-[1px]">
                    @if (!empty($data))
                        @foreach ($data as $item)
                            <div class="grid grid-cols-2 ">
                                <a href="{{ route('product.show', ['id' => $item->productID]) }}" class="col-span-1 py-5 pl-5 flex justify-start items-center gap-4">
                                    
                                    <img src="{{asset('images/product/'.$item->image)}}" class="w-32 h-32" alt="">
                                    <p class="text-neutral-500">{{$item->name}}</p>
                                </a>
                                <div class="col-span-1 py-5 px-5 text-neutral-14 h-full ">
                                <div action="" class=" grid grid-cols-7 place-items-center place-content-center h-full">
                                        <input type="text" name="" id="price" value="{{number_format($item->price)}}đ" class="col-span-2 w-full text-center">
                                        <p class="flex justify-center gap-2 col-span-2">
                                            {{-- <button type="button" class="text-xl" id="decrease">-</button> --}}
                                            <input type="text" name="" id="quantity" value="{{$item->quantity}}" class="w-10 text-center border-[1px] ">
                                            {{-- <button type="button" class="text-xl" id="increase">+</button> --}}
                                        </p>
                                        <input type="text" name="" id="total-price" value="{{number_format($item->money)}}đ" class="col-span-2 w-full text-center">
                                        {{-- <p id="total-price">2</p> --}}
                                        <a href="{{route('deleteCart',['id'=>$item->cartID])}}" class="col-span-1"><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                                </div>
                            </div>

                        @endforeach
                    @endif

                    <div class="px-5 py-5">
                        <div class="flex justify-end items-center text-xl gap-10">
                            <span class="font-bold">Tổng số tiền thanh toán: </span>
                            <span class="text-neutral-14">{{number_format($total)}}đ</span>
                        </div>

                        <div class="flex justify-end items-center gap-16 py-5">
                            <a href="{{route('home')}}" class="bg-neutral-100 px-5 py-3 rounded hover:bg-neutral-400">Tiếp tục mua hàng</a>
                            <a href="" class="bg-neutral-14 px-5 py-3 rounded hover:bg-orange-500">Tiến hành thanh Toán</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
       
    </div>

@endsection
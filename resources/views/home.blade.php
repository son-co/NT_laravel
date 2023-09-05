@extends('clients.layouts.page')

@section('slider')
<div class="w-full h-full">
     <div class="slider">
        <img src="./images/slider_1.jpg" alt="">
    </div>
    @include('clients.home.list-product')
    {{-- @include('clients.home.product-deal') --}}

    <x-deal-product :product="$product" :title="'Sản Phẩm '" :content="'row-start-1 lg:row-auto'"  ></x-deal-product >

    <div class="container px-0 my-10 h-full">
       <div class="flex flex-col md:flex-row justify-between items-center gap-5 w-full h-full ">
        <div class="w-full relative h-full cursor-pointer group overflow-hidden">
            <img src="./images/banner_1.jpg" class="w-full group-hover:scale-125 " alt="">
            <div class="absolute  top-0 flex flex-col justify-center items-center right-0 left-0 h-full ">
                <p class=" flex justify-center items-center uppercase px-10 py-3 bg-white/50">Phòng bếp</p>
            </div>
        </div>
        <div class="hover-scale w-full relative cursor-pointer group overflow-hidden">
            <img src="./images/banner_2.jpg" class="w-full group-hover:scale-125 " alt="">
            <div class="absolute  top-0 flex flex-col justify-center items-center right-0 left-0 h-full ">
                <p class=" flex justify-center items-center uppercase px-10 py-3 bg-white/50">Phòng khách</p>
            </div>
        </div>
       </div>
    </div>

    {{-- <x-package-deal-product :title="'Sản Phẩm Hot'" :content="'row-start-1'"></x-package-deal-product > --}}
    <x-relate-product :title="'Sản Phẩm Mới Về'" ></x-relate-product >


    <div class="container px-0 my-10 h-full ">
        <div class="flex justify-between items-center gap-5 w-full h-full  ">
            <div class="w-full relative h-full cursor-pointer group overflow-hidden">
                <img src="./images/banner.jpg" class="w-full group-hover:scale-125 " alt="">
                <div class="absolute  top-0 flex flex-col justify-center items-center right-0 left-0 h-full ">
                    <p class=" flex justify-center items-center uppercase px-10 py-3 bg-white/50">Phòng bếp</p>
                </div>
            </div>
        </div>
    </div>


</div>
   
@endsection
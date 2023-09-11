@extends('clients.layouts.page')

@section('slider')
<div class="w-full h-full font-libre">
    <div class="slider relative">
        <img src="../images/bg_breadcrumb.jpg" alt="">
        <div class="absolute top-0 right-0 left-0 h-full flex flex-col justify-center items-center">
            <p class="text-2xl text-white font-medium uppercase"> {{ $product[0]->name }} </p>
        </div>
    </div>

    <div class="container">
        <div class="w-full">
            <div class="grid grid-cols-4 lg:grid-cols-5 gap-5 py-10 bg-white">
                <div class="col-span-2 w-full">
                    <img src="{{ asset('images/product/' . $product[0]->image) }}" class="w-full cursor-pointer" alt="">

                </div>
                <div class="col-span-2 px-5">
                    <div class="flex flex-col gap-2 border-neutral-400 mb-5">
                        <p class="lg:text-4xl md:text-2xl text-lg font-bold uppercase">{{ $product[0]->name }}</p>
                        <span class="lg:text-3xl md:text-xl text-lg font-blod w-48 text-red-600">{{ number_format($product[0]->price) }}đ</span>
                    </div>
                    <div class="md:block hidden">
                        <hr>
                        <p class="text-gray-500">
                            Lấy cảm hứng từ nền văn hóa Ý, mọi chi tiết liên quan đến không gian, màu sắc, hình khối, tỷ lệ hay sự tương phản đều được những nhà thiết kế dày dặn kinh nghiệm của Dolcevita xem xét và lựa chọn kỹ lưỡng nhằm đem lại cho khách hàng một không gian sống thoải mái và tiện nghi, mang đậm dấu ấn cá nhân.
                        </p>
                    </div>
                    <hr>
                    <form action="{{route('addCart')}}" method="GET">

                        <div class="flex items-center gap-10 my-10">
                            <p class="text-neutral-14">Số lượng:</p>
                                <div class="flex items-center gap-4">
                                    <button type="button" class="text-2xl" id="decrease">-</button>
                                    <input type="text" name="quantity" id="quantity" value="1" class="w-10 text-center border-[1px]">
                                    <button type="button" class="text-2xl" id="increase">+</button>
                                </div>
                        </div>
                        <input type="submit" value="Thêm vào giỏ hàng" class="bg-neutral-14 px-5 py-3 rounded text-white font-bold hover:bg-white hover:border-[1px] hover:border-neutral-14 hover:text-neutral-14">
                    </form>

                </div>
                <div class="lg:block hidden">
                    <div class="border-[1px] w-full rounded-3xl bg-gray-200 px-3 py-3 my-5">
                        <span class="text-neutral-14 uppercase font-bold text-md"><i class="fa-solid fa-truck-fast"></i>  Miễn phí vận chuyển</span>
                        <p>Nội thành Hồ Chí Minh: với đơn hàng trên 550.000đ</p> 
                    </div>

                    <div class="border-[1px] w-full rounded-3xl bg-gray-200 px-3 py-3 divide-x-2">
                        <p >
                            <span class="text-neutral-14 uppercase text-2xl"><i class="fa-solid fa-box"></i>  </span>
                            <span class="font-thin text-md">Giao hàng tận nơi và nhanh chóng</span>
                        </p>
                        <p >
                            <span class="text-neutral-14 uppercase text-2xl"><i class="fa-solid fa-shield"></i>  </span>
                            <span class="font-thin text-md">Đảm bảo an toàn</span>
                        </p>
                    </div>
                    
                </div>
                
            </div>
        </div>

        {{-- ---------------------------------------------------------- --}}

        <div class="w-full h-auto py-5">
            <div class="mb-4 border-b border-gray-200">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" >
                    <li class="mr-2 openTab active hover:border-b-2" role="presentation" id="id1">
                        <button onclick="openTab('info'); tabList('id1')" class="inline-block p-4  rounded-t-lg hover:text-gray-600 hover:border-gray-300 "  >Thông tin</button>
                    </li>
                    <li class="mr-2 openTab hover:border-b-2" role="presentation" id="id2">
                        <button onclick="openTab('cmt');tabList('id2')" class=" inline-block p-4  border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300" >Đánh giá</button>
                    </li>
                  
                </ul>
            </div>
            <div id="myTabContent">
                <div class="hidden p-4 rounded-lg bg-gray-50 tab-content active" id="info" >
                    <p class="text-sm text-gray-500 ">
                        {{ $product[0]->des }}
                    </p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 tab-content" id="cmt" >
                    <div class="divide-y">
                        @if (!empty($review))
                            @foreach($review as $item)
                                <div  class="flex pb-3">
                                    <span class="text-3xl"><i class="fa-solid fa-circle-user"></i> </span>
                                    <div class="mx-3">
                                        <span class="font-bold hover:cursor-pointer">{{$item->fullname}}</span>
                                        <p class="text-neutral-400 font-light text-sm">{{$item->date}}</p>
                                        <p class="text-sm text-gray-600">{{$item->content}}</p>
                                        <img src="{{asset('images/review/'.$item->image)}}" class="w-40 h-40" alt="">

                                    </div>
                                </div>
                            @endforeach
                        
                        @else
                            <p>Chưa có đánh giá nào về sản phẩm này!</p>
                        @endif
                    </div>

                    <div class="py-5">
                        @auth
                            <form action="{{route('addReview')}}" method="POST" enctype="multipart/form-data">
                                <hr> <br>
                                <textarea name="content_review" id="" required  cols="30" class="w-full border px-2 py-2" placeholder="Chia sẻ cảm nhận của bạn....."></textarea>
                                <input type="file" name="image_review" id="" class="hover:cursor-pointer"> <br>
                                <input type="submit" value="Chia sẻ" class="my-3 bg-neutral-14 rounded-md px-4 py-3 text-white hover:cursor-pointer">
                                @csrf
                            </form>
                        @else 
                            <p >Bạn chưa đăng nhập! Vui lòng đăng nhập <strong class="text-neutral-14"><a href="{{route('log.logIn')}}" class="hover:underline cursor-pointer hover:italic text-neutral-14">Tại đây</a></strong></p>
                        @endauth
                    </div>
                    
                </div>
              
            </div>
        </div>
    </div>
  
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const decreaseButton = document.getElementById('decrease');
    const increaseButton = document.getElementById('increase');
    
    
    decreaseButton.addEventListener('click', function() {
        decreaseQuantity();
    });
    
    increaseButton.addEventListener('click', function() {
        increaseQuantity();
    });
    });

    function decreaseQuantity() {
    const quantityInput = document.getElementById('quantity');
    let currentQuantity = parseInt(quantityInput.value);
    
    if (currentQuantity > 1) {
        currentQuantity--;
        quantityInput.value = currentQuantity;
    }
    }

    function increaseQuantity() {
    const quantityInput = document.getElementById('quantity');
    let currentQuantity = parseInt(quantityInput.value);
    
    currentQuantity++;
    quantityInput.value = currentQuantity;
    }
</script>

@endsection
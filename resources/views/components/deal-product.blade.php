<div class="container h-full px-0 py-5">
    <div class="grid grid-cols-1 lg:grid-cols-6 gap-5 w-full h-full ">
        <div class="col-span-3 lg:col-span-2 h-full w-full px-8 py-8 border-neutral-14 border-2 flex flex-col justify-center items-center">
            <img src="./images/product/dongho1.png" alt="">
            <div class="flex justify-center items-center py-5 gap-3">
                <div class=" w-1/4 h-16 shadow-2xl drop-shadow-lg rounded-full flex flex-col justify-center items-center px-3">
                    <p class="days font-bold text-xl">92 </p>
                    <p class="font-medium font-mono">Ngày</p>

                </div>
                <div class=" w-1/4 h-16 shadow-2xl drop-shadow-lg rounded-full flex flex-col justify-center items-center px-3">
                    <p class="hours font-bold text-xl">13 </p>
                    <p class="font-medium font-mono">Giờ</p>

                </div>
                <div class=" w-1/4 h-16 shadow-2xl drop-shadow-lg rounded-full flex flex-col justify-center items-center px-3">
                    <p class="minutes font-bold text-xl">4 </p>
                    <p class="font-medium font-mono">Phút</p>

                </div>
                <div class=" w-1/4 h-16 shadow-2xl drop-shadow-lg rounded-full flex flex-col justify-center items-center px-3">
                    <p class="seconds font-bold text-xl">9 </p>
                    <p class="font-medium font-mono">Giây</p>

                </div>
                
            </div>
            <div class="flex flex-col justify-center items-center gap-y-3">
                <p class="name font-medium hover:text-neutral-14">Đồng hồ Miso Limited</p>
                <p class="brand uppercase text-gray-500 text-xs">Miso</p>
                <p class="price text-neutral-14 font-bold text-2xl">1.200.000đ</p>
            </div>
        </div>
        <div class="col-span-3  {{$content}} lg:col-span-4 h-full w-full">
            <div class=" grid md:grid-cols-3 items-center gap-x-0 grid-cols-2">
                <div class="flex items-center col-span-1">
                    {{-- <span class="w-0 h-0 border-t-[52px] border-l-[15px] border-t-neutral-14 border-l-transparent"></span> --}}
                    <p class="px-3 py-2 w-full text-center text-base xl:px-5 xl:py-3 font-bold text-white xl:text-lg bg-neutral-14 inline-block">{{$title}}</p>
                    {{-- <span class="w-0 h-0 border-b-[52px] border-r-[15px] border-b-neutral-14 border-r-transparent"></span> --}}
                </div>
                <div class="border-neutral-300 border-b-2 col-span-1 md:col-span-2 py-3 flex items-center justify-end gap-4">
                    <ul class="hidden  items-center justify-around gap-2 md:gap-3 xl:gap-5 font-mono sm:hidden md:flex ">
                        <li class="hover:text-neutral-14 flex justify-center"><a href="">Sofa</a></li>
                        <li class="hover:text-neutral-14 flex justify-center"><a href="">Trang trí</a></li>
                        <li class="hover:text-neutral-14 flex justify-center"><a href="">Ghế</a></li>
                        <li class="hover:text-neutral-14 flex justify-center"><a href="">Kệ sách</a></li>
                        <li class="hover:text-neutral-14 flex justify-center"><a href="">Bàn</a></li>
                        <li class="hover:text-neutral-14 flex justify-center"><a href="">Tủ quần áo</a></li>
                       
                    </ul>
                   <div class="flex gap-4">
                        <span  class="hover:text-neutral-14 cursor-pointer button-prev"><i class="fa-solid fa-angle-left"></i></span>
                        <span  class="hover:text-neutral-14 cursor-pointer button-next"><i class="fa-solid fa-angle-right"></i></span>
                   </div>
                </div>
            </div>
            <div class="py-5 !h-[650px] w-full">
                <div class="swiper mySwiperdeal h-full w-full">
                    <div class="swiper-wrapper w-full text-center">
                            @foreach( $product as $key)
                                <div  class="swiper-slide deal-hot flex-col   !flex justify-center items-center relative group">   
                                    <a href="{{ route('product.show', ['id' => $key->id]) }}">
                                        <img src="./images/product/{{$key->image}}"   alt="">
                                    </a>          
                                    <a href="{{ route('product.show', ['id' => $key->id]) }}" class="name mt-4 hover:text-neutral-14 uppercase">{{$key->name}}</a>
                                    <p class="price text-neutral-14 ">{{number_format($key->price)}}đ</p>
                                    <div class="absolute hidden justify-center items-center gap-3 backdrop-blur-sm w-full h-48 top-5 group-hover:flex">
                                        <a href="{{ route('product.show', ['id' => $key->id]) }}" class="w-10 h-10 bg-white rounded-lg flex justify-center items-center text-sm hover:bg-neutral-14 hover:text-white"><i class="fa-solid fa-eye"></i></a>
                                        <a href="{{ route('addCartHome', ['id' => $key->id]) }}" class="w-10 h-10 bg-white rounded-lg flex justify-center items-center text-sm hover:bg-neutral-14 hover:text-white"><i class="fa-solid fa-dolly"></i></a>
                                    </div>
                                </div>
                            @endforeach
                       
                       
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
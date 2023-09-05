<div class="container px-0">
    <div class="h-full w-full">
        <div class="grid grid-cols-6 items-center  ">
            <div class="flex items-center col-span-1">
                <p class="px-3 py-2 w-full text-center text-base xl:px-5 xl:py-3 font-bold text-white xl:text-lg bg-neutral-14 inline-block">{{$title}}</p>
            </div>
            <div class="border-neutral-300 border-b-2 col-span-5 py-3 flex items-center justify-end gap-4">
               <div class="flex gap-4">
                    <span  class="hover:text-neutral-14 cursor-pointer button-prevv"><i class="fa-solid fa-angle-left"></i></span>
                    <span  class="hover:text-neutral-14 cursor-pointer button-nextt"><i class="fa-solid fa-angle-right"></i></span>
               </div>
            </div>
        </div>
        <div class="py-5 h-full w-full">
            <div class="swiper mySwiperrelate h-full w-full">
                <div class="swiper-wrapper w-full text-center">
                    <a href="{{route('getCart')}}" class="swiper-slide deal-hot flex-col gap-2 !flex justify-center items-center relative group">             
                        <img src="./images/product/dongho1.png"   alt="">
                        <p class="name mt-4 hover:text-neutral-14">Đồng hồ Miso Limited</p>
                        <p class="price text-neutral-14 ">1.200.000đ</p>
                        <div class="absolute hidden justify-center items-center gap-3 backdrop-blur-sm w-full h-48 top-5 group-hover:flex">
                            <div class="w-10 h-10 bg-white rounded-lg flex justify-center items-center text-sm hover:bg-neutral-14 hover:text-white"><i class="fa-solid fa-eye"></i></div>
                            <div class="w-10 h-10 bg-white rounded-lg flex justify-center items-center text-sm hover:bg-neutral-14 hover:text-white"><i class="fa-solid fa-dolly"></i></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
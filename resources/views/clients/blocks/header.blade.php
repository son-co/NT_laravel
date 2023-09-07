<header class="container h-full flex justify-between items-center">
   
    <div class="logo h-full">
        <a href="{{route('home')}}" class="h-full flex items-center">
            <img src="{{asset('images/logo.png')}}" alt="">
        </a>
    </div>
    <div class="nav h-full hidden lg:block">
        <ul class="flex gap-10 justify-center font-mono h-full items-center">
            <li class=" text-neutral-14 hover:text-neutral-14 h-full">
                <a href="{{route('home')}}" class=" group relative flex h-full items-center cursor-pointer">
                    <span>Trang Chủ</span>
                    <div class="flex justify-center w-full transition duration-300 group-hover:visible invisible absolute top-1/2 transform translate-y-[800%] left-0">
                        <span class="w-8 h-[2px] block bg-neutral-14"></span> 
                    </div>
                </a> 
            </li>
            <li class="hover:text-neutral-14 h-full">
                <a href="{{route('home')}}" class=" group relative flex h-full items-center cursor-pointer">
                    <span>Giới thiệu</span>
                    <div class="flex justify-center w-full transition duration-300 group-hover:visible invisible absolute top-1/2 transform translate-y-[800%] left-0">
                        <span class="w-8 h-[2px] block bg-neutral-14"></span> 
                    </div>
                </a> 
                
            </li>
            <li class="h-full group/item relative">
                <a href="{{route('home')}}" class="hover:text-neutral-14 group relative flex gap-2 h-full items-center cursor-pointer">
                    <span>Sản phẩm</span> <i class="fa-solid fa-sort-down transfrom -translate-y-1"></i>
                    <div class="flex justify-center w-full transition duration-300 group-hover:visible invisible absolute top-1/2 transform translate-y-[800%] left-0">
                        <span class="w-8 h-[2px] block bg-neutral-14"></span> 
                    </div>
                </a> 
                <ul class="absolute w-56 bg-white h-auto flex-col justify-start shadow-xl hidden group-hover/item:flex">
                    <li class="px-5  relative group/menu">
                        <a href="" class="flex justify-between items-center border-b-[1px] border-neutral-14 py-4 hover:text-neutral-14">
                            <span>Sofa</span>
                            <i class="fa-solid fa-caret-right"></i>
                        </a>
                        <ul class="absolute top-0 left-[100%] w-56 bg-white h-auto flex-col justify-start shadow-xl hidden group-hover/menu:flex">
                            <li class="px-5 hover:text-neutral-14">
                                <a href="" class="flex justify-between items-center border-b-[1px] border-neutral-14 py-4">Sofa giường</a>
                            </li>
                            <li class="px-5 hover:text-neutral-14">
                                <a href="" class="flex justify-between items-center border-b-[1px] border-neutral-14 py-4">Sofa băng</a>
                            </li>
                            <li class="px-5 hover:text-neutral-14">
                                <a href="" class="flex justify-between items-center border-b-[1px] border-neutral-14 py-4">Sofa đơn</a>
                            </li>
                            <li class="px-5  hover:text-neutral-14">
                                <a href="" class="flex justify-between items-center py-4">Sofa đôi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="px-5  hover:text-neutral-14">
                        <a href="" class="flex justify-between items-center border-b-[1px] border-neutral-14 py-4">Ghế</a>
                    </li>
                    <li class="px-5 hover:text-neutral-14">
                        <a href="" class="flex justify-between items-center border-b-[1px] border-neutral-14 py-4">Trang trí</a>
                    </li>
                    <li class="px-5 hover:text-neutral-14">
                        <a href="" class="flex justify-between items-center border-b-[1px] border-neutral-14 py-4">Kệ sách</a>
                    </li>
                    <li class="px-5 hover:text-neutral-14">
                        <a href="" class="flex justify-between items-center border-b-[1px] border-neutral-14 py-4">Bàn</a>
                    </li>
                    <li class="px-5 hover:text-neutral-14">
                        <a href="" class="flex justify-between items-center py-4">Tủ quần áo</a>
                    </li>
                </ul>
            </li>
            <li class="hover:text-neutral-14 h-full">
                <a href="{{route('home')}}" class=" group relative flex h-full items-center cursor-pointer">
                    <span>Tin tức</span>
                    <div class="flex justify-center w-full transition duration-300 group-hover:visible invisible absolute top-1/2 transform translate-y-[800%] left-0">
                        <span class="w-8 h-[2px] block bg-neutral-14"></span> 
                    </div>
                </a> 
            </li>
            <li class="hover:text-neutral-14 h-full">
                <a href="{{route('home')}}" class=" group relative flex h-full items-center cursor-pointer">
                    <span>Liên hệ</span>
                    <div class="flex justify-center w-full transition duration-300 group-hover:visible invisible absolute top-1/2 transform translate-y-[800%] left-0">
                        <span class="w-8 h-[2px] block bg-neutral-14"></span> 
                    </div>
                </a> 
            </li>
        </ul>
    </div>
   <div class="action flex justify-center items-center h-full">
        <div class="flex justify-center items-center relative group">
            <button class="lg:flex hidden search mx-5  bg-neutral-14 w-10 h-10 rounded-full  justify-center items-center text-white font-bold text-base z-40">
                <a href=""><i class="fa-solid fa-magnifying-glass "></i></a>
            </button>

            <div class="absolute backdrop-blur-xl shadow top-10 hidden  -left-44 group-hover:block ">
                <form action="" class="relative flex justify-start px-3 py-3 w-full">
                    @csrf
                    <input type="text" placeholder="Search......" name="" id="Search" class="bg-neutral-14/20 w-56 text-blue-500 outline-none pl-3 h-10 rounded-lg z-0  active:outline-transparent " >
                    <button class="absolute z-40 right-5 text-blue-600 top-4">
                        <a href="" class="text-2xl"><i class="fa-solid fa-magnifying-glass "></i></a>
                    </button>
                </form>
            </div>
        </div>
        
        @auth
            <div class=" sign_in flex items-center h-full">
                <div class="cart px-5 h-full flex items-center hover:cursor-pointer group">
                    <div class=" relative ">
                        <a href="{{route('getCart')}}" class="relative text-neutral-14">
                            <i class="fa-solid fa-dolly w-6 h-6 object-contain"></i>
                            <span class="absolute -top-3 left-4 w-6 h-6 bg-[#000084] rounded-full flex justify-center items-center text-white font-bold text-xs">
                                {{ $totalCart}}
                            </span>
                        </a>
                        <div class=" absolute top-12 -right-28 backdrop-blur-xl shadow w-72 overflow-auto hidden group-hover:block ">
                            <div class="cart max-h-56 lg:max-h-72 overflow-y-scroll scroll-smooth">
                                @if(!empty($headerData))
                                    @foreach ($headerData as $item)
                                        <a href="{{route('product.show', ['id' => $item->productID])}}" class="px-3 my-3 flex justify-between items-center space-x-2">
                                            <div>
                                                <img src="{{asset('images/product/'.$item->image)}}" class="w-14 h-14" alt="">
                                            </div>
                                            <div class="text-xs truncate px-2 text-left">
                                                <p class="truncate uppercase w-24">{{$item->name}}</p>
                                                <p class="text-red-400">{{number_format($item->price)}}đ</p>
                                                <p class="text-red-400">x{{$item->quantity}}</p>
                                            </div>
                                            <div class="text-xs text-neutral-14">
                                                <p>{{number_format((int)$item->price * $item->quantity)}}đ</p>
                                            </div>
                                        </a>
                                    @endforeach
                                @else
                                    <p>Chưa có sản phẩm nào được thêm vào giở hàng</p>
                                @endif
                            </div>
                            <a href="{{route('checkout')}}" class="bg-neutral-14 w-full flex  justify-center items-center px-3 py-3 text-white">
                                <p class="uppercase">Tiến hành THANH TOÁN</p>
                                {{-- <p class="ml-2 text-base">{{number_format($total)}}đ</p> --}}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="realtive  px-5 h-full flex items-center hover:cursor-pointer group">
                <a href=""> <i class="fa-solid fa-user text-neutral-14 text-xl"></i></a>
                <ul class="absolute hidden group-hover:block shadow top-16 right-5 w-48 py-5 px-5 divide-y-2 divide-neutral-14 backdrop-blur-lg">
                    <li class="py-2 hover:text-neutral-14"><a href="{{route('account',['id' => auth()->user()->id])}}">{{ auth()->user()->fullname }}</a></li>
                    <li class="py-2 hover:text-neutral-14"><a href="{{route('log.logout')}}">Đăng xuất</a></li>
                </ul>
                </div>
            </div>
        @else
            <div class="log">
                <a href="{{route('log.logIn')}}" class="text-neutral-14"><i class="fa-solid fa-right-to-bracket"></i> Đăng nhập</a>
                <span class="text-neutral-14">|</span>
                <a href="{{route('log.register')}}" class="text-neutral-14">Đăng ký</a>
            </div>
        @endauth

        <div class="navmobile  lg:hidden ml-3">
            <div class="icon-nav text-neutral-14 text-2xl cursor-pointer">
                <label for="nav__inputss" class="nav__barss cursor-pointer">
                    <i class="fa-solid fa-bars"></i>
                </label>
            </div>
            <input type="checkbox" hidden  class="nav__inputss z-50" name="" id="nav__inputss">
            <div class="tab-mobile hidden duration-300 translate-x-full fixed inset-0 bg-black/50 z-50">
                <div class="absolute top-0 right-0 bottom-0 bg-white w-84">
                    <div class="h-20 cursor-pointer flex justify-end items-center px-5 py-5  text-neutral-14 bg-[#FAAB78]/30">
                        <form action="" class="my-5 px-5 flex items-center justify-center relative" >
                            <input type="text" placeholder="Search......" name="" id="search" class=" pl-8 py-2 h-10 w-56 border-neutral-14 border-solid border-2 rounded-lg z-0 outline-neutral-14 active:border-neutral-14" >
                            <button class=" absolute left-0 bg-neutral-14 w-12 h-12 rounded-full  text-white font-bold text-base z-40">
                                <a href="" class="z-10"><i class="fa-solid fa-magnifying-glass "></i></a>
                            </button>
                            
                             @csrf
                        </form>
                        
                        <label for="nav__inputss" class="nav__bars cursor-pointer">
                            <i class="fa-solid fa-xmark text-3xl"></i>
                        </label>
                    </div>
                    <div class=" px-5 py-5 h-screen text-neutral-14 bg-[#FFDCA9]/30">
                        <ul class="flex flex-col justify-start font-mono divide-y-2 divide-neutral-14/30 gap-5 ">
                            <li class="text-neutral-14 hover:text-neutral-14 ">
                                <a href="{{route('home')}}" class=" group relative flex  items-center cursor-pointer">
                                    <span>Trang Chủ</span>
                                </a> 
                                
                            </li>
                            <li class="pt-5 hover:text-neutral-14 ">
                                <a href="{{route('home')}}" class=" group relative flex  items-center cursor-pointer">
                                    <span>Giới thiệu</span>
                                </a> 
                                
                            </li>
                            <li class="pt-5 ">
                                <a href="{{route('home')}}" class="hover:text-neutral-14 relative flex gap-2 items-center justify-between cursor-pointer">
                                    <span>Sản phẩm</span> 
                                    <label for="nav__inputs" class="nav__bars cursor-pointer">
                                        <i class="fa-solid fa-plus"></i>
                                    </label>
                                </a> 
                                <input type="checkbox" hidden class="nav__inputs" name="" id="nav__inputs">

                                <ul class="nav-fa_mobile w-full h-auto hidden shadow flex-col justify-start gap-1 ">
                                    <li class="pl-5  pt-2 relative group/menu">
                                        <a href="" class="flex justify-between items-center hover:text-neutral-14">
                                            <span>Sofa</span>
                                            <label for="nav__input" class="nav__bars cursor-pointer">
                                                <i class="fa-solid fa-plus"></i>
                                            </label>
                                            <label for="nav__input" class="nav__close hidden">
                                                <i class="fa-solid fa-minus"></i>
                                            </label>
                                        </a>
                                        <input type="checkbox" hidden class="nav__input" name="" id="nav__input">

                                        <ul class="nav-child_mobile w-full h-auto flex-col shadow justify-start gap-2 hidden">
                                            <li class="pl-5 hover:text-neutral-14">
                                                <a href="" class="flex justify-between items-center">Sofa giường</a>
                                            </li>
                                            <li class="pl-5 hover:text-neutral-14">
                                                <a href="" class="flex justify-between items-center">Sofa băng</a>
                                            </li>
                                            <li class="pl-5 hover:text-neutral-14">
                                                <a href="" class="flex justify-between items-center">Sofa đơn</a>
                                            </li>
                                            <li class="pl-5  hover:text-neutral-14">
                                                <a href="" class="flex justify-between items-center">Sofa đôi</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pl-5 pt-2  hover:text-neutral-14">
                                        <a href="" class="flex justify-between items-center">Ghế</a>
                                    </li>
                                    <li class="pl-5 pt-2 hover:text-neutral-14">
                                        <a href="" class="flex justify-between items-center">Trang trí</a>
                                    </li>
                                    <li class="pl-5 pt-2 hover:text-neutral-14">
                                        <a href="" class="flex justify-between items-center">Kệ sách</a>
                                    </li>
                                    <li class="pl-5 pt-2 hover:text-neutral-14">
                                        <a href="" class="flex justify-between items-center">Bàn</a>
                                    </li>
                                    <li class="pl-5 hover:text-neutral-14">
                                        <a href="" class="flex justify-between items-center">Tủ quần áo</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pt-5 hover:text-neutral-14 ">
                                <a href="{{route('home')}}" class=" group relative flex  items-center cursor-pointer">
                                    <span>Tin tức</span>
                                </a> 
                            </li>
                            <li class="pt-5 hover:text-neutral-14 ">
                                <a href="{{route('home')}}" class=" group relative flex  items-center cursor-pointer">
                                    <span>Liên hệ</span>
                                   
                                </a> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

   </div>
    
</header>
@extends('clients.layouts.page')

@section('slider')
    <div class="w-full h-full font-mono">
        <div class="slider relative">
            <img src="../images/bg_breadcrumb.jpg" alt="">
            <div class="absolute top-0 right-0 left-0 h-full flex flex-col justify-center items-center">
                <p class="text-2xl text-white font-medium">Hồ Sơ Cá Nhân</p>
               
            </div>
        </div>

        <div class="container">
            <div class="grid grid-cols-3 gap-5 my-5">
                <div class="mb-4 border-gray-200 grid justify-items-center grid-cols-1 content-center col-span-1">
                    <div class="flex justify-center items-center gap-5">
                        <img src="{{asset('images/avt.jpg')}}" class="w-32 h-32 rounded-full border border-neutral-14" alt="">
                        <div class="text-center">
                            <p class="uppercase font-bold text-xl my-2">Nguyễn Thế Sơn</p>
                            <button href="" id="id4" onclick="openTab('edit');tabList('id4')" class="text-neutral-14 openTab !border-none"><i class="fa-solid fa-pen-to-square"></i> Sửa thông tin</button>
                        </div>
                    </div>
                    <ul class="-mb-px text-sm font-medium text-center w-full my-5 grid gap-5">
                        <li class="mr-2 openTab border active hover:font-bold hover:text-neutral-14 " id="id1">
                            <button onclick="openTab('info'); tabList('id1')" class="inline-block p-4  rounded-t-lg " >Tài khoản của tôi</button>
                        </li>
                        <li class="mr-2 openTab border hover:font-bold hover:text-neutral-14 " id="id2">
                            <button onclick="openTab('cmt');tabList('id2')" class=" inline-block p-4  rounded-t-lg " >Đơn mua</button>
                        </li>
                        <li class="mr-2 openTab border hover:font-bold hover:text-neutral-14" id="id3">
                            <button onclick="openTab('address');tabList('id3')" class=" inline-block p-4  rounded-t-lg " >Sổ địa chỉ</button>
                        </li>
                        <li class="mr-2 openTab border hover:font-bold hover:text-neutral-14" id="id4">
                            <button onclick="openTab('changepassword');tabList('id4')" class=" inline-block p-4  rounded-t-lg " >Đổi mật khẩu</button>
                        </li>
                    </ul>
                </div>
                <div id="myTabContent " class="col-span-2">
                    <div class="hidden p-4 rounded-lg bg-gray-50 tab-content active w-full" id="info" >
                        <p class="text-sm text-gray-500 ">
                            Thông tin tài khoản
                        </p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 tab-content" id="cmt" >
                        <div class="divide-y">
                            <div  class="flex pb-3">
                                <span class="text-3xl"><i class="fa-solid fa-circle-user"></i> </span>
                                <div class="mx-3">
                                    <span class="font-bold hover:cursor-pointer">a</span>
                                    <p class="text-neutral-400 font-light text-sm">a</p>
                                    <p class="text-sm text-gray-600">a</p>
                                    <img src="{{asset('images/review/')}}" class="w-40 h-40" alt="">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 tab-content w-full" id="address" >
                        <p class="text-sm text-gray-500 ">
                            address
                        </p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 tab-content w-full" id="changepassword" >
                        <p class="text-xl text-center border-b pb-3 font-medium">Thay Đổi Mật Khẩu</p>
                       <form action="">
                            <div class="grid grid-cols-3 items-center gap-3 my-5 ">
                                <label for="" class="text-neutral-400 text-right">Mật khẩu cũ</label>
                                <input type="text" class="w-full text-sm border col-span-2 h-10 px-3 focus:outline-none" name="" id="">
                            </div>
                            <div class="grid grid-cols-3 items-center gap-3 my-5 ">
                                <label for="" class="text-neutral-400 text-right">Mật khẩu mới</label>
                                <input type="text" class="w-full text-sm border col-span-2 h-10 px-3 focus:outline-none" name="" id="">
                            </div>
                            <div class="grid grid-cols-3 items-center gap-3 my-7">
                                <label for="" class="text-neutral-400 text-right"></label>
                                <input type="submit" value="Đổi mật khẩu" class="w-40 border bg-neutral-14/95 text-white cursor-pointer hover:bg-neutral-14/70 col-span-2 rounded px-5 py-2 focus:outline-none" name="" id="">
                            </div>
                           
                       </form>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 tab-content w-full" id="edit" >
                        <div class="border-b pb-3">
                            <p class="text-xl font-medium">Hồ Sơ Của Tôi</p>
                            <p class="text-sm">Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
                        </div>

                        <form action="">
                            <div class="grid grid-cols-3 py-5 ">
                                <div class="px-3 flex flex-col justify-center items-center ">
                                    <div class="w-32 h-32 flex justify-center items-center rounded-full bg-neutral-15 mb-5">
                                       <p class="text-6xl text-neutral-300"> <i class="fa-regular fa-user"></i></p>
                                    </div>
                                    <input type="file" id="file" class="absolute hidden">
                                    <label for="file" class="px-4 py-2 text-sm bg-transparent border rounded-md cursor-pointer hover:bg-neutral-14/70 hover:text-white ">
                                        Chọn ảnh
                                    </label>
                                </div>
                                <div class="col-span-2 row-start-1 px-3 border-r-[1px]">
                                    <div class="grid grid-cols-3 items-center gap-3 my-3 ">
                                        <label for="" class="text-neutral-400 text-right">Tên đăng nhập</label>
                                        <input type="text" value="Nguyễn Thế Sơn" class="w-full text-sm border col-span-2 h-10 px-3 focus:outline-none" name="" id="">
                                    </div>

                                    <div class="grid grid-cols-3 items-center gap-3 my-3">
                                        <label for="" class="text-neutral-400 text-right">Email</label>
                                        <input type="text" value="ngtheson14@gmail.com" class="w-full text-sm border col-span-2 h-10 px-3 focus:outline-none" name="" id="">
                                    </div>

                                    <div class="grid grid-cols-3 items-center gap-3 my-3">
                                        <label for="" class="text-neutral-400 text-right">Ngày sinh</label>
                                        <div class="col-span-2 grid grid-cols-3 justify-center items-center gap-2 w-full">
                                            <input type="text" placeholder="Ngày" value="14" name="" id="" class="w-full h-10 px-3 border focus:outline-none ">
                                            <input type="text" placeholder="Tháng" value="1" name="" id="" class="w-full h-10 px-3 border focus:outline-none ">
                                            <input type="text" placeholder="Năm" value="2001" name="" id="" class="w-full h-10 px-3 border focus:outline-none ">
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 items-center gap-3 my-5">
                                        <label for="" class="text-neutral-400 text-right">Số điện thoại</label>
                                        <input type="text" value="0123456789" class="w-full text-sm border col-span-2 h-10 px-3 focus:outline-none" name="" id="">
                                    </div>

                                    <div class="grid grid-cols-3 items-center gap-3 my-5">
                                        <label for="" class="text-neutral-400 text-right">Địa chỉ</label>
                                        <input type="text" value="Quận 12, HCMC" class="w-full text-sm border col-span-2 h-10 px-3 focus:outline-none" name="" id="">
                                    </div>

                                    <div class="grid grid-cols-3 items-center gap-3 mt-7">
                                        <label for="" class="text-neutral-400 text-right"></label>
                                        <input type="submit" value="Lưu" class="w-20 border bg-neutral-14 text-white cursor-pointer hover:bg-neutral-14/70 col-span-2 h-10 px-3 focus:outline-none" name="" id="">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
@endsection
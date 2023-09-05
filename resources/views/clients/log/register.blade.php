@extends('clients.layouts.page')

@section('slider')
    <div class="w-full h-full font-mono">
        <div class="slider relative">
            <img src="../images/bg_breadcrumb.jpg" alt="">
            <div class="absolute top-0 right-0 left-0 h-full flex flex-col justify-center items-center">
                <p class="text-2xl text-white font-medium">ĐĂNG KÝ TÀI KHOẢN</p>
                <div>
                    <a href="{{route('home')}}" class="text-white font-medium hover:text-neutral-14">Trang chủ</a>
                    <span class="text-white font-bold mx-2 "><i class="fa-solid fa-angle-right"></i></span>
                    <span class="text-neutral-14">Đăng ký tài khoản</span>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center py-16 gap-12">
            <p class="uppercase text-3xl">Đăng ký tài khoản</p>
            <form action="{{route('log.registerUser')}}" method="post" class="font-mono flex flex-col justify-center items-center gap-5">
                <div class="flex flex-col">
                    <input type="text" class="border-[1px] border-neutral-500/50 px-3 py-3 w-96 outline-none focus:outline-none active:outline-none" name="name" id="name" placeholder="Họ và tên">
                    @error('name')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <input type="text" class="border-[1px] border-neutral-500/50 px-3 py-3 w-96 outline-none focus:outline-none active:outline-none" name="email" id="email" placeholder="Email">
                    @error('email')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <input type="text" class="border-[1px] border-neutral-500/50 px-3 py-3 w-96 outline-none focus:outline-none active:outline-none" name="numberphone" id="numberphone" placeholder="Số điện thoại">
                    @error('numberphone')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <input type="password" class="border-[1px] border-neutral-500/50 px-3 py-3 w-96 outline-none focus:outline-none active:outline-none" name="pass" id="pass" placeholder="Mật khẩu">
                    <div>
                        <input type="checkbox" name="pw" value="1" id="pw">
                        <span class="font-mono text-neutral-400">Hiện mật khẩu</span>
                    </div>
                    @error('pass')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror     
                </div>
                <button class="my-5 px-10 py-3 bg-neutral-14 rounded-md text-white font-medium hover:bg-orange-500/90">Đăng ký</button>
                <p class="text-neutral-400 tracking-tight font-bold font-mono text-sm">Nếu bạn đã có tài khoản, vui lòng đăng đăng nhập <a href="{{route('log.logIn')}}" class="hover:underline cursor-pointer hover:italic text-neutral-14">tại đây</a></p>

                @csrf
            </form>
        </div>
    </div>

    <script type="module">

        var checkboxHidden = document.querySelector('#pw');
        var inpPass = document.querySelector('#pass');

        checkboxHidden.onclick = function(e){
            if (this.checked){
                inpPass.setAttribute('type','text');
            }
            else{
                inpPass.setAttribute('type','password');
            }
        };

    </script>

@endsection
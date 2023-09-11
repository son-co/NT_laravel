@extends('clients.layouts.page')

@section('slider')
    <div class="w-full h-full font-libre">
        <div class="slider relative">
            <img src="../images/bg_breadcrumb.jpg" alt="">
            <div class="absolute top-0 right-0 left-0 h-full flex flex-col justify-center items-center">
                <p class="text-2xl text-white font-medium">Xác Nhận Đơn Hàng</p>
               
            </div>
        </div>

        <div class="container">
            <form action="{{route('order')}}" method="get">
                <div class="grid grid-cols-3 my-5 gap-5">
                    <div class="col-span-2 w-full bg-gray-50 py-5 px-3">
                        <p class="text-xl font-bold uppercase">Thông tin vận chuyển</p>

                        <div class="mt-3 grid grid-cols-2 gap-3">
                            <div class="flex flex-col">
                                <label for="" class="mb-2">Họ Tên</label>
                                <input type="text" name="name" value="{{$infoship[0]->fullname }}" class="w-full px-3 py-2 rounded border focus:outline-none">
                            </div>
                            <div class="flex flex-col">
                                <label for="" class="mb-2">Số Điện Thoại</label>
                                <input type="text" name="numberphone" value="{{$infoship[0]->phoneNumber }}" class="w-full px-3 py-2 rounded border focus:outline-none">
                            </div>
                        </div>
                        <div class="flex flex-col mt-3">
                            <label for="" class="mb-2">Địa chỉ</label>
                            <input type="text" name="shippingaddress" value="{{$infoship[0]->address }}" class="w-full px-3 py-2 rounded border focus:outline-none">
                        </div>

                        <div class="flex flex-col mt-3">
                            <label for="" class="mb-2">Ghi chú</label>
                            <textarea name="note" id="" rows="5" class="w-full px-3 py-2 rounded border focus:outline-none" placeholder="Content"></textarea>
                        </div>

                        <div class="flex justify-end mt-3">
                            <input type="submit" value="Đặt Hàng" class="w-32 cursor-pointer bg-neutral-14/80 text-white px-3 py-2 rounded border focus:outline-none">
                        </div>
                    </div>
                    <div class="bg-gray-100 py-5 px-3">
                        <p class="text-xl font-bold uppercase">Thông tin đơn hàng</p>

                        @if(!empty($data))
                            <div class="divide-y-[1px]">
                                @foreach ($data as $item)
                                    <a href="" class=" py-2 grid grid-cols-4 gap-3 justify-center items-center">
                                        <div class="col-span-1">
                                            <img src="{{asset('images/product/'.$item->image)}}" class="w-14 h-14" alt="">
                                        </div>
                                        <div class="text-xs truncate px-2 text-left col-span-2">
                                            <p class="truncate uppercase w-full font-bold text-stone-700">{{$item->name}}</p>
                                            <p class="text-red-400">{{$item->price}}</p>
                                            <p class="text-red-400">x{{$item->quantity}}</p>
                                        </div>
                                        <div class="text-xs text-neutral-14 col-span-1">
                                            <p>{{number_format((int)$item->price * $item->quantity)}}đ</p>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        @endif
                        <div class="border-t-2 mt-3 py-3 text-right px-3">
                            <span class="text-xl text-neutral-14">Tổng:</span>
                            <span class="text-xl text-neutral-14 ">{{number_format($total)}}đ</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
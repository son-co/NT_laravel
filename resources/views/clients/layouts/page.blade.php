<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  
  {{-- Link fontawesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

  {{-- Link swiper --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <script src="{{asset('js/style.js')}}" type="module"></script>
  <script src="{{asset('js/main.js')}}" ></script>

  {{-- <title> @yield('title')</title> --}}
</head>
<body>
    <div class="w-full h-16 shadow fixed top-0 left-0 right-0 bg-[#fbfbfb] z-[100]">
        @include('clients.blocks.header')
    </div>
    <section>
      @section('slider')@show
    </section>
    
    @include('clients.blocks.footer')
    
</body>
</html>
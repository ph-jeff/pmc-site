<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="img/logo_title.png" type="image/icon type">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- alphine -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

    {{-- css --}}
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/partnership.css">

    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    {{-- tailwind --}}
    {{-- @vite('resources/css/app.css') --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Top Navigation Bar -->
    <div class="h-full bg-danger">
        <div class="flex w-full h-8 justify-center items-center text-xs md:text-sm">
            <div class="sm:w-11/12 md:w-11/12 lg:w-9/12 flex justify-between gap-4 md:gap-0 lg:gap-0">
                <ul class="flex items-center gap-x-2 md:gap-x-3">
                    <li class="font-semibold text-[.7rem] text-white hidden sm:block md:block" >Stay connected</li>
                    <li ><a href=""><img class="h-3" src="img/icons/facebook.png" alt="icons"></a></li>
                    <li><a href=""><img class="h-3" src="img/icons/youtube.png" alt="icons"></a></li>
                </ul>
                <ul class="flex items-center gap-x-2 md:gap-0 lg:gap-0">
                    <div class="flex items-center gap-2">
                        <li><a href=""><img class="h-3" src="img/icons/email.png" alt="icons"></a></li>
                        <li class="font-semibold text-[.7rem] text-white mr-2 md:mr-5">hrad@philippians.ph</li>
                    </div>
                    <div class="flex items-center gap-2">
                        <li><a href=""><img class="h-3" src="img/icons/mobile.png" alt="icons"></a></li>
                        <li class="font-semibold text-[.7rem] text-white">0936 153 2369</li>
                    </div>
                    </ul>
            </div>
        </div>
    </div>
    <!-- Navigation Bar  -->
    <nav class="md:hidden h-full bg-black" x-data="{hamburger: false}">
        <div class="flex w-full h-20 justify-center items-center">
            <div class="w-11/12 md:w-11/12 lg:w-9/12 flex justify-between items-center">
                <span>
                    <a href=""><img class="" src="img/logo.png" alt="logo" ></a>
                </span>
                <button class="md:hidden" @click="hamburger = !hamburger " x-show="!hamburger">
                    <!-- button burger -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                
                <div class="z-50" x-cloak x-show="hamburger">
                    <!-- button x -->
                    <button class="md:hidden" @click="hamburger = false">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <ul class="flex flex-col w-full justify-center gap-1 text-center items-center bg-black absolute left-0 top-0 mt-28"  x-show="open">
                        <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold  " href="/"> Home </a></li>
                        <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/about"> About </a></li>
                        <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/team"> Team </a></li>
                        <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/news"> News </a></li>
                        <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/career"> Career </a></li>
                        <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/contact"> Contact </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    @yield('main')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
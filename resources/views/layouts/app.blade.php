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
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- alphine -->
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

    {{-- SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

    {{-- css --}}
    <link rel="stylesheet" href="css/home1.css">
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="css/team.css">
    <link rel="stylesheet" href="css/abouts.css">
    <link rel="stylesheet" href="css/partnership.css">
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles

</head>

<body class="relative" x-data="{
    seemore1: false,
    seemore2: false,
    seemore3: false,
    seemore4: false,
    seemore5: false,
    seemore6: false,
    show: false,
}">
    <!-- Top Navigation Bar -->
    <div class="h-full bg-danger">
        <div class="flex items-center justify-center w-full h-8 text-xs md:text-sm">
            <div class="flex justify-between gap-4 sm:w-11/12 md:w-11/12 lg:w-9/12 md:gap-0 lg:gap-0">
                <ul class="flex items-center gap-x-2 md:gap-x-3">
                    <li class="hidden font-semibold text-white sm:block md:block">Stay connected</li>
                    <li><a href="https://www.facebook.com/philippianmarketingcorporation.com.ph/"><img
                                class="hidden h-3 sm:block md:block" src="img/icons/facebook.png" alt="icons"></a>
                    </li>
                    <li><a href="https://www.youtube.com/@philippianmarketingcorpora4715"><img
                                class="hidden h-3 sm:block md:block" src="img/icons/youtube.png" alt="icons"></a>
                    </li>
                </ul>
                <ul class="flex items-center gap-x-2 md:gap-0 lg:gap-0">
                    <div class="flex items-center gap-2">
                        <li><a href=""><img class="h-3" src="img/icons/email.png" alt="icons"></a></li>
                        <li class="mr-2 font-semibold text-white md:mr-5">hrad@philippians.ph</li>
                    </div>
                    <div class="flex items-center gap-2">
                        <li><a href=""><img class="h-3" src="img/icons/mobile.png" alt="icons"></a></li>
                        <li class="font-semibold text-white">0936 153 2369</li>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    {{-- Sticky Navbar (Mobile View) --}}
    <nav class="relative sticky top-0 z-50 flex items-center justify-between w-full h-full bg-black md:hidden"
        x-data="{ hamburger: false }">
        <div class="flex items-center justify-center w-full h-20">
            <div class="flex items-center justify-between w-11/12 md:w-11/12 lg:w-9/12">
                <div x-cloak x-show="!hamburger">
                    <a class="" href="/">
                        <img class="" src="img/pmclogo.png" alt="logo">
                    </a>
                </div>
                <div class="absolute top-0 left-0 z-50 block w-full bg-black h-50vh md:hidden" x-cloak
                    x-show="hamburger">
                    <div class="flex justify-center">
                        <div class="flex items-center justify-between w-11/12 h-20 md:w-11/12 lg:w-9/12">
                            <div class="" x-cloak>
                                <a class="" href="/">
                                    <img class="" src="img/pmclogo.png" alt="logo">
                                </a>
                            </div>
                            <button class="float-right h-full md:hidden" @click="hamburger = false">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="white" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    {{-- <ul class="flex flex-col items-center content-center justify-center w-full pb-2 text-center ">
                        <li class="flex items-center justify-center w-full h-12 hover:bg-danger"><a class="text-base font-semibold text-white" href="/"> Home </a></li>
                        <li class="flex items-center justify-center w-full h-12 hover:bg-danger"><a class="text-base font-semibold text-white" href="/about"> About </a></li>
                        <li class="flex items-center justify-center w-full h-12 hover:bg-danger"><a class="text-base font-semibold text-white" href="/team"> Team </a></li>
                        <li class="flex items-center justify-center w-full h-12 hover:bg-danger"><a class="text-base font-semibold text-white" href="/news"> News </a></li>
                        <li class="flex items-center justify-center w-full h-12 hover:bg-danger"><a class="text-base font-semibold text-white" href="/career"> Career </a></li>
                        <li class="flex items-center justify-center w-full h-12 hover:bg-danger"><a class="text-base font-semibold text-white" href="/contact"> Contact </a></li>
                    </ul> --}}
                    <ul class="flex items-center gap-1 text-center">
                        <a class="text-base font-semibold text-white " href="/">
                            <li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> Home </li>
                        </a>
                        <a class="text-base font-semibold text-white" href="/about">
                            <li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> About </li>
                        </a>
                        <a class="text-base font-semibold text-white" href="/team">
                            <li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> Team </li>
                        </a>
                        <a class="text-base font-semibold text-white" href="/news">
                            <li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> News </li>
                        </a>
                        <a class="text-base font-semibold text-white" href="/career">
                            <li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> Career </li>
                        </a>
                        <a class="text-base font-semibold text-white" href="/contact">
                            <li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> Contact </li>
                        </a>
                    </ul>
                </div>
                <button class="float-right md:hidden " @click="hamburger = !hamburger " x-show="!hamburger">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="white" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    {{-- {{ $slot }} --}}

    @yield('main')
    <footer>
        <div class="flex justify-center w-full bg-cover h-36 md:h-52 bg-norepeat "
            style="background-image: url(img/footer-top.png)">
            <div class="w-11/12 mt-3 md:w-9/12 md:mt-10 ">
                <h1
                    class="text-2xl font-bold text-center text-transparent md:text-4xl bg-clip-text bg-gradient-to-r from-black via-red-900 to-red-800">
                    Get Notified</h1>
                <p class="mt-2 text-base text-center md:text-lg">Lorem ipsum dolor sit amet, consectetur</p>
                <div class="flex justify-center gap-2 mt-3">
                    <div class="w-40 h-8 md:h-11 md:w-60">
                        <input type="email" id="email" placeholder="Enter your email"
                            class="w-full h-full pl-2">
                    </div>
                    <div class="w-20 h-8 md:h-11 md:w-28">
                        <button type="submit" id="submit" onclick="myFunction()"
                            class="w-full h-full text-xl text-white bg-black font-bebas md:text-2xl hover:bg-danger">SUBSCRIBE</button>
                        <script>
                            function myFunction() {
                                var email = document.getElementById("email").value;
                                if (email == "") {
                                    Swal.fire(
                                        'Please enter something'
                                    )
                                } else {
                                    Swal.fire({
                                        position: 'center-center',
                                        icon: 'success',
                                        title: 'Subscribed!',
                                    })
                                    var email = document.getElementById("email").value = "";
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center w-full h-24 bg-cover md:h-32 bg-norepeat"
            style="background-image: url(img/footer-bottom.png)">
            <div class="w-11/12 opacity-75 md:w-9/12">
                <div class="flex items-end justify-center pb-2 border-b border-opacity-50 h-2/4 md:pb-3">
                    <ul class="flex gap-10 text-white ">
                        <li><a href="/" class="text-xs">Home</a></li>
                        <li><a href="" class="text-xs">Terms and Condition</a></li>
                        <li><a href="" class="text-xs">Privacy</a></li>
                    </ul>
                </div>
                <div class="pt-2 text-white h-2/4 md:pt-3">
                    <p class="text-xs text-center">Copyright @ 2023. Philippian Marketing Corporation. All Rights
                        Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
    @include('layouts.milestone-modal')
</body>

</html>

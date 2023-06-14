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
    <link rel="stylesheet" href="css/home1.css">
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="css/team.css">
    <link rel="stylesheet" href="css/abouts.css">
    <link rel="stylesheet" href="css/partnership.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @livewireStyles

</head>
<body class="relative" x-data="{
    seemore1: false,
    seemore2: false,
    seemore3: false,
    seemore4: false,
    seemore5: false,
    seemore6: false,
}">
    <!-- Top Navigation Bar -->
    <div class="h-full bg-danger">
        <div class="flex w-full h-8 justify-center items-center text-xs md:text-sm">
            <div class="sm:w-11/12 md:w-11/12 lg:w-9/12 flex justify-between gap-4 md:gap-0 lg:gap-0">
                <ul class="flex items-center gap-x-2 md:gap-x-3">
                    <li class="font-semibold text-white hidden sm:block md:block" >Stay connected</li>
                    <li ><a href="https://www.facebook.com/philippianmarketingcorporation.com.ph/"><img class="h-3 hidden sm:block md:block" src="img/icons/facebook.png" alt="icons"></a></li>
                    <li><a href="https://www.youtube.com/@philippianmarketingcorpora4715"><img class="h-3 hidden sm:block md:block" src="img/icons/youtube.png" alt="icons"></a></li>
                </ul>
                <ul class="flex items-center gap-x-2 md:gap-0 lg:gap-0">
                    <div class="flex items-center gap-2">
                        <li><a href=""><img class="h-3" src="img/icons/email.png" alt="icons"></a></li>
                        <li class="font-semibold text-white mr-2 md:mr-5">hrad@philippians.ph</li>
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
    <nav class="relative md:hidden w-full h-full sticky top-0 flex justify-between items-center bg-black z-50" x-data="{hamburger: false}" >
        <div class="flex w-full h-20 justify-center items-center">
            <div class="w-11/12 md:w-11/12 lg:w-9/12 flex justify-between items-center">
                <div  x-cloak x-show="!hamburger">
                    <a class="" href="/">
                        <img class="" src="img/pmclogo.png" alt="logo" >
                    </a>
                </div>
                <div class="absolute top-0 left-0 bg-black z-50 h-50vh block w-full md:hidden" x-cloak x-show="hamburger" >
                    <div class="flex justify-center" >
                        <div class="flex justify-between items-center h-20 w-11/12 md:w-11/12 lg:w-9/12">
                            <div class="" x-cloak >
                                <a class="" href="/">
                                    <img class="" src="img/pmclogo.png" alt="logo" >
                                </a>
                            </div>
                            <button class="h-full float-right md:hidden" @click="hamburger = false">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <ul class=" w-full text-center flex flex-col justify-center items-center content-center pb-2">        
                        <li class="h-12 w-full flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/"> Home </a></li>
                        <li class="h-12 w-full flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/about"> About </a></li>
                        <li class="h-12 w-full flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/team"> Team </a></li>
                        <li class="h-12 w-full flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/news"> News </a></li>
                        <li class="h-12 w-full flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/career"> Career </a></li>
                        <li class="h-12 w-full flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/contact"> Contact </a></li>
                    </ul>
                </div>
                <button class="float-right md:hidden " @click="hamburger = !hamburger " x-show="!hamburger" >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="white" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    
    @yield('main')

    <footer >
        <div class="h-36 md:h-52  w-full flex justify-center bg-cover bg-norepeat " style="background-image: url(img/footer-top.png)">
            <div class="w-11/12 md:w-9/12 mt-3 md:mt-10 ">
                <h1 class="text-2xl md:text-4xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-black via-red-900 to-red-800">Get Notified</h1>
                <p class="text-base md:text-lg text-center mt-2">Lorem ipsum dolor sit amet, consectetur</p>
                <div class="flex justify-center gap-2 mt-3">
                    <div class="h-8 md:h-11 w-40 md:w-60">
                        <input type="email" id="email" placeholder="Enter your email" class="h-full w-full pl-2">
                    </div>
                    <div class="h-8 md:h-11 w-20 md:w-28">
                        <button type="submit" id="submit" onclick="myFunction()" class="h-full w-full font-bebas bg-black text-white text-xl md:text-2xl hover:bg-danger">SUBSCRIBE</button>
                        <script>
                            function myFunction(){ 
                                var email = document.getElementById("email").value;
                                if(email == ""){
                                    Swal.fire(
                                        'Please enter something'
                                    )
                                }else{
                                        Swal.fire({
                                        position: 'center-center',
                                        icon: 'success',
                                        title: 'Subscribed!',
                                    })
                                    var email = document.getElementById("email").value="";
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-24 md:h-32 w-full flex justify-center bg-cover bg-norepeat" style="background-image: url(img/footer-bottom.png)">
            <div class="w-11/12 md:w-9/12 opacity-75">
                <div class="h-2/4 border-b border-opacity-50 flex justify-center items-end pb-2 md:pb-3">
                    <ul class="flex gap-10 text-white ">
                        <li><a href="/" class="text-xs">Home</a></li>
                        <li><a href="" class="text-xs">Terms and Condition</a></li>
                        <li><a href="" class="text-xs">Privacy</a></li>
                    </ul>
                </div >
                <div class="h-2/4 pt-2 md:pt-3 text-white">
                    <p class="text-center text-xs">Copyright @ 2023. Philippian Marketing Corporation. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ mix('js/app.js') }}"></script>
    @livewireScripts
    @include('layouts.milestone-modal')
</body>
</html>

           

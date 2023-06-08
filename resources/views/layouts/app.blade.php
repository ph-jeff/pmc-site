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
    <link rel="stylesheet" href="css/team.css">
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
    <div class="h-8 md:min-h-[33px] md:h-[5vh] w-full flex justify-center md:justify-around items-center md:gap-x-2 bg-danger">
        <div class=" flex w-[35%] md:w-[25%] ">
            <ul class="flex items-center gap-x-1 md:gap-x-3">
                <li class="font-semibold text-[.7rem] text-white" >Stay connected</li>
                <li ><a href=""><img class="h-4" src="img/icons/facebook.png" alt="icons"></a></li>
                <li><a href=""><img class="h-4" src="img/icons/youtube.png" alt="icons"></a></li>
            </ul>
        </div>
        <div class="flex w-[60%] md:w-[40%] justify-start md:justify-end">
            <ul class="flex items-center gap-x-1 md:gap-x-3">
                <li><a href=""><img class="h-4" src="img/icons/email.png" alt="icons"></a></li>
                <li class="font-semibold text-[.7rem] text-white mr-2 md:mr-5">hrad@philippians.ph</li>
                <li><a href=""><img class="h-4" src="img/icons/mobile.png" alt="icons"></a></li>
                <li class="font-semibold text-[.7rem] text-white">0936 153 2369</li>
            </ul>
        </div>
    </div>
    {{-- Sticky Navbar (Mobile View) --}}
    <nav class="relative md:hidden min-h-[10vh] sticky top-0 flex justify-between items-center px-2  bg-black z-50" x-data="{hamburger: false}" >
        <div class="h-full md:w-[20%] flex items-center" x-cloak x-show="!hamburger">
            <a class="" href="">
                <img class="" src="img/pmc_logo.png" alt="logo" >
            </a>
        </div>
        <div class="absolute top-0 left-0 bg-black z-50 h-50vh block w-full md:hidden" x-cloak x-show="hamburger" >
            <div class="h-[10vh] flex justify-between items-center " >
                <div class="h-full md:w-[20%] flex items-center pl-2" x-cloak >
                    <a class="" href="">
                        <img class="" src="img/pmc_logo.png" alt="logo" >
                    </a>
                </div>
                <button class="h-full float-right md:hidden pr-3 " @click="hamburger = false">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                </button>
            </div>
            <ul class="h-[80%] text-center">        
                <li class="p-3 px-5 hover:bg-[#860909]"><a class="text-white text-base font-semibold" href="/"> Home </a></li>
                <li class="p-3 px-5 hover:bg-[#860909]"><a class="text-white text-base font-semibold" href="/about"> About </a></li>
                <li class="p-3 px-5 hover:bg-[#860909]"><a class="text-white text-base font-semibold" href="/team"> Team </a></li>
                <li class="p-3 px-5 hover:bg-[#860909]"><a class="text-white text-base font-semibold" href="/news"> News </a></li>
                <li class="p-3 px-5 hover:bg-[#860909]"><a class="text-white text-base font-semibold" href="/career"> Career </a></li>
                <li class="p-3 px-5 hover:bg-[#860909]"><a class="text-white text-base font-semibold" href="/contact"> Contact </a></li>
            </ul>
        </div>
        <button class="float-right md:hidden pr-1 " @click="hamburger = !hamburger " x-show="!hamburger" >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="white" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </nav>
    {{-- Sticky messenger icon --}}
    {{-- <div class="w-[99%] md:min-h-[55px] h-[5vh] flex justify-end bottom-2 z-50 fixed bottom-0 rounded-full">
        <div class="w-[9%] md:w-[4%] bg-white flex items-center justify-center rounded-full drop-shadow-lg shadow-gray-300">
            <a href="" class="w-[90%] flex items-center justify-center m-5 bg-danger">
                <img src="img/icons/messenger.png" class="w-[75%]" alt="messenger">
            </a>
        </div>
    </div> --}}

    {{-- <div class="z-10 fixed bottom-0 right-0 p-4 h-24 w-24">
        <div class="rounded-full p-2 bg-white drop-shadow-lg">
			<img src="img/icons/messenger.png" class="w-[75%]" alt="messenger">
        </div>
    </div> --}}

    @yield('main')
    

    <!-- Footer -->
    {{-- <footer class="min-h-[150px] md:min-h-[350px] md:h-[60vh] bg-cover bg-norepeat" style="background-image: url(img/foot1.png)">
        <div class="h-[75px] md:h-[60%] pt-2 md:pt-0 ">
            <div class="h-[55%] ">
                <div class="h-[60%] flex justify-center items-end">
                    <h1 class=" font-montserrat font-bold text-xl md:text-3xl text-transparent bg-clip-text bg-gradient-to-r from-[#5E0505] to-[#9A0F0F]">
                        Get Notified
                    </h1>
                </div>
                <div class="h-[40%] w-full text-1lg flex justify-center items-center">
                    <p class="w-[90%] md:w-[60%] text-xs md:text-lg flex justify-center items-center ">Lorem ipsum dolor sit amet, consectetur adipiscing  </p>
                </div>
            </div>
            <!-- subscribe -->
            <div class="h-[45%] w-full text-1lg flex justify-center items-start md:pb-0 ">
                <div class="h-full md:h-[50%] w-[50%] md:w-[27%] flex justify-center gap-x-2 mt-2 md:mt-3 ">
                    <div class="h-full w-[65%]">
                        <input type="email" id="email" class="p-2 md:p-3 text-xs md:text-base h-full w-full flex justify-center items-center" placeholder="Enter your email">
                    </div>
                    <div class="h-full w-[35%] md:w-[35%] flex items-center bg-white ">
                        <button class="subscribe h-full w-full p-[9%] md:p-5 font-bebas bg-black text-sm md:text-2xl text-white flex justify-center items-center hover:bg-[#860909]" type="submit" id="submit" onclick="myFunction()">SUBSCRIBE</button>
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
                                        title: 'Sent!',
                                    })
                                    var email = document.getElementById("email").value="";
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-[75px] md:h-[40%] pt-3 md:pt-0">
            <div class="h-2/4 w-full flex justify-center ">
                <ul class="flex items-end mb-1 md:mb-3 gap-x-10 font-montserrat text-[.5rem] md:text-[.65rem] text-white">
                    <li><a href="/">Home</a></li>
                    <li><a href="">Terms and Condition</a></li>
                    <li><a href="">Privacy</a></li>
                </ul>
            </div>
            <div class="h-2/4 w-full flex justify-center">
                <div class="h-full w-[80%] flex justify-center border-t border-gray-300">
                    <p class="font-montserrat text-[.5rem] md:text-[.65rem] text-white mt-1 md:mt-3">Copyright @ 2021, Philippian Marketing Corporation. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer> --}}
    <footer >
        <div class="h-52 w-full bg-cover bg-norepeat" style="background-image: url(img/footer-top.png)">

        </div>
        <div class="h-32 w-full bg-cover bg-norepeat" style="background-image: url(img/footer-bottom.png)">

        </div>
    </footer>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
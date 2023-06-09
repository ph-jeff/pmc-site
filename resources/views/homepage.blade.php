@extends('layouts/app')
@section('title')
    Home
@endsection('title')

@section('main')
    <!-- Sticky Navigation Bar (Website View - career page) -->
    <!-- <nav class="hidden md:h-20 md:flex md:justify-around md:sticky md:top-0 md:z-50 md:bg-black">
        <div class="h-full w-[20%] flex items-center">
            <a href="">
                <img class="" src="img/pmc_logo.png" alt="logo" >
            </a>
        </div>
        <div class="w-[50%] flex items-center justify-end">
            <ul class="flex">
                <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold  " href="/"> Home </a></li>
                <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/about"> About </a></li>
                <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/team"> Team </a></li>
                <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/news"> News </a></li>
                <li class="p-3 px-5 bg-danger"><a class="text-white text-base font-semibold" href="/career"> Career </a></li>
                <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/contact"> Contact </a></li>
            </ul>
        </div>
    </nav> -->
    <!-- Navigation Bar  -->
    <nav class="hidden md:h-20 md:flex md:justify-around md:sticky md:top-0 md:z-50 md:bg-black">
        <div class="flex w-full h-20 justify-center items-center">
            <div class="w-11/12 md:w-11/12 lg:w-9/12 flex justify-between content-center">
                <div>
                    <a href="">
                        <img class="" src="img/logo.png" alt="logo" >
                    </a>
                </div>
                <ul class="flex gap-1 text-center items-center">
                    <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold  " href="/"> Home </a></li>
                    <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/about"> About </a></li>
                    <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/team"> Team </a></li>
                    <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/news"> News </a></li>
                    <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/career"> Career </a></li>
                    <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/contact"> Contact </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <!-- First Section (Get Started) -->
        <div class="imgSlider relative h-screen h-screen md:min-h-500px w-full flex justify-center items-start">
            <div class="relative h-full w-11/12 md:w-11/12 lg:w-9/12 flex montserrat text-center text-white">
                <div class="absolute mt-20 md:mt-20 w-full top-7">
                    <div class="h-12 md:h-12 flex items-end justify-center"> 
                        <h1 class=" font-bold tracking-wider text-4xl sm:text-5xl md:text-6xl">Insert Caption Here!</h1>
                    </div>
                    <div class="flex justify-center items-center font-montserrat mt-4 md:mt-6">
                        <div class=" w-full md:w-4/5 flex justify-center">
                            <p class=" flex justify-center text-md lg:text-xl font-montserrat font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="mt-3 h-1/4 md:h-1/4 w-full flex justify-center items-start">
                        <a href="/about" class="p-2.5 px-5 rounded bg-danger hover:bg-red-900 text-2xl font-bebas tracking-widest border-2 border-red-900 ">GET STARTED</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Second Section (Why Choose Us?) -->
        <div class="background-cover bg-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg');">
            <div class="w-full flex justify-center 	bg-white bg-opacity-75">
                <div class="w-11/12 md:w-11/12 lg:w-9/12">
                    <div class="flex flex-col justify-between content-center mb-6">
                        <div class="">
                            <div class="md:h-auto mt-8 flex justify-center">
                                <p class="font-montserrat font-bold text-2xl md:text-3xl lg:text-4xl text-transparent bg-clip-text bg-gradient-to-r from-red-900 via-red-800 to-red-500">
                                    Why Choose Us?
                                </p>
                            </div>
                            <div class="mt-2 md:mt-0 lg:mt-0 mb-6 md:mb-0 lg:mb-0 w-full font-normal text-lg flex justify-center item-center">
                                <p class=" text-lg md:text-xl leading-tight text-center flex items-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <div class="h-2/3 md:h-2/4 md:flex flex-col md:justify-around mt-0 md:mt-5 lg:mt-5">
                            <div class="w-full md:flex gap-x-14 mb-6">
                                <div class="md:h-auto w-full flex justify-center md:justify-end items-center w-2/3 shadow-md shadow-gray-200 flex rounded-lg p-4">
                                    <div class="h-full flex ">
                                        <div class="p-2">
                                            <div class="avatar aspect-square h-14 md:h-16 w-14 md:w-16 rounded-full bg-danger"></div>
                                        </div>
                                        <div class="h-auto w-full p-2 items-center">
                                            <h1 class="font-semibold text-16 md:text-lg tracking-wide text-danger">Title Here </h1>
                                            <p class="h-full md:text-base lg:text-lg text-justify text-black leading-tight md:leading-relaxed line-clamp-3 md:line-clamp-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. dolor sit amet, consectetur adipiscing adipiscing </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="md:h-auto w-full flex justify-center md:justify-end items-center w-2/3 shadow-md shadow-gray-200 flex rounded-lg p-4">
                                    <div class="h-auto flex ">
                                        <div class="h-full p-2">
                                            <div class="avatar aspect-square h-14 md:h-16 w-14 md:w-16 rounded-full bg-danger"></div>
                                        </div>
                                        <div class="h-full w-full p-2 items-center">
                                            <h1 class="font-semibold text-16 md:text-xl tracking-wide text-danger">Title Here </h1>
                                            <p class="h-full md:text-base lg:text-lg text-justify text-black leading-tight md:leading-relaxed line-clamp-3 md:line-clamp-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. dolor sit amet, consectetur adipiscing adipiscing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:flex gap-x-14 mb-5">
                                <div class="md:h-auto w-full flex justify-center md:justify-end items-center w-2/3 shadow-md shadow-gray-200 flex rounded-lg p-4">
                                    <div class="h-full flex ">
                                        <div class="p-2">
                                            <div class="avatar aspect-square h-14 md:h-16 w-14 md:w-16 rounded-full bg-danger"></div>
                                        </div>
                                        <div class="h-auto w-full p-2 items-center">
                                            <h1 class="font-semibold text-16 md:text-xl tracking-wide text-danger">Title Here </h1>
                                            <p class="h-full md:text-base lg:text-lg text-justify text-black leading-tight md:leading-relaxed line-clamp-3 md:line-clamp-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. dolor sit amet, consectetur adipiscing adipiscing </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="md:h-auto w-full flex justify-center md:justify-end items-center w-2/3 shadow-md shadow-gray-200 flex rounded-lg p-4">
                                    <div class="h-auto flex ">
                                        <div class="h-full p-2">
                                            <div class="avatar aspect-square h-14 md:h-16 w-14 md:w-16 rounded-full bg-danger"></div>
                                        </div>
                                        <div class="h-full w-full p-2 items-center">
                                            <h1 class="font-semibold text-16 md:text-xl tracking-wide text-danger">Title Here </h1>
                                            <p class="h-full md:text-base lg:text-lg text-justify text-black leading-tight md:leading-relaxed line-clamp-3 md:line-clamp-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. dolor sit amet, consectetur adipiscing adipiscing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border-gray-100 border-opacity-75">

            <!-- Third Section (Latest News) -->
            <div class="w-full flex justify-center 	bg-white bg-opacity-75">
                <div class="w-11/12 md:w-11/12 lg:w-9/12">
                    <div class="flex flex-col justify-between content-center">
                        <div>
                            <div class="md:h-auto mt-8 flex justify-center">
                                <p class="font-montserrat font-bold text-2xl md:text-3xl lg:text-4xl text-transparent bg-clip-text bg-gradient-to-r from-red-900 via-red-800 to-red-500">
                                    Latest News
                                </p>
                            </div>
                            <div class="mt-2 md:mt-0 lg:mt-0 mb-6 md:mb-0 lg:mb-0 w-full font-normal text-lg flex justify-center item-center">
                                <p class=" text-lg md:text-xl leading-tight text-center flex items-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <!-- Cards -->
                        <div class="h-2/3 md:h-2/4 w-full md:flex md:justify-around md:items-center md:gap-x-12 mt-0 md:mt-5 lg:mt-5">
                        
                            <div class="w-full h-full  md:flex gap-x-14 mb-6">
                                <div class="h-auto lg:h-auto lg:w-auto mt-5  w-full  rounded-2xl shadow-lg shadow-gray-200" >
                                <!-- IMAGE HERE -->
                                    <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                                        <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news1.png" alt="" srcset="">
                                    </div>
                                    <p class="text-base lg:text-xl text-red-800 font-montserrat ml-2 mt-2">Title Here</p>
                                    <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 text-base">
                                        <button class="border text-white bg-black h-8 md:h-10 w-24 md:w-32 rounded-md hover:bg-danger">Read More</button>
                                    </div>
                                </div>
                                <div class="h-auto lg:h-auto lg:w-auto mt-5  w-full  rounded-2xl shadow-lg shadow-gray-200" >
                                <!-- IMAGE HERE -->
                                    <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                                        <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news1.png" alt="" srcset="">
                                    </div>
                                    <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 mt-2">Title Here</p>
                                    <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 text-base">
                                        <button class="border text-white bg-black h-8 md:h-10 w-24 md:w-32 rounded-md hover:bg-danger">Read More</button>
                                    </div>
                                </div>
                                <div class="h-auto lg:h-auto lg:w-auto mt-5  w-full  rounded-2xl shadow-lg shadow-gray-200" >
                                <!-- IMAGE HERE -->
                                    <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                                        <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover" src="img/news/news1.png" alt="" srcset="">
                                    </div>
                                    <div class="h-auto">
                                        <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 mt-2">Title Here</p>
                                        <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        <div class="w-full flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 text-base">
                                            <button class="border text-white bg-black h-8 md:h-10 w-24 md:w-32 rounded-md hover:bg-danger">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="h-[90%] md:h-[80%] w-full md:w-1/4 flex justify-center items-center mb-2 md:mb-0">
                                <div class="h-full md:h-auto w-3/5 md:w-full rounded-lg border-2">
                                    <div class="relative pb-[40%] md:pb-[70%]">
                                        <img src="img/news/news2.png" class="absolute h-full w-full object-cover md:rounded-t-lg" alt=" picture ">
                                    </div>
                                    <div class="h-[45%] mx-3 ">
                                        <div class="h-[20%] flex items-end pt-1 md:pt-0">
                                            <h1 class=" md:mt-2 text-lg tracking-wide text-[#860909]">Title Here</h1>
                                        </div>
                                        <div class="h-[50%] flex md:items-center">
                                            <p class="font-montserrat text-small font-medium text-justify md:leading-loose md:mt-2 md:line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                        <div class="h-[30%] flex justify-start pt-1 pb-1 md:pt-1 md:pb-1 md:mb-3 md:mt-1 md:pt-0 md:justify-center items-center ">
                                            <a href="/home-news" class="font-montserrat h-[55%] btn rounded text-xs bg-black text-white p-2 px-4 hover:bg-[#860909]"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="h-[90%] md:h-[80%] w-full md:w-1/4 flex justify-center items-center mb-2 md:mb-0">
                                <div class="h-full md:h-auto w-[90%] md:w-full rounded-lg border-2">
                                    <div class="relative pb-[40%] md:pb-[70%]">
                                        <img src="img/news/news2.png" class="absolute h-full w-full object-cover md:rounded-t-lg" alt=" picture ">
                                    </div>
                                    <div class="h-[45%] mx-3 ">
                                        <div class="h-[20%] flex items-end pt-1 md:pt-0">
                                            <h1 class=" md:mt-2 text-lg tracking-wide text-[#860909]">Title Here</h1>
                                        </div>
                                        <div class="h-[50%] flex md:items-center">
                                            <p class="font-montserrat text-small font-medium text-justify md:leading-loose md:mt-2 md:line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                        <div class="h-[30%] flex justify-start pt-1 pb-1 md:pt-1 md:pb-1 md:mb-3 md:mt-1 md:pt-0 md:justify-center items-center ">
                                            <a href="/home-news" class="font-montserrat h-[55%] btn rounded text-xs bg-black text-white p-2 px-4 hover:bg-[#860909]"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-[90%] md:h-[80%] w-full md:w-1/4 flex justify-center  items-center">
                                <div class="h-full md:h-auto w-[90%] md:w-full rounded-lg border-2">
                                    <div class="relative pb-[40%] md:pb-[70%]">
                                        <img src="img/news/news3.png" class="absolute h-full w-full object-cover md:rounded-t-lg" alt=" picture ">
                                    </div>
                                    <div class="h-[45%] mx-3 ">
                                        <div class="h-[20%] flex items-end pt-1 md:pt-0">
                                            <h1 class=" md:mt-2 text-lg tracking-wide text-[#860909]">Title Here</h1>
                                        </div>
                                        <div class="h-[50%] flex md:items-center">
                                            <p class="font-montserrat text-small font-medium text-justify md:leading-loose md:mt-2 md:line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                        <div class="h-[30%] flex justify-start pt-1 pb-1 md:pt-1 md:pb-1 md:mb-3 md:mt-1 md:pt-0 md:justify-center items-center ">
                                            <a href="/home-news" class="font-montserrat h-[55%] btn rounded text-xs bg-black text-white p-2 px-4 hover:bg-[#860909]"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- See More Button -->
                        <!-- <div class="md:h-1/6 w-full flex justify-center items-start mb-4 md:mt-5 md:mb-0 ">
                            <a href="/news" class=" p-1 md:p-0 font-montserrat text-sm h-full md:h-[39%] w-[25%] md:w-[13%] flex justify-center items-center md:rounded outline outline-1 text-gray-700 font-semibold hover:bg-[#860909] hover:text-white mt-4 md:mt-0">See More</a>
                        </div> -->
                    </div>

                    </div>
                    
                    <!-- Fourth Section (Partnership) -->
                    <div class="md:min-h-[300px] md:h-[50vh] bg-white/[75%]">
                        <div class="h-2/4  w-full pt-3 pb-3 md:pt-3 md:pb-0">
                            <div class="h-full md:h-full ">
                                <div class="h-[50%] md:h-2/4 flex justify-center items-end ">
                                    <h1 class="font-montserrat font-bold text-[1.3rem] md:text-4xl text-transparent bg-clip-text bg-gradient-to-r from-[#5E0505] to-[#9A0F0F]">
                                        Partnership
                                    </h1>
                                </div>
                                <div class="h-[50%] md:h-2/4 w-full font-normal text-lg flex justify-center m-auto items-start">
                                    <p class="w-[80%] md:w-[60%] text-[1rem] md:text-xl leading-tight text-center flex justify-center items-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                        <!-- Logos -->
                        <div class="h-2/4 md:h-2/4 flex justify-center">
                            {{-- website view (partnership) --}}
                            <div class="hidden md:block md:h-5/6 md:w-full md:flex md:justify-center">
                                <div class="h-full flex items-center justify-center transition ease-in-out delay-150 grayscale hover:grayscale-0 hover:-translate-y-1 hover:scale-125 duration-300">
                                    <img src="img/partnership/partnership1.png" alt="1" class="w-2/6">
                                </div>
                                <div class="h-full flex items-center justify-center transition ease-in-out delay-150 grayscale hover:grayscale-0  hover:-translate-y-1 hover:scale-125 duration-300">
                                    <img src="img/partnership/partnership2.png" alt="2" class="w-[75%]">
                                </div>
                                <div class=" w-[10%] h-full flex items-center justify-center transition ease-in-out delay-150 grayscale hover:grayscale-0 hover:-translate-y-1 hover:scale-125 duration-300">
                                    <img src="img/partnership/galatians.png" alt="1" class="w-[50%]">
                                </div>
                                <div class="h-full flex items-center justify-end transition ease-in-out delay-150 grayscale hover:grayscale-0  hover:-translate-y-1 hover:scale-125 duration-300">
                                    <img src="img/partnership/partnership3.png" alt="3" class="w-[75%]">
                                </div>
                                <div class="h-full flex items-center justify-center transition ease-in-out delay-150 grayscale hover:grayscale-0  hover:-translate-y-1 hover:scale-125 duration-300">
                                    <img src="img/partnership/partnership7.png" alt="7" class=" w-[30%]">
                                </div>
                                <div class="h-full flex items-center justify-start transition ease-in-out delay-150 grayscale hover:grayscale-0  hover:-translate-y-1 hover:scale-125 duration-300">
                                    <img src="img/partnership/partnership5.png" alt="5" class="w-[70%]">
                                </div>
                                <div class=" w-[10%] h-full flex items-center justify-center transition ease-in-out delay-150 grayscale hover:grayscale-0 hover:-translate-y-1 hover:scale-125 duration-300">
                                    <img src="img/partnership/j&t.png" alt="1" class="w-[80%]">
                                </div>
                                <div class="h-full flex items-center justify-center transition ease-in-out delay-150 grayscale hover:grayscale-0  hover:-translate-y-1 hover:scale-125 duration-300">
                                    <img src="img/partnership/partnership4.png" alt="4" class="w-2/4">
                                </div>
                                
                                <div class="h-full flex items-center justify-center transition ease-in-out delay-150 grayscale hover:grayscale-0  hover:-translate-y-1 hover:scale-125 duration-300">
                                    <img src="img/partnership/partnership6.png" alt="6" class="w-[32%]">
                                </div>
                            </div>
                            {{-- mobile view (partneship) --}}
                            <div class="block md:hidden w-full">
                                <div class="article">
                                    <div class="wrapper ">
                                    <ul class="marquee">
                                        <li class="flex justify-center items-center"><img src="img/partnership/partnership1.png" alt="1" class="w-2/6"></li>
                                        <li class="flex justify-center items-center"><img src="img/partnership/partnership2.png" alt="2" class="w-[75%]"></li>
                                        <li class="flex justify-center items-center"><img src="img/partnership/galatians.png" alt="1" class="w-[50%]"></li>
                                        <li class="flex justify-center items-center"><img src="img/partnership/partnership3.png" alt="3" class="w-[75%]"></li>
                                        <li class="flex justify-center items-center"><img src="img/partnership/partnership7.png" alt="7" class=" w-[30%]"></li>
                                        <li class="flex justify-center items-center"><img src="img/partnership/partnership5.png" alt="5" class="w-[70%]"></li>
                                        <li class="flex justify-center items-center"><img src="img/partnership/j&t.png" alt="1" class="w-[80%]"></li>
                                        <li class="flex justify-center items-center"><img src="img/partnership/partnership4.png" alt="4" class="w-2/4"></li>
                                        <li class="flex justify-center items-center"><img src="img/partnership/partnership6.png" alt="6" class="w-[32%]"></li>
                                    </ul>
                                    <ul class="marquee2">
                                        <li class="flex justify-center items-center"><img src="img/partnership/partnership1.png" alt="1" class="w-2/6"></li>
                                        <li class="flex justify-center items-center"><img src="img/partnership/partnership2.png" alt="2" class="w-[75%]"></li>
                                        <li class="flex justify-center items-center"><img src="img/partnership/galatians.png" alt="1" class="w-[50%]"></li>
                                        <li class="flex justify-center items-center"><img src="img/partnership/partnership3.png" alt="3" class="w-[75%]"></li>
                                        <li class="flex justify-center items-center"><img src="img/partnership/partnership7.png" alt="7" class=" w-[30%]"></li>
                                        <li class="flex justify-center items-center"><img src="img/partnership/partnership5.png" alt="5" class="w-[70%]"></li>
                                        <li class="flex justify-center items-center"><img src="img/partnership/j&t.png" alt="1" class="w-[80%]"></li>
                                        <li class="flex justify-center items-center"><img src="img/partnership/partnership4.png" alt="4" class="w-2/4"></li>
                                        <li class="flex justify-center items-center"><img src="img/partnership/partnership6.png" alt="6" class="w-[32%]"></li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            
        <!-- </div> -->
    </main>
@endsection('main')
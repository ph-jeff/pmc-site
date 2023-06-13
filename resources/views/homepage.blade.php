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
                    <a href="/">
                        <img class="" src="img/pmclogo.png" alt="logo" >
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
                <div class="absolute mt-32 md:mt-32 w-full top-8">
                    <div class="h-12 md:h-12 flex items-end justify-center"> 
                        <h1 class=" font-bold tracking-wider text-3xl md:text-6xl">Insert Caption Here!</h1>
                    </div>
                    <div class="flex justify-center items-center font-montserrat mt-4 md:mt-6">
                        <div class=" w-full md:w-4/5 flex justify-center">
                            <p class=" flex justify-center text-md md:text-1xl font-montserrat font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="mt-3 h-1/4 md:h-1/4 w-full flex justify-center items-start">
                        <a href="/about" class="p-2.5 px-5 rounded bg-danger hover:bg-red-900 font-bebas tracking-widest border-2 border-red-900 text-lg md:text-2xl">GET STARTED</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Second Section (Why Choose Us?) -->
        <div class="bg-image background-cover bg-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg');">
            <div class="w-full flex justify-center bg-white bg-opacity-75">
                <div class="w-11/12 md:w-11/12 lg:w-9/12">
                    <div class="flex flex-col justify-between content-center mb-10">
                        <div class="mb-5">
                            <div class="md:h-auto mt-8 flex justify-center">
                                <p class="font-montserrat font-bold text-2xl md:text-3xl lg:text-4xl text-transparent bg-clip-text bg-gradient-to-r from-red-900 via-red-800 to-red-500">
                                    Why Choose Us?
                                </p>
                            </div>
                            <div class="mt-2 md:mt-0 lg:mt-0 mb-6 md:mb-0 lg:mb-0 w-full font-normal text-lg flex justify-center item-center">
                                <p class="text-lg md:text-xl leading-tight text-center flex items-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <!-- Why choose us box -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-4 md:gap-y-5">
                            <!-- Card 1 -->
                            <div class="bg-white bg-opacity-50 shadow-md shadow-gray-200 rounded-lg p-6 flex">
                                <div class="mr-5">
                                    <div class="avatar aspect-square h-14 md:h-16 w-14 md:w-16 rounded-full bg-danger"></div>
                                </div>
                                <div class="flex-grow">
                                    <p class="text-lg md:text-xl text-red-800 tracking-wide">Title Here </p>
                                    <p class="h-full md:text-base lg:text-lg text-justify text-black leading-tight md:leading-relaxed line-clamp-3 md:line-clamp-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. dolor sit amet, consectetur adipiscing adipiscing </p>
                                </div>
                            </div>
                            <div class="bg-white bg-opacity-50 shadow-md shadow-gray-200 rounded-lg p-6 flex">
                                <div class="mr-5">
                                    <div class="avatar aspect-square h-14 md:h-16 w-14 md:w-16 rounded-full bg-danger"></div>
                                </div>
                                <div class="flex-grow">
                                    <p class="text-lg md:text-xl text-red-800 tracking-wide">Title Here </p>
                                    <p class="h-full md:text-base lg:text-lg text-justify text-black leading-tight md:leading-relaxed line-clamp-3 md:line-clamp-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. dolor sit amet, consectetur adipiscing adipiscing </p>
                                </div>
                            </div>
                            <div class="bg-white bg-opacity-50 shadow-md shadow-gray-200 rounded-lg p-6 flex">
                                <div class="mr-5">
                                    <div class="avatar aspect-square h-14 md:h-16 w-14 md:w-16 rounded-full bg-danger"></div>
                                </div>
                                <div class="flex-grow">
                                    <p class="text-lg md:text-xl text-red-800 tracking-wide">Title Here </p>
                                    <p class="h-full md:text-base lg:text-lg text-justify text-black leading-tight md:leading-relaxed line-clamp-3 md:line-clamp-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. dolor sit amet, consectetur adipiscing adipiscing </p>
                                </div>
                            </div>
                            <div class="bg-white bg-opacity-50 shadow-md shadow-gray-200 rounded-lg p-6 flex">
                                <div class="mr-5">
                                    <div class="avatar aspect-square h-14 md:h-16 w-14 md:w-16 rounded-full bg-danger"></div>
                                </div>
                                <div class="flex-grow">
                                    <p class="text-lg md:text-xl text-red-800 tracking-wide">Title Here </p>
                                    <p class="h-full md:text-base lg:text-lg text-justify text-black leading-tight md:leading-relaxed line-clamp-3 md:line-clamp-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. dolor sit amet, consectetur adipiscing adipiscing </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border-gray-100 border-opacity-75">

            <!-- Third Section (Latest News) -->
            <div class="w-full flex justify-center	bg-white bg-opacity-75">
                <div class="w-11/12 md:w-11/12 lg:w-9/12">
                    <div class="flex flex-col justify-between content-center mb-6">
                        <div class="mb-8 mt-8">
                            <div class="md:h-auto flex justify-center">
                                <p class="font-montserrat font-bold text-2xl md:text-3xl lg:text-4xl text-transparent bg-clip-text bg-gradient-to-r from-red-900 via-red-800 to-red-500">
                                    Latest News
                                </p>
                            </div>
                            <div class="mt-2 md:mt-0 lg:mt-0 mb-6 md:mb-0 lg:mb-0 w-full font-normal text-lg flex justify-center item-center">
                                <p class=" text-lg md:text-xl leading-tight text-center flex items-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <!-- Cards -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                            <!-- Card 1 -->
                            <div class="bg-white shadow-md rounded-lg flex flex-col">
                                <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                                    <img class="rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news1.png" alt="" srcset="">
                                </div>
                                <div class="p-3 text-justify font-montserrat">
                                    <p class="text-lg lg:text-xl text-red-800 font-montserrat">Title Here</p>
                                    <p class="text-base md:text-lg ">Long Text Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                </div>
                                <div class="mt-auto flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 text-sm md:text-base">
                                    <button class="border text-white bg-black mb-2 p-2  w-28 md:w-32 rounded-md hover:bg-danger">Read More</button>
                                </div>
                            </div>
                          
                            <!-- Card 2 -->
                            <div class="bg-white shadow-md rounded-lg flex flex-col">
                                <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                                    <img class="rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news2.png" alt="" srcset="">
                                </div>
                                <div class="p-3 text-justify font-montserrat">
                                    <p class="text-lg lg:text-xl text-red-800 font-montserrat">Title Here</p>
                                    <p class="text-base md:text-lg ">Long Text Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
                                </div>
                                <div class="mt-auto flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 text-sm md:text-base">
                                    <button class="border text-white bg-black mb-2 p-2  w-28 md:w-32 rounded-md hover:bg-danger">Read More</button>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="bg-white shadow-md rounded-lg flex flex-col">
                                <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                                    <img class="rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news3.png" alt="" srcset="">
                                </div>
                                <div class="p-3 text-justify font-montserrat">
                                    <p class="text-lg lg:text-xl text-red-800 font-montserrat">Title Here</p>
                                    <p class="text-base md:text-lg ">Long Text Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
                                </div>
                                <div class="mt-auto flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 text-sm md:text-base">
                                    <button class="border text-white bg-black mb-2 p-2  w-28 md:w-32 rounded-md hover:bg-danger">Read More</button>
                                </div>
                            </div>
                        </div>
                          
                        <div class="flex justify-center mt-6">
                            <button class="border border-gray-800 mt-2 mb-2 h-12 md:h-12 w-32 sm:w-36 md:w-40 rounded-md hover:bg-danger hover:text-white font-medium">See More</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border-gray-100 border-opacity-75">

            <!-- Fourth Section (Partnership) -->
            <div class="w-full flex justify-center bg-white bg-opacity-75">
                <div class="w-11/12 md:w-11/12 lg:w-9/12">
                    <div class="flex flex-col justify-between content-center">
                        <div>
                            <div class="md:h-auto mt-8 flex justify-center">
                                <p class="font-montserrat font-bold text-2xl md:text-3xl lg:text-4xl text-transparent bg-clip-text bg-gradient-to-r from-red-900 via-red-800 to-red-500">
                                    Partnership
                                </p>
                            </div>
                            <div class="mt-2 md:mt-0 lg:mt-0 mb-6 md:mb-0 lg:mb-0 w-full font-normal text-lg flex justify-center item-center">
                                <p class=" text-lg md:text-xl leading-tight text-center flex items-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>      
                        
                        <!-- Logos --> 
                        <div class="hidden md:block partnership my-10">
                            {{-- website view (partnership) --}}
                            <div class="flex justify-between gap-5 items-center">
                                <div>
                                    <img src="img/partnerships/partnership1.png" alt="1" class="w-12">
                                </div>
                                <div>
                                    <img src="img/partnerships/partnership2.png" alt="1" class="w-24">
                                </div>
                                <div>
                                    <img src="img/partnerships/galatians.png" alt="1" class="w-14">
                                </div>
                                <div>
                                    <img src="img/partnerships/partnership3.png" alt="1" class="w-24">
                                </div>
                                <div>
                                    <img src="img/partnerships/partnership7.png" alt="1" class="w-12">
                                </div>
                                <div>
                                    <img src="img/partnerships/partnership5.png" alt="1" class="w-28">
                                </div>
                                <div>
                                    <img src="img/partnerships/j&t.png" alt="1" class="w-24">
                                </div>
                                <div>
                                    <img src="img/partnerships/partnership4.png" alt="1" class="w-16">
                                </div>
                                <div>
                                    <img src="img/partnerships/partnership6.png" alt="1" class="w-12">
                                </div>
                            </div>
                        </div>
                        {{-- mobile view (partnership) --}}
                        <div class="md:hidden block -mt-6">
                            <div class="article">
                                <div class="wrapper">
                                    <ul class="marquee marquee flex justify-between items-center gap-3 items-center">
                                        <li>
                                            <img src="img/partnership/partnership1.png" alt="1" class="big-img">
                                        </li>
                                        <li>
                                            <img src="img/partnerships/partnership2.png" alt="2" class="small-img">
                                        </li>
                                        <li>
                                            <img src="img/partnerships/galatians.png" alt="1" class="big-img">
                                        </li>
                                        <li>
                                            <img src="img/partnerships/partnership3.png" alt="3" class="small-img">
                                        </li>
                                        <li>
                                            <img src="img/partnerships/partnership7.png" alt="7" class="big-img">
                                        </li>
                                        <li>
                                            <img src="img/partnerships/partnership5.png" alt="5" class="small-img">
                                        </li>
                                        <li>
                                            <img src="img/partnerships/j&t.png" alt="1" class="small-img">
                                        </li>
                                        <li class="-mr-5">
                                            <img src="img/partnerships/partnership4.png" alt="4" class="middle-img">
                                        </li>
                                        <li>
                                            <img src="img/partnerships/partnership6.png" alt="6" class="big-img">
                                        </li>
                                    </ul>
                                    <ul class="marquee2 marquee flex justify-between items-center gap-3 items-center">
                                        <li>
                                            <img src="img/partnership/partnership1.png" alt="1" class="big-img">
                                        </li>
                                        <li>
                                            <img src="img/partnerships/partnership2.png" alt="2" class="small-img">
                                        </li>
                                        <li>
                                            <img src="img/partnerships/galatians.png" alt="1" class="big-img">
                                        </li>
                                        <li>
                                            <img src="img/partnerships/partnership3.png" alt="3" class="small-img">
                                        </li>
                                        <li>
                                            <img src="img/partnerships/partnership7.png" alt="7" class="big-img">
                                        </li>
                                        <li>
                                            <img src="img/partnerships/partnership5.png" alt="5" class="small-img">
                                        </li>
                                        <li>
                                            <img src="img/partnerships/j&t.png" alt="1" class="small-img">
                                        </li>
                                        <li class="-mr-5">
                                            <img src="img/partnerships/partnership4.png" alt="4" class="middle-img">
                                        </li>
                                        <li>
                                            <img src="img/partnerships/partnership6.png" alt="6" class="big-img">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection('main')
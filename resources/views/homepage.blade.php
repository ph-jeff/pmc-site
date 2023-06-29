@extends('layouts/app')
@section('title')
    Home
@endsection('title')

@section('main')
    <!-- Sticky Navigation Bar (Website View - career page) -->
    <nav class="hidden md:h-20 md:flex md:justify-around md:sticky md:top-0 md:z-50 md:bg-black">
        <div class="flex items-center justify-center w-full h-20">
            <div class="flex content-center justify-between w-11/12 md:w-11/12 lg:w-9/12">
                <div>
                    <a href="/">
                        <img class="" src="img/pmclogo.png" alt="logo" >
                    </a>
                </div>
                <ul class="flex items-center gap-1 text-center">
                    <a class="text-base font-semibold text-white " href="/"><li class="flex items-center justify-center w-20 h-12 bg-danger"> Home </li></a>
                    <a class="text-base font-semibold text-white" href="/about"><li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> About </li></a>
                    <a class="text-base font-semibold text-white" href="/team"><li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> Team </li></a>
                    <a class="text-base font-semibold text-white" href="/news"><li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> News </li></a>
                    <a class="text-base font-semibold text-white" href="/career"><li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> Career </li></a>
                    <a class="text-base font-semibold text-white" href="/contact"><li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> Contact </li></a>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <!-- First Section (Get Started) -->
        <div class="relative flex items-start justify-center w-full h-screen imgSlider md:min-h-500px">
            <div class="relative flex w-11/12 h-full text-center text-white md:w-11/12 lg:w-9/12 montserrat">
                <div class="absolute w-full mt-32 md:mt-32 top-8">
                    <div class="flex items-end justify-center h-12 md:h-12">
                        <h1 class="text-3xl font-bold tracking-wider md:text-6xl">Insert Caption Here!</h1>
                    </div>
                    <div class="flex items-center justify-center mt-4 font-montserrat md:mt-6">
                        <div class="flex justify-center w-full md:w-4/5">
                            <p class="flex justify-center font-light text-md md:text-1xl font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="flex items-start justify-center w-full mt-3 h-1/4 md:h-1/4">
                        <a href="/about" class="p-2.5 px-5 rounded bg-danger hover:bg-red-900 font-bebas tracking-widest border-2 border-red-900 text-lg md:text-2xl">GET STARTED</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Section (Why Choose Us?) -->
        <div class="bg-cover bg-image background-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg');">
            <div class="flex justify-center w-full bg-white bg-opacity-75">
                <div class="w-11/12 md:w-11/12 lg:w-9/12">
                    <div class="flex flex-col content-center justify-between mb-10">
                        <div class="mb-5">
                            <div class="flex justify-center mt-8 md:h-auto">
                                <p class="text-2xl font-bold text-transparent font-montserrat md:text-3xl lg:text-4xl bg-clip-text bg-gradient-to-r from-red-900 via-red-800 to-red-500">
                                    Why Choose Us?
                                </p>
                            </div>
                            <div class="flex justify-center w-full mt-2 mb-6 text-lg font-normal md:mt-0 lg:mt-0 md:mb-0 lg:mb-0 item-center">
                                <p class="flex items-center text-lg leading-tight text-center md:text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <!-- Why choose us box -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-4 md:gap-y-5">
                            <!-- Card 1 -->
                            <div class="flex p-6 bg-white bg-opacity-50 rounded-lg shadow-md shadow-gray-200">
                                <div class="mr-5">
                                    <div class="rounded-full avatar aspect-square h-14 md:h-16 w-14 md:w-16 bg-danger"></div>
                                </div>
                                <div class="flex-grow">
                                    <p class="text-lg tracking-wide text-red-800 md:text-xl">Title Here </p>
                                    <p class="h-full leading-tight text-justify text-black md:text-base lg:text-lg md:leading-relaxed line-clamp-3 md:line-clamp-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. dolor sit amet, consectetur adipiscing adipiscing </p>
                                </div>
                            </div>
                            <div class="flex p-6 bg-white bg-opacity-50 rounded-lg shadow-md shadow-gray-200">
                                <div class="mr-5">
                                    <div class="rounded-full avatar aspect-square h-14 md:h-16 w-14 md:w-16 bg-danger"></div>
                                </div>
                                <div class="flex-grow">
                                    <p class="text-lg tracking-wide text-red-800 md:text-xl">Title Here </p>
                                    <p class="h-full leading-tight text-justify text-black md:text-base lg:text-lg md:leading-relaxed line-clamp-3 md:line-clamp-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. dolor sit amet, consectetur adipiscing adipiscing </p>
                                </div>
                            </div>
                            <div class="flex p-6 bg-white bg-opacity-50 rounded-lg shadow-md shadow-gray-200">
                                <div class="mr-5">
                                    <div class="rounded-full avatar aspect-square h-14 md:h-16 w-14 md:w-16 bg-danger"></div>
                                </div>
                                <div class="flex-grow">
                                    <p class="text-lg tracking-wide text-red-800 md:text-xl">Title Here </p>
                                    <p class="h-full leading-tight text-justify text-black md:text-base lg:text-lg md:leading-relaxed line-clamp-3 md:line-clamp-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. dolor sit amet, consectetur adipiscing adipiscing </p>
                                </div>
                            </div>
                            <div class="flex p-6 bg-white bg-opacity-50 rounded-lg shadow-md shadow-gray-200">
                                <div class="mr-5">
                                    <div class="rounded-full avatar aspect-square h-14 md:h-16 w-14 md:w-16 bg-danger"></div>
                                </div>
                                <div class="flex-grow">
                                    <p class="text-lg tracking-wide text-red-800 md:text-xl">Title Here </p>
                                    <p class="h-full leading-tight text-justify text-black md:text-base lg:text-lg md:leading-relaxed line-clamp-3 md:line-clamp-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. dolor sit amet, consectetur adipiscing adipiscing </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border-gray-100 border-opacity-75">

            <!-- Third Section (Latest News) -->
            <div class="flex justify-center w-full bg-white bg-opacity-75">
                <div class="w-11/12 md:w-11/12 lg:w-9/12">
                    <div class="flex flex-col content-center justify-between mb-6">
                        <div class="mt-8 mb-8">
                            <div class="flex justify-center md:h-auto">
                                <p class="text-2xl font-bold text-transparent font-montserrat md:text-3xl lg:text-4xl bg-clip-text bg-gradient-to-r from-red-900 via-red-800 to-red-500">
                                    Latest News
                                </p>
                            </div>
                            <div class="flex justify-center w-full mt-2 mb-6 text-lg font-normal md:mt-0 lg:mt-0 md:mb-0 lg:mb-0 item-center">
                                <p class="flex items-center text-lg leading-tight text-center md:text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <!-- Cards -->
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                            <!-- Card 1 -->
                            <div class="flex flex-col bg-white rounded-lg shadow-md">
                                <div class="flex justify-center h-52 rounded-tl-2xl rounded-tr-2xl" >
                                    <img class="object-cover w-full h-full rounded-tl-2xl rounded-tr-2xl " src="img/news/news1.png" alt="" srcset="">
                                </div>
                                <div class="p-3 text-justify font-montserrat">
                                    <p class="text-lg text-red-800 lg:text-xl font-montserrat">Title Here</p>
                                    <p class="text-base md:text-lg ">Long Text Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="flex justify-start mt-auto mb-2 ml-2 text-sm lg:justify-center lg:ml-0 md:text-base">
                                    <a href="/home-news" class="p-2 mb-2 text-center text-white bg-black border rounded-md w-28 md:w-32 hover:bg-danger">Read More</a>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="flex flex-col bg-white rounded-lg shadow-md">
                                <div class="flex justify-center h-52 rounded-tl-2xl rounded-tr-2xl" >
                                    <img class="object-cover w-full h-full rounded-tl-2xl rounded-tr-2xl " src="img/news/news2.png" alt="" srcset="">
                                </div>
                                <div class="p-3 text-justify font-montserrat">
                                    <p class="text-lg text-red-800 lg:text-xl font-montserrat">Title Here</p>
                                    <p class="text-base md:text-lg ">Long Text Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="flex justify-start mt-auto mb-2 ml-2 text-sm lg:justify-center lg:ml-0 md:text-base">
                                    <a href="/home-news" class="p-2 mb-2 text-center text-white bg-black border rounded-md w-28 md:w-32 hover:bg-danger">Read More</a>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="flex flex-col bg-white rounded-lg shadow-md">
                                <div class="flex justify-center h-52 rounded-tl-2xl rounded-tr-2xl" >
                                    <img class="object-cover w-full h-full rounded-tl-2xl rounded-tr-2xl " src="img/news/news3.png" alt="" srcset="">
                                </div>
                                <div class="p-3 text-justify font-montserrat">
                                    <p class="text-lg text-red-800 lg:text-xl font-montserrat">Title Here</p>
                                    <p class="text-base md:text-lg ">Long Text Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="flex justify-start mt-auto mb-2 ml-2 text-sm lg:justify-center lg:ml-0 md:text-base">
                                    <a href="/home-news" class="p-2 mb-2 text-center text-white bg-black border rounded-md w-28 md:w-32 hover:bg-danger">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center mt-6">
                            <a href="/news" class="flex items-center justify-center w-32 h-12 mt-2 mb-2 font-medium border border-gray-800 rounded-md md:h-12 sm:w-36 md:w-40 hover:bg-danger hover:text-white">See More</a>
                        </div>
                    </div>

                </div>
            </div>
            <hr class="border-gray-100 border-opacity-75">

            <!-- Fourth Section (Partnership) -->
            <div class="flex justify-center w-full bg-white bg-opacity-75">
                <div class="w-11/12 md:w-11/12 lg:w-9/12">
                    <div class="flex flex-col content-center justify-between">
                        <div>
                            <div class="flex justify-center mt-8 md:h-auto">
                                <p class="text-2xl font-bold text-transparent font-montserrat md:text-3xl lg:text-4xl bg-clip-text bg-gradient-to-r from-red-900 via-red-800 to-red-500">
                                    Partnership
                                </p>
                            </div>
                            <div class="flex justify-center w-full mt-2 mb-6 text-lg font-normal md:mt-0 lg:mt-0 md:mb-0 lg:mb-0 item-center">
                                <p class="flex items-center text-lg leading-tight text-center md:text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>

                        <!-- Logos -->
                        <div class="hidden my-10 md:block partnership">
                            {{-- website view (partnership) --}}
                            <div class="flex items-center justify-between gap-5">
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
                        <div class="block -mt-6 md:hidden">
                            <div class="article">
                                <div class="wrapper">
                                    <ul class="flex items-center justify-between gap-3 marquee">
                                        <li>
                                            <img src="img/partnerships/partnership1.png" alt="1" class="big-img">
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
                                    <ul class="flex items-center justify-between gap-3 marquee2 marquee">
                                        <li>
                                            <img src="img/partnerships/partnership1.png" alt="1" class="big-img">
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

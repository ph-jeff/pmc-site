@extends('layouts/app')
@section('title')
  News
@endsection('title')
@section('main')
<!-- Sticky Navigation Bar (Website View - news page) -->
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
                <li class="h-12 w-20 flex justify-center items-center bg-danger"><a class="text-white text-base font-semibold" href="/news"> News </a></li>
                <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/career"> Career </a></li>
                <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/contact"> Contact </a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="background-cover bg-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg');">
    <div class="w-full h-auto bg-white bg-opacity-75 flex justify-center">
        <div class="w-full flex justify-center">
            <div class="w-11/12 md:w-11/12 lg:w-9/12 mt-10" >
                <div class="h-18 lg:h-28 flex justify-center items-center" >
                    <h1 class="font-bebas text-3xl md:text-5xl md:tracking-wider lg:text-5xl text-center font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-900 via-red-800 to-red-500"> NEWS AND UPDATE </h1>
                </div>
                {{-- Sort --}}
                <div class="flex items-center justify-between mt-4 md:mt-0 mb-4">
                    <div class="h-4/5 flex items-center gap-x-1 ml-2 lg:ml-0">
                        <span >Show</span>
                        <select class="border border-gray-300 rounded px-2 py-1">
                            <option value="">0</option>
                            <option value="">5</option>
                            <option value="">10</option>
                            <option value="">25</option>
                            <option value="">50 </option>
                        </select>
                    </div>
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="w-full h-10 border border-gray-300 shadow-lg shadow-gray-300 rounded-full px-4 py-2 focus:outline-none ">
                        <button class="absolute w-5 right-3 top-2"> <img src="img/search.png" class=" opacity-80" alt=""></button>
                    </div>
                </div>

                {{-- NEWS --}}
                <div class=" h-auto grid lg:grid-cols-2 gap-0 mb-2 md:mb-6" >
                    <div class="col-span-2 h-56 md:h-96 lg:col-span-1  lg:mr-4 lg:h-auto" >
                        {{-- IMAGE SLIDER --}}
                        <div class="relative imgSliderNews h-full w-full" >
                            {{-- <img src="img/news/news10.jpg" class="h-full w-full" alt=""> --}}
                            <div class="absolute  flex flex-col bg-black  bg-opacity-40 justify-center align-center w-full bottom-0  text-white px-6 lg:px-8">
                                <div class="flex items-end mt-0 lg:mt-5 ">
                                    <h1 class="text-base lg:text-2xl font-bold font-montserrat">Title Here</h1>
                                </div>
                                <div class=" ">
                                    <p class="text-justify text-xs lg:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                                </div>
                                <div class="">
                                    <button class=" px-3 py-1 lg:py-2 font-monserrat text-xs lg:text-sm font-semibold rounded-lg   mb-2 bg-black bg-opacity-75 hover:bg-red-900">READ FULL ARTICLE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1 lg:ml-4 mt-4 lg:mt-0" >
                        {{-- 3 boxes at right side --}}
                        <div class="flex flex-col flex-shrink-0 gap-5 w-full h-full">
                            <div class="w-full h-auto md:h-38 flex flex-row">
                                <img src="img/news/newsRight1.png" class="w-40 md:w-64 lg:w-2/6 h-full object-cover" alt="">
                                <div class="">
                                    <h1 class="text-red-900 text-lg md:text-2xl lg:text-xl font-semibold leading-8 ml-2 2 md:mt-0">Title Here</h1>
                                    <p class="text-justify text-xs md:text-base ml-2 mr-2 lg:mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum omnis similique animi iusto facilis unde et enim esse vero voluptate.</p>
                                    <div class="flex justify-end md:bottom-2 md:right-2 mt-1 md:mt-4">
                                        <button class="text-white bg-black h-8 md:h-9 w-24 md:w-30 rounded hover:bg-danger text-xs md:text-sm">Read More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full h-auto md:h-38 flex flex-row">
                                <img src="img/news/newsRight2.png" class="w-40 md:w-64 lg:w-2/6 h-full object-cover" alt="">
                                <div class="">
                                    <h1 class="text-red-900 text-lg md:text-2xl lg:text-xl font-semibold leading-8 ml-2 2 md:mt-0">Title Here</h1>
                                    <p class="text-justify text-xs md:text-base ml-2 mr-2 lg:mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum omnis similique animi iusto facilis unde et enim esse vero voluptate.</p>
                                    <div class="flex justify-end md:bottom-2 md:right-2 mt-1 md:mt-4">
                                        <button class="text-white bg-black h-8 md:h-9 w-24 md:w-30 rounded hover:bg-danger text-xs md:text-sm">Read More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full h-auto md:h-38 flex flex-row mb-2 md:mb-0">
                                <img src="img/news/newsRight3.png" class="w-40 md:w-64 lg:w-2/6 h-full object-cover" alt="">
                                <div class="">
                                    <h1 class="text-red-900 text-lg md:text-2xl lg:text-xl font-semibold leading-8 ml-2 2 md:mt-0">Title Here</h1>
                                    <p class="text-justify text-xs md:text-base ml-2 mr-2 lg:mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum omnis similique animi iusto facilis unde et enim esse vero voluptate.</p>
                                    <div class="flex justify-end md:bottom-2 md:right-2 mt-1 md:mt-4">
                                        <button class="text-white bg-black h-8 md:h-9 w-24 md:w-30 rounded hover:bg-danger text-xs md:text-sm">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 3 boxes at bottom side --}}
                <div class="h-auto lg:h-auto lg:w-full flex justify-around lg:grid lg:grid-cols-3 lg:grid-flow-row md:gap-5 md:grid md:grid-cols-2 md:grid-flow-row  items-center flex-col lg:flex-row mb-10 mt-3">
                    <div class="h-auto lg:h-auto lg:w-auto w-full  rounded-2xl shadow-lg shadow-gray-200 mb-2 md:mb-0">
                        <!-- IMAGE HERE -->
                        <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                            <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news1.png" alt="" srcset="">
                        </div>
                        <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
                        <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 mt-2 text-base">
                            <button class="border text-white bg-black h-10 w-32 rounded hover:bg-red-900">Read More</button>
                        </div>
                    </div>
                    <div class="h-auto lg:h-auto lg:w-auto w-full rounded-2xl shadow-lg shadow-gray-200 mb-2 md:mb-0">
                        <!-- IMAGE HERE -->
                        <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center mb-2 md:mb-0">
                            <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news2.png" alt="" srcset="">
                        </div>
                        <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
                        <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 mt-2 text-base">
                            <button class="border text-white bg-black h-10 w-32 rounded hover:bg-danger">Read More</button>
                        </div>
                    </div>
                    <div class="h-auto lg:h-auto lg:w-auto w-full rounded-2xl shadow-lg shadow-gray-200">
                        <!-- IMAGE HERE -->
                        <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                            <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news3.png" alt="" srcset="">
                        </div>
                        <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
                        <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 mt-2 text-base">
                            <button class="border text-white bg-black h-10 w-32 rounded hover:bg-danger">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- PAGINATION --}}
    <div class="h-20 w-full bg-white bg-opacity-75 flex justify-center">
        <div class="h-full w-full sm:w-3/4 flex justify-center lg:justify-end">
            <div class="h-14 w-11/12 sm:w-11/12 md:w-3/4 lg:w-1/3 flex justify-center md:justify-start items-center gap-1 gap-x-2">
                <a class="h-full w-1/4 rounded flex justify-center items-center border text-gray-900 border-gray-300 text-lg opacity-50">
                    <
                </a>
                <a href="{{ url('/news') }}" class="h-full w-2/12 rounded flex justify-center items-center border border-gray-300 text-white bg-danger ">
                    1
                </a>
                <a href="{{ url('/news2') }}" class="h-full w-2/12 rounded flex justify-center items-center border border-gray-300 text-red-900">
                    2
                </a>
                <a href="{{ url('/news3') }}" class="h-full w-2/12 rounded flex justify-center items-center border border-gray-300 text-red-900">
                    3
                </a>
                <a href="{{ url('/news2') }}" class="h-full w-1/4 rounded flex justify-center items-center border text-red-900 border-gray-300 text-lg">
                    >   
                </a>
            </div>
        </div>
    </div>
</div>
@endsection('main')
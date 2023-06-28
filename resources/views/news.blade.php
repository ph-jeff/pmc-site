@extends('layouts/app')
@section('title')
  News
@endsection('title')
@section('main')
<!-- Sticky Navigation Bar (Website View - news page) -->
<nav class="hidden md:h-20 md:flex md:justify-around md:sticky md:top-0 md:z-50 md:bg-black">
    <div class="flex items-center justify-center w-full h-20">
        <div class="flex content-center justify-between w-11/12 md:w-11/12 lg:w-9/12">
            <div>
                <a href="/">
                    <img class="" src="img/pmclogo.png" alt="logo" >
                </a>
            </div>
            <ul class="flex items-center gap-1 text-center">
                <a class="text-base font-semibold text-white " href="/"><li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> Home </li></a>
                <a class="text-base font-semibold text-white" href="/about"><li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> About </li></a>
                <a class="text-base font-semibold text-white" href="/team"><li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> Team </li></a>
                <a class="text-base font-semibold text-white" href="/news"><li class="flex items-center justify-center w-20 h-12 bg-danger"> News </li></a>
                <a class="text-base font-semibold text-white" href="/career"><li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> Career </li></a>
                <a class="text-base font-semibold text-white" href="/contact"><li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> Contact </li></a>
            </ul>
        </div>
    </div>
</nav>

<div class="bg-cover background-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg');">
    <div class="flex justify-center w-full h-auto bg-white bg-opacity-75">
        <div class="flex justify-center w-full">
            <div class="w-11/12 mt-10 md:w-11/12 lg:w-9/12" >
                <div class="flex items-center justify-center h-18 lg:h-28" >
                    <h1 class="text-3xl font-bold text-center text-transparent font-bebas md:text-5xl md:tracking-wider lg:text-5xl bg-clip-text bg-gradient-to-r from-red-900 via-red-800 to-red-500"> NEWS AND UPDATE </h1>
                </div>
                {{-- Sort --}}
                <div class="flex items-center justify-between mt-4 mb-4 md:mt-0">
                    <div class="flex items-center ml-2 h-4/5 gap-x-1 lg:ml-0">
                        <span >Show</span>
                        <select class="px-2 py-1 border border-gray-300 rounded">
                            <option value="">0</option>
                            <option value="">5</option>
                            <option value="">10</option>
                            <option value="">25</option>
                            <option value="">50 </option>
                        </select>
                    </div>
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="w-full h-10 px-4 py-2 border border-gray-300 rounded-full shadow-lg shadow-gray-300 focus:outline-none ">
                        <button class="absolute w-5 right-3 top-2"> <img src="img/search.png" class=" opacity-80" alt=""></button>
                    </div>
                </div>

                {{-- NEWS --}}
                <div class="grid h-auto gap-0 mb-2 lg:grid-cols-2 md:mb-6" >
                    <div class="h-56 col-span-2 md:h-96 lg:col-span-1 lg:mr-4 lg:h-auto" >
                        {{-- IMAGE SLIDER --}}
                        <div class="relative w-full h-full imgSliderNews" >
                            {{-- <img src="img/news/news10.jpg" class="w-full h-full" alt=""> --}}
                            <div class="absolute bottom-0 flex flex-col justify-center w-full px-6 text-white bg-black bg-opacity-40 align-center lg:px-8">
                                <div class="flex items-end mt-0 lg:mt-5 ">
                                    <h1 class="text-base font-bold lg:text-2xl font-montserrat">Title Here</h1>
                                </div>
                                <div class="">
                                    <p class="text-xs text-justify lg:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                                </div>
                                <div class="">
                                    <button class="px-3 py-1 mb-2 text-xs font-semibold bg-black bg-opacity-75 rounded-lg lg:py-2 font-monserrat lg:text-sm hover:bg-red-900">READ FULL ARTICLE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 mt-4 lg:col-span-1 lg:ml-4 lg:mt-0" >
                        {{-- 3 boxes at right side --}}
                        <div class="flex flex-col flex-shrink-0 w-full h-full gap-5">
                            <div class="flex flex-row w-full h-auto md:h-38">
                                <img src="img/news/newsRight1.png" class="object-cover w-40 h-full md:w-64 lg:w-2/6" alt="">
                                <div class="">
                                    <h1 class="ml-2 text-lg font-semibold leading-8 text-red-900 md:text-2xl lg:text-xl 2 md:mt-0">Title Here</h1>
                                    <p class="ml-2 mr-2 text-xs text-justify md:text-base lg:mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum omnis similique animi iusto facilis unde et enim esse vero voluptate.</p>
                                    <div class="flex justify-end mt-1 md:bottom-2 md:right-2 md:mt-4">
                                        <a href="/home-news" class="flex items-center justify-center w-24 h-8 text-xs text-white bg-black rounded md:h-9 md:w-30 hover:bg-danger md:text-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row w-full h-auto md:h-38">
                                <img src="img/news/newsRight2.png" class="object-cover w-40 h-full md:w-64 lg:w-2/6" alt="">
                                <div class="">
                                    <h1 class="ml-2 text-lg font-semibold leading-8 text-red-900 md:text-2xl lg:text-xl 2 md:mt-0">Title Here</h1>
                                    <p class="ml-2 mr-2 text-xs text-justify md:text-base lg:mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum omnis similique animi iusto facilis unde et enim esse vero voluptate.</p>
                                    <div class="flex justify-end mt-1 md:bottom-2 md:right-2 md:mt-4">
                                        <a href="/home-news" class="flex items-center justify-center w-24 h-8 text-xs text-white bg-black rounded md:h-9 md:w-30 hover:bg-danger md:text-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row w-full h-auto mb-2 md:h-38 md:mb-0">
                                <img src="img/placeholder.jpg" class="object-cover w-40 h-full md:w-64 lg:w-2/6" alt="">
                                <div class="">
                                    <h1 class="ml-2 text-lg font-semibold leading-8 text-red-900 md:text-2xl lg:text-xl 2 md:mt-0">Title Here</h1>
                                    <p class="ml-2 mr-2 text-xs text-justify md:text-base lg:mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum omnis similique animi iusto facilis unde et enim esse vero voluptate.</p>
                                    <div class="flex justify-end mt-1 md:bottom-2 md:right-2 md:mt-4">
                                        <a href="/home-news" class="flex items-center justify-center w-24 h-8 text-xs text-white bg-black rounded md:h-9 md:w-30 hover:bg-danger md:text-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 3 boxes at bottom side --}}
                <div class="flex flex-col items-center justify-around h-auto mt-3 mb-10 lg:h-auto lg:w-full lg:grid lg:grid-cols-3 lg:grid-flow-row md:gap-5 md:grid md:grid-cols-2 md:grid-flow-row lg:flex-row">
                    <div class="w-full h-auto mb-2 shadow-lg lg:h-auto lg:w-auto rounded-2xl shadow-gray-200 md:mb-0">
                        <!-- IMAGE HERE -->
                        <div class="flex justify-center h-32 lg:h-52 rounded-tl-2xl rounded-tr-2xl" >
                            <img class="object-cover w-full h-full rounded-tl-2xl rounded-tr-2xl" src="img/news/news1.png" alt="" srcset="">
                        </div>
                        <p class="ml-2 text-base text-red-800 lg:text-xl font-montserrat ">Title Here</p>
                        <p class="mt-2 ml-2 mr-2 text-sm text-justify lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <div class="flex justify-start w-full mt-2 mb-2 ml-2 text-base lg:justify-center lg:ml-0">
                            <a href="/home-news" class="flex items-center justify-center w-32 h-10 text-white bg-black border rounded hover:bg-red-900">Read More</a>
                        </div>
                    </div>
                    <div class="w-full h-auto mb-2 shadow-lg lg:h-auto lg:w-auto rounded-2xl shadow-gray-200 md:mb-0">
                        <!-- IMAGE HERE -->
                        <div class="flex justify-center h-32 mb-2 lg:h-52 rounded-tl-2xl rounded-tr-2xl md:mb-0">
                            <img class="object-cover w-full h-full rounded-tl-2xl rounded-tr-2xl" src="img/news/news2.png" alt="" srcset="">
                        </div>
                        <p class="ml-2 text-base text-red-800 lg:text-xl font-montserrat ">Title Here</p>
                        <p class="mt-2 ml-2 mr-2 text-sm text-justify lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <div class="flex justify-start w-full mt-2 mb-2 ml-2 text-base lg:justify-center lg:ml-0">
                            <a href="/home-news" class="flex items-center justify-center w-32 h-10 text-white bg-black border rounded hover:bg-danger">Read More</a>
                        </div>
                    </div>
                    <div class="w-full h-auto shadow-lg lg:h-auto lg:w-auto rounded-2xl shadow-gray-200">
                        <!-- IMAGE HERE -->
                        <div class="flex justify-center h-32 lg:h-52 rounded-tl-2xl rounded-tr-2xl" >
                            <img class="object-cover w-full h-full rounded-tl-2xl rounded-tr-2xl" src="img/news/news3.png" alt="" srcset="">
                        </div>
                        <p class="ml-2 text-base text-red-800 lg:text-xl font-montserrat ">Title Here</p>
                        <p class="mt-2 ml-2 mr-2 text-sm text-justify lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <div class="flex justify-start w-full mt-2 mb-2 ml-2 text-base lg:justify-center lg:ml-0">
                            <a href="/home-news" class="flex items-center justify-center w-32 h-10 text-white bg-black border rounded hover:bg-danger">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- PAGINATION --}}
    <div class="flex justify-center w-full h-20 bg-white bg-opacity-75">
        <div class="flex justify-center w-full h-full sm:w-3/4 lg:justify-end">
            <div class="flex items-center justify-center w-11/12 gap-1 h-14 sm:w-11/12 md:w-3/4 lg:w-1/3 md:justify-start gap-x-2">
                <a class="flex items-center justify-center w-1/4 h-full text-lg text-gray-900 border border-gray-300 rounded opacity-50">
                    <
                </a>
                <a href="{{ url('/news') }}" class="flex items-center justify-center w-2/12 h-full text-white border border-gray-300 rounded bg-danger ">
                    1
                </a>
                <a href="{{ url('/news2') }}" class="flex items-center justify-center w-2/12 h-full text-red-900 border border-gray-300 rounded">
                    2
                </a>
                <a href="{{ url('/news3') }}" class="flex items-center justify-center w-2/12 h-full text-red-900 border border-gray-300 rounded">
                    3
                </a>
                <a href="{{ url('/news2') }}" class="flex items-center justify-center w-1/4 h-full text-lg text-red-900 border border-gray-300 rounded">
                    >
                </a>
            </div>
        </div>
    </div>
</div>
@endsection('main')

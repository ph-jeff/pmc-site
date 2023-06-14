@extends('layouts/app')
@section('title')
  News 2
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
                <div class="flex items-center justify-between mt-4 md:mt-0">
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

                <div class="h-auto lg:h-auto lg:w-full flex justify-around lg:grid lg:grid-cols-3 lg:grid-flow-row md:gap-5 md:grid md:grid-cols-2 md:grid-flow-row  items-center flex-col lg:flex-row mb-10 mt-3">
                    <div class="h-auto lg:h-auto lg:w-auto w-full  rounded-2xl shadow-lg shadow-gray-200 mb-2 md:mb-0">
                        <!-- IMAGE HERE -->
                        <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                            <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/newsRecom4.png" alt="" srcset="">
                        </div>
                        <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
                        <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 mt-2 text-base">
                            <button class="border text-white bg-black h-10 w-32 rounded hover:bg-red-900">Read More</button>
                        </div>
                    </div>
                    <div class="h-auto lg:h-auto lg:w-auto w-full rounded-2xl shadow-lg shadow-gray-200 mb-2 md:mb-0">
                        <!-- IMAGE HERE -->
                        <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                            <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/newsRecom5.png" alt="" srcset="">
                        </div>
                        <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2">Title Here</p>
                        <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-3 mt-2 text-base">
                            <button class="border text-white bg-black h-10 w-32 rounded hover:bg-danger">Read More</button>
                        </div>
                    </div>
                    <div class="h-auto lg:h-auto lg:w-auto w-full rounded-2xl shadow-lg shadow-gray-200 mb-2 md:mb-0">
                        <!-- IMAGE HERE -->
                        <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                            <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/newsRecom6.png" alt="" srcset="">
                        </div>
                        <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
                        <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-3 mt-2 text-base">
                            <button class="border text-white bg-black h-10 w-32 rounded hover:bg-danger">Read More</button>
                        </div>
                    </div>
                    <div class="h-auto lg:h-auto lg:w-auto w-full  rounded-2xl shadow-lg shadow-gray-200 mb-2 md:mb-0">
                        <!-- IMAGE HERE -->
                        <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                            <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/newsRecom7.png" alt="" srcset="">
                        </div>
                        <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
                        <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-3 mt-2 text-base">
                            <button class="border text-white bg-black h-10 w-32 rounded hover:bg-red-900">Read More</button>
                        </div>
                    </div>
                    <div class="h-auto lg:h-auto lg:w-auto w-full rounded-2xl shadow-lg shadow-gray-200 mb-2 md:mb-0">
                        <!-- IMAGE HERE -->
                        <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                            <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/newsRecom8.png" alt="" srcset="">
                        </div>
                        <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
                        <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-3 mt-2 text-base">
                            <button class="border text-white bg-black h-10 w-32 rounded hover:bg-danger">Read More</button>
                        </div>
                    </div>
                    <div class="h-auto lg:h-auto lg:w-auto w-full rounded-2xl shadow-lg shadow-gray-200" >
                        <!-- IMAGE HERE -->
                        <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                            <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/newsRecom9.png" alt="" srcset="">
                        </div>
                        <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
                        <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-3 mt-2 text-base">
                            <button class="border text-white bg-black h-10 w-32 rounded hover:bg-danger">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-20 w-full bg-white bg-opacity-75 flex justify-center">
        <div class="h-full w-full sm:w-3/4 flex justify-center lg:justify-end">
            <div class="h-14 w-11/12 sm:w-11/12 md:w-3/4 lg:w-1/3 flex justify-center md:justify-start items-center gap-1 gap-x-2">
                <a href="{{ url('/news2') }}" class="h-full w-1/4 rounded flex justify-center items-center border text-red-900 border border-gray-300 text-lg">
                    <
                </a>
                <a href="{{ url('/news') }}" class="h-full w-2/12 rounded flex justify-center items-center border border-gray-300  text-red-900">
                    1
                </a>
                <a href="{{ url('/news2') }}" class="h-full w-2/12 rounded flex justify-center items-center border border-gray-300  text-red-900">
                    2
                </a>
                <a href="{{ url('/news3') }}" class="h-full w-2/12 rounded flex justify-center items-center border border-gray-300 text-white bg-danger">
                    3
                </a>
                <a class="h-full w-1/4 rounded flex justify-center items-center border text-gray-900 border-gray-300 text-lg opacity-50">   
                    >
                </a>
            </div>
        </div>
    </div>
</div>
@endsection('main')
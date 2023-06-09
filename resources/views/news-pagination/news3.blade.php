@extends('layouts/app')
@section('title')
  News 2
@endsection('title')
@section('main')
<!-- Sticky Navigation Bar (Website View - news page) -->
<nav class="hidden md:h-[13vh] md:flex md:justify-around md:sticky md:top-0 md:z-50 md:bg-black">
    <div class="h-full w-[20%] flex items-center">
        <a href="">
            <img class="" src="img/pmc_logo.png" alt="logo" >
        </a>
    </div>
    <div class="w-[50%] flex items-center justify-end">
        <ul class="flex">        
            <li class="p-3 px-5 hover:bg-[#860909]"><a class="text-white text-base font-semibold" href="/home"> Home </a></li>
            <li class="p-3 px-5 hover:bg-[#860909]"><a class="text-white text-base font-semibold" href="/about"> About </a></li>
            <li class="p-3 px-5 hover:bg-[#860909]"><a class="text-white text-base font-semibold" href="/team"> Team </a></li>
            <li class="p-3 px-5 bg-[#860909]"><a class="text-white text-base font-semibold" href="/news"> News </a></li>
            <li class="p-3 px-5 hover:bg-[#860909]"><a class="text-white text-base font-semibold" href="/career"> Career </a></li>
            <li class="p-3 px-5 hover:bg-[#860909]"><a class="text-white text-base font-semibold" href="/contact"> Contact </a></li>
        </ul>
    </div>
</nav> 
<div class="mx-4  md:mx-8 lg:mx-40" >
    <div class="h-20 lg:h-40 flex justify-center items-center" >
        <h1 class="font-bebas text-4xl lg:text-5xl text-center font-bold "> NEWS AND UPDATE </h1>
    </div>
    {{-- Sort --}}
    <div class="h-16 flex items-center justify-between " >
        <div class="h-4/5 flex items-center gap-x-1 ml-2 lg:ml-0">
            <span >Show</span>
            <select class="border border-gray-300 rounded px-2 py-1 w-[60px] h-[]">
                <option value="">0</option>
                <option value="">5</option>
                <option value="">10</option>
                <option value="">25</option>
                <option value="">50 </option>
            </select>
        </div>
        <div class="relative  mr-2 lg:mr-0" > 
            <input type="text" placeholder="Search..." class="w-full h-10 border border-gray-300 shadow-lg shadow-gray-300 rounded-full px-4 py-2 focus:outline-none ">
            <button class="absolute w-6 right-2 top-2"> <img src="img/search.png" class=" opacity-80" alt=""></button>
        </div>
    </div>

    <div class="h-auto lg:h-auto lg:w-full flex justify-around lg:grid lg:grid-cols-3  lg:grid-flow-row md:gap-5 md:grid md:grid-cols-2 md:grid-flow-row  items-center flex-col lg:flex-row mb-10" >
        <div class="h-auto lg:h-auto lg:w-auto mt-5  w-full  rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news1.png" alt="" srcset="">
            </div>
            <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 mt-2 text-base">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>
        <div class="h-auto lg:h-auto lg:w-auto mt-5  w-full  rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news1.png" alt="" srcset="">
            </div>
            <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 mt-2 text-base">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>
        <div class="h-auto lg:h-auto lg:w-auto mt-5  w-full  rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news1.png" alt="" srcset="">
            </div>
            <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 mt-2 text-base">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>

        <div class="h-auto lg:h-auto lg:w-auto mt-5  w-full  rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news1.png" alt="" srcset="">
            </div>
            <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 mt-2 text-base">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>
        <div class="h-auto lg:h-auto lg:w-auto mt-5  w-full  rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news1.png" alt="" srcset="">
            </div>
            <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 mt-2 text-base">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>
        <div class="h-auto lg:h-auto lg:w-auto mt-5  w-full  rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news1.png" alt="" srcset="">
            </div>
            <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 mt-2 text-base">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>
        <div class="h-auto lg:h-auto lg:w-auto mt-5  w-full  rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news1.png" alt="" srcset="">
            </div>
            <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 mt-2 text-base">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>
        <div class="h-auto lg:h-auto lg:w-auto mt-5  w-full  rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news1.png" alt="" srcset="">
            </div>
            <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 mt-2 text-base">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>
        <div class="h-auto lg:h-auto lg:w-auto mt-5  w-full  rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news1.png" alt="" srcset="">
            </div>
            <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 mt-2 text-base">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>
        <div class="h-auto lg:h-auto lg:w-auto mt-5  w-full  rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-32 lg:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news1.png" alt="" srcset="">
            </div>
            <p class="text-base lg:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-sm lg:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <div class="w-full  flex justify-start lg:justify-center ml-2 lg:ml-0 mb-2 mt-2 text-base">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>
        
    </div>
    {{-- PAGINATION --}}
    <div class="h-20 w-full bg-white bg-opacity-75 flex justify-center">
        <div class="h-full w-full sm:w-3/4 flex justify-center lg:justify-end">
        <div class="h-14 w-11/12 sm:w-11/12 md:w-3/4 lg:w-1/3 flex justify-center md:justify-start items-center gap-1 gap-x-2">
            <a href="#" class="h-full w-1/4 rounded flex justify-center items-center border text-red-900 border border-gray-300 opacity-50">
                <
            </a>
            <a href="{{ url('/news') }}" class="h-full w-2/12 rounded flex justify-center items-center border border-gray-300 text-red-900 ">
                1
            </a>
            <a href="{{ url('/career2') }}" class="h-full w-2/12 rounded flex justify-center items-center border border-gray-300 text-white bg-danger">
                2
            </a>
            <a href="{{ url('/career3') }}" class="h-full w-2/12 rounded flex justify-center items-center border border-gray-300 text-red-900">
                3
            </a>
            <a href="{{ url('#') }}" class="h-full w-1/4 rounded flex justify-center items-center border text-red-900 border-gray-300">
                >   
            </a>
        </div>
        </div>
    </div>

</div>
@endsection('main')
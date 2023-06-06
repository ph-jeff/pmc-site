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
<div class="mx-[0%] lg:mx-[9%]">
    <div class="h-[7vh] md:h-[30vh] flex justify-center items-center" >
        <h1 class="font-bebas text-4xl md:text-5xl text-center font-bold text-transparent bg-clip-text bg-gradient-to-r from-[#5E0505] to-[#9A0F0F]"> NEWS AND UPDATE </h1>
    </div>
    {{-- Sort --}}
    <div class="h-[10vh] flex items-center justify-between ">
        <div class="h-[80%] flex items-center gap-x-1 ml-2 md:ml-0">
            <span >Show</span>
            <select class="border border-gray-300 rounded px-2 py-1 w-[60px] h-[]">
                <option value="">0</option>
                <option value="">5</option>
                <option value="">10</option>
                <option value="">25</option>
                <option value="">50 </option>
            </select>
        </div>
        <div class="relative w-[45%] lg:w-[25%] mr-2 md:mr-0"> 
            <input type="text" placeholder="Search..." class="w-[100%] h-[42px] border border-gray-300 shadow-md shadow-gray-300 rounded-full px-4 py-2 focus:outline-none ">
            <button class="absolute w-6 right-2 top-2"> <img src="img/search.png" class=" opacity-80" alt=""></button>
        </div>
    </div>

    <!-- Row 1 -->
    <div class="h-[auto] md:h-auto flex justify-around md:justify-between  items-center flex-col md:flex-row" >
        <div class="h-[380px] md:h-[433px] w-[374px] md:w-[354px] rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-[223px]  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full md:w-[354px]" src="img/news/news_image_1.jpg" alt="" srcset="">
            </div>
            <p class="text-[16px] md:text-[20px]  text-[#860909] font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-[14px] md:text-[16px] font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="w-full  flex justify-start md:justify-center ml-2 md:ml-0 mt-2 text-[16px]">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>

        <div class="h-[380px] md:h-[433px] w-[374px] md:w-[354px] rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-[223px]  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full md:w-[354px]" src="img/news/12.jpg" alt="" srcset="">
            </div>
            <p class="text-[16px] md:text-[20px]  text-[#860909] font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-[14px] md:text-[16px] font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="w-full  flex justify-start md:justify-center ml-2 md:ml-0 mt-2 text-[16px]">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>
        <div class="h-[380px] md:h-[433px] w-[374px] md:w-[354px] rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-[223px]  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full md:w-[354px]" src="img/news/17.jpg" alt="" srcset="">
            </div>
            <p class="text-[16px] md:text-[20px]  text-[#860909] font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-[14px] md:text-[16px] font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="w-full  flex justify-start md:justify-center ml-2 md:ml-0 mt-2 text-[16px]">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>
    </div>

    <!-- Row 2 -->
    <div class="h-[140vh] md:h-auto flex justify-around md:justify-between  items-center flex-col md:flex-row mt-1 md:mt-16 mb-16" >
        <div class="h-[380px] md:h-[433px] w-[374px] md:w-[354px] rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-[223px]  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full md:w-[354px]" src="img/news/14.jpg" alt="" srcset="">
            </div>
            <p class="text-[16px] md:text-[20px]  text-[#860909] font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-[14px] md:text-[16px] font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="w-full  flex justify-start md:justify-center ml-2 md:ml-0 mt-2 text-[16px]">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>

        <div class="h-[380px] md:h-[433px] w-[374px] md:w-[354px] rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-[223px]  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full md:w-[354px]" src="img/news/15.jpg" alt="" srcset="">
            </div>
            <p class="text-[16px] md:text-[20px]  text-[#860909] font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-[14px] md:text-[16px] font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="w-full  flex justify-start md:justify-center ml-2 md:ml-0 mt-2 text-[16px]">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>
        <div class="h-[380px] md:h-[433px] w-[374px] md:w-[354px] rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-[223px]  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full md:w-[354px]" src="img/news/16.jpg" alt="" srcset="">
            </div>
            <p class="text-[16px] md:text-[20px]  text-[#860909] font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-[14px] md:text-[16px] font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="w-full  flex justify-start md:justify-center ml-2 md:ml-0 mt-2 text-[16px]">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>
    </div>
</div>
@endsection('main')
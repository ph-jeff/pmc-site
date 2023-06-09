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
<div class="mx-2 lg:mx-40" >
    <div class="h-20 md:h-40 flex justify-center items-center" >
        <h1 class="font-bebas text-4xl md:text-5xl text-center font-bold "> NEWS AND UPDATE </h1>
    </div>
    {{-- Sort --}}
    <div class="h-16 flex items-center justify-between " >
        <div class="h-4/5 flex items-center gap-x-1 ml-2 md:ml-0">
            <span >Show</span>
            <select class="border border-gray-300 rounded px-2 py-1 w-[60px] h-[]">
                <option value="">0</option>
                <option value="">5</option>
                <option value="">10</option>
                <option value="">25</option>
                <option value="">50 </option>
            </select>
        </div>
        <div class="relative  mr-2 md:mr-0" > 
            <input type="text" placeholder="Search..." class="w-full h-10 border border-gray-300 shadow-md shadow-gray-300 rounded-full px-4 py-2 focus:outline-none ">
            <button class="absolute w-6 right-2 top-2"> <img src="img/search.png" class=" opacity-80" alt=""></button>
        </div>
    </div>

    <!-- Row 1 -->
    <div class="h-auto md:h-auto flex justify-around md:justify-between  items-center flex-col md:flex-row" >
        <div class="h-auto md:h-auto mt-5 md:mt-0 w-full  rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-32 md:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full object-cover " src="img/news/news1.png" alt="" srcset="">
            </div>
            <p class="text-base md:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-sm md:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, officiis unde. Deserunt quaerat odit quam laboriosam, dolor quasi quas provident, ipsam, assumenda quisquam laudantium consequuntur accusantium in rerum corporis vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium neque eaque quo explicabo. Ea iusto eos itaque officia quidem cum ullam ratione possimus eaque! Minima sint officia quisquam ad provident?</p>
            <div class="w-full  flex justify-start md:justify-center ml-2 md:ml-0 mb-2 mt-2 text-base">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>

        <div class="h-72 md:h-96 mt-5 md:mt-0 w-full md:mx-16 rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-32 md:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full " src="img/news/news_image_1.jpg" alt="" srcset="">
            </div>
            <p class="text-base md:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-sm md:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="w-full  flex justify-start md:justify-center ml-2 md:ml-0 mt-2 text-base">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>
        <div class="h-72 md:h-96 mt-5 md:mt-0 w-full  rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-32 md:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full " src="img/news/news_image_1.jpg" alt="" srcset="">
            </div>
            <p class="text-base md:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-sm md:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="w-full  flex justify-start md:justify-center ml-2 md:ml-0 mt-2 text-base">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>
    </div>

    <!-- Row 2 -->
    <div class="h-auto md:h-auto mt-5 md:mt-0 md:mt-16 md:mb-10 flex justify-around md:justify-between  items-center flex-col md:flex-row">
        <div class="h-72 md:h-96 w-full  rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-32 md:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full " src="img/news/news_image_1.jpg" alt="" srcset="">
            </div>
            <p class="text-base md:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-sm md:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="w-full  flex justify-start md:justify-center ml-2 md:ml-0 mt-2 text-base">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>

        <div class="h-72 md:h-96 mt-5 md:mt-0 w-full md:mx-16 rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-32 md:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full " src="img/news/news_image_1.jpg" alt="" srcset="">
            </div>
            <p class="text-base md:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-sm md:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="w-full  flex justify-start md:justify-center ml-2 md:ml-0 mt-2 text-base">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>
        <div class="h-72 md:h-96 mt-5 md:mt-0 mb-5 md:mb-0 w-full  rounded-2xl shadow-lg shadow-gray-200" >
            <!-- IMAGE HERE -->
            <div class=" h-32 md:h-52  rounded-tl-2xl rounded-tr-2xl flex justify-center" >
                <img class=" rounded-tl-2xl rounded-tr-2xl h-full w-full " src="img/news/news_image_1.jpg" alt="" srcset="">
            </div>
            <p class="text-base md:text-xl  text-red-800 font-montserrat ml-2 ">Title Here</p>
            <p class="text-justify ml-2 mr-2 mt-2 text-sm md:text-base font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="w-full  flex justify-start md:justify-center ml-2 md:ml-0 mt-2 text-base">
                <button class="border text-white bg-black h-10 w-32 rounded hover:bg-[#860909]">Read More</button>
            </div>
            
        </div>
    </div>
</div>
@endsection('main')
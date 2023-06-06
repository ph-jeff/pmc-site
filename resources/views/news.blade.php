@extends('layouts/app')
@section('title')
  News
@endsection('title')
@section('main')
<!-- Sticky Navigation Bar (Website View - news page) -->
<nav class="hidden md:h-20 md:flex md:justify-around md:sticky md:top-0 md:z-50 md:bg-black">
    <div class="h-full w-[20%] flex items-center">
        <a href="">
            <img class="" src="img/pmc_logo.png" alt="logo" >
        </a>
    </div>
    <div class="w-[50%] flex items-center justify-end">
        <ul class="flex">        
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/"> Home </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/about"> About </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/team"> Team </a></li>
            <li class="p-3 px-5 bg-danger"><a class="text-white text-base font-semibold" href="/news"> News </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/career"> Career </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/contact"> Contact </a></li>
        </ul>
    </div>
</nav> 
<div class="background-cover bg-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg');">
    <div class="bg-white/[75%]">
        <div class="mx-[0%] lg:mx-[9%] ">
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
        
            {{-- NEWS --}}
            <div class="h-auto md:h-[70vh] w-full flex flex-col md:flex-row py-2 items-center">
                <div class="relative imgSliderNews h-[40vh] md:h-full w-[96%] md:w-full" >
                    {{-- <img src="img/news/news10.jpg" class="h-full w-full" alt=""> --}}
                    <div class="absolute h-[45%] md:h-[37%] flex flex-col justify-around  w-full bottom-0 bg-black/[50%] text-white px-3 md:px-10">
                        <div class="flex items-end mt-0 md:mt-5">
                            <h1 class="text-lg md:text-2xl font-bold font-montserrat">Title Here</h1>
                        </div>
                        <div class=" ">
                            <p class="text-justify text-[13px] md:text-[16px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                        </div>
                        <div class="">
                            <button class=" px-3 py-1 md:py-2 font-monserrat text-[8px] md:text-sm font-semibold rounded-md bg-black/[75%] shadow-md shadow-white/[15%] hover:bg-[#860909]">READ FULL ARTICLE</button>
                        </div>
                    </div>
                </div>
                <div class="h-auto md:h-full w-[96%] pl-0 md:pl-10 flex flex-col mt-2 md:mt-0"  >
                    <div class="flex items-center h-[120px] md:h-1/3 w-full pb-[2%]">
                        <div class="h-[98%] md:h-full w-[50%] md:w-2/5">
                            <img src="img/news/news9.jpg" class="w-full h-full" alt="">
                        </div>
                        <div class="w-3/5 h-full font-montserrat pl-[5%]">
                            <div class="h-1/3 w-full flex items-center">
                                <h1 class="text-md md:text-lg font-semibold text-[#860909]">Title Here </h1>
                            </div>
                            <div class="h-3/5 w-full">
                                <p class="text-justify font-medium text-[12px]">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center h-[120px] md:h-1/3 w-full pb-[2%]">
                        <div class="h-[98%] md:h-full w-[50%] md:w-2/5">
                            <img src="img/news/news9.jpg" class="w-full h-full" alt="">
                        </div>
                        <div class="w-3/5 h-full font-montserrat pl-[5%]">
                            <div class="h-1/3 w-full flex items-center">
                                <h1 class="text-md md:text-lg font-semibold text-[#860909]">Title Here </h1>
                            </div>
                            <div class="h-3/5 w-full">
                                <p class="text-justify font-medium text-[12px]">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center h-[120px] md:h-1/3 w-full pb-[2%]" >
                        <div class="h-[98%] md:h-full w-[50%] md:w-2/5">
                            <img src="img/news/news9.jpg" class="w-full h-full" alt="">
                        </div>
                        <div class="w-3/5 h-full font-montserrat pl-[5%]">
                            <div class="h-1/3 w-full flex items-center">
                                <h1 class="text-md md:text-lg font-semibold text-[#860909]">Title Here </h1>
                            </div>
                            <div class="h-3/5 w-full">
                                <p class="text-justify font-medium text-[12px]">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            {{-- RECOMMENDED --}}
            <div class="h-[200vh] md:h-[95vh] ">
                <div class="h-[3%] md:h-[12%] flex items-end ml-2 md:ml-0">
                    <h1 class="font-bebas text-xl md:text-3xl font-normal md:font-semibold tracking-wider text-transparent bg-clip-text bg-gradient-to-r from-[#5E0505] to-[#9A0F0F] h-[40px]">Recommended </h1>
                </div>
                <div class="h-[70%] w-full flex flex-col md:flex-row items-center md:justify-center gap-x-12">
                    <div class="h-[60%] md:h-[95%] w-[96%] md:w-1/3 rounded-lg border-2">
                        <div class="h-[50%]">
                            <img src="img/news/news5.jpg" class="h-full w-full  rounded-t-lg" alt=" picture ">
                        </div>
                        <div class="h-[50%] mx-3">
                            <div class="h-[20%] flex items-end">
                                <h1 class="text-base md:text-lg font-semibold tracking-wide text-[#860909]">Title Here</h1>
                            </div>
                            <div class="h-[55%] flex items-center">
                                <p class="font-montserrat text-xs md:text-sm font-medium text-justify leading-loose mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="h-[25%] flex justify-start mt-1 md:justify-center items-start">
                                <a href="/home-news" class="font-montserrat h-[75%] btn rounded text-xs font-semibold bg-black text-white p-2 px-5 hover:bg-[#860909] flex justify-center items-center"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="h-[60%] md:h-[95%] w-[96%] md:w-1/3 rounded-lg border-2">
                        <div class="h-[50%]">
                            <img src="img/news/news5.jpg" class="h-full w-full  rounded-t-lg" alt=" picture ">
                        </div>
                        <div class="h-[50%] mx-3">
                            <div class="h-[20%] flex items-end">
                                <h1 class="text-base md:text-lg font-semibold tracking-wide text-[#860909]">Title Here</h1>
                            </div>
                            <div class="h-[55%] flex items-center">
                                <p class="font-montserrat text-xs md:text-sm font-medium text-justify leading-loose mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="h-[25%] flex justify-start mt-1 md:justify-center items-start">
                                <a href="/home-news" class="font-montserrat h-[75%] btn rounded text-xs font-semibold bg-black text-white p-2 px-5 hover:bg-[#860909] flex justify-center items-center"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="h-[60%] md:h-[95%] w-[96%] md:w-1/3 rounded-lg border-2">
                        <div class="h-[50%]">
                            <img src="img/news/news5.jpg" class="h-full w-full  rounded-t-lg" alt=" picture ">
                        </div>
                        <div class="h-[50%] mx-3">
                            <div class="h-[20%] flex items-end">
                                <h1 class="text-base md:text-lg font-semibold tracking-wide text-[#860909]">Title Here</h1>
                            </div>
                            <div class="h-[55%] flex items-center">
                                <p class="font-montserrat text-xs md:text-sm font-medium text-justify leading-loose mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="h-[25%] flex justify-start mt-1 md:justify-center items-start">
                                <a href="/home-news" class="font-montserrat h-[75%] btn rounded text-xs font-semibold bg-black text-white p-2 px-5 hover:bg-[#860909] flex justify-center items-center"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Pagination --}}
                <div class="h-[5%] md:h-[18%] w-full flex items-center justify-center md:justify-end " >
                    <div class="h-[80%] w-[80%] md:w-1/3 flex justify-center items-center gap-1 gap-x-2">
                        <a href="#" class="h-[60%] w-[25%] rounded flex justify-center items-center border text-red-900 opacity-50  ">
                            <
                        </a>
                        <a href="#" class="h-[60%] w-[15%] rounded flex justify-center items-center border text-white bg-red-900">
                            1
                        </a>
                        <a href="/news2" class="h-[60%] w-[15%] rounded flex justify-center items-center border text-red-900">
                            2
                        </a>
                        <a href="#" class="h-[60%] w-[15%] rounded flex justify-center items-center border text-red-900">
                            3
                        </a>
                        <a href="#" class="h-[60%] w-[25%] rounded flex justify-center items-center border text-red-900">
                            >   
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('main')

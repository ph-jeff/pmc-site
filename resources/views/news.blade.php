@extends('layouts/app')
@section('title')
  News
@endsection('title')
@section('main')
<!-- Sticky Navigation Bar (Website View - news page) -->
<nav class="hidden md:h-20 md:flex md:justify-around md:sticky md:top-0 md:z-50 md:bg-black">
    <div class="h-full w-1/5 flex items-center">
        <a href="">
            <img class="" src="img/pmc_logo.png" alt="logo" >
        </a>
    </div>
    <div class="w-3/6 flex items-center justify-end">
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
    <div class="bg-white bg-opacity-75">
        <div class="mx-8 lg:mx-36">
            <div class="h-7/100 md:h-30/100 flex justify-center items-center">
                <h1 class="font-bebas mt-10 mb-10 md:mt-20 text-4xl md:text-5xl text-center font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-900 to-red-600"> NEWS AND UPDATE </h1>
              </div>
            {{-- Sort --}}
            <div class="h-[10vh] flex items-center mb-2 justify-between">
                <div class="h-2 flex items-center gap-x-1 ml-2 md:ml-0">
                    <span >Show</span>
                    <select class="border border-gray-300 w-full h-10 rounded px-2 py-1">
                        <option value="">0</option>
                        <option value="">5</option>
                        <option value="">10</option>
                        <option value="">25</option>
                        <option value="">50</option>
                        </select>
                </div>
                  <div class="relative mr-2 md:mr-0">
                    <input type="text" placeholder="Search..." class="w-[100%] h-[42px] border border-gray-300 shadow-md shadow-gray-300 rounded-full px-4 py-2 focus:outline-none ">
                    <button class="absolute w-6 right-2 top-2"> <img src="img/search.png" class=" opacity-80" alt=""></button>
                </div>
            </div>

            {{-- NEWS --}}
            <div class="grid md:grid-cols-2 gap-0 md:gap-4 h-screen mx">
                <div class="col-span-2 md:col-span-1 mb-5 md:mr-4 md:h-3/5 bg-red-500">
                    <div class="relative imgSliderNews h-full w-full" >
                        {{-- <img src="img/news/news10.jpg" class="h-full w-full" alt=""> --}}
                        <div class="absolute h-[45%] md:h-[37%] flex flex-col bg-black  bg-opacity-40 justify-center align-center w-full bottom-0 bg-black/[50%] text-white px-6 md:px-8">
                            <div class="flex items-end mt-0 md:mt-5 ">
                                <h1 class="text-lg md:text-2xl font-bold font-montserrat">Title Here</h1>
                            </div>
                            <div class=" ">
                                <p class="text-justify text-[13px] md:text-[16px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                            </div>
                            <div class="">
                                <button class=" px-3 py-1 md:py-2 font-monserrat text-[8px] md:text-sm font-semibold rounded-md bg-black/[75%] shadow-md shadow-white/[15%] mb-2 bg-black bg-opacity-75 hover:bg-red-900">READ FULL ARTICLE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 md:col-span-1 md:ml-4 h-3/5 bg-blue-500">
                    {{-- 3 boxes --}}
                    <div class="flex flex-col flex-shrink-0 gap-5 w-full h-full">
                        <div class="w-full flex h-44 bg-green-500">
                            <img src="img/news/news9.jpg" class="w-52 h-full" alt="">
                            <div class="p-5">
                                <h1 class="text-red-900 text-xl font-semibold leading-8"> Title Here</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum omnis similique animi iusto facilis unde et enim esse vero voluptate.</p>
                            </div>
                        </div>
                        <div class="w-full flex h-44 bg-green-500">
                            <img src="img/news/news9.jpg" class="w-52 h-full" alt="">
                            <div class="p-5">
                                <h1 class="text-red-900 text-xl font-semibold leading-8"> Title Here</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum omnis similique animi iusto facilis unde et enim esse vero voluptate.</p>
                            </div>
                        </div>
                        <div class="w-full flex h-44 bg-green-500">
                            <img src="img/news/news9.jpg" class="w-52 h-full" alt="">
                            <div class="p-5">
                                <h1 class="text-red-900 text-xl font-semibold leading-8"> Title Here</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum omnis similique animi iusto facilis unde et enim esse vero voluptate.</p>
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

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('main')

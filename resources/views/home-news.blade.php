@extends('layouts/app')
@section('title')
    Home News
@endsection('title')

@section('main')
<!-- Sticky Navigation Bar -->
<nav class="md:h-20 flex justify-around sticky top-0 z-50 bg-black">
    <div class="h-full w-[20%] flex items-center">
        <a href="">
            <img class="" src="img/pmc_logo.png" alt="logo" >
        </a>
    </div>
    <div class="w-6/12 flex items-center justify-end">
        <ul class="flex">        
            <li class="p-3 px-5 bg-danger"><a class="text-white text-base font-semibold" href="/"> Home </a></li>
            <li class="p-3 px-5 hover:bg-[#860909]"><a class="text-white text-base font-semibold" href="/about"> About </a></li>
            <li class="p-3 px-5 hover:bg-[#860909]"><a class="text-white text-base font-semibold" href="/team"> Team </a></li>
            <li class="p-3 px-5 hover:bg-[#860909]"><a class="text-white text-base font-semibold" href="/news"> News </a></li>
            <li class="p-3 px-5 hover:bg-[#860909]"><a class="text-white text-base font-semibold" href="/career"> Career </a></li>
            <li class="p-3 px-5 hover:bg-[#860909]"><a class="text-white text-base font-semibold" href="/contact"> Contact </a></li>
        </ul>
    </div>
</nav>
    <!-- First Section -->
    <div class="h-[70vh] flex justify-center items-end">
        <div class="h-[85%] w-[83%] flex items-end ">
            <div class="h-full w-[50%]">
                <div class="h-[90%] w-[90%] ">
                    <img class="h-full w-full rounded-t-lg" src="img/news/news4.png" alt="">
                </div>
            </div>
            <div class="h-full w-[50%]">
                <div class="h-[15%] flex items-center">
                    <h1 class="text-1xl tracking-wide font-semibold text-[#860909]">Title Here</h1> 
                </div>
                <div class="h-[85%] montserrat text-sm text-justify font-semibold leading-loose">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non diam phasellus vestibulum lorem. Urna condimentum mattis pellentesque id. Aliquam sem fringilla ut morbi tincidunt augue interdum velit. Sed viverra tellus in hac.</p>
                    <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non diam phasellus vestibulum lorem. Urna condimentum mattis pellentesque id. Aliquam sem fringilla ut morbi tincidunt augue interdum velit. Sed viverra tellus in hac.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Second Section -->
    <div class="h-[73vh]">
        <div class="h-full w-full flex justify-center gap-x-10 mt-5">
            <div class="h-[85%] w-[25%] rounded-lg border">
                <div class="h-2/4">
                    <img src="img/news/news5.jpg" class="h-full w-full  rounded-t-lg" alt=" picture ">
                </div>
                <div class="h-2/4 mx-3 mt-2">
                    <div class=" flex items-center">
                        <p class="montserrat text-sm font-medium text-justify leading-loose mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="h-[85%] w-[27%] rounded-lg border">
                <div class="h-2/4">
                    <img src="img/news/news6.jpg" class="h-full w-full  rounded-t-lg" alt=" picture ">
                </div>
                <div class="h-2/4 mx-3 mt-2">
                    <div class=" flex items-center">
                        <p class="montserrat text-sm font-medium text-justify leading-loose mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="h-[85%] w-[27%] rounded-lg border">
                <div class="h-2/4">
                    <img src="img/news/news7.jpg" class="h-full w-full  rounded-t-lg" alt=" picture ">
                </div>
                <div class="h-2/4 mx-3 mt-2">
                    <div class=" flex items-center">
                        <p class="montserrat text-sm font-medium text-justify leading-loose mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection('main')
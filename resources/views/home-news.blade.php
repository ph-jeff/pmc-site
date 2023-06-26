@extends('layouts/app')
@section('title')
    Home News
@endsection('title')

@section('main')
<!-- Sticky Navigation Bar -->
<nav class="hidden md:block md:h-20 md:flex justify-around sticky top-0 z-50 bg-black">
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
<div class="background-cover bg-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg'); ">
    <div class="bg-white bg-opacity-75 flex justify-center">
        <div class="w-11/12 lg:w-4/5">
            <div class="lg:flex mt-10 md:mt-10 lg:mt-20 gap-10">
                <div class="w-full lg:w-1/2 h-48 sm:h-60 lg:h-96">
                    <img src="img/news/news4.png" class="h-full w-full object-cover rounded-t-lg" alt=" picture ">
                </div>
                <div class="w-full lg:w-1/2 h-auto mt-3 lg:mt-0 lg:h-96 font-montserrat">
                    <div class=" flex items-center lg:mt-2">
                        <h1 class="text-lg lg:text-xl text-red-900 font-bold lg:font-semibold">Title Here</h1>
                    </div>
                    <div class=" text-justify text-base font-medium mt-1">
                        <p class="mb-3 md:mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non diam phasellus vestibulum lorem. Urna condimentum mattis pellentesque id. Aliquam sem fringilla ut morbi tincidunt augue interdum velit. Sed viverra tellus in hac.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non diam phasellus vestibulum lorem. Urna condimentum mattis pellentesque id. Aliquam sem fringilla ut morbi tincidunt augue interdum velit. Sed viverra tellus in hac.</p>
                    </div>
                </div>
            </div>
            <div class="md:flex h-auto md:h-52 gap-10 mt-7 md:mt-14">
                <div class="h-52 w-full mb-5 md:mb-0">
                    <img src="img/news/news5.jpg" class="h-full w-full object-cover" alt="">
                </div>
                <div class="h-52 w-full mb-5 md:mb-0">
                    <img src="img/news/news6.jpg" class="h-full w-full object-cover" alt="">
                </div>
                <div class="h-52 w-full">
                    <img src="img/news/news7.jpg" class="h-full w-full object-cover" alt="">
                </div>
            </div>
            <div class="h-auto ">
                <div class="text-justify text-base font-medium mt-5 font-montserrat">
                    <p class="mb-3 md:mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non diam phasellus vestibulum lorem. Urna condimentum mattis pellentesque id. Aliquam sem fringilla ut morbi tincidunt augue interdum velit. Sed viverra tellus in hac.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non diam phasellus vestibulum lorem. Urna condimentum mattis pellentesque id. Aliquam sem fringilla ut morbi tincidunt augue interdum velit. Sed viverra tellus in hac. lorem</p>
                </div>
                <div class="h-9 md:h-10 my-5 flex justify-center items-center">
                    <a href="/career" class="font-montserrat font-semibold border-2 border-black rounded-md text-black w-28 md:w-36 h-full hover:bg-red-900  hover:border-red-900 hover:text-white flex justify-center items-center">BACK</a>
                </div>
            </div>
        </div>
        
    </div>
</div>
    {{-- <!-- First Section -->
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
     --}}
@endsection('main')
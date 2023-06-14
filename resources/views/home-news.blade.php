@extends('layouts/app')
@section('title')
    Home News
@endsection('title')

@section('main')
<!-- Sticky Navigation Bar -->
<nav class="hidden md:h-20 md:flex md:justify-around md:sticky md:top-0 md:z-50 md:bg-black">
    <div class="flex w-full h-20 justify-center items-center">
        <div class="w-11/12 md:w-11/12 lg:w-9/12 flex justify-between content-center">
            <div>
                <a href="/">
                    <img class="" src="img/pmclogo.png" alt="logo" >
                </a>
            </div>
            <ul class="flex gap-1 text-center items-center">
                <li class="h-12 w-20 flex justify-center items-center bg-danger"><a class="text-white text-base font-semibold  " href="/"> Home </a></li>
                <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/about"> About </a></li>
                <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/team"> Team </a></li>
                <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/news"> News </a></li>
                <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/career"> Career </a></li>
                <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/contact"> Contact </a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="background-cover bg-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg'); ">
    <div class="bg-white bg-opacity-75 flex justify-center">
        <div class="w-11/12 md:w-11/12 lg:w-9/12">
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
@endsection('main')
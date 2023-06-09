@extends('layouts/app')
@section('title')
    About
@endsection('title')

@section('main')
<!-- Sticky Navigation Bar (Website View - homepage) -->
<nav class="hidden md:min-h-[91px] md:h-20 md:flex md:justify-around md:sticky md:top-0 md:z-50 md:bg-black">
    <div class="h-full w-[20%] flex items-center">
        <a href="">
            <img class="" src="img/pmc_logo.png" alt="logo" >
        </a>
    </div>
    <div class="w-[50%] flex items-center justify-end">
        <ul class="flex">        
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold " href="/"> Home </a></li>
            <li class="p-3 px-5 bg-danger"><a class="text-white text-base font-semibold" href="/about"> About </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/team"> Team </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/news"> News </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/career"> Career </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/contact"> Contact </a></li>
        </ul>
    </div>
</nav>
{{-- Image Slider --}}
<div class="imgSliderAbout object-cover h-44 md:h-96"></div>


<div class="background-cover bg-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg'); ">
    <div class="bg-white bg-opacity-75 flex justify-center">
        <div class="w-11/12 md:w-11/12 lg:w-9/12">
            {{-- About Content --}}
            <div class="flex justify-center">
                <div class="lg:w-11/12">
                    <div class="md:h-auto flex justify-center">
                        <h1 class="font-bebas text-3xl md:text-5xl text-center text-transparent bg-clip-text bg-gradient-to-r from-red-900 via-red-800 to-red-500 md:tracking-wider mt-5 md:mt-14">
                            ABOUT US
                        </h1>
                    </div>
                    <p class="font-montserrat text-base md:text-base font-normal text-center md:mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam </p>
                </div>
            </div>
            <div class="relative h-44 md:h-80 w-full mt-5 ">
                <img src="img/about/about_us.png" alt="" class="h-full w-full object-cover">
                <div class="absolute -bottom-1/2 sm:-bottom-1/4 md:-bottom-1/4 lg:-bottom-1/3 h-auto flex justify-center">
                    <div class="w-11/12 md:w-10/12 bg-white filter drop-shadow-md shadow-gray-500 p-2 md:p-5">
                        <h2 class="font-montserrat font-semibold text-lg sm:text-sm md:text-lg mb-2">Welcome to Our Site</h2>
                        <p class="font-montserrat text-sm sm:text-xs md:text-base font-normal text-justify md:mb-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At auctor urna nunc id cursus. Consequat semper viverra nam libero justo laoreet sit amet cursus.</p>
                        <p class="hidden lg:block font-montserrat sm:text-xs md:text-base font-normal text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At auctor urna nunc id cursus. Consequat semper viverra nam libero justo laoreet sit amet cursus.</</p>
                    </div>
                </div>
            </div>
            <div class="mt-28 sm:mt-20 md:mt-28 lg:mt-40 lg:flex gap-10" x-data="{about: false}">
                <div class="lg:w-2/5 flex justify-center items-start ">
                    <div class="h-full w-48 md:w-72 lg:w-full bg-danger rounded-2xl p-5">
                        <img class="h-full w-full" src="img/about/award.jpg" alt="award">
                    </div>
                </div>
                <div class=" h-auto w-full md:w-full lg:w-3/5">
                    <div class="h-full w-full">
                        <p class="text-center lg:text-left lg:justify-start  text-base md:text-lg font-montserrat font-semibold text-red-900 mt-3 leading-tight md:leading-none">BEST START-UP RISING E-COMMERCE COMPANY FOR 2022.</p>
                        <p class="text-sm md:text-base font-normal text-center md:text-justify font-montserrat font-normal md:leading-7 my-2 line-clamp-5 md:line-clamp-0" >
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum.
                        </p>
                        <p class="hidden lg:block text-sm md:text-base font-normal text-center md:text-justify font-montserrat font-normal md:leading-7 line-clamp-5 md:line-clamp-none">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                        </p>
                        <p class="text-sm md:text-base font-normal text-center md:text-justify font-montserrat font-normal md:leading-7  line-clamp-5 md:line-clamp-none" x-show="about">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                        </p>
                        <div class="block lg:hidden w-full flex justify-center lg:justify-start mt-2">
                            <button class="bg-black text-white h-9 md:h-10 w-24 md:w-28 font-montserrat text-center text-[.8rem] md:text-[14px] font-medium md:ml-[45px] mt-[10px] md:mt-[15px] hover:bg-[#860909]" @click="about = !about">Read more</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="md:h-auto flex justify-center">
                    <h1 class="font-bebas text-2xl md:text-5xl tracking-wider text-center text-transparent bg-clip-text bg-gradient-to-r from-red-900 via-red-800 to-red-500 md:tracking-wider mt-5 md:mt-14">
                        COMPANY MISSION VISION AND CORE VALUES
                    </h1>
                </div>
                <p class="text-base text-center md:text-base font-montserrat font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore  </p>
                <div class="md:flex gap-10 mt-5">
                    <div class="w-full flex justify-center mb-5 lg:mb-0">
                        <div class="h-96 w-9/12 md:w-full bg-gray-400 bg-cover bg-repeat-norepeat" style="background-image: url('img/about/vision.png')">
                            <p class="font-bebas text-4xl text-white ml-3 mt-48">OUR VISION</p>
                            <p class="font-montserrat text-sm text-justify text-white ml-3 mr-3 mb-4 md:mb-0 leading-light md:leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="w-full flex justify-center mb-5 lg:mb-0">
                        <div class="h-96 w-9/12 md:w-full bg-gray-500 bg-cover bg-repeat-norepeat" style="background-image: url('img/about/mission.png')">
                            <p class="font-bebas text-4xl text-white ml-3 mt-48">OUR MISSION</p>
                            <p class="font-montserrat text-sm text-justify text-white ml-3 mr-3 mb-4 md:mb-0 leading-light md:leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="w-full flex justify-center mb-5 lg:mb-0">
                        <div class="h-96 w-9/12 md:w-full bg-gray-600 bg-cover bg-repeat-norepeat" style="background-image: url('img/about/values.png')">
                            <p class="font-bebas text-4xl text-white ml-3 mt-48">OUR CORE VALUES</p>
                            <p class="font-montserrat text-sm text-justify text-white ml-3 mr-3 mb-4 md:mb-0 leading-light md:leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('main')

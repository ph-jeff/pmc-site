@extends('layouts/app')
@section('title')
    Home News
@endsection('title')

@section('main')
<!-- Sticky Navigation Bar -->
<nav class="hidden md:h-20 md:flex md:justify-around md:sticky md:top-0 md:z-50 md:bg-black">
    <div class="flex items-center justify-center w-full h-20">
        <div class="flex content-center justify-between w-11/12 md:w-11/12 lg:w-9/12">
            <div>
                <a href="/">
                    <img class="" src="img/pmclogo.png" alt="logo" >
                </a>
            </div>
            <ul class="flex items-center gap-1 text-center">
                <a class="text-base font-semibold text-white " href="/"><li class="flex items-center justify-center w-20 h-12 bg-danger"> Home </li></a>
                <a class="text-base font-semibold text-white" href="/about"><li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> About </li></a>
                <a class="text-base font-semibold text-white" href="/team"><li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> Team </li></a>
                <a class="text-base font-semibold text-white" href="/news"><li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> News </li></a>
                <a class="text-base font-semibold text-white" href="/career"><li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> Career </li></a>
                <a class="text-base font-semibold text-white" href="/contact"><li class="flex items-center justify-center w-20 h-12 hover:bg-danger"> Contact </li></a>
            </ul>
        </div>
    </div>
</nav>
<div class="bg-cover background-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg'); ">
    <div class="flex justify-center bg-white bg-opacity-75">
        <div class="w-11/12 lg:w-4/5">
            <div class="gap-10 mt-10 lg:flex md:mt-10 lg:mt-20">
                <div class="w-full h-48 lg:w-1/2 sm:h-60 lg:h-96">
                    <img src="img/placeholder.jpg" class="object-cover w-full h-full rounded-t-lg" aria-placeholder="" alt=" picture ">
                </div>
                <div class="w-full h-auto mt-3 lg:w-1/2 lg:mt-0 lg:h-96 font-montserrat">
                    <div class="flex items-center lg:mt-2">
                        <h1 class="text-lg font-bold text-red-900 lg:text-xl lg:font-semibold">Title Here</h1>
                    </div>
                    <div class="mt-1 text-base font-medium text-justify ">
                        <p class="mb-3 md:mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non diam phasellus vestibulum lorem. Urna condimentum mattis pellentesque id. Aliquam sem fringilla ut morbi tincidunt augue interdum velit. Sed viverra tellus in hac.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non diam phasellus vestibulum lorem. Urna condimentum mattis pellentesque id. Aliquam sem fringilla ut morbi tincidunt augue interdum velit. Sed viverra tellus in hac.</p>
                    </div>
                </div>
            </div>
            <div class="h-auto gap-10 md:flex md:h-52 mt-7 md:mt-14">
                <div class="w-full mb-5 h-52 md:mb-0">
                    <img src="img/news/news5.jpg" class="object-cover w-full h-full" alt="">
                </div>
                <div class="w-full mb-5 h-52 md:mb-0">
                    <img src="img/news/news6.jpg" class="object-cover w-full h-full" alt="">
                </div>
                <div class="w-full h-52">
                    <img src="img/news/news7.jpg" class="object-cover w-full h-full" alt="">
                </div>
            </div>
            <div class="h-auto ">
                <div class="mt-5 text-base font-medium text-justify font-montserrat">
                    <p class="mb-3 md:mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non diam phasellus vestibulum lorem. Urna condimentum mattis pellentesque id. Aliquam sem fringilla ut morbi tincidunt augue interdum velit. Sed viverra tellus in hac.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non diam phasellus vestibulum lorem. Urna condimentum mattis pellentesque id. Aliquam sem fringilla ut morbi tincidunt augue interdum velit. Sed viverra tellus in hac. lorem</p>
                </div>
                <div class="flex items-center justify-center my-5 h-9 md:h-10">
                    <a href="/" class="flex items-center justify-center h-full font-semibold text-black border-2 border-black rounded-md font-montserrat w-28 md:w-36 hover:bg-red-900 hover:border-red-900 hover:text-white">BACK</a>
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
                    <img class="w-full h-full rounded-t-lg" src="img/news/news4.png" alt="">
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
        <div class="flex justify-center w-full h-full mt-5 gap-x-10">
            <div class="h-[85%] w-[25%] rounded-lg border">
                <div class="h-2/4">
                    <img src="img/news/news5.jpg" class="w-full h-full rounded-t-lg" alt=" picture ">
                </div>
                <div class="mx-3 mt-2 h-2/4">
                    <div class="flex items-center ">
                        <p class="mt-2 text-sm font-medium leading-loose text-justify montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="h-[85%] w-[27%] rounded-lg border">
                <div class="h-2/4">
                    <img src="img/news/news6.jpg" class="w-full h-full rounded-t-lg" alt=" picture ">
                </div>
                <div class="mx-3 mt-2 h-2/4">
                    <div class="flex items-center ">
                        <p class="mt-2 text-sm font-medium leading-loose text-justify montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="h-[85%] w-[27%] rounded-lg border">
                <div class="h-2/4">
                    <img src="img/news/news7.jpg" class="w-full h-full rounded-t-lg" alt=" picture ">
                </div>
                <div class="mx-3 mt-2 h-2/4">
                    <div class="flex items-center ">
                        <p class="mt-2 text-sm font-medium leading-loose text-justify montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
     --}}
@endsection('main')

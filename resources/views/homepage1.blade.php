@extends('layouts/app1')
@section('title')
    Home
@endsection('title')

@section('main')
    <!-- Sticky Navigation Bar (Website View - homepage) -->
    <nav class="hidden md:block h-full bg-black z-50 sticky top-0">
        <div class="flex w-full h-20 justify-center items-center">
            <div class="w-11/12 md:w-11/12 lg:w-9/12 flex justify-between content-center">
                <div>
                    <a href="">
                        <img class="" src="img/logo.png" alt="logo" >
                    </a>
                </div>
                <ul class="flex gap-1 text-center items-center">
                    <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold  " href="/"> Home </a></li>
                    <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/about"> About </a></li>
                    <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/team"> Team </a></li>
                    <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/news"> News </a></li>
                    <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/career"> Career </a></li>
                    <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/contact"> Contact </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <!-- First Section (Get Started) -->
        <div class="imgSlider relative h-screen h-screen md:min-h-500px w-full flex justify-center items-start">
            <div class="relative h-full w-9/12 flex montserrat text-center text-white">
                <div class="absolute mt-20 md:mt-20 w-full top-96 sm:top-8 md:top-8">
                    <div class="h-12 md:h-12 flex items-end justify-center"> 
                        <h1 class=" font-bold tracking-wider text-3xl sm:text-5xl lg:text-6xl">Insert Caption Here!</h1>
                    </div>
                    <div class="flex justify-center items-center font-montserrat mt-4 md:mt-6">
                        <div class=" w-full md:w-4/5 flex justify-center">
                            <p class=" flex justify-center text-sm md:text-xl font-montserrat font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="mt-3 h-1/4 md:h-1/4 w-full flex justify-center items-start">
                        <a href="/about" class="p-2.5 px-5 rounded bg-danger hover:bg-red-900 text-2xl font-bebas tracking-widest border-2 border-red-900 ">GET STARTED</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection('main')
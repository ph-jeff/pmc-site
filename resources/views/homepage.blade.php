@extends('layouts/app')
@section('title')
    Home
@endsection('title')

@section('main')
    <!-- Sticky Navigation Bar (Website View - homepage) -->
    <nav class="hidden md:min-h-91px md:h-20 md:flex md:justify-between px-40 md:sticky md:top-0 md:z-50 md:bg-black">
        <div class="h-full w-[20%] flex items-center">
            <a href="">
                <img class="" src="img/pmc_logo.png" alt="logo" >
            </a>
        </div>
        <div class="w-[50%] flex items-center justify-end">
            <ul class="flex">
                <li class="p-3 px-5 bg-danger"><a class="text-white text-base font-semibold " href="/"> Home </a></li>
                <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/about"> About </a></li>
                <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/team"> Team </a></li>
                <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/news"> News </a></li>
                <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/career"> Career </a></li>
                <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/contact"> Contact </a></li>
            </ul>
        </div>
    </nav>

    <main >
        <!-- First Section (Get Started) -->
        <div class=" min-h-screen md:min-h-500px md:h-screen flex justify-center items-end">
            <div class="imgSlider relative h-screen h-screen md:min-h-500px w-full flex justify-center items-start">
                <div class="relative h-full md:h-6/12 w-9/12 md:w-9/12 md:mt-[6%] flex montserrat text-center text-white">
                    <div class="absolute md:mt-20 w-full top-[5%]">
                        <div class="h-[40%] md:h-[20%] flex items-end justify-center"> 
                            <h1 class=" font-bold tracking-wider text-2xl md:text-6xl">Insert Caption Here!</h1>
                        </div>
                        <div class="flex justify-center items-center font-montserrat mt-4 md:mt-6">
                            <div class=" w-full md:w-4/5 flex justify-center">
                                <p class=" flex justify-center md:text-xl font-montserrat font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="mt-3 h-1/4 md:h-1/4 w-full flex justify-center items-start">
                            <a href="/about" class="p-2.5 px-5 rounded bg-danger hover:bg-red-900 text-2xl font-bebas tracking-widest border-2 border-red-900">GET STARTED</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Second Section (Why Choose Us?) -->
        <div class="background-cover bg-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg');">
            <div class="h-screen md:min-h-[700px] border-b bg-white/[75%]" >
                <div class="h-[20%] md:h-[25%]">
                    <div class="h-[40%] md:h-2/4 flex justify-center items-end">
                        <h1 class="font-montserrat font-bold text-[1.3rem] md:text-4xl text-transparent bg-clip-text bg-gradient-to-r from-[#5E0505] to-[#9A0F0F]">
                            Why Choose Us?
                        </h1>
                    </div>
                    <div class="h-[60%] md:h-2/4 w-full font-normal text-lg flex justify-center item-center ">
                        <p class=" w-[90%] md:w-[60%] text-[1rem] md:text-xl leading-tight text-center flex items-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                    </div>
                </div>
                <div class="h-[78%] md:h-[75%]">
                    <div class="h-[50%] w-full md:flex gap-x-14">
                        <div class="h-2/4 md:h-full w-full flex justify-center md:justify-end items-center ">
                            <div class="h-[80%] w-[90%] md:w-[75%] shadow-md shadow-gray-200 flex rounded-[24.7765px] ">
                                <div class="h-full w-[23%] p-4">
                                    <div class="avatar aspect-square rounded-full bg-[#A70000]">
                                    </div>
                                </div>
                                <div class="h-full w-[77%] mx-3">
                                    <div class="h-[33%] w-full flex items-center">
                                    <h1 class="text-[1rem] font-bold md:font-normal md:text-1xl tracking-wide text-[#860909]">Title Here </h1>
                                    </div>
                                    <div class="h-[67%] w-full ">
                                        <p class="text-[1rem] md:text-base text-justify text-black leading-tight md:leading-relaxed line-clamp-3 md:line-clamp-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. dolor sit amet, consectetur adipiscing adipiscing </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-2/4 md:h-full w-full flex justify-center md:justify-start items-center">
                            <div class="h-[80%] w-[90%] md:w-[75%] shadow-md shadow-gray-200 flex rounded-[24.7765px]">
                                <div class="h-full w-[23%] p-4">
                                    <div class="avatar aspect-square rounded-full bg-[#A70000]">
                                    </div>
                                </div>
                                <div class="h-full w-[77%] mx-3">
                                    <div class="h-[33%] w-full flex items-center">
                                    <h1 class="text-[1rem] font-bold md:font-normal md:text-1xl tracking-wide text-[#860909]">Title Here </h1>
                                    </div>
                                    <div class="h-[67%] w-full ">
                                        <p class="text-[1rem] md:text-normal  text-justify text-black leading-tight md:leading-relaxed line-clamp-3 md:line-clamp-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. dolor sit amet, consectetur adipiscing adipiscing </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-[50%] w-full md:flex gap-x-14">
                        <div class="h-2/4 md:h-full w-full flex justify-center md:justify-end items-center ">
                            <div class="h-[80%] w-[90%] md:w-[75%] shadow-md shadow-gray-200 flex rounded-[24.7765px] ">
                                <div class="h-full w-[23%] p-4">
                                    <div class="avatar aspect-square rounded-full bg-[#A70000]">
                                    </div>
                                </div>
                                <div class="h-full w-[77%] mx-3">
                                    <div class="h-[33%] w-full flex items-center">
                                    <h1 class="text-[1rem] font-bold md:font-normal md:text-1xl tracking-wide text-[#860909]">Title Here </h1>
                                    </div>
                                    <div class="h-[67%] w-full ">
                                        <p class="text-[1rem] md:text-normal  text-justify text-black leading-tight md:leading-relaxed line-clamp-3 md:line-clamp-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. dolor sit amet, consectetur adipiscing adipiscing </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-2/4 md:h-full w-full flex justify-center md:justify-start items-center">
                            <div class="h-[80%] w-[90%] md:w-[75%] shadow-md shadow-gray-200 flex rounded-[24.7765px]">
                                <div class="h-full w-[23%] p-4">
                                    <div class="avatar aspect-square rounded-full bg-[#A70000]">
                                    </div>
                                </div>
                                <div class="h-full w-[77%] mx-3">
                                    <div class="h-[33%] w-full flex items-center">
                                    <h1 class="text-[1rem] font-bold md:font-normal md:text-1xl tracking-wide text-[#860909]">Title Here </h1>
                                    </div>
                                    <div class="h-[67%] w-full ">
                                        <p class="text-[1rem] md:text-normal  text-justify text-black leading-tight md:leading-relaxed line-clamp-3 md:line-clamp-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. dolor sit amet, consectetur adipiscing adipiscing </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third Section (Latest News) -->
            <div class=" md:min-h-[700px] md:h-[100vh] border-b bg-white/[75%]">
                <div class="h-[50%] md:h-1/6 w-full pt-3 pb-3 md:pt-3 md:pb-0">
                    <div class="h-full md:h-full ">
                        <div class="h-[50%] md:h-2/4 flex justify-center items-end ">
                            <h1 class="font-montserrat font-bold text-[1.3rem] md:text-4xl text-transparent bg-clip-text bg-gradient-to-r from-[#5E0505] to-[#9A0F0F]">
                                Latest News
                            </h1>
                        </div>
                        <div class="h-[50%] md:h-2/4 w-full font-normal text-lg flex justify-center m-auto items-start">
                            <p class="w-[80%] md:w-[60%] text-[1rem] md:text-xl leading-tight text-center flex justify-center items-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        </div>
                    </div>
                </div>
                <!-- Cards -->
                <div class="h-[70%] md:h-2/3 w-full md:flex md:justify-center md:items-center md:gap-x-12">
                    <div class="h-[90%] md:h-[80%] w-full md:w-1/4 flex justify-center items-center mb-2 md:mb-0">
                        <div class="h-full md:h-auto w-[90%] md:w-full rounded-lg border-2">
                            <div class="relative pb-[40%] md:pb-[70%]">
                                <img src="img/news/news1.png" class="absolute h-full w-full object-cover md:rounded-t-lg" alt=" picture ">
                            </div>
                            <div class="h-[45%] mx-3 ">
                                <div class="h-[20%] flex items-end pt-1 md:pt-0">
                                    <h1 class=" md:mt-2 text-lg tracking-wide text-[#860909]">Title Here</h1>
                                </div>
                                <div class="h-[50%] flex md:items-center">
                                    <p class="font-montserrat text-small font-medium text-justify md:leading-loose md:mt-2 md:line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="h-[30%] flex justify-start pt-1 pb-1 md:pt-1 md:pb-1 md:mb-3 md:mt-1 md:pt-0 md:justify-center items-center ">
                                    <a href="/home-news" class="font-montserrat h-[55%] btn rounded text-xs bg-black text-white p-2 px-4 hover:bg-[#860909]"> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-[90%] md:h-[80%] w-full md:w-1/4 flex justify-center items-center mb-2 md:mb-0">
                        <div class="h-full md:h-auto w-[90%] md:w-full rounded-lg border-2">
                            <div class="relative pb-[40%] md:pb-[70%]">
                                <img src="img/news/news2.png" class="absolute h-full w-full object-cover md:rounded-t-lg" alt=" picture ">
                            </div>
                            <div class="h-[45%] mx-3 ">
                                <div class="h-[20%] flex items-end pt-1 md:pt-0">
                                    <h1 class=" md:mt-2 text-lg tracking-wide text-[#860909]">Title Here</h1>
                                </div>
                                <div class="h-[50%] flex md:items-center">
                                    <p class="font-montserrat text-small font-medium text-justify md:leading-loose md:mt-2 md:line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="h-[30%] flex justify-start pt-1 pb-1 md:pt-1 md:pb-1 md:mb-3 md:mt-1 md:pt-0 md:justify-center items-center ">
                                    <a href="/home-news" class="font-montserrat h-[55%] btn rounded text-xs bg-black text-white p-2 px-4 hover:bg-[#860909]"> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-[90%] md:h-[80%] w-full md:w-1/4 flex justify-center  items-center">
                        <div class="h-full md:h-auto w-[90%] md:w-full rounded-lg border-2">
                            <div class="relative pb-[40%] md:pb-[70%]">
                                <img src="img/news/news3.png" class="absolute h-full w-full object-cover md:rounded-t-lg" alt=" picture ">
                            </div>
                            <div class="h-[45%] mx-3 ">
                                <div class="h-[20%] flex items-end pt-1 md:pt-0">
                                    <h1 class=" md:mt-2 text-lg tracking-wide text-[#860909]">Title Here</h1>
                                </div>
                                <div class="h-[50%] flex md:items-center">
                                    <p class="font-montserrat text-small font-medium text-justify md:leading-loose md:mt-2 md:line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="h-[30%] flex justify-start pt-1 pb-1 md:pt-1 md:pb-1 md:mb-3 md:mt-1 md:pt-0 md:justify-center items-center ">
                                    <a href="/home-news" class="font-montserrat h-[55%] btn rounded text-xs bg-black text-white p-2 px-4 hover:bg-[#860909]"> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- See More Button -->
                <div class="md:h-1/6 w-full flex justify-center items-start mb-4 md:mt-5 md:mb-0 ">
                    <a href="/news" class=" p-1 md:p-0 font-montserrat text-sm h-full md:h-[39%] w-[25%] md:w-[13%] flex justify-center items-center md:rounded outline outline-1 text-gray-700 font-semibold hover:bg-[#860909] hover:text-white mt-4 md:mt-0">See More</a>
                </div>
            </div>

            <!-- Fourth Section (Partnership) -->
            <div class="md:min-h-[300px] md:h-[50vh] bg-white/[75%]">
                <div class="h-2/4  w-full pt-3 pb-3 md:pt-3 md:pb-0">
                    <div class="h-full md:h-full ">
                        <div class="h-[50%] md:h-2/4 flex justify-center items-end ">
                            <h1 class="font-montserrat font-bold text-[1.3rem] md:text-4xl text-transparent bg-clip-text bg-gradient-to-r from-[#5E0505] to-[#9A0F0F]">
                                Partnership
                            </h1>
                        </div>
                        <div class="h-[50%] md:h-2/4 w-full font-normal text-lg flex justify-center m-auto items-start">
                            <p class="w-[80%] md:w-[60%] text-[1rem] md:text-xl leading-tight text-center flex justify-center items-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        </div>
                    </div>
                </div>
                <!-- Logos -->
                <div class="h-2/4 md:h-2/4 flex justify-center">
                    {{-- website view (partnership) --}}
                    <div class="hidden md:block md:h-5/6 md:w-full md:flex md:justify-center">
                        <div class="h-full flex items-center justify-center transition ease-in-out delay-150 grayscale hover:grayscale-0 hover:-translate-y-1 hover:scale-125 duration-300">
                            <img src="img/partnership/partnership1.png" alt="1" class="w-2/6">
                        </div>
                        <div class="h-full flex items-center justify-center transition ease-in-out delay-150 grayscale hover:grayscale-0  hover:-translate-y-1 hover:scale-125 duration-300">
                            <img src="img/partnership/partnership2.png" alt="2" class="w-[75%]">
                        </div>
                        <div class=" w-[10%] h-full flex items-center justify-center transition ease-in-out delay-150 grayscale hover:grayscale-0 hover:-translate-y-1 hover:scale-125 duration-300">
                            <img src="img/partnership/galatians.png" alt="1" class="w-[50%]">
                        </div>
                        <div class="h-full flex items-center justify-end transition ease-in-out delay-150 grayscale hover:grayscale-0  hover:-translate-y-1 hover:scale-125 duration-300">
                            <img src="img/partnership/partnership3.png" alt="3" class="w-[75%]">
                        </div>
                        <div class="h-full flex items-center justify-center transition ease-in-out delay-150 grayscale hover:grayscale-0  hover:-translate-y-1 hover:scale-125 duration-300">
                            <img src="img/partnership/partnership7.png" alt="7" class=" w-[30%]">
                        </div>
                        <div class="h-full flex items-center justify-start transition ease-in-out delay-150 grayscale hover:grayscale-0  hover:-translate-y-1 hover:scale-125 duration-300">
                            <img src="img/partnership/partnership5.png" alt="5" class="w-[70%]">
                        </div>
                        <div class=" w-[10%] h-full flex items-center justify-center transition ease-in-out delay-150 grayscale hover:grayscale-0 hover:-translate-y-1 hover:scale-125 duration-300">
                            <img src="img/partnership/j&t.png" alt="1" class="w-[80%]">
                        </div>
                        <div class="h-full flex items-center justify-center transition ease-in-out delay-150 grayscale hover:grayscale-0  hover:-translate-y-1 hover:scale-125 duration-300">
                            <img src="img/partnership/partnership4.png" alt="4" class="w-2/4">
                        </div>
                        
                        <div class="h-full flex items-center justify-center transition ease-in-out delay-150 grayscale hover:grayscale-0  hover:-translate-y-1 hover:scale-125 duration-300">
                            <img src="img/partnership/partnership6.png" alt="6" class="w-[32%]">
                        </div>
                    </div>
                    {{-- mobile view (partneship) --}}
                    <div class="block md:hidden w-full">
                        <div class="article">
                            <div class="wrapper ">
                              <ul class="marquee">
                                <li class="flex justify-center items-center"><img src="img/partnership/partnership1.png" alt="1" class="w-2/6"></li>
                                <li class="flex justify-center items-center"><img src="img/partnership/partnership2.png" alt="2" class="w-[75%]"></li>
                                <li class="flex justify-center items-center"><img src="img/partnership/galatians.png" alt="1" class="w-[50%]"></li>
                                <li class="flex justify-center items-center"><img src="img/partnership/partnership3.png" alt="3" class="w-[75%]"></li>
                                <li class="flex justify-center items-center"><img src="img/partnership/partnership7.png" alt="7" class=" w-[30%]"></li>
                                <li class="flex justify-center items-center"><img src="img/partnership/partnership5.png" alt="5" class="w-[70%]"></li>
                                <li class="flex justify-center items-center"><img src="img/partnership/j&t.png" alt="1" class="w-[80%]"></li>
                                <li class="flex justify-center items-center"><img src="img/partnership/partnership4.png" alt="4" class="w-2/4"></li>
                                <li class="flex justify-center items-center"><img src="img/partnership/partnership6.png" alt="6" class="w-[32%]"></li>
                              </ul>
                              <ul class="marquee2">
                                <li class="flex justify-center items-center"><img src="img/partnership/partnership1.png" alt="1" class="w-2/6"></li>
                                <li class="flex justify-center items-center"><img src="img/partnership/partnership2.png" alt="2" class="w-[75%]"></li>
                                <li class="flex justify-center items-center"><img src="img/partnership/galatians.png" alt="1" class="w-[50%]"></li>
                                <li class="flex justify-center items-center"><img src="img/partnership/partnership3.png" alt="3" class="w-[75%]"></li>
                                <li class="flex justify-center items-center"><img src="img/partnership/partnership7.png" alt="7" class=" w-[30%]"></li>
                                <li class="flex justify-center items-center"><img src="img/partnership/partnership5.png" alt="5" class="w-[70%]"></li>
                                <li class="flex justify-center items-center"><img src="img/partnership/j&t.png" alt="1" class="w-[80%]"></li>
                                <li class="flex justify-center items-center"><img src="img/partnership/partnership4.png" alt="4" class="w-2/4"></li>
                                <li class="flex justify-center items-center"><img src="img/partnership/partnership6.png" alt="6" class="w-[32%]"></li>
                              </ul>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection('main')
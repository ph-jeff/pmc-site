@extends('layouts/app')
@section('title')
    About
@endsection('title')

@section('main')
<!-- Sticky Navigation Bar (Website View - homepage) -->
<nav class="hidden md:min-h-[91px] md:h-20 md:flex md:justify-around md:sticky md:top-0 md:z-50 md:bg-black">
    <div class="h-full w-[20%] flex items-center">
        <a href="">
            <img class="" src="img/pmclogo.png" alt="logo" >
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

    <div class=" background-cover bg-cover bg-norepeat"  style="background-image: url('img/coverphoto.jpg'); ">
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
                        <p class="font-montserrat text-base md:text-base lg:text-lg font-normal text-center md:mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam </p>
                    </div>
                </div>
                <div class="relative h-44 md:h-80 w-full mt-5 ">
                    <img src="img/about/about_us.png" alt="" class="h-full w-full object-cover">
                    <div class="absolute -bottom-1/2 sm:-bottom-1/4 md:-bottom-1/4 lg:-bottom-1/3 h-auto flex justify-center">
                        <div class="w-11/12 md:w-10/12 bg-white filter drop-shadow-md shadow-gray-500 p-2 md:p-5">
                            <h2 class="font-montserrat font-semibold text-lg sm:text-sm md:text-lg md:mb-2">Welcome to Our Site</h2>
                            <p class="font-montserrat text-sm sm:text-xs md:text-base font-normal text-justify md:mb-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At auctor urna nunc id cursus. Consequat semper viverra nam libero justo laoreet sit amet cursus.</p>
                            <p class="hidden lg:block font-montserrat sm:text-xs md:text-base font-normal text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At auctor urna nunc id cursus. Consequat semper viverra nam libero justo laoreet sit amet cursus.</</p>
                        </div>
                    </div>
                </div>
                {{-- award --}}
                <div class="mt-28 sm:mt-20 md:mt-28 lg:mt-40 lg:flex gap-10" x-data="{about: false}">
                    <div class="lg:w-2/5 flex justify-center items-start ">
                        <div class="h-full w-48 md:w-72 lg:w-full bg-danger rounded-2xl p-3 md:p-5">
                            <img class="h-full w-full" src="img/about/award.jpg" alt="award">
                        </div>
                    </div>
                    <div class=" h-auto w-full md:w-full lg:w-3/5">
                        <div class="h-full w-full">
                            <p class="text-center lg:text-left lg:justify-start text-base md:text-lg font-montserrat font-semibold text-red-900 mt-3 leading-tight md:leading-none">BEST START-UP RISING E-COMMERCE COMPANY FOR 2022.</p>
                            <p class="text-sm md:text-base font-normal text-center md:text-justify font-montserrat font-normal md:leading-7 my-2" >
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum.
                            </p>
                            <p class="hidden lg:block text-sm md:text-base font-normal text-center md:text-justify font-montserrat font-normal">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                            </p>
                            <p class="text-sm md:text-base font-normal text-center md:text-justify font-montserrat font-normale" x-show="about">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                            </p>
                            <div class="block lg:hidden w-full flex justify-center lg:justify-start mt-2">
                                <button class="bg-black text-white h-9 md:h-10 w-24 md:w-28 font-montserrat text-center text-sm font-medium hover:bg-danger" @click="about = !about">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Mission, Vision and Core Values --}}
                <div>
                    <div class="md:h-auto flex justify-center">
                        <h1 class="font-bebas text-3xl md:text-5xl lg:text-5xl tracking-wider text-center text-transparent bg-clip-text bg-gradient-to-r from-red-900 via-red-800 to-red-500 md:tracking-wider mt-5 md:mt-14">
                            COMPANY MISSION VISION AND CORE VALUES
                        </h1>
                    </div>
                    <p class="text-base text-center  md:text-base lg:text-lg font-montserrat font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore  </p>
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
                        <div class="w-full flex justify-center mb-5 lg:mb-10">
                            <div class="h-96 w-9/12 md:w-full bg-gray-600 bg-cover bg-repeat-norepeat" style="background-image: url('img/about/values.png')">
                                <p class="font-bebas text-4xl text-white ml-3 mt-48">OUR CORE VALUES</p>
                                <p class="font-montserrat text-sm text-justify text-white ml-3 mr-3 mb-4 md:mb-0 leading-light md:leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Milestone --}}
        <div class="background-cover bg-cover bg-norepeat flex justify-center" style="background-image: url('img/about/milestone-cover.png'); ">
            <div class="w-11/12 md:w-11/12 lg:w-9/12 ">
                <h1 class="font-bebas text-3xl md:text-5xl text-white tracking-wider text-center pt-5 md:pt-14">OUR COMPANY MILESTONE</h1>
                <p class="text-white text-lg md:text-xl font-montserrat text-center">Nullam leo sem, volutpat vel nibh ac, pretium fringilla odio. Etiam rhoncus ligula at quam accumsan aliquam. Nunc posuere ex vitae lectus ornare consequat.</p>
                {{-- website view --}}
                <div class=" hidden md:block md:flex md:h-screen md:py-10">
                    <div class="h-full w-full">
                        {{-- milestone1 --}}
                        <div class="h-1/3 w-full">
                            <div class="relative h-2/4 w-full flex justify-center">
                                <div class="absolute -top-3 flex left-0 w-11/12 z-20">
                                    <div class="h-32 w-full rounded-lg flex" style="background-color:rgb(255, 255, 255, .6)">
                                        <div class="p-2" style="width: 30%">
                                            <img src="img/about/milestone1.png" class="h-full w-full object-cover rounded-l-lg" alt="">
                                        </div>
                                        <div class="flex items-center" style="width: 50%">
                                            <div >
                                                <h1 class="font-bebas text-xl sm:text-2xl tracking-wider">CAPTION HERE</h1>
                                                <p class=" text-justify text-xs sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                <div class="w-full flex justify-end items-center my-1">
                                                    <button href="" class=" text-black text-xs px-2 py-1 rounded-md flex items-center underline" @click="seemore1 = !seemore1 ">see more</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="font-montserrat m-auto lg:-mr-1 lg:mr-5 m-auto ml-2 lg:ml-5" style="width: 20%">
                                            <p class="font-semibold text-center">June 1 2023</p>
                                        </div>
                                    </div>
                                    <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.65rem solid transparent; border-bottom: 3.65rem solid transparent; border-left: 25px solid rgb(255, 255, 255, .6);"></div>
                                </div>
                            </div>
                        </div>

                        {{-- milestone3 --}}
                        <div class="h-1/3 w-full">
                            <div class="relative h-2/4 w-full flex justify-center">
                                <div class="absolute -top-3 flex left-0 w-11/12 z-20">
                                    <div class="h-32 w-full rounded-lg flex" style="background-color:rgb(255, 255, 255, .6)">
                                        <div class="p-2" style="width: 30%">
                                            <img src="img/about/milestone3.png" class="h-full w-full object-cover rounded-l-lg" alt="">
                                        </div>
                                        <div class="flex items-center" style="width: 50%">
                                            <div >
                                                <h1 class="font-bebas text-xl sm:text-2xl tracking-wider">CAPTION HERE</h1>
                                                <p class=" text-justify text-xs sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                <div class="w-full flex justify-end items-center my-1">
                                                    <button href="" class=" text-black text-xs px-2 py-1 rounded-md flex items-center underline" @click="seemore3 = !seemore3 ">see more</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="font-montserrat m-auto lg:-mr-1 lg:mr-5 m-auto ml-2 lg:ml-5" style="width: 20%">
                                            <p class="font-semibold text-center">DATE HERE</p>
                                        </div>
                                    </div>
                                    <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.65rem solid transparent; border-bottom: 3.65rem solid transparent; border-left: 25px solid rgb(255, 255, 255, .6);"></div>
                                </div>
                            </div>
                        </div>

                        {{-- milestone5 --}}
                        <div class="h-1/3 w-full">
                            <div class="relative h-2/4 w-full flex justify-center">
                                <div class="absolute -top-3 flex left-0 w-11/12 z-20">
                                    <div class="h-32 w-full rounded-lg flex" style="background-color:rgb(255, 255, 255, .6)">
                                        {{-- image --}}
                                        <div class="p-2" style="width: 30%">
                                            <img src="img/about/milestone5.png" class="h-full w-full object-cover rounded-l-lg" alt="">
                                        </div>
                                        {{-- caption --}}
                                        <div class="flex items-center" style="width: 50%">
                                            <div >
                                                <h1 class="font-bebas text-xl sm:text-2xl tracking-wider">CAPTION HERE</h1>
                                                <p class=" text-justify text-xs sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                <div class="w-full flex justify-end items-center my-1">
                                                    <button href="" class=" text-black text-xs px-2 py-1 rounded-md flex items-center underline" @click="seemore5 = !seemore5 ">see more</button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- date --}}
                                        <div class="font-montserrat m-auto lg:-mr-1 lg:mr-5 m-auto ml-2 lg:ml-5" style="width: 20%">
                                            <p class="font-semibold text-center">DATE HERE</p>
                                        </div>
                                    </div>
                                    {{-- triangle shape --}}
                                    <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.65rem solid transparent; border-bottom: 3.65rem solid transparent; border-left: 25px solid rgb(255, 255, 255, .6);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- timeline LINE and CIRCLES --}}
                    <div class="h-full w-2 flex justify-center items-center">
                        <div class="relative h-5/6 w-1 rounded-full bg-white">
                            <div class="absolute z-10 -left-1 h-3 w-3 rounded-full bg-white"></div>
                            <div class="absolute z-10 -left-1 h-3 w-3 rounded-full bg-white " style="top: 19%"></div>
                            <div class="absolute z-10 -left-1 h-3 w-3 rounded-full bg-white " style="top: 39%"></div>
                            <div class="absolute z-10 -left-1 h-3 w-3 rounded-full bg-white " style="top: 59%"></div>
                            <div class="absolute z-10 -left-1 h-3 w-3 rounded-full bg-white " style="top: 79%"></div>
                            <div class="absolute z-10 -left-1 h-3 w-3 rounded-full bg-white " style="top: 99%"></div>
                        </div>
                    </div>
                    

                    <div class="h-full w-full">
                        {{-- millestone2 --}}
                        <div class="h-1/3 w-full flex items-end">
                            <div class="relative h-2/4 w-full flex justify-center">
                                <div class="absolute -top-3 flex right-0 w-11/12 z-20">
                                    
                                    {{-- triangle shape --}}
                                    <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.65rem solid transparent; border-bottom: 3.65rem solid transparent; border-right: 25px solid rgb(255, 255, 255, .6);"></div>
                                    <div class="h-32 w-full rounded-lg flex" style="background-color:rgb(255, 255, 255, .6)">
                                        {{-- date --}}
                                        <div class="font-montserrat lg:-ml-1 lg:ml-5 m-auto mr-2 lg:mr-5 " style="width: 20%">
                                            <p class="font-semibold md:text-base lg:text-lg text-center">DATE HERE</p>
                                        </div>
                                        {{-- caption --}}
                                        <div class="flex items-center" style="width: 50%">
                                            <div >
                                                <h1 class="font-bebas text-xl sm:text-2xl tracking-wider">CAPTION HERE</h1>
                                                <p class=" text-justify text-xs sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                <div class="w-full flex justify-end items-center my-1">
                                                    <button href="" class=" text-black text-xs px-2 py-1 rounded-md flex items-center underline" @click="seemore2 = !seemore2 ">see more</button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- image --}}
                                        <div class="p-2" style="width: 30%">
                                            <img src="img/about/milestone2.png" class="h-full w-full object-cover rounded-r-lg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- millestone4 --}}
                        <div class="h-1/3 w-full flex items-end">
                            <div class="relative h-2/4 w-full w-full flex justify-center">
                                <div class="absolute -top-3 flex right-0 w-11/12 z-20">
                                    {{-- triangle shape --}}
                                    <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.65rem solid transparent; border-bottom: 3.65rem solid transparent; border-right: 25px solid rgb(255, 255, 255, .6);"></div>
                                    <div class="h-32 w-full rounded-lg flex" style="background-color:rgb(255, 255, 255, .6)">
                                        {{-- date --}}
                                        <div class="font-montserrat lg:-ml-1 lg:ml-5 m-auto mr-2 lg:mr-5 " style="width: 20%">
                                            <p class="font-semibold md:text-base lg:text-lg text-center">DATE HERE</p>
                                        </div>
                                        {{-- caption --}}
                                        <div class="flex items-center" style="width: 50%">
                                            <div >
                                                <h1 class="font-bebas text-xl sm:text-2xl tracking-wider">CAPTION HERE</h1>
                                                <p class=" text-justify text-xs sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                <div class="w-full flex justify-end items-center my-1">
                                                    <button href="" class=" text-black text-xs px-2 py-1 rounded-md flex items-center underline" @click="seemore4 = !seemore4 ">see more</button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- image --}}
                                        <div class="p-2" style="width: 30%">
                                            <img src="img/about/milestone4.png" class="h-full w-full object-cover rounded-r-lg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- millestone6 --}}
                        <div class="h-1/3 w-full flex items-end">
                            <div class="relative h-2/4 w-full w-full flex justify-center">
                                <div class="absolute -top-3 flex right-0 w-11/12 z-20">
                                    {{-- triangle shape --}}
                                    <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.65rem solid transparent; border-bottom: 3.65rem solid transparent; border-right: 25px solid rgb(255, 255, 255, .6);"></div>
                                    <div class="h-32 w-full rounded-lg flex" style="background-color:rgb(255, 255, 255, .6)">
                                        {{-- date --}}
                                        <div class="font-montserrat lg:-ml-1 lg:ml-5 m-auto mr-2 lg:mr-5 " style="width: 20%">
                                            <p class="font-semibold md:text-base lg:text-lg text-center">DATE HERE</p>
                                        </div>
                                        {{-- caption --}}
                                        <div class="flex items-center" style="width: 50%">
                                            <div >
                                                <h1 class="font-bebas text-xl sm:text-2xl tracking-wider">CAPTION HERE</h1>
                                                <p class=" text-justify text-xs sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                <div class="w-full flex justify-end items-center my-1">
                                                    <button href="" class=" text-black text-xs px-2 py-1 rounded-md flex items-center underline" @click="seemore6 = !seemore6 ">see more</button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- image --}}
                                        <div class="p-2" style="width: 30%">
                                            <img src="img/about/milestone6.png" class="h-full w-full object-cover rounded-r-lg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Mobile View --}}
                <div class="md:hidden flex w-full h-auto py-10 gap-5 sm:gap-10 ">
                    {{-- timeline LINE and CIRCLES --}}
                    <div class="w-2 flex justify-center items-center">
                        <div class="relative h-5/6 w-1 rounded-full bg-white" style="height: 86%">
                            <div class="absolute z-10 -left-1 h-3 w-3 rounded-full bg-white "></div>
                            <div class="absolute z-10 -left-1 h-3 w-3 rounded-full bg-white " style="top: 19%"></div>
                            <div class="absolute z-10 -left-1 h-3 w-3 rounded-full bg-white " style="top: 39%"></div>
                            <div class="absolute z-10 -left-1 h-3 w-3 rounded-full bg-white " style="top: 59%"></div>
                            <div class="absolute z-10 -left-1 h-3 w-3 rounded-full bg-white " style="top: 79%"></div>
                            <div class="absolute z-10 -left-1 h-3 w-3 rounded-full bg-white " style="top: 99%"></div>
                        </div>
                    </div>

                    <div class="w-full">
                        {{-- millestone1 --}}
                        <div class="h-auto w-full flex mb-5" >
                            {{-- triangle shape --}}
                            <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.15rem solid transparent; border-bottom: 3.15rem solid transparent; border-right: 25px solid rgb(255, 255, 255, .6);"></div>
                            <div class="h-28 w-full rounded-lg flex gap-1" style="background-color:rgb(255, 255, 255, .6)">
                                {{-- date --}}
                                <div class="font-montserrat -ml-2 sm:ml-5 m-auto mr-2 sm:mr-10 " style="width: 20%">
                                    <p class="text-base md:text-xl font-bold text-center">June 1 2021</p>
                                </div>
                                {{-- caption --}}
                                <div class="flex items-center" style="width: 50%">
                                    <div >
                                        <h1 class="font-bebas text-xl sm:text-2xl tracking-wider">CAPTION HERE</h1>
                                        <p class=" text-justify text-xs sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        <div class="w-full flex justify-end items-center my-1">
                                            <button href="" class=" text-black text-xs px-2 py-1 rounded-md flex items-center underline" @click="seemore1 = !seemore1 ">see more</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- image --}}
                                <div class="p-2" style="width: 30%">
                                    <img src="img/about/milestone1.png" class="h-full w-full object-cover rounded-r-lg underline" alt="">
                                </div>
                            </div>
                        </div>

                        {{-- millestone2 --}}
                        <div class="h-auto w-full flex mb-5" >
                            {{-- triangle shape --}}
                            <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.15rem solid transparent; border-bottom: 3.15rem solid transparent; border-right: 25px solid rgb(255, 255, 255, .6);"></div>
                            <div class="h-28 w-full rounded-lg flex gap-1" style="background-color:rgb(255, 255, 255, .6)">
                                {{-- date --}}
                                <div class="font-montserrat -ml-2 sm:ml-5 m-auto mr-2 sm:mr-10 " style="width: 20%">
                                    <p class="text-base md:text-xl font-bold text-center">DATE HERE</p>
                                </div>
                                {{-- caption --}}
                                <div class="flex items-center" style="width: 50%">
                                    <div >
                                        <h1 class="font-bebas text-xl sm:text-2xl tracking-wider">CAPTION HERE</h1>
                                        <p class=" text-justify text-xs sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        <div class="w-full flex justify-end items-center my-1">
                                            <button href="" class=" text-black text-xs px-2 py-1 rounded-md flex items-center underline" @click="seemore2 = !seemore2 ">see more</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- image --}}
                                <div class="p-2" style="width: 30%">
                                    <img src="img/about/milestone2.png" class="h-full w-full object-cover rounded-r-lg underline" alt="">
                                </div>
                            </div>
                        </div>

                        {{-- millestone3 --}}
                        <div class="h-auto w-full flex mb-5" >
                            {{-- triangle shape --}}
                            <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.15rem solid transparent; border-bottom: 3.15rem solid transparent; border-right: 25px solid rgb(255, 255, 255, .6);"></div>
                            <div class="h-28 w-full rounded-lg flex gap-1" style="background-color:rgb(255, 255, 255, .6)">
                                {{-- date --}}
                                <div class="font-montserrat -ml-2 sm:ml-5 m-auto mr-2 sm:mr-10 " style="width: 20%">
                                    <p class="text-base md:text-xl font-bold text-center">DATE HERE</p>
                                </div>
                                {{-- caption --}}
                                <div class="flex items-center" style="width: 50%">
                                    <div >
                                        <h1 class="font-bebas text-xl sm:text-2xl tracking-wider">CAPTION HERE</h1>
                                        <p class=" text-justify text-xs sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        <div class="w-full flex justify-end items-center my-1">
                                            <button href="" class=" text-black text-xs px-2 py-1 rounded-md flex items-center underline" @click="seemore3 = !seemore3 ">see more</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- image --}}
                                <div class="p-2" style="width: 30%">
                                    <img src="img/about/milestone3.png" class="h-full w-full object-cover rounded-r-lg underline" alt="">
                                </div>
                            </div>
                        </div>

                        {{-- millestone4 --}}
                        <div class="h-auto w-full flex mb-5" >
                            {{-- triangle shape --}}
                            <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.15rem solid transparent; border-bottom: 3.15rem solid transparent; border-right: 25px solid rgb(255, 255, 255, .6);"></div>
                            <div class="h-28 w-full rounded-lg flex gap-1" style="background-color:rgb(255, 255, 255, .6)">
                                {{-- date --}}
                                <div class="font-montserrat -ml-2 sm:ml-5 m-auto mr-2 sm:mr-10 " style="width: 20%">
                                    <p class="text-base md:text-xl font-bold text-center">DATE HERE</p>
                                </div>
                                {{-- caption --}}
                                <div class="flex items-center" style="width: 50%">
                                    <div >
                                        <h1 class="font-bebas text-xl sm:text-2xl tracking-wider">CAPTION HERE</h1>
                                        <p class=" text-justify text-xs sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        <div class="w-full flex justify-end items-center my-1">
                                            <button href="" class=" text-black text-xs px-2 py-1 rounded-md flex items-center underline" @click="seemore4 = !seemore4 ">see more</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- image --}}
                                <div class="p-2" style="width: 30%">
                                    <img src="img/about/milestone4.png" class="h-full w-full object-cover rounded-r-lg underline" alt="">
                                </div>
                            </div>
                        </div>

                        {{-- millestone5 --}}
                        <div class="h-auto w-full flex mb-5" >
                            {{-- triangle shape --}}
                            <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.15rem solid transparent; border-bottom: 3.15rem solid transparent; border-right: 25px solid rgb(255, 255, 255, .6);"></div>
                            <div class="h-28 w-full rounded-lg flex gap-1" style="background-color:rgb(255, 255, 255, .6)">
                                {{-- date --}}
                                <div class="font-montserrat -ml-2 sm:ml-5 m-auto mr-2 sm:mr-10 " style="width: 20%">
                                    <p class="text-base md:text-xl font-bold text-center">DATE HERE</p>
                                </div>
                                {{-- caption --}}
                                <div class="flex items-center" style="width: 50%">
                                    <div >
                                        <h1 class="font-bebas text-xl sm:text-2xl tracking-wider">CAPTION HERE</h1>
                                        <p class=" text-justify text-xs sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        <div class="w-full flex justify-end items-center my-1">
                                            <button href="" class=" text-black text-xs px-2 py-1 rounded-md flex items-center underline" @click="seemore5 = !seemore5 ">see more</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- image --}}
                                <div class="p-2" style="width: 30%">
                                    <img src="img/about/milestone5.png" class="h-full w-full object-cover rounded-r-lg underline" alt="">
                                </div>
                            </div>
                        </div>

                        {{-- millestone6 --}}
                        <div class="h-auto w-full flex mb-5" >
                            {{-- triangle shape --}}
                            <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.15rem solid transparent; border-bottom: 3.15rem solid transparent; border-right: 25px solid rgb(255, 255, 255, .6);"></div>
                            <div class="h-28 w-full rounded-lg flex gap-1" style="background-color:rgb(255, 255, 255, .6)">
                                {{-- date --}}
                                <div class="font-montserrat -ml-2 sm:ml-5 m-auto mr-2 sm:mr-10 " style="width: 20%">
                                    <p class="text-base md:text-xl font-bold text-center">DATE HERE</p>
                                </div>
                                {{-- Caption --}}
                                <div class="flex items-center" style="width: 50%">
                                    <div >
                                        <h1 class="font-bebas text-xl sm:text-2xl tracking-wider">CAPTION HERE</h1>
                                        <p class=" text-justify text-xs sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        <div class="w-full flex justify-end items-center my-1">
                                            <button href="" class=" text-black text-xs px-2 py-1 rounded-md flex items-center underline" @click="seemore6 = !seemore6 ">see more</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- image --}}
                                <div class="p-2" style="width: 30%">
                                    <img src="img/about/milestone6.png" class="h-full w-full object-cover rounded-r-lg underline" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('main')
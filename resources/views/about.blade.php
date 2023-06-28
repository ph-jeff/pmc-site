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
            <li class="p-3 px-5 hover:bg-danger"><a class="text-base font-semibold text-white " href="/"> Home </a></li>
            <li class="p-3 px-5 bg-danger"><a class="text-base font-semibold text-white" href="/about"> About </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-base font-semibold text-white" href="/team"> Team </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-base font-semibold text-white" href="/news"> News </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-base font-semibold text-white" href="/career"> Career </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-base font-semibold text-white" href="/contact"> Contact </a></li>
        </ul>
    </div>
</nav>
    {{-- Image Slider --}}
    <div class="object-cover imgSliderAbout h-44 md:h-96"></div>

    <div class="bg-cover background-cover bg-norepeat"  style="background-image: url('img/coverphoto.jpg'); ">
        <div class="flex justify-center bg-white bg-opacity-75">
            <div class="w-11/12 md:w-11/12 lg:w-9/12">
                {{-- About Content --}}
                <div class="flex justify-center">
                    <div class="lg:w-11/12">
                        <div class="flex justify-center md:h-auto">
                            <h1 class="mt-5 text-3xl text-center text-transparent font-bebas md:text-5xl bg-clip-text bg-gradient-to-r from-red-900 via-red-800 to-red-500 md:tracking-wider md:mt-14">
                                ABOUT US
                            </h1>
                        </div>
                        <p class="text-base font-normal text-center font-montserrat md:text-base lg:text-lg md:mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam </p>
                    </div>
                </div>
                <div class="relative w-full mt-5 h-44 md:h-80 ">
                    <img src="img/about/about_us.png" alt="" class="object-cover w-full h-full">
                    <div class="absolute flex justify-center h-auto -bottom-1/2 sm:-bottom-1/4 md:-bottom-1/4 lg:-bottom-1/3">
                        <div class="w-11/12 p-2 bg-white md:w-10/12 filter drop-shadow-md shadow-gray-500 md:p-5">
                            <h2 class="text-lg font-semibold font-montserrat sm:text-sm md:text-lg md:mb-2">Welcome to Our Site</h2>
                            <p class="text-sm font-normal text-justify font-montserrat sm:text-xs md:text-base md:mb-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At auctor urna nunc id cursus. Consequat semper viverra nam libero justo laoreet sit amet cursus.</p>
                            <p class="hidden font-normal text-justify lg:block font-montserrat sm:text-xs md:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At auctor urna nunc id cursus. Consequat semper viverra nam libero justo laoreet sit amet cursus.</</p>
                        </div>
                    </div>
                </div>
                {{-- award --}}
                <div class="gap-10 mt-28 sm:mt-20 md:mt-28 lg:mt-40 lg:flex" x-data="{about: false}">
                    <div class="flex items-start justify-center lg:w-2/5 ">
                        <div class="w-48 h-full p-3 md:w-72 lg:w-full bg-danger rounded-2xl md:p-5">
                            <img class="w-full h-full" src="img/about/award.jpg" alt="award">
                        </div>
                    </div>
                    <div class="w-full h-auto md:w-full lg:w-3/5">
                        <div class="w-full h-full">
                            <p class="mt-3 text-base font-semibold leading-tight text-center text-red-900 lg:text-left lg:justify-start md:text-lg font-montserrat md:leading-none">BEST START-UP RISING E-COMMERCE COMPANY FOR 2022.</p>
                            <p class="my-2 text-sm font-normal text-center md:text-base md:text-justify font-montserrat md:leading-7" >
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum.
                            </p>
                            <p class="hidden text-sm font-normal text-center lg:block md:text-base md:text-justify font-montserrat ">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                            </p>
                            <p class="text-sm font-normal text-center md:text-base md:text-justify font-montserrat font-normale" x-show="about">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                            </p>
                            <div class="flex justify-center block w-full mt-2 lg:hidden lg:justify-start">
                                <button class="w-24 text-sm font-medium text-center text-white bg-black h-9 md:h-10 md:w-28 font-montserrat hover:bg-danger" @click="about = !about">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Mission, Vision and Core Values --}}
                <div>
                    <div class="flex justify-center md:h-auto">
                        <h1 class="mt-5 text-3xl tracking-wider text-center text-transparent font-bebas md:text-5xl lg:text-5xl bg-clip-text bg-gradient-to-r from-red-900 via-red-800 to-red-500 md:tracking-wider md:mt-14">
                            COMPANY MISSION VISION AND CORE VALUES
                        </h1>
                    </div>
                    <p class="text-base font-normal text-center md:text-base lg:text-lg font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore  </p>
                    <div class="gap-10 mt-5 md:flex">
                        <div class="flex justify-center w-full mb-5 lg:mb-0">
                            <div class="w-9/12 bg-gray-400 bg-cover h-96 md:w-full bg-repeat-norepeat" style="background-image: url('img/about/vision.png')">
                                <p class="mt-48 ml-3 text-4xl text-white font-bebas">OUR VISION</p>
                                <p class="mb-4 ml-3 mr-3 text-sm text-justify text-white font-montserrat md:mb-0 leading-light md:leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="flex justify-center w-full mb-5 lg:mb-0">
                            <div class="w-9/12 bg-gray-500 bg-cover h-96 md:w-full bg-repeat-norepeat" style="background-image: url('img/about/mission.png')">
                                <p class="mt-48 ml-3 text-4xl text-white font-bebas">OUR MISSION</p>
                                <p class="mb-4 ml-3 mr-3 text-sm text-justify text-white font-montserrat md:mb-0 leading-light md:leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="flex justify-center w-full mb-5 lg:mb-10">
                            <div class="w-9/12 bg-gray-600 bg-cover h-96 md:w-full bg-repeat-norepeat" style="background-image: url('img/about/values.png')">
                                <p class="mt-48 ml-3 text-4xl text-white font-bebas">OUR CORE VALUES</p>
                                <p class="mb-4 ml-3 mr-3 text-sm text-justify text-white font-montserrat md:mb-0 leading-light md:leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Milestone --}}
        <div class="flex justify-center bg-cover background-cover bg-norepeat" style="background-image: url('img/about/milestone-cover.png'); ">
            <div class="w-11/12 md:w-11/12 lg:w-9/12 ">
                <h1 class="pt-5 text-3xl tracking-wider text-center text-white font-bebas md:text-5xl md:pt-14">OUR COMPANY MILESTONE</h1>
                <p class="text-lg text-center text-white md:text-xl font-montserrat">Nullam leo sem, volutpat vel nibh ac, pretium fringilla odio. Etiam rhoncus ligula at quam accumsan aliquam. Nunc posuere ex vitae lectus ornare consequat.</p>
                {{-- website view --}}
                <div class="hidden md:block md:flex md:h-screen md:py-10">
                    <div class="w-full h-full">
                        {{-- milestone1 --}}
                        <div class="w-full h-1/3">
                            <div class="relative flex justify-center w-full h-2/4">
                                <div class="absolute left-0 z-20 flex w-11/12 -top-3">
                                    <div class="flex w-full h-32 rounded-lg" style="background-color:rgb(255, 255, 255, .6)">
                                        <div class="p-2" style="width: 30%">
                                            <img src="img/about/milestone1.png" class="object-cover w-full h-full rounded-l-lg" alt="">
                                        </div>
                                        <div class="flex items-center" style="width: 50%">
                                            <div >
                                                <h1 class="text-xl tracking-wider font-bebas sm:text-2xl">CAPTION HERE</h1>
                                                <p class="text-xs text-justify sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                <div class="flex items-center justify-end w-full my-1">
                                                    <button href="" class="flex items-center px-2 py-1 text-xs text-black underline rounded-md " @click="seemore1 = !seemore1 ">see more</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-auto ml-2 font-montserrat lg:-mr-1 lg:mr-5 lg:ml-5" style="width: 20%">
                                            <p class="font-semibold text-center">June 1 2023</p>
                                        </div>
                                    </div>
                                    <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.65rem solid transparent; border-bottom: 3.65rem solid transparent; border-left: 25px solid rgb(255, 255, 255, .6);"></div>
                                </div>
                            </div>
                        </div>

                        {{-- milestone3 --}}
                        <div class="w-full h-1/3">
                            <div class="relative flex justify-center w-full h-2/4">
                                <div class="absolute left-0 z-20 flex w-11/12 -top-3">
                                    <div class="flex w-full h-32 rounded-lg" style="background-color:rgb(255, 255, 255, .6)">
                                        <div class="p-2" style="width: 30%">
                                            <img src="img/about/milestone3.png" class="object-cover w-full h-full rounded-l-lg" alt="">
                                        </div>
                                        <div class="flex items-center" style="width: 50%">
                                            <div >
                                                <h1 class="text-xl tracking-wider font-bebas sm:text-2xl">CAPTION HERE</h1>
                                                <p class="text-xs text-justify sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                <div class="flex items-center justify-end w-full my-1">
                                                    <button href="" class="flex items-center px-2 py-1 text-xs text-black underline rounded-md " @click="seemore3 = !seemore3 ">see more</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-auto ml-2 font-montserrat lg:-mr-1 lg:mr-5 lg:ml-5" style="width: 20%">
                                            <p class="font-semibold text-center">DATE HERE</p>
                                        </div>
                                    </div>
                                    <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.65rem solid transparent; border-bottom: 3.65rem solid transparent; border-left: 25px solid rgb(255, 255, 255, .6);"></div>
                                </div>
                            </div>
                        </div>

                        {{-- milestone5 --}}
                        <div class="w-full h-1/3">
                            <div class="relative flex justify-center w-full h-2/4">
                                <div class="absolute left-0 z-20 flex w-11/12 -top-3">
                                    <div class="flex w-full h-32 rounded-lg" style="background-color:rgb(255, 255, 255, .6)">
                                        {{-- image --}}
                                        <div class="p-2" style="width: 30%">
                                            <img src="img/about/milestone5.png" class="object-cover w-full h-full rounded-l-lg" alt="">
                                        </div>
                                        {{-- caption --}}
                                        <div class="flex items-center" style="width: 50%">
                                            <div >
                                                <h1 class="text-xl tracking-wider font-bebas sm:text-2xl">CAPTION HERE</h1>
                                                <p class="text-xs text-justify sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                <div class="flex items-center justify-end w-full my-1">
                                                    <button href="" class="flex items-center px-2 py-1 text-xs text-black underline rounded-md " @click="seemore5 = !seemore5 ">see more</button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- date --}}
                                        <div class="m-auto ml-2 font-montserrat lg:-mr-1 lg:mr-5 lg:ml-5" style="width: 20%">
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
                    <div class="flex items-center justify-center w-2 h-full">
                        <div class="relative w-1 bg-white rounded-full h-5/6">
                            <div class="absolute z-10 w-3 h-3 bg-white rounded-full -left-1"></div>
                            <div class="absolute z-10 w-3 h-3 bg-white rounded-full -left-1 " style="top: 19%"></div>
                            <div class="absolute z-10 w-3 h-3 bg-white rounded-full -left-1 " style="top: 39%"></div>
                            <div class="absolute z-10 w-3 h-3 bg-white rounded-full -left-1 " style="top: 59%"></div>
                            <div class="absolute z-10 w-3 h-3 bg-white rounded-full -left-1 " style="top: 79%"></div>
                            <div class="absolute z-10 w-3 h-3 bg-white rounded-full -left-1 " style="top: 99%"></div>
                        </div>
                    </div>


                    <div class="w-full h-full">
                        {{-- millestone2 --}}
                        <div class="flex items-end w-full h-1/3">
                            <div class="relative flex justify-center w-full h-2/4">
                                <div class="absolute right-0 z-20 flex w-11/12 -top-3">

                                    {{-- triangle shape --}}
                                    <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.65rem solid transparent; border-bottom: 3.65rem solid transparent; border-right: 25px solid rgb(255, 255, 255, .6);"></div>
                                    <div class="flex w-full h-32 rounded-lg" style="background-color:rgb(255, 255, 255, .6)">
                                        {{-- date --}}
                                        <div class="m-auto mr-2 font-montserrat lg:-ml-1 lg:ml-5 lg:mr-5 " style="width: 20%">
                                            <p class="font-semibold text-center md:text-base lg:text-lg">DATE HERE</p>
                                        </div>
                                        {{-- caption --}}
                                        <div class="flex items-center" style="width: 50%">
                                            <div >
                                                <h1 class="text-xl tracking-wider font-bebas sm:text-2xl">CAPTION HERE</h1>
                                                <p class="text-xs text-justify sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                <div class="flex items-center justify-end w-full my-1">
                                                    <button href="" class="flex items-center px-2 py-1 text-xs text-black underline rounded-md " @click="seemore2 = !seemore2 ">see more</button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- image --}}
                                        <div class="p-2" style="width: 30%">
                                            <img src="img/about/milestone2.png" class="object-cover w-full h-full rounded-r-lg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- millestone4 --}}
                        <div class="flex items-end w-full h-1/3">
                            <div class="relative flex justify-center w-full h-2/4">
                                <div class="absolute right-0 z-20 flex w-11/12 -top-3">
                                    {{-- triangle shape --}}
                                    <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.65rem solid transparent; border-bottom: 3.65rem solid transparent; border-right: 25px solid rgb(255, 255, 255, .6);"></div>
                                    <div class="flex w-full h-32 rounded-lg" style="background-color:rgb(255, 255, 255, .6)">
                                        {{-- date --}}
                                        <div class="m-auto mr-2 font-montserrat lg:-ml-1 lg:ml-5 lg:mr-5 " style="width: 20%">
                                            <p class="font-semibold text-center md:text-base lg:text-lg">DATE HERE</p>
                                        </div>
                                        {{-- caption --}}
                                        <div class="flex items-center" style="width: 50%">
                                            <div >
                                                <h1 class="text-xl tracking-wider font-bebas sm:text-2xl">CAPTION HERE</h1>
                                                <p class="text-xs text-justify sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                <div class="flex items-center justify-end w-full my-1">
                                                    <button href="" class="flex items-center px-2 py-1 text-xs text-black underline rounded-md " @click="seemore4 = !seemore4 ">see more</button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- image --}}
                                        <div class="p-2" style="width: 30%">
                                            <img src="img/about/milestone4.png" class="object-cover w-full h-full rounded-r-lg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- millestone6 --}}
                        <div class="flex items-end w-full h-1/3">
                            <div class="relative flex justify-center w-full h-2/4">
                                <div class="absolute right-0 z-20 flex w-11/12 -top-3">
                                    {{-- triangle shape --}}
                                    <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.65rem solid transparent; border-bottom: 3.65rem solid transparent; border-right: 25px solid rgb(255, 255, 255, .6);"></div>
                                    <div class="flex w-full h-32 rounded-lg" style="background-color:rgb(255, 255, 255, .6)">
                                        {{-- date --}}
                                        <div class="m-auto mr-2 font-montserrat lg:-ml-1 lg:ml-5 lg:mr-5 " style="width: 20%">
                                            <p class="font-semibold text-center md:text-base lg:text-lg">DATE HERE</p>
                                        </div>
                                        {{-- caption --}}
                                        <div class="flex items-center" style="width: 50%">
                                            <div >
                                                <h1 class="text-xl tracking-wider font-bebas sm:text-2xl">CAPTION HERE</h1>
                                                <p class="text-xs text-justify sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                                <div class="flex items-center justify-end w-full my-1">
                                                    <button href="" class="flex items-center px-2 py-1 text-xs text-black underline rounded-md " @click="seemore6 = !seemore6 ">see more</button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- image --}}
                                        <div class="p-2" style="width: 30%">
                                            <img src="img/about/milestone6.png" class="object-cover w-full h-full rounded-r-lg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Mobile View --}}
                <div class="flex w-full h-auto gap-5 py-10 md:hidden sm:gap-10 ">
                    {{-- timeline LINE and CIRCLES --}}
                    <div class="flex items-center justify-center w-2">
                        <div class="relative w-1 bg-white rounded-full h-5/6" style="height: 86%">
                            <div class="absolute z-10 w-3 h-3 bg-white rounded-full -left-1 "></div>
                            <div class="absolute z-10 w-3 h-3 bg-white rounded-full -left-1 " style="top: 19%"></div>
                            <div class="absolute z-10 w-3 h-3 bg-white rounded-full -left-1 " style="top: 39%"></div>
                            <div class="absolute z-10 w-3 h-3 bg-white rounded-full -left-1 " style="top: 59%"></div>
                            <div class="absolute z-10 w-3 h-3 bg-white rounded-full -left-1 " style="top: 79%"></div>
                            <div class="absolute z-10 w-3 h-3 bg-white rounded-full -left-1 " style="top: 99%"></div>
                        </div>
                    </div>

                    <div class="w-full">
                        {{-- millestone1 --}}
                        <div class="flex w-full h-auto mb-5" >
                            {{-- triangle shape --}}
                            <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.15rem solid transparent; border-bottom: 3.15rem solid transparent; border-right: 25px solid rgb(255, 255, 255, .6);"></div>
                            <div class="flex w-full gap-1 rounded-lg h-28" style="background-color:rgb(255, 255, 255, .6)">
                                {{-- date --}}
                                <div class="m-auto mr-2 -ml-2 font-montserrat sm:ml-5 sm:mr-10 " style="width: 20%">
                                    <p class="text-base font-bold text-center md:text-xl">June 1 2021</p>
                                </div>
                                {{-- caption --}}
                                <div class="flex items-center" style="width: 50%">
                                    <div >
                                        <h1 class="text-xl tracking-wider font-bebas sm:text-2xl">CAPTION HERE</h1>
                                        <p class="text-xs text-justify sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        <div class="flex items-center justify-end w-full my-1">
                                            <button href="" class="flex items-center px-2 py-1 text-xs text-black underline rounded-md " @click="seemore1 = !seemore1 ">see more</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- image --}}
                                <div class="p-2" style="width: 30%">
                                    <img src="img/about/milestone1.png" class="object-cover w-full h-full underline rounded-r-lg" alt="">
                                </div>
                            </div>
                        </div>

                        {{-- millestone2 --}}
                        <div class="flex w-full h-auto mb-5" >
                            {{-- triangle shape --}}
                            <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.15rem solid transparent; border-bottom: 3.15rem solid transparent; border-right: 25px solid rgb(255, 255, 255, .6);"></div>
                            <div class="flex w-full gap-1 rounded-lg h-28" style="background-color:rgb(255, 255, 255, .6)">
                                {{-- date --}}
                                <div class="m-auto mr-2 -ml-2 font-montserrat sm:ml-5 sm:mr-10 " style="width: 20%">
                                    <p class="text-base font-bold text-center md:text-xl">DATE HERE</p>
                                </div>
                                {{-- caption --}}
                                <div class="flex items-center" style="width: 50%">
                                    <div >
                                        <h1 class="text-xl tracking-wider font-bebas sm:text-2xl">CAPTION HERE</h1>
                                        <p class="text-xs text-justify sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        <div class="flex items-center justify-end w-full my-1">
                                            <button href="" class="flex items-center px-2 py-1 text-xs text-black underline rounded-md " @click="seemore2 = !seemore2 ">see more</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- image --}}
                                <div class="p-2" style="width: 30%">
                                    <img src="img/about/milestone2.png" class="object-cover w-full h-full underline rounded-r-lg" alt="">
                                </div>
                            </div>
                        </div>

                        {{-- millestone3 --}}
                        <div class="flex w-full h-auto mb-5" >
                            {{-- triangle shape --}}
                            <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.15rem solid transparent; border-bottom: 3.15rem solid transparent; border-right: 25px solid rgb(255, 255, 255, .6);"></div>
                            <div class="flex w-full gap-1 rounded-lg h-28" style="background-color:rgb(255, 255, 255, .6)">
                                {{-- date --}}
                                <div class="m-auto mr-2 -ml-2 font-montserrat sm:ml-5 sm:mr-10 " style="width: 20%">
                                    <p class="text-base font-bold text-center md:text-xl">DATE HERE</p>
                                </div>
                                {{-- caption --}}
                                <div class="flex items-center" style="width: 50%">
                                    <div >
                                        <h1 class="text-xl tracking-wider font-bebas sm:text-2xl">CAPTION HERE</h1>
                                        <p class="text-xs text-justify sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        <div class="flex items-center justify-end w-full my-1">
                                            <button href="" class="flex items-center px-2 py-1 text-xs text-black underline rounded-md " @click="seemore3 = !seemore3 ">see more</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- image --}}
                                <div class="p-2" style="width: 30%">
                                    <img src="img/about/milestone3.png" class="object-cover w-full h-full underline rounded-r-lg" alt="">
                                </div>
                            </div>
                        </div>

                        {{-- millestone4 --}}
                        <div class="flex w-full h-auto mb-5" >
                            {{-- triangle shape --}}
                            <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.15rem solid transparent; border-bottom: 3.15rem solid transparent; border-right: 25px solid rgb(255, 255, 255, .6);"></div>
                            <div class="flex w-full gap-1 rounded-lg h-28" style="background-color:rgb(255, 255, 255, .6)">
                                {{-- date --}}
                                <div class="m-auto mr-2 -ml-2 font-montserrat sm:ml-5 sm:mr-10 " style="width: 20%">
                                    <p class="text-base font-bold text-center md:text-xl">DATE HERE</p>
                                </div>
                                {{-- caption --}}
                                <div class="flex items-center" style="width: 50%">
                                    <div >
                                        <h1 class="text-xl tracking-wider font-bebas sm:text-2xl">CAPTION HERE</h1>
                                        <p class="text-xs text-justify sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        <div class="flex items-center justify-end w-full my-1">
                                            <button href="" class="flex items-center px-2 py-1 text-xs text-black underline rounded-md " @click="seemore4 = !seemore4 ">see more</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- image --}}
                                <div class="p-2" style="width: 30%">
                                    <img src="img/about/milestone4.png" class="object-cover w-full h-full underline rounded-r-lg" alt="">
                                </div>
                            </div>
                        </div>

                        {{-- millestone5 --}}
                        <div class="flex w-full h-auto mb-5" >
                            {{-- triangle shape --}}
                            <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.15rem solid transparent; border-bottom: 3.15rem solid transparent; border-right: 25px solid rgb(255, 255, 255, .6);"></div>
                            <div class="flex w-full gap-1 rounded-lg h-28" style="background-color:rgb(255, 255, 255, .6)">
                                {{-- date --}}
                                <div class="m-auto mr-2 -ml-2 font-montserrat sm:ml-5 sm:mr-10 " style="width: 20%">
                                    <p class="text-base font-bold text-center md:text-xl">DATE HERE</p>
                                </div>
                                {{-- caption --}}
                                <div class="flex items-center" style="width: 50%">
                                    <div >
                                        <h1 class="text-xl tracking-wider font-bebas sm:text-2xl">CAPTION HERE</h1>
                                        <p class="text-xs text-justify sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        <div class="flex items-center justify-end w-full my-1">
                                            <button href="" class="flex items-center px-2 py-1 text-xs text-black underline rounded-md " @click="seemore5 = !seemore5 ">see more</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- image --}}
                                <div class="p-2" style="width: 30%">
                                    <img src="img/about/milestone5.png" class="object-cover w-full h-full underline rounded-r-lg" alt="">
                                </div>
                            </div>
                        </div>

                        {{-- millestone6 --}}
                        <div class="flex w-full h-auto mb-5" >
                            {{-- triangle shape --}}
                            <div class="" style="margin-top: 0.35rem; width: 0; height: 0; border-top: 3.15rem solid transparent; border-bottom: 3.15rem solid transparent; border-right: 25px solid rgb(255, 255, 255, .6);"></div>
                            <div class="flex w-full gap-1 rounded-lg h-28" style="background-color:rgb(255, 255, 255, .6)">
                                {{-- date --}}
                                <div class="m-auto mr-2 -ml-2 font-montserrat sm:ml-5 sm:mr-10 " style="width: 20%">
                                    <p class="text-base font-bold text-center md:text-xl">DATE HERE</p>
                                </div>
                                {{-- Caption --}}
                                <div class="flex items-center" style="width: 50%">
                                    <div >
                                        <h1 class="text-xl tracking-wider font-bebas sm:text-2xl">CAPTION HERE</h1>
                                        <p class="text-xs text-justify sm:text:sm" style="text-indent: 1.5rem; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; ">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                        <div class="flex items-center justify-end w-full my-1">
                                            <button href="" class="flex items-center px-2 py-1 text-xs text-black underline rounded-md " @click="seemore6 = !seemore6 ">see more</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- image --}}
                                <div class="p-2" style="width: 30%">
                                    <img src="img/about/milestone6.png" class="object-cover w-full h-full underline rounded-r-lg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('main')

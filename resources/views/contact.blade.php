@extends('layouts/app')
@section('title')
    Contact
@endsection('title')

@section('main')
<!-- Sticky Navigation Bar (Website View - contact page) -->
<nav class="hidden md:h-20 md:flex md:justify-around md:sticky md:top-0 md:z-50 md:bg-black">
    <div class="flex w-full h-20 justify-center items-center">
        <div class="w-11/12 md:w-11/12 lg:w-9/12 flex justify-between content-center">
            <div>
                <a href="">
                    <img class="" src="img/pmc_logo.png" alt="logo" >
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
        <div class="relative h-44  md:h-96">
        <img src="img/contact/contact1.png" alt="Image" class="w-full h-full object-cover">
        <div class="absolute top-0 left-0 flex w-full h-full flex items-center justify-center">
            <p class="text-white text-4xl md:text-6xl lg:text-8xl font-bebas">CONTACT</p>
        </div>
        </div>
    </main>
    <div class="background-cover bg-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg'); ">
    <div class="bg-white bg-opacity-75 flex justify-center">
        <div class=" w-11/12 md:w-11/12 lg:w-9/12">
          {{-- Content --}}
                        <div class="my-10 flex flex-col-reverse md:flex-row  md:px-8 md:pb-8 pt-5 gap-8 bg-white">
                                <!-- Contacts -->
                            <div class="h-full md:h-auto w-full md:w-96 flex flex-col ">
                                <div class="h-28 md:h-1/4 md:pb-3 mb-3 md:mb-0 bg-white">
                                    <div class="h-full w-full border-2 border-gray-200">
                                        <div class="h-3/5 w-full flex justify-center items-center">
                                            <div class="h-14 w-14 md:w-16 rounded-full p-4 md:p-4 border border-[#860909]  ">
                                                <img src="img/icons/red-icons/call.png" class="w-full" alt="call">
                                            </div>
                                        </div>
                                        <div class="h-2/5 w-full font-montserrat text-center">
                                            <p class="text-sm md:text-base ">Call us directly at</p>
                                            <p class="text-sm md:text-base ">09361532369</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-28 md:h-1/4 md:pt-3 md:pb-3 mb-3 md:mb-0 bg-white">
                                    <div class="h-full w-full border-2 border-gray-200">
                                        <div class="h-3/5 w-full flex justify-center items-center">
                                            <div class="h-14 w-14 md:w-16 rounded-full p-4 md:p-4 border border-[#860909]">
                                                <img src="img/icons/red-icons/email.png" class="w-full" alt="email">
                                            </div>
                                        </div>
                                        <div class="h-2/5 w-full font-montserrat text-center">
                                            <p class="text-sm md:text-base ">Email us</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-28 md:h-1/4 md:pt-3 md:pb-3 mb-3 md:mb-0 bg-white">
                                    <div class="h-full w-full border-2 border-gray-200">
                                        <div class="h-3/5 w-full flex justify-center items-center">
                                            <div class="h-14 w-14 md:w-16 rounded-full p-4 md:p-4 border border-[#860909]">
                                                <img src="img/icons/red-icons/youtube.png" class="w-full" alt="youtube">
                                            </div>
                                        </div>
                                        <div class="h-2/5 w-full font-montserrat text-center">
                                            <p class="text-sm md:text-base" >YouTube</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-28 md:h-1/4 md:pt-3 mb-3 md:mb-0 bg-white">
                                    <div class="h-full w-full border-2 ">
                                        <div class="h-3/5 w-ful flex justify-center items-center">
                                            <div class="h-14 w-14 md:w-16 rounded-full p-4 md:p-4 border border-[#860909]">
                                                <img src="img/icons/red-icons/facebook.png" class="w-full" alt="facebook">
                                            </div>
                                        </div>
                                        <div class="h-2/5 w-full font-montserrat text-center">
                                            <p>Facebook</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- CONTACT FORM --}}
                            <div class="mt-2 md:mt-0 h-auto w-full md:w-4/6 border-2 flex content-center justify-center">
                                <div class="w-4/5 ">
                                    <div class="text-center w-w-1/2 md:w-full px-4 md:px-0 ">
                                        <h1 class="text-red-900 mt-8 md:mt-0 text-xl md:pt-16 font-montserrat font-semibold  md:mb-10"> Title here </h1>
                                        <span class="font-montserrat text-sm md:text-base text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. </span>
                                    </div>
                                <form action="">
                                        <div class="w-full grid grid-cols-1 lg:grid-cols-2 mt-10 gap-2 md:gap-5 ">
                                            <div class="w-full flex flex-col">
                                                <label class="font-montserrat text-base" name="fname">First name: <span class="text-red-500">*</span></label>
                                                <input type="text" class="h-10 w-full border-2">
                                            </div>
                                            <div class="w-full flex flex-col">
                                                <label class="font-montserrat text-base " name="lname">Last name: <span class="text-red-500">*</span></label>
                                            <input type="text" class="h-10 w-full border border-2">
                                            </div>
                                            <div class="w-full flex flex-col">
                                                <label class="font-montserrat text-base " name="email">Email Address: <span class="text-red-500">*</span></label>
                                            <input type="text" class="h-10 w-full border-2">
                                            </div>
                                            <div class="w-full flex flex-col">
                                                <label class="font-montserrat text-base " name="Phone Number:"> Phone Number: <span class="text-red-500">*</span></label>
                                            <input type="text" class="lg:mb-5 h-10 w-full border-2">
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <label class="font-montserrat text-base lg:text-lg" name="Phone Number:">Message: <span class="text-red-500">*</span></label>
                                            <textarea class="h-20 w-full border-2"></textarea>
                                        </div>
                                        <div class=" w-full flex justify-center mt-2 mb-2 ">
                                            <a class="font-montserrat font-bold text-normal h-2/4 w-36 bg-black text-white p-4 flex justify-center items-center " href="" type="submit">SUBMIT</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Embedded Google Map -->
                         <div class="mb-10 ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15465.64095748659!2d120.9929431!3d14.2875806!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d3db12319997%3A0x1f82568f30df831a!2sPhilippian%20Marketing%20Corporation%20(PMC)!5e0!3m2!1sen!2sph!4v1686440142754!5m2!1sen!2sph" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                         </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection('main')

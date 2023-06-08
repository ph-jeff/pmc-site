@extends('layouts/app')
@section('title')
    Contact
@endsection('title')

@section('main')
<!-- Sticky Navigation Bar (Website View - contact page) -->
<nav class="hidden md:min-h-[91px] md:h-20 md:flex md:justify-around md:sticky md:top-0 md:z-50 md:bg-black">
    <div class="h-full w-[20%] flex items-center">
        <a href="">
            <img class="" src="img/pmc_logo.png" alt="logo" >
        </a>
    </div>
    <div class="w-[50%] flex items-center justify-end">
        <ul class="flex">        
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold " href="/"> Home </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/about"> About </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/team"> Team </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/news"> News </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/career"> Career </a></li>
            <li class="p-3 px-5 bg-danger"><a class="text-white text-base font-semibold" href="/contact"> Contact </a></li>
        </ul>
    </div>
</nav>
        {{-- <div class="h-[240vh]">
            <div class="relative pb-[30%] md:hidden ">
                <img src="img/contact/contact1.png" class="absolute h-full w-full object-cover" alt="">
                <div class="absolute h-full w-full flex justify-center items-center">
                    <h1 class="montserrat text-2xl font-bold text-white">CONTACT</h1>
                </div>
            </div>
            <div class="hidden md:h-[24%] md:bg-cover md:bg-norepeat md:bg-slate-900 md:flex md:justify-center " style="background-image: url('img/contact/contact1.png')">
            <h1 class="montserrat text-6xl font-bold text-white mt-32">CONTACT US</h1>
        </div>
        
        <div class=" h-[76%] background-cover bg-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg');">
            <div class=" h-[63%] bg-white/[75%] ">
                <div class="relative h-full flex justify-center md:-top-16 ">
                    <div class="absolute h-full w-[82%] flex flex-col-reverse md:flex-row md:bg-white z-10 ">
                        <!-- Contacts -->
                        <div class="h-full w-full md:w-[35%] py-3 md:pl-7 md:pr-0 ">
                            <div class="h-[30%] md:h-[25%] md:pt-3 md:pb-3 bg-white">
                                <div class="h-full w-full border-2 border-gray-200">
                                    <div class="h-[60%] w-full flex justify-center items-center">
                                        <div class="h-14 w-14 md:w-[16%] rounded-full p-4 md:p-4 border border-[#860909] ">
                                            <img src="img/icons/red-icons/call.png" class="w-full" alt="call">
                                        </div>
                                    </div>
                                    <div class="h-[40%] w-full font-montserrat text-center">
                                        <p class="text-sm md:text-base ">Call us directly at</p>
                                        <p class="text-sm md:text-base ">09361532369</p>
                                    </div>
                                </div>
                            </div>
                            <div class="h-[30%] md:h-[25%] md:pt-3 md:pb-3 bg-white">
                                <div class="h-full w-full border-2 border-gray-200">
                                    <div class="h-[60%] w-full flex justify-center items-center">
                                        <div class="h-14 w-14 md:w-[16%] rounded-full p-4 md:p-4 border border-[#860909]">
                                            <img src="img/icons/red-icons/email.png" class="w-full" alt="email">
                                        </div>
                                    </div>
                                    <div class="h-[40%] w-full font-montserrat text-center">
                                        <p class="text-sm md:text-base ">Email us</p>
                                    </div>
                                </div>
                            </div>
                            <div class="h-[30%] md:h-[25%] md:pt-3 md:pb-3 bg-white">
                                <div class="h-full w-full border-2 border-gray-200">
                                    <div class="h-[60%] w-full flex justify-center items-center">
                                        <div class="h-14 w-14 md:w-[16%] rounded-full p-4 md:p-4 border border-[#860909]">
                                            <img src="img/icons/red-icons/youtube.png" class="w-full" alt="youtube">
                                        </div>
                                    </div>
                                    <div class="h-[40%] w-full font-montserrat text-center">
                                        <p class="text-sm md:text-base" >YouTube</p>
                                    </div>
                                </div>
                            </div>
                            <div class="h-[30%] md:h-[25%] md:pt-3 md:pb-3 bg-white">
                                <div class="h-full w-full border-2 border-gray-200">
                                    <div class="h-[60%] w-full flex justify-center items-center">
                                        <div class="h-14 w-14 md:w-[16%] rounded-full p-4 md:p-4 border border-[#860909]">
                                            <img src="img/icons/red-icons/facebook.png" class="w-full" alt="facebook">
                                        </div>
                                    </div>
                                    <div class="h-[40%] w-full font-montserrat text-center">
                                        <p>Facebook</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-full w-full md:w-[65%] md:p-6 md:px-7 bg-white mt-2 ">
                            <div class="h-auto md:h-full w-full flex justify-center md:border-2 border-gray-200">
                                <div class="h-full w-full md:w-[90%]">
                                    <div class="h-[37%]">
                                        <div class="h-[35%] flex justify-center items-end">
                                            <h1 class="font-montserrat font-semibold text-1xl text- tracking-wide text-[#860909]">Title Here </h1>
                                        </div>
                                        <div class="h-[65%] flex md:items-center">
                                            <p class="text-center text-xs md:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. </p>
                                        </div>
                                    </div>
                                    <!-- Message Form -->
                                    <div class="h-auto md:h-[63%] w-full  flex justify-center">
                                        <form class=" h-auto md:h-full w-[90%]" action="">
                                            <div class="h-auto md:h-[20%] w-full md:flex gap-x-5">
                                                <div class="h-[80%] w-full flex flex-col ">
                                                    <label class="font-montserrat h-2/4 text-sm md:text-base flex items-center" for="">First name<span class="text-red-500">*</span></label>
                                                    <input class="h-2/4 border border-gray-400 w-full" type="text">
                                                </div>
                                                <div class="h-[80%] w-full flex flex-col">
                                                    <label class="font-montserrat h-2/4 text-sm md:text-base flex items-center" for="">Last name<span class="text-red-500">*</span></label>
                                                    <input class="h-2/4 border border-gray-400 w-full" type="text">
                                                </div>
                                            </div>
                                            <div class="h-auto md:h-[20%] w-full md:flex gap-x-5">
                                                <div class="h-[80%] w-full flex flex-col">
                                                    <label class="font-montserrat h-2/4 text-sm md:text-base flex items-center" for="">Email Adrdress<span class="text-red-500">*</span></label>
                                                    <input class="h-2/4 border border-gray-400 w-full" type="text">
                                                </div>
                                                <div class="h-[80%] w-full flex flex-col">
                                                    <label class="font-montserrat h-2/4 text-sm md:text-base flex items-center" for="">Phone Number<span class="text-red-500">*</span></label>
                                                    <input class="h-2/4 border border-gray-400 w-full" type="text">
                                                </div>
                                            </div>
                                            <div class="h-auto md:h-[40%] w-full">
                                                <div class="h-[90%] w-full flex flex-col">
                                                    <label class="font-montserrat h-[25%] text-sm md:text-base flex items-center " for="">Message<span class="text-red-500">*</span></label>
                                                    <input class="h-14 md:h-[75%] border border-gray-400 w-full" type="text">
                                                </div>
                                            </div>
                                            <div class="relative h-[20%] w-full flex justify-center">
                                                <a class="absolute font-montserrat font-bold text-normal h-[50%] w-[25%] bg-black text-white p-4 top-1 flex justify-center items-center" href="" type="submit"> SUBMIT</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Embedded Google Map -->
            <div class="h-[37%] bg-white/[75%] pt-[15%] md:pt-0">
                <div class="h-[80%] w-full  flex justify-center">
                    <div class="h-full w-[80%] md:w-[75%] drop-shadow-md shadow-gray-500">
                        <iframe class="h-full" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1070&amp;height=379&amp;hl=en&amp;q=Philippian Marketing Corporation&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <main>
        <div class="relative h-44  md:h-96">
          <img src="img/contact/contact1.png" alt="Image" class="w-full h-full object-cover">
          <div class="absolute top-0 left-0 flex w-full h-full flex items-center justify-center">
            <p class="text-white text-4xl md:text-6xl lg:text-8xl font-bebas">CONTACT</p>
          </div>
        </div>
      </main>
    <div>

    </div>
@endsection('main')
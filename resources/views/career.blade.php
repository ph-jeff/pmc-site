@extends('layouts/app')
@section('title')
  Career
@endsection('title')
@section('main')
<!-- Sticky Navigation Bar (Website View - career page) -->
<nav class="hidden md:h-20 md:flex md:justify-around md:sticky md:top-0 md:z-50 md:bg-black">
  <div class="h-full w-[20%] flex items-center">
      <a href="">
        <img class="" src="img/pmc_logo.png" alt="logo" >
      </a>
  </div>
  <div class="w-[50%] flex items-center justify-end">
      <ul class="flex">
        <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold  " href="/"> Home </a></li>
        <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/about"> About </a></li>
        <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/team"> Team </a></li>
        <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/news"> News </a></li>
        <li class="p-3 px-5 bg-danger"><a class="text-white text-base font-semibold" href="/career"> Career </a></li>
        <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/contact"> Contact </a></li>
      </ul>
  </div>
</nav>
<main>
  <div class="relative h-44  md:h-96">
    <img src="img/career/01.png" alt="Image" class="w-full h-full object-cover">
    <div class="absolute top-0 left-0 flex w-full h-full flex items-center justify-center">
      <p class="text-white text-4xl md:text-6xl lg:text-8xl font-bebas">CAREER</p>
    </div>
  </div>
</main>
<section class="lg:h-auto w-full font-montserrat background-cover bg-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg'); ">
  <div class="w-full h-full bg-white/[75%] flex justify-center">
    <div class="relative h-full sm:columns-2 md:columns-2 lg:columns-1 lg:w-[88%] pt-20 lg:pt-20 px-5 lg:px-10 ">
      {{-- SALES --}}
      <div class="h-1/6 max-w-full overflow-hidden mb-5 lg:mb-16">
        <div class="group h-full w-full flex flex-col lg:flex-row lg:flex-nowrap">
          <div class="h-40 lg:h-52 w-full lg:w-1/4 rounded-t-lg">
            <img class="h-full lg:h-full w-full object-cover lg:group-hover:scale-110 rounded-t-xl lg:rounded-none" src="img/career/sales2.jpg" alt="">
          </div>
          <div class=" h-full lg:h-full w-full lg:w-3/4  lg:py-0 lg:px-5 lg:pl-5 flex justify-center rounded-b-lg border-2 lg:border-none">
            <div class="w-full mx-3 lg:mx-0 lg:w-full h-full">
              <div class="h-1/12 lg:h-1/6 flex items-end py-2 lg:py-0 bg-slate-900">
                <a href="#" class="block text-xl lg:text-1xl font-bold lg:font-bold leading-tight text-[#860909]">SALES</a>
              </div>
              <div class="h-[70%] lg:h-[65%]">
                <p class="leading-relaxed lg:leading-loose text-sm lg:text-base font-medium text-justify ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut   et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum.</p>
              </div>
              <div class="py-2 lg:py-0 h-[20%] lg:h-[20%] flex justify-start lg:justify-end ">
                <a href="{{ url('application-form') }}" class="w-30 lg:w-30 h-full lg:h-full bg-black rounded-md lg:rounded-full text-slate-100 px-4 py-2 hover:bg-[#860909] flex justify-center items-center ">Apply Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- IT --}}
      <div class="h-1/6 max-w-full overflow-hidden mb-5 lg:mb-16">
        <div class="group h-full w-full flex flex-col lg:flex-row lg:flex-nowrap">
          <div class="h-40 lg:h-52 w-full lg:w-1/4 rounded-t-lg">
            <img class="h-full lg:h-full w-full object-cover lg:group-hover:scale-110 rounded-t-xl lg:rounded-none" src="img/career/IT.jpg" alt="">
          </div>
          <div class=" h-full lg:h-full w-full lg:w-3/4  lg:py-0 lg:px-5 lg:pl-5 flex justify-center rounded-b-lg border-2 lg:border-none">
            <div class="w-full mx-3 lg:mx-0 lg:w-full h-full">
              <div class="h-1/12 lg:h-1/6 flex items-end py-2 lg:py-0">
                <a href="#" class="block text-xl lg:text-1xl font-bold lg:font-bold leading-tight text-[#860909]">IT</a>
              </div>
              <div class="h-[70%] lg:h-[65%]">
                <p class="leading-relaxed lg:leading-loose text-sm lg:text-base font-medium text-justify ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut   et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum.</p>
              </div>
              <div class="py-2 lg:py-0 h-[20%] lg:h-[20%] flex justify-start lg:justify-end ">
                <a href="{{ url('application-form') }}" class="w-30 lg:w-30 h-full lg:h-full bg-black rounded-md lg:rounded-full text-slate-100 px-4 py-2 hover:bg-[#860909] flex justify-center items-center ">Apply Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- HR --}}
      <div class="h-1/6 max-w-full overflow-hidden mb-5 lg:mb-16">
        <div class="group h-full w-full flex flex-col lg:flex-row lg:flex-nowrap">
          <div class="h-40 lg:h-52 w-full lg:w-1/4 rounded-t-lg">
            <img class="h-full lg:h-full w-full object-cover lg:group-hover:scale-110 rounded-t-xl lg:rounded-none" src="img/career/hr.jpg" alt="">
          </div>
          <div class=" h-full lg:h-full w-full lg:w-3/4  lg:py-0 lg:px-5 lg:pl-5 flex justify-center rounded-b-lg border-2 lg:border-none">
            <div class="w-full mx-3 lg:mx-0 lg:w-full h-full">
              <div class="h-[10%] lg:h-[15%] flex items-end py-2 lg:py-0">
                <a href="#" class="block text-xl lg:text-1xl font-bold lg:font-bold leading-tight text-[#860909]">HUMAN RESOURCES</a>
              </div>
              <div class="h-[70%] lg:h-[65%]">
                <p class="leading-relaxed lg:leading-loose text-sm lg:text-base font-medium text-justify ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut   et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum.</p>
              </div>
              <div class="py-2 lg:py-0 h-[20%] lg:h-[20%] flex justify-start lg:justify-end ">
                <a href="{{ url('application-form') }}" class="w-30 lg:w-30 h-full lg:h-full bg-black rounded-md lg:rounded-full text-slate-100 px-4 py-2 hover:bg-[#860909] flex justify-center items-center ">Apply Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- MARKETING --}}
      <div class="h-1/6 max-w-full overflow-hidden mb-5 lg:mb-16">
        <div class="group h-full w-full flex flex-col lg:flex-row lg:flex-nowrap">
          <div class="h-40 lg:h-52 w-full lg:w-1/4 rounded-t-lg">
            <img class="h-full lg:h-full w-full object-cover lg:group-hover:scale-110 rounded-t-xl lg:rounded-none" src="img/career/marketing.jpg" alt="">
          </div>
          <div class=" h-full lg:h-full w-full lg:w-3/4  lg:py-0 lg:px-5 lg:pl-5 flex justify-center rounded-b-lg border-2 lg:border-none">
            <div class="w-full mx-3 lg:mx-0 lg:w-full h-full">
              <div class="h-[10%] lg:h-[15%] flex items-end py-2 lg:py-0">
                <a href="#" class="block text-xl lg:text-1xl font-bold lg:font-bold leading-tight text-[#860909]">MARKETING</a>
              </div>
              <div class="h-[70%] lg:h-[65%]">
                <p class="leading-relaxed lg:leading-loose text-sm lg:text-base font-medium text-justify ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut   et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum.</p>
              </div>
              <div class="py-2 lg:py-0 h-[20%] lg:h-[20%] flex justify-start lg:justify-end ">
                <a href="{{ url('application-form') }}" class="w-30 lg:w-30 h-full lg:h-full bg-black rounded-md lg:rounded-full text-slate-100 px-4 py-2 hover:bg-[#860909] flex justify-center items-center ">Apply Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- WAREHOUSE --}}
      <div class="h-1/6 max-w-full overflow-hidden mb-5 lg:mb-16">
        <div class="group h-full w-full flex flex-col lg:flex-row lg:flex-nowrap">
          <div class="h-40 lg:h-52 w-full lg:w-1/4 rounded-t-lg">
            <img class="h-full lg:h-full w-full object-cover lg:group-hover:scale-110 rounded-t-xl lg:rounded-none" src="img/career/warehousestaff.jpg" alt="">
          </div>
          <div class=" h-full lg:h-full w-full lg:w-3/4  lg:py-0 lg:px-5 lg:pl-5 flex justify-center rounded-b-lg border-2 lg:border-none">
            <div class="w-full mx-3 lg:mx-0 lg:w-full h-full">
              <div class="h-[10%] lg:h-[15%] flex items-end py-2 lg:py-0">
                <a href="#" class="block text-xl lg:text-1xl font-bold lg:font-bold leading-tight text-[#860909]">WAREHOUSE</a>
              </div>
              <div class="h-[70%] lg:h-[65%]">
                <p class="leading-relaxed lg:leading-loose text-sm lg:text-base font-medium text-justify ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut   et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum.</p>
              </div>
              <div class="py-2 lg:py-0 h-[20%] lg:h-[20%] flex justify-start lg:justify-end ">
                <a href="{{ url('application-form') }}" class="w-30 lg:w-30 h-full lg:h-full bg-black rounded-md lg:rounded-full text-slate-100 px-4 py-2 hover:bg-[#860909] flex justify-center items-center ">Apply Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- FINANCE --}}
      <div class="h-1/6 max-w-full overflow-hidden mb-5 lg:mb-16">
        <div class="group h-full w-full flex flex-col lg:flex-row lg:flex-nowrap">
          <div class="h-40 lg:h-52 w-full lg:w-1/4 rounded-t-lg">
            <img class="h-full lg:h-full w-full object-cover lg:group-hover:scale-110 rounded-t-xl lg:rounded-none" src="img/career/finance.jpg" alt="">
          </div>
          <div class=" h-full lg:h-full w-full lg:w-3/4  lg:py-0 lg:px-5 lg:pl-5 flex justify-center rounded-b-lg border-2 lg:border-none">
            <div class="w-full mx-3 lg:mx-0 lg:w-full h-full">
              <div class="h-[10%] lg:h-[15%] flex items-end py-2 lg:py-0">
                <a href="#" class="block text-xl lg:text-1xl font-bold lg:font-bold leading-tight text-[#860909]">FINANCE</a>
              </div>
              <div class="h-[70%] lg:h-[65%]">
                <p class="leading-relaxed lg:leading-loose text-sm lg:text-base font-medium text-justify ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut   et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum.</p>
              </div>
              <div class="py-2 lg:py-0 h-[20%] lg:h-[20%] flex justify-start lg:justify-end ">
                <a href="{{ url('application-form') }}" class="w-30 lg:w-30 h-full lg:h-full bg-black rounded-md lg:rounded-full text-slate-100 px-4 py-2 hover:bg-[#860909] flex justify-center items-center ">Apply Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  {{-- PAGINATION --}}
  <div class="h-20 w-full bg-white/[75%] flex justify-center">
    <div class="h-full w-full sm:w-[80%] flex justify-center lg:justify-end">
      <div class="h-14 w-11/12 sm:w-11/12 md:w-3/4 lg:w-1/3 flex justify-center md:justify-start items-center gap-1 gap-x-2">
        <a href="#" class="h-full w-[25%] rounded flex justify-center items-center border text-red-900   ">
            <
        </a>
        <a href="{{ url('/career') }}" class="h-full w-[15%] rounded flex justify-center items-center border text-white bg-red-900">
            1
        </a>
        <a href="{{ url('/career2') }}" class="h-full w-[15%] rounded flex justify-center items-center border text-red-900">
            2
        </a>
        <a href="{{ url('/career3') }}" class="h-full w-[15%] rounded flex justify-center items-center border text-red-900">
            3
        </a>
        <a href="{{ url('#') }}" class="h-full w-[25%] rounded flex justify-center items-center border text-red-900 opacity-50">
            >   
        </a>
      </div>
    </div>
  </div>
</section>
 @endsection('main')
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
      <div class="relative h-[14vh] md:h-[51vh]">
        <img src="img/career/01.png" alt="Image" class="w-full h-full ">
        <div class="absolute top-0 left-0 flex w-full h-full flex items-center justify-center">
          <p class="text-white text-4xl md:text-6xl lg:text-8xl font-bebas">CAREER</p>
        </div>
      </div>
    </main>
    <section class="md:h-[270vh] w-full font-montserrat  background-cover bg-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg'); ">
      <div class="w-full  bg-white/[75%] flex justify-center">
        <div class="relative  h-full md:w-[83%] py-5 md:py-20 px-5 md:px-10 ">
          {{-- SALES --}}
          <div class="h-[12%] max-w-full bg-white overflow-hidden mb-16">
            <div class="group h-full w-full flex flex-col md:flex-row md:flex-nowrap ">
              <div class="h-40 md:h-full w-full md:w-[25%]">
                <img class="h-full w-full object-cover group-hover:scale-110" src="img/career/sales2.jpg" alt="">
              </div>
              <div class=" h-full w-full md:w-[75%] md:py-0 md:px-5 md:pl-5">
                <div class=" md:h-[25%] flex items-center py-2 md:py-0">
                  <a href="#" class="block text-xl md:text-1xl font-bold md:font-bold leading-tight text-[#860909]">SALES</a>
                </div>
                <div class="h-[75%]">
                  <p class="leading-relaxed md:leading-loose text-sm md:text-base font-medium text-justify ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut   et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum.</p>
                </div>
              </div>
            </div>
          </div>
          {{-- SALES APPLY NOW BUTTON --}}
          <div class="absolute right-8 top-[13.8%] md:top-[13%] ">
            <div class="flex justify-end">
              <a href="{{ url('application-form') }}"><button class="w-[120px] md:w-[120px] h-[40px] md:h-[45px] bg-black rounded-full text-slate-100 px-4 py-2 hover:bg-[#860909] mt-4">Apply Now</button></a>
            </div>
          </div>
          {{-- IT --}}
          <div class="h-[12%] max-w-full bg-white overflow-hidden mb-16">
            <div class="group h-full w-full flex flex-col md:flex-row md:flex-nowrap ">
              <div class="h-40 md:h-full w-full md:w-[25%]">
                <img class="h-full w-full object-cover group-hover:scale-110" src="img/career/IT.jpg" alt="">
              </div>
              <div class=" h-full w-full md:w-[75%] md:py-0 md:px-5 md:pl-5">
                <div class="md:h-[25%] flex items-center py-2 md:py-0">
                  <a href="#" class="block text-xl md:text-1xl font-bold md:font-bold leading-tight text-[#860909]">IT</a>
                </div>
                <div class="h-[75%]">
                  <p class="leading-relaxed md:leading-loose text-sm md:text-base font-medium text-justify ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut   et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum.</p>
                </div>
              </div>
            </div>
          </div>
          {{-- IT APPLY NOW BUTTON --}}
          <div class="absolute right-8 top-[30%] md:top-[27.5%] ">
            <div class="flex justify-end">
              <a href="{{ url('application-form') }}"><button class="w-[120px] md:w-[120px] h-[40px] md:h-[45px] bg-black rounded-full text-slate-100 px-4 py-2 hover:bg-[#860909] mt-4">Apply Now</button></a>
            </div>
          </div>
          {{-- HR --}}
          <div class="h-[12%] max-w-full bg-white overflow-hidden mb-16">
            <div class="group h-full w-full flex flex-col md:flex-row md:flex-nowrap ">
              <div class="h-40 md:h-full w-full md:w-[25%]">
                <img class="h-full w-full object-cover group-hover:scale-110" src="img/career/hr.jpg" alt="">
              </div>
              <div class=" h-full w-full md:w-[75%] md:py-0 md:px-5 md:pl-5">
                <div class="md:h-[25%] flex items-center py-2 md:py-0">
                  <a href="#" class="block text-xl md:text-1xl font-bold md:font-bold leading-tight text-[#860909]">HUMAN RESOURCES</a>
                </div>
                <div class="h-[75%]">
                  <p class="leading-relaxed md:leading-loose text-sm md:text-base font-medium text-justify ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut   et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum.</p>
                </div>
              </div>
            </div>
          </div>
          {{-- HR APPLY NOW BUTTON --}}
          <div class="absolute right-8 top-[46.4%] md:top-[42%] ">
            <div class="flex justify-end">
              <a href="{{ url('application-form') }}"><button class="w-[120px] md:w-[120px] h-[40px] md:h-[45px] bg-black rounded-full text-slate-100 px-4 py-2 hover:bg-[#860909] mt-4">Apply Now</button></a>
            </div>
          </div>
          {{-- MARKETING --}}
          <div class="h-[12%] max-w-full bg-white overflow-hidden mb-16">
            <div class="group h-full w-full flex flex-col md:flex-row md:flex-nowrap ">
              <div class="h-40 md:h-full w-full md:w-[25%]">
                <img class="h-full w-full object-cover group-hover:scale-110" src="img/career/marketing.jpg" alt="">
              </div>
              <div class=" h-full w-full md:w-[75%] md:py-0 md:px-5 md:pl-5">
                <div class="md:h-[25%] flex items-center py-2 md:py-0">
                  <a href="#" class="block text-xl md:text-1xl font-bold md:font-bold leading-tight text-[#860909]">MARKETING</a>
                </div>
                <div class="h-[75%]">
                  <p class="leading-relaxed md:leading-loose text-sm md:text-base font-medium text-justify ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut   et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum.</p>
                </div>
              </div>
            </div>
          </div>
          {{-- MARKETING APPLY NOW BUTTON --}}
          <div class="absolute right-8 top-[62.5%] md:top-[56.5%]">
            <div class="group flex justify-end">
              <a href="{{ url('application-form') }}"><button class="w-[120px] md:w-[120px] h-[40px] md:h-[45px] bg-black rounded-full text-slate-100 px-4 py-2 hover:bg-[#860909] mt-4">Apply Now</button></a>
            </div>
          </div>
          {{-- WAREHOUSE --}}
          <div class="h-[12%] max-w-full bg-white overflow-hidden mb-16">
            <div class="group h-full w-full flex flex-col md:flex-row md:flex-nowrap ">
              <div class="h-40 md:h-full w-full md:w-[25%]">
                <img class="h-full w-full object-cover group-hover:scale-110" src="img/career/warehousestaff.jpg" alt="">
              </div>
              <div class=" h-full w-full md:w-[75%] md:py-0 md:px-5 md:pl-5">
                <div class="md:h-[25%] flex items-center py-2 md:py-0">
                  <a href="#" class="block text-xl md:text-1xl font-bold md:font-bold leading-tight text-[#860909]">WAREHOUSE</a>
                </div>
                <div class="h-[75%]">
                  <p class="leading-relaxed md:leading-loose text-sm md:text-base font-medium text-justify ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut   et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum.</p>
                </div>
              </div>
            </div>
          </div>
          {{-- WAREHOUSE APPLY NOW BUTTON --}}
          <div class="absolute right-8 top-[78.5%] md:top-[71%] ">
            <div class="group flex justify-end">
              <a href="{{ url('application-form') }}"><button class="w-[120px] md:w-[120px] h-[40px] md:h-[45px] bg-black rounded-full text-slate-100 px-4 py-2 hover:bg-[#860909] mt-4">Apply Now</button></a>
            </div>
          </div>
          {{-- FINANCE --}}
          <div class="h-[12%] max-w-full bg-white overflow-hidden mb-16">
            <div class="group h-full w-full flex flex-col md:flex-row md:flex-nowrap ">
              <div class="h-40 md:h-full w-full md:w-[25%]">
                <img class="h-full w-full object-cover group-hover:scale-110" src="img/career/finance.jpg" alt="">
              </div>
              <div class=" h-full w-full md:w-[75%] md:py-0 md:px-5 md:pl-5">
                <div class="md:h-[25%] flex items-center py-2 md:py-0">
                  <a href="#" class="block text-xl md:text-1xl font-bold md:font-bold leading-tight text-[#860909]">FINANCE</a>
                </div>
                <div class="h-[75%]">
                  <p class="leading-relaxed md:leading-loose text-sm md:text-base font-medium text-justify ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut   et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum.</p>
                </div>
              </div>
            </div>
          </div>
          {{-- FINANCE APPLY NOW BUTTON --}}
          <div class="absolute right-8 top-[95%] md:top-[85.5%]">
            <div class="group flex justify-end">
              <a href="{{ url('application-form') }}"><button class="w-[120px] md:w-[120px] h-[40px] md:h-[45px] bg-black rounded-full text-slate-100 px-4 py-2 hover:bg-[#860909] mt-4">Apply Now</button></a>
            </div>
          </div>
          {{-- PAGINATION --}}
          <div class="h-[7%] w-full flex justify-center md:justify-end">
            <div class="h-[80%] w-1/3 flex justify-center items-center gap-1 gap-x-2">
              <a href="#" class="h-[60%] w-[25%] rounded flex justify-center items-center border text-red-900 opacity-50  ">
                  <
              </a>
              <a href="{{ url('/career') }}" class="h-[60%] w-[15%] rounded flex justify-center items-center border text-white bg-red-900">
                  1
              </a>
              <a href="{{ url('/career2') }}" class="h-[60%] w-[15%] rounded flex justify-center items-center border text-red-900">
                  2
              </a>
              <a href="{{ url('/career3') }}" class="h-[60%] w-[15%] rounded flex justify-center items-center border text-red-900">
                  3
              </a>
              <a href="{{ url('#') }}" class="h-[60%] w-[25%] rounded flex justify-center items-center border text-red-900">
                  >   
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
 @endsection('main')
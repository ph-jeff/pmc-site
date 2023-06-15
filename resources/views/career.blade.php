@extends('layouts/app')
@section('title')
  Career
@endsection('title')
@section('main')
<!-- Sticky Navigation Bar (Website View - career page) -->
<nav class="hidden md:h-20 md:flex md:justify-around md:sticky md:top-0 md:z-50 md:bg-black">
  <div class="flex w-full h-20 justify-center items-center">
      <div class="w-11/12 md:w-11/12 lg:w-9/12 flex justify-between content-center">
          <div>
              <a href="/">
                  <img class="" src="img/pmclogo.png" alt="logo" >
              </a>
          </div>
          <ul class="flex gap-1 text-center items-center">
            <a class="text-white text-base font-semibold  " href="/"><li class="h-12 w-20 flex justify-center items-center hover:bg-danger"> Home </li></a>
            <a class="text-white text-base font-semibold" href="/about"><li class="h-12 w-20 flex justify-center items-center hover:bg-danger"> About </li></a>
            <a class="text-white text-base font-semibold" href="/team"><li class="h-12 w-20 flex justify-center items-center hover:bg-danger"> Team </li></a>
            <a class="text-white text-base font-semibold" href="/news"><li class="h-12 w-20 flex justify-center items-center hover:bg-danger"> News </li></a>
            <a class="text-white text-base font-semibold" href="/career"><li class="h-12 w-20 flex justify-center items-center bg-danger"> Career </li></a>
            <a class="text-white text-base font-semibold" href="/contact"><li class="h-12 w-20 flex justify-center items-center hover:bg-danger"> Contact </li></a>
        </ul>
      </div>
  </div>
</nav>
<main>
  {{-- Career Title and Image --}}
  <div class="relative h-44  md:h-96">
    <img src="img/career/01.png" alt="Image" class="w-full h-full object-cover">
    <div class="absolute top-0 left-0 flex w-full h-full flex items-center justify-center">
      <h1 class="text-white text-4xl md:text-6xl lg:text-8xl font-bebas">CAREER</h1>
    </div>
  </div>

  {{-- Career Content --}}
  <div class="h-auto lg:h-auto w-full font-montserrat background-cover bg-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg'); ">
    <div class="w-full h-auto bg-white bg-opacity-75 flex justify-center">
      <div class="relative h-auto sm:grid sm:grid-cols-2 sm:gap-4 md:gap-4 lg:grid lg:grid-cols-1 lg:w-4/5 py-10 lg:pt-20 px-5 lg:px-10 bg-slate-900">
        {{-- SALES --}}
        <div class="h-auto max-w-full lg:flex rounded-xl lg:rounded-none border-2 lg:border-none mb-3">
          <div class="h-40 lg:h-52 lg:w-4/12">
            <img src="img/career/sales.png" class="h-full w-full object-cover rounded-t-xl lg:rounded-none lg:transform lg:scale-95 lg:hover:scale-100" alt="">
          </div>
          <div class="min-h-0 h-auto lg:w-8/12 px-3 pt-1 pb-3">
            <div>
              <h1 class="font-montserrat text-lg font-bold text-red-900 ">SALES</h1>
            </div>
            <div class="pb-2">
              <p class="font-montserrat text-justify lg:text-base lg:leading-loose">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet repellat atque voluptate nostrum et maiores consequuntur beatae ipsum voluptates? Ipsum accusantium dolor ab et veritatis autem quisquam voluptatem aliquid provident.</p>
            </div>
            <div class="flex justify-start lg:justify-end">
              <a href="{{ url('application-form') }}" class="w-30 lg:w-30 h-full lg:h-full bg-black rounded-md lg:rounded-full text-slate-100 px-4 py-2 hover:bg-danger flex justify-center items-center text-white text-sm font-medium  ">Apply Now</a>
            </div>
          </div>
        </div>
        {{-- IT --}}
        <div class="h-auto max-w-full lg:flex rounded-xl lg:rounded-none border-2 lg:border-none mb-3">
          <div class="h-40 lg:h-52 lg:w-4/12">
            <img src="img/career/IT.jpg" class="h-full w-full object-cover rounded-t-xl lg:rounded-none lg:transform lg:scale-95 lg:hover:scale-100" alt="">
          </div>
          <div class="min-h-0 h-auto lg:w-8/12 px-3 pt-1 pb-3">
            <div>
              <h1 class="font-montserrat text-lg font-bold text-red-900 ">IT</h1>
            </div>
            <div class="pb-2">
              <p class="font-montserrat text-justify lg:text-base lg:leading-loose">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet repellat atque voluptate nostrum et maiores consequuntur beatae ipsum voluptates? Ipsum accusantium dolor ab et veritatis autem quisquam voluptatem aliquid provident.</p>
            </div>
            <div class="flex justify-start lg:justify-end">
              <a href="{{ url('application-form') }}" class="w-30 lg:w-30 h-full lg:h-full bg-black rounded-md lg:rounded-full text-slate-100 px-4 py-2 hover:bg-danger flex justify-center items-center text-white text-sm font-medium  ">Apply Now</a>
            </div>
          </div>
        </div>
        {{-- HR --}}
        <div class="h-auto max-w-full lg:flex rounded-xl lg:rounded-none border-2 lg:border-none mb-3">
          <div class="h-40 lg:h-52 lg:w-4/12">
            <img src="img/career/hr.jpg" class="h-full w-full object-cover rounded-t-xl lg:rounded-none lg:transform lg:scale-95 lg:hover:scale-100" alt="">
          </div>
          <div class="min-h-0 h-auto lg:w-8/12 px-3 pt-1 pb-3">
            <div>
              <h1 class="font-montserrat text-lg font-bold text-red-900 ">HUMAN RESOURCES</h1>
            </div>
            <div class="pb-2">
              <p class="font-montserrat text-justify lg:text-base lg:leading-loose">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet repellat atque voluptate nostrum et maiores consequuntur beatae ipsum voluptates? Ipsum accusantium dolor ab et veritatis autem quisquam voluptatem aliquid provident.</p>
            </div>
            <div class="flex justify-start lg:justify-end">
              <a href="{{ url('application-form') }}" class="w-30 lg:w-30 h-full lg:h-full bg-black rounded-md lg:rounded-full text-slate-100 px-4 py-2 hover:bg-danger flex justify-center items-center text-white text-sm font-medium  ">Apply Now</a>
            </div>
          </div>
        </div>
        {{-- MARKETING --}}
        <div class="h-auto max-w-full lg:flex rounded-xl lg:rounded-none border-2 lg:border-none mb-3">
          <div class="h-40 lg:h-52 lg:w-4/12">
            <img src="img/career/marketing.jpg" class="h-full w-full object-cover rounded-t-xl lg:rounded-none lg:transform lg:scale-95 lg:hover:scale-100" alt="">
          </div>
          <div class="min-h-0 h-auto lg:w-8/12 px-3 pt-1 pb-3">
            <div>
              <h1 class="font-montserrat text-lg font-bold text-red-900 ">MARKETING</h1>
            </div>
            <div class="pb-2">
              <p class="font-montserrat text-justify lg:text-base lg:leading-loose">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet repellat atque voluptate nostrum et maiores consequuntur beatae ipsum voluptates? Ipsum accusantium dolor ab et veritatis autem quisquam voluptatem aliquid provident.</p>
            </div>
            <div class="flex justify-start lg:justify-end">
              <a href="{{ url('application-form') }}" class="w-30 lg:w-30 h-full lg:h-full bg-black rounded-md lg:rounded-full text-slate-100 px-4 py-2 hover:bg-danger flex justify-center items-center text-white text-sm font-medium  ">Apply Now</a>
            </div>
          </div>
        </div>
        {{-- WAREHOUSE --}}
        <div class="h-auto max-w-full lg:flex rounded-xl lg:rounded-none border-2 lg:border-none mb-3">
          <div class="h-40 lg:h-52 lg:w-4/12">
            <img src="img/career/warehousestaff.jpg" class="h-full w-full object-cover rounded-t-xl lg:rounded-none lg:transform lg:scale-95 lg:hover:scale-100" alt="">
          </div>
          <div class="min-h-0 h-auto lg:w-8/12 px-3 pt-1 pb-3">
            <div>
              <h1 class="font-montserrat text-lg font-bold text-red-900 ">WAREHOUSE</h1>
            </div>
            <div class="pb-2">
              <p class="font-montserrat text-justify lg:text-base lg:leading-loose">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet repellat atque voluptate nostrum et maiores consequuntur beatae ipsum voluptates? Ipsum accusantium dolor ab et veritatis autem quisquam voluptatem aliquid provident.</p>
            </div>
            <div class="flex justify-start lg:justify-end">
              <a href="{{ url('application-form') }}" class="w-30 lg:w-30 h-full lg:h-full bg-black rounded-md lg:rounded-full text-slate-100 px-4 py-2 hover:bg-danger flex justify-center items-center text-white text-sm font-medium  ">Apply Now</a>
            </div>
          </div>
        </div>
        {{--  FINANCE --}}
        <div class="h-auto max-w-full lg:flex rounded-xl lg:rounded-none border-2 lg:border-none mb-3">
          <div class="h-40 lg:h-52 lg:w-4/12">
            <img src="img/career/finance.jpg" class="h-full w-full object-cover rounded-t-xl lg:rounded-none lg:transform lg:scale-95 lg:hover:scale-100" alt="">
          </div>
          <div class="min-h-0 h-auto lg:w-8/12 px-3 pt-1 pb-3">
            <div>
              <h1 class="font-montserrat text-lg font-bold text-red-900 ">FINANCE</h1>
            </div>
            <div class="pb-2">
              <p class="font-montserrat text-justify lg:text-base lg:leading-loose">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet repellat atque voluptate nostrum et maiores consequuntur beatae ipsum voluptates? Ipsum accusantium dolor ab et veritatis autem quisquam voluptatem aliquid provident.</p>
            </div>
            <div class="flex justify-start lg:justify-end">
              <a href="{{ url('application-form') }}" class="w-30 lg:w-30 h-full lg:h-full bg-black rounded-md lg:rounded-full text-slate-100 px-4 py-2 hover:bg-danger flex justify-center items-center text-white text-sm font-medium  ">Apply Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- PAGINATION --}}
    <div class="h-20 w-full bg-white bg-opacity-75 flex justify-center">
      <div class="h-full w-full sm:w-3/4 flex justify-center lg:justify-end">
        <div class="h-14 w-11/12 sm:w-11/12 md:w-3/4 lg:w-1/3 flex justify-center md:justify-start items-center gap-1 gap-x-2">
          <a class="h-full w-1/4 rounded flex justify-center items-center border text-gray-900 border-gray-300 text-lg opacity-50">
              <
          </a>
          <a href="{{ url('/career') }}" class="h-full w-2/12 rounded flex justify-center items-center border border-gray-300 text-white bg-danger ">
              1
          </a>
          <a href="{{ url('/career2') }}" class="h-full w-2/12 rounded flex justify-center items-center border border-gray-300 text-red-900">
              2
          </a>
          <a href="{{ url('/career3') }}" class="h-full w-2/12 rounded flex justify-center items-center border border-gray-300 text-red-900">
              3
          </a>
          <a href="{{ url('/career2') }}" class="h-full w-1/4 rounded flex justify-center items-center border text-red-900 border-gray-300 text-lg">
              >   
          </a>
        </div>
      </div>
    </div>
  </div>
</main>
 @endsection('main')
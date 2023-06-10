@extends('./layouts/app')
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

@livewire('application-form')
    {{-- <div class="">
        @livewire('application-form')
    </div> --}}
@endsection('main')
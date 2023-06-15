@extends('./layouts/app')
@section('main')
<!-- Sticky Navigation Bar (Website View - career page) -->
<!-- Sticky Navigation Bar (Website View - contact page) -->
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

@livewire('application-form')
    {{-- <div class="">
        @livewire('application-form')
    </div> --}}
@endsection('main')
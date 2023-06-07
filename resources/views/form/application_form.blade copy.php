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
<div class="flex justify-center background-cover bg-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg');">
    <div class="w-full bg-white bg-opacity-75 flex justify-center">
        {{-- In work, do what you enjoy. --}}
        <form class=" w-9/12 mt-14">
            <div class="text-center">
                <h1 class="font-semibold text-2xl font-semibold leading-10"> Job Application Form </h1>
                <p class="font-normal text-sm leading-10 text-lg leading-10 font-normal"> Please Fill Out the Form to Submit Your Job Application!</p>
            </div>
            <div  class="flex mt-10">
                <h3> Name: <span class="text-red-500">*</span></h3>
            </div>
            <div class="flex-row gap-5 md:flex xl:w-full">
                <input type="text" placeholder="First name" class="mt-2 border border-gray-400 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full lg:w-[33%] lg:h-[55px] rounded-md">
                <input type="text" placeholder="Middle name" class="mt-2 border border-gray-400 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full  lg:h-[55px] rounded-md">
                <input type="text" placeholder="Last name" class="mt-2 border border-gray-400 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full lg:h-[55px] rounded-md">
            </div>
            <div  class="flex mt-2 lg:mt-5 mb-2">
                <h3> Email: <span class="text-red-500">*</span> </h3> 
            </div>
            <div class="flex w-full">
                <input type="text" placeholder="ex.myemail@gmail.com" class=" border border-gray-400 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full rounded-md">
            </div>
            <div class="flex mt-2 lg:mt-5 mb-2">
                <h3> Contact Number: <span class="text-red-500">*</span> </h3>     
            </div>
            <div class="flex w-full ">
                <input type="tel" placeholder="ex.myemail@gmail.com" class=" border border-gray-400 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full rounded-md">
            </div>
            <div  class="flex mt-2 lg:mt-5 mb-2">
                <h3> Present Address:  <span class="text-red-500">*</span></h3>
            </div>
            <div class="flex w-full ">
                <input type="text" class="border border-gray-400 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full  rounded-md">
            </div>
            <div class="mt-2 lg:mt-5 mb-2">
                <div class="grid md:grid-cols-3 gap-4 ">
                    <div class="cols-2">
                        <h1> Birthday: <span class="text-red-500">*</span> </h1>
                        <div class="dropdown">
                            <div class="dropdown-content mt-2">
                                <input type="date" class="border border-gray-400 p-2 rounded w-full " />
                            </div>
                        </div>
                    </div>
                    {{-- DROPDOWN CONTENTS --}}
                    <div class="content-center">
                        <h1> Status: <span class="text-red-500">*</span> </h1>
                        <select class="mt-2 border border-gray-400 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full  rounded-md">
                            <option value="" class="w-auto" disabled selected>Choose </option>
                            <option class="w-auto">Maried</option>
                            <option class="w-auto">Single</option>
                            <option class="w-auto">Window</option>
                            <option class="w-auto">Separated</option>
                            <option class="w-auto">Others</option>
                        </select>
                    </div>
                    <div class="">
                        <div class="content-center">
                            <h1> Educational background: <span class="text-red-500">*</span></h1>
                            <select class="mt-2 border border-gray-400 px-5 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full  rounded-md ">
                                <option value="" disabled selected>Choose </option>
                                <option>High school Level/graduate</option>
                                <option>College Level</option>
                                <option>Bachelor's Degree</option>
                                <option>Vocational Degree</option>
                                <option>Postgraduate</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2 lg:mt-5 mb-2">
                <div class="content-center">
                    <h1> Position: <span class="text-red-500">*</span></h1>
                    <select class="mt-2 border border-gray-400 px-5 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full  rounded-md ">
                        <option value="" disabled selected> -- Select position -- </option>
                        <option>Sales Associate</option>
                        <option>Sales Support Associate</option>
                        <option>Sales Manager</option>
                        <option>Sales Head</option>
                    </select>
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="col-span-1 mt-2 mb-1 md:mt-5 ">
                    <div class="content-center">
                        <h1> How did you know about us? <span class="text-red-500">*</span></h1>
                        <select class="mt-2 border border-gray-400 px-5 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full  rounded-md">
                            <option value="" disabled selected>Choose </option>
                            <option>Facebook</option>
                            <option>Indeed</option>
                            <option>Linkedin</option>
                            <option>Jobstreet</option>
                        </select>
                    </div>
                </div>
                <div class="col-span-1 mt-0 mb-2 md:mt-5 ">
                    <div class="content-center">
                        <h1> Recruiter or invited by (Name of HR) <span class="text-red-500">*</span></h1>
                        <select class="mt-2 border border-gray-400 px-5 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-fullrounded-md ">
                            <option value="" disabled selected>Choose </option>
                            <option>Honey</option>
                            <option>Alex</option>
                            <option>Erika</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
            </div>
            {{-- TEXTAREA FORM  --}}
            <div  class="flex mt-2 md:mt-5 mb-2">
                <h3> Character references(Name, position, Contact no. Relationship, campany & years Acquainted) Give three (3) Not related to you whom you have known at least one year   <span class="text-red-500">*</span> </h3>
            </div>
            <div class="flex w-full ">
                <textarea type="text" placeholder="Your answer" class="border border-gray-400 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full  h-auto rounded-md"></textarea>
            </div>
            <div  class="flex mt-3 md:mt-5 mb-2">
                <h3> Discuss in order of importance to you, the personal characteristics which you feel are your strength and weakness  <span class="text-red-500">*</span> </h3>
            </div>
            <div class="flex w-full ">
                <textarea type="text" placeholder="Your answer" class="border border-gray-400 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full rounded-md"></textarea>
            </div>
            <div  class="flex mt-2 md:mt-5 mb-2">
                <h3> What are your short-term and long-term plan?  <span class="text-red-500">*</span> </h3>
            </div>
            <div class="flex w-full">
                <textarea type="text" placeholder="Your answer" class="border border-gray-400 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full rounded-md"></textarea>
            </div>
            <div  class="flex mt-2 md:mt-5 mb-2">
                <h3> Kindly upload your curriculum vitae  <span class="text-red-500">*</span> </h3>
            </div>
            <div class="flex w-full">         
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2  border border-gray-400 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 rounded-md">
                    <div class="flex-row items-center justify-center text-center pt-5 pb-6 ">
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">Click to upload</p>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 hidden md:block">or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Docs and pdf with maximum of 5mb data.</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div> 
            </div>
            {{-- END APPLICATION FORM --}}
            <div class="flex justify-center align-items gap-5 text-center mb-10 md:mb-10 mt-10 lg:mt-10 bg-gray-">
                <button class="px-4 py-2 border border-black text-black w-40 h-42 hover:bg-red-900  hover:border-red-900 hover:text-white">Back</button>
                <button type="submit" class="px-4 py-2  w-40 h-42 bg-black hover:bg-red-900 text-white ">
                    Submit  
                </button>
            </div>
        </form>
    </div>
</div>

    {{-- <div class="">
        @livewire('application-form')
    </div> --}}
@endsection('main')
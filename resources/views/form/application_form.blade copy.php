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
<div class="background-cover bg-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg');">
    <div class="bg-white bg-opacity-75 flex justify-center">
        <form action="" class="font-montserrat w-11/12 sm:w-10/12 md:w-4/5 lg:w-9/12 my-10 md:my-16 ">
            <h1 class="text-lg md:text-xl font-semibold text-center">Job Application Form</h1>
            <p class="text-sm md:text-lg text-center ">Please Fill Out the Form to Submit Your Job Application!</p>
            <div class="mt-5 md:mt-10">
                <label for="name">Name: <span class="text-red-900">*</span></label>
                <div class="md:flex gap-4 mt-1">
                    <input type="text" name="fname" id="fname" class="block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base  sm:leading-6 w-full mb-1 md::mb-0" placeholder="First Name">
                    <input type="text" name="mname" id="mname" class="block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base  sm:leading-6 w-full mb-1 md::mb-0" placeholder="Middle Name">
                    <input type="text" name="lname" id="lname" class="block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base  sm:leading-6 w-full mb-1 md:mb-0" placeholder="Last Name">
                </div>
            </div>
            <div class="mt-3">
                <label for="email">Email: <span class="text-red-900">*</span></label>
                <div class="mt-1">
                    <input type="email" name="email" id="email" class="block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base sm:leading-6 w-full" placeholder="ex.myemail@gmail.com">
                </div>
            </div>
            <div class="mt-3">
                <label for="contact">Contact Number: <span class="text-red-900">*</span></label>
                <div class="mt-1">
                    <input type="tel" name="contact" id="contact" class="block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base sm:leading-6 w-full" placeholder="#### ### ####">
                </div>
            </div>
            <div class="mt-3">
                <label for="address">Present Address: <span class="text-red-900">*</span></label>
                <div class="mt-1">
                    <input type="text" name="address" id="address" class="block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base sm:leading-6 w-full">
                </div>
            </div>
            <div class="mt-3 md:flex gap-4">
                <div class="w-full mb-3 md:mb-0">
                    <label for="birthdate">Birthday: <span class="text-red-900">*</span></label>
                    <input type="date" name="birthdate" id="birthdate" class="block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base  sm:leading-6 w-full">
                </div>
                <div class="w-full mb-3 md:mb-0">
                    <label for="Status">Status: <span class="text-red-900">*</span></label>
                    <div>
                        <select class="block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base  sm:leading-6 w-full">
                            <option value="" disabled selected>Choose </option>
                            <option >Maried</option>
                            <option >Single</option>
                            <option >Window</option>
                            <option >Separated</option>
                            <option >Others</option>
                        </select>
                    </div>
                </div>
                <div class="w-full">
                    <label for="education">Educational Background: <span class="text-red-900">*</span></label>
                    <div>
                        <select class="block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base  sm:leading-6 w-full">
                            <option value="" disabled selected>Choose </option>
                            <option >High School Level/Graduate</option>
                            <option >College</option>
                            <option >Bachelor's Degree</option>
                            <option >Vocational Degree</option>
                            <option >Postgraduate</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <label for="position">Position: <span class="text-red-900">*</span></label>
                <div class="mt-1">
                    <select class="block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base sm:leading-6 w-full">
                        <option value="" disabled selected>Choose </option>
                        <option >Lorem</option>
                        <option >Lorem</option>
                        <option >Lorem</option>
                        <option >Lorem</option>
                        <option >Lorem</option>
                    </select>
                </div>
            </div>
            <div class="mt-3 md:flex gap-4">
                <div class="w-full mb-3 md:mb-0">
                    <label for="">How did you know about us? <span class="text-red-900">*</span></label>
                    <div>
                        <select class="block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base  sm:leading-6 w-full">
                            <option value="" disabled selected>Choose </option>
                            <option >Facebook</option>
                            <option >Indeed</option>
                            <option >Linkedin</option>
                            <option >Jobstreet</option>
                        </select>
                    </div>
                </div>
                <div class="w-full mb-3 md:mb-0">
                    <label for="">Recruiter or invited by (Name of HR) <span class="text-red-900">*</span></label>
                    <div>
                        <select class="block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base  sm:leading-6 w-full">
                            <option value="" disabled selected>Choose </option>
                            <option >Honey</option>
                            <option >Alex</option>
                            <option >Erika</option>
                            <option >Other</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <label for="character">Character References (Name, Position, Contact No. Relationship, Company & Years Acquainted) Give Three (30) Not Related to you whom you have known at least one year </label><span class="text-red-900">*</span></label>
                <div class="mt-1">
                    <textarea name="reference" id="reference" class="block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base sm:leading-6 w-full" placeholder="Your Answer"></textarea>
                </div>
            </div>
            <div class="mt-3">
                <label for="characteristic">Discuss in order of importance to you, the personal characteristics which you feel are your strength and weaknesses. </label><span class="text-red-900">*</span></label>
                <div class="mt-1">
                    <textarea name="characteristic" id="characteristic" class="block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base sm:leading-6 w-full" placeholder="Your Answer"></textarea>
                </div>
            </div>
            <div class="mt-3">
                <label for="plan">What is your short-term and long-term plan? </label><span class="text-red-900">*</span></label>
                <div class="mt-1">
                    <textarea name="plan" id="plan" class="block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base sm:leading-6 w-full" placeholder="Your Answer"></textarea>
                </div>
            </div>
            <div class="mt-3">
                <label for="resume">Kindly upload your curriculum vitae or resume. </label><span class="text-red-900">*</span></label>
                <div class="mt-1"> 
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-52 border-dashed  border border-gray-400 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 rounded-md">
                        <div class="flex-row items-center justify-center text-center pt-5 pb-6 ">
                            <div class="w-full flex justify-center"><img class="w-16 x" src="img/career/upload.png" alt=""></div>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">Click to upload</p>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 hidden md:block">or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Docs and pdf with maximum of 5mb data.</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>
            </div>
            {{-- END APPLICATION FORM --}}
            <div class="flex justify-center gap-5 text-center mt-10 md:mt-10">
                <a href="/career" class="px-4 py-2 border border-black text-black w-40 h-42 hover:bg-red-900  hover:border-red-900 hover:text-white">Back</a>
                <a type="submit" class="px-4 py-2  w-40 h-42 bg-black hover:bg-red-900 text-white ">
                    Submit  
                </a>
            </div>
        </form>
    </div>
</div>
    {{-- <div class="">
        @livewire('application-form')
    </div> --}}
@endsection('main')
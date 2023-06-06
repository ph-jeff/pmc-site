
    <div>
        {{-- In work, do what you enjoy. --}}
        <section class="mx-5 mt-5 md:mt-20 font-montserrat lg:mx-20 sm:mx-4 md:mx-10 ">
            <div class="text-center">
                <h1 class="font-semibold text-xl font-semibold leading-10"> Job Application Form </h1>
                <p class="font-normal text-sm leading-10 text-lg leading-10 font-normal"> Please fill out the form to submit your job app  </p>
            </div>
            <div  class="flex mt-10">
                <h3> Name: <span class="text-red-500">*</span> </h3>
            </div>
            <div class="flex-row gap-5 md:flex xl:w-full">
                <input type="text" placeholder="First name" class="mt-2 italic border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full lg:w-[33%] lg:h-[55px] rounded-md">
                <input type="text" placeholder="Middle name" class="mt-2 italic border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full lg:w-[33%] lg:h-[55px] rounded-md">
                <input type="text" placeholder="Last name" class="mt-2 italic border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full lg:w-[33%] lg:h-[55px] rounded-md">
            </div>
            <div  class="flex mt-2 lg:mt-8 mb-2">
                <h3> Email: <span class="text-red-500">*</span> </h3> 
            </div>
            <div class="flex w-full">
                <input type="text" placeholder="ex.myemail@gmail.com" class="italic border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full h-[55px] rounded-md">
            </div>
            <div class="flex mt-2 lg:mt-8 mb-2">
                <h3> Contact Number: <span class="text-red-500">*</span> </h3>     
            </div>
            <div class="flex w-full ">
                <input type="tel" placeholder="ex.myemail@gmail.com" class="italic border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full h-[55px] rounded-md">
            </div>
            <div  class="flex mt-2 lg:mt-8 mb-2">
                <h3> Present Address:  <span class="text-red-500">*</span></h3>
            </div>
            <div class="flex w-full ">
                <input type="text" class="border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full h-[55px] rounded-md">
            </div>
            <div class="mt-2 lg:mt-8 mb-2">
                <div class="grid md:grid-cols-3 gap-4 ">
                    <div class="cols-2">
                        <h1> Birthday: <span class="text-red-500">*</span> </h1>
                        <div class="dropdown">
                            <div class="dropdown-content mt-2">
                                <input type="date" class="border border-gray-300 p-2 rounded w-[100%] h-[55px]" />
                            </div>
                        </div>
                    </div>
                    {{-- DROPDOWN CONTENTS --}}
                    <div class="content-center">
                        <h1> Status: <span class="text-red-500">*</span> </h1>
                        <select class="mt-2 border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full h-[55px] rounded-md">
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
                            <select class="mt-2 border border-gray-300 px-5 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full h-[55px] rounded-md w-[100%] h-[55px]">
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
            <div class="mt-2 lg:mt-8 mb-2">
                <div class="content-center">
                    <h1> Position: <span class="text-red-500">*</span></h1>
                    <select class="mt-2 border border-gray-300 px-5 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full h-[55px] rounded-md w-[100%] h-[55px]">
                        <option value="" disabled selected> -- Select position -- </option>
                        <option>Sales Associate</option>
                        <option>Sales Support Associate</option>
                        <option>Sales Manager</option>
                        <option>Sales Head</option>
                    </select>
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="col-span-1 mt-2 md:mt-8 mb-2">
                    <div class="content-center">
                        <h1> How did you know about us? <span class="text-red-500">*</span></h1>
                        <select class="mt-2 border border-gray-300 px-5 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full h-[55px] rounded-md w-[50%] h-[55px]">
                            <option value="" disabled selected>Choose </option>
                            <option>Facebook</option>
                            <option>Indeed</option>
                            <option>Linkedin</option>
                            <option>Jobstreet</option>
                        </select>
                    </div>
                </div>
                <div class="col-span-1 mt-2 md:mt-8 mb-2">
                    <div class="content-center">
                        <h1> Recruiter or invited by (Name of HR) <span class="text-red-500">*</span></h1>
                        <select class="mt-2 border border-gray-300 px-5 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full h-[55px] rounded-md w-[50%] h-[55px]">
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
            <div  class="flex mt-2 md:mt-8 mb-2">
                <h3> Character references(Name, position, Contact no. Relationship, campany & years Acquainted) Give three (3) Not related to you whom you have known at least one year   <span class="text-red-500">*</span> </h3>
            </div>
            <div class="flex w-full ">
                <textarea type="text" placeholder="Your answer" class="italic border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full  h-auto rounded-md"></textarea>
            </div>
            <div  class="flex mt-2 md:mt-8 mb-2">
                <h3> Discuss in order of importance to you, the personal characteristics which you feel are your strength and weakness  <span class="text-red-500">*</span> </h3>
            </div>
            <div class="flex w-full ">
                <textarea type="text" placeholder="Your answer" class="italic border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full h-[55px] rounded-md"></textarea>
            </div>
            <div  class="flex mt-2 md:mt-8 mb-2">
                <h3> What are your short-term and long-term plan?  <span class="text-red-500">*</span> </h3>
            </div>
            <div class="flex w-full">
                <textarea type="text" placeholder="Your answer" class="italic border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 w-full h-[55px] rounded-md"></textarea>
            </div>
            <div  class="flex mt-2 md:mt-8 mb-2">
                <h3> Kindly upload your curriculum vitae  <span class="text-red-500">*</span> </h3>
            </div>
            <div class="flex w-full">         
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 italic border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500 rounded-md">
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
            <div class="flex justify-center align-items gap-5 text-center mb-10 md:mb-30 mt-10 lg:mt-20">
                <button class="px-4 py-2 border border-black text-zinc-950 w-[210px] h-[55px] hover:bg-red-900 hover:text-white">Back</button>
                <button type="submit" class="px-4 py-2 bg-zinc-950 w-[210px] h-[55px] hover:bg-red-900 text-white ">
                    Submit  
                </button>
            </div>
        </section>
    </div>

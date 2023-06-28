<div class="bg-cover background-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg');">
    <div class="flex justify-center bg-white bg-opacity-75">
        @if (session()->has('successMessage'))
            <div class="alert alert-success">
                {{-- <h1>{{ session('successMessage') }}</h1> --}}
                <script>
                    Swal.fire(
                        'Application Submitted!',
                        'success'
                    )
                </script>
            </div>
        @endif
        <form action="" wire:submit.prevent="submitForm" class="w-11/12 my-10 font-montserrat sm:w-10/12 md:w-4/5 lg:w-9/12 md:my-16 ">
            <h1 class="text-lg font-semibold text-center md:text-xl">Job Application Form</h1>
            <p class="text-sm text-center md:text-lg ">Please Fill Out the Form to Submit Your Job Application!</p>
            <div class="mt-5 md:mt-10">
                <label for="name">Name <span class="text-red-900">*</span></label>
                <div class="gap-4 mt-1 md:flex">
                    <label for="" class="sr-only">First name: </label>
                    <input type="text" wire:model="firstname" class="flex-1 block w-full p-2 mb-1 text-gray-900 bg-transparent border border-gray-400 rounded h-11 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base sm:leading-6 md:mb-0" placeholder="First Name">
                    @error('firstname') <span class="font-medium text-red-900 error">{{ $message }}</span> @enderror

                    <label for="" class="sr-only">Middle name: </label>
                    <input type="text" wire:model="middlename" class="flex-1 block w-full p-2 mb-1 text-gray-900 bg-transparent border border-gray-400 rounded h-11 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base sm:leading-6 md:mb-0" placeholder="Middle Name">
                    @error('middlename') <span class="font-medium text-red-900 error">{{ $message }}</span> @enderror

                    <label for="" class="sr-only">Last name: </label>
                    <input type="text" wire:model="lastname" class="flex-1 block w-full p-1 mb-1 text-gray-900 bg-transparent border border-gray-400 rounded h-11 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base sm:leading-6 md:mb-0" placeholder="Last Name">
                    @error('lastname') <span class="font-medium text-red-900 error">{{ $message }}</span> @enderror

                </div>
            </div>
            <div class="mt-3">
                <label for="">Email <span class="text-red-900">*</span></label>
                <div class="mt-1">
                    <input type="email" wire:model="email" class="flex-1 block w-full p-2 text-gray-900 bg-transparent border border-gray-400 rounded h-11 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base sm:leading-6" placeholder="ex.myemail@gmail.com">
                    @error('email') <span class="font-medium text-red-900 error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mt-3">
                <label for="">Contact Number <span class="text-red-900">*</span></label>
                <div class="mt-1">
                    <input type="number" wire:model="contactnum" class="flex-1 block w-full p-2 text-gray-900 bg-transparent border border-gray-400 rounded h-11 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base sm:leading-6" placeholder="#### ### ####">
                    @error('contactnum') <span class="font-medium text-red-900 error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mt-3">
                <label for="">Present Address <span class="text-red-900">*</span></label>
                <div class="mt-1">
                    <input type="text" wire:model="address" class="flex-1 block w-full p-2 text-gray-900 bg-transparent border border-gray-400 rounded h-11 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base sm:leading-6">
                    @error('address') <span class="font-medium text-red-900 error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="gap-4 mt-3 md:flex">
                <div class="w-full mb-3 md:mb-0">
                    <label for="birthdate">Birthday <span class="text-red-900">*</span></label>
                    <input type="date" wire:model="birthdate" class="flex-1 block w-full p-2 text-gray-900 bg-transparent border border-gray-400 rounded h-11 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base sm:leading-6">
                    @error('birthdate') <span class="font-medium text-red-900 error">{{ $message }}</span> @enderror
                </div>
                <div class="w-full mb-3 md:mb-0">
                    <label for="Status">Status <span class="text-red-900">*</span></label>
                    <select wire:model="status" class="h-11 block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base  sm:leading-6 w-full form-control @error('chapter_id') is-invalid @enderror" placeholder="Menu">
                        @foreach ($statuses as $chapter)
                            <option value="{{ $chapter }}" @if ($loop->first && $status) disabled @endif>{{ $chapter }}</option>
                        @endforeach
                    </select>
                    @error('status') <span class="font-medium text-red-900 error">{{ $message }}</span> @enderror
                </div>
                <div class="w-full">
                    <label for="education">Educational Background: <span class="text-red-900">*</span></label>
                    <div>
                        <select wire:model="educational" class="h-11 block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base  sm:leading-6 w-full form-control @error('chapter_id') is-invalid @enderror" placeholder="Menu">
                            @foreach ($educationals as $chapter)
                                <option value="{{ $chapter }}"  @if ($loop->first && $educational) disabled @endif>{{ $chapter }}</option>
                            @endforeach
                        </select>
                        @error('educational') <span class="font-medium text-red-900 error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <label for="position">Position: <span class="text-red-900">*</span></label>
                <div class="mt-1">
                    <select wire:model="position" class="h-11 block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base sm:leading-6 w-full form-control @error('chapter_id') is-invalid @enderror" placeholder="Menu">
                        @foreach ($positions as $chapter)
                            <option value="{{ $chapter }}"  @if ($loop->first && $position) disabled @endif>{{ $chapter }}</option>
                        @endforeach
                    </select>
                    @error('position') <span class="font-medium text-red-900 error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="gap-4 mt-3 md:flex">
                <div class="w-full mb-3 md:mb-0">
                    <label for="">How did you know about us? <span class="text-red-900">*</span></label>
                    <div>
                        <select wire:model="know" class="h-11 block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base  sm:leading-6 w-full form-control @error('chapter_id') is-invalid @enderror" placeholder="Menu">
                            @foreach ($knows as $chapter)
                                <option value="{{ $chapter }}" @if ($loop->first && $know) disabled @endif>{{ $chapter }}</option>
                            @endforeach
                        </select>
                        @error('know') <span class="font-medium text-red-900 error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="w-full mb-3 md:mb-0">
                    <label for="">Recruiter or invited by (Name of HR) <span class="text-red-900">*</span></label>
                    <div>
                        <select wire:model="Recruiter" class="h-11 block flex-1 border border-gray-400 rounded bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base  sm:leading-6 w-full form-control @error('chapter_id') is-invalid @enderror" placeholder="Menu">
                            @foreach ($Recruiters as $chapter)
                                <option value="{{ $chapter }}" @if ($loop->first && $Recruiter) disabled @endif>{{ $chapter }}</option>
                            @endforeach
                        </select>
                        @error('Recruiter') <span class="font-medium text-red-900 error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <label for="character">Character References (Name, Position, Contact No. Relationship, Company & Years Acquainted) Give Three (3) Not Related to you whom you have known at least one year </label><span class="text-red-900">*</span></label>
                <div class="mt-1">
                    <textarea name="" id="" cols="20" rows="10" wire:model="character_references" class="flex-1 block w-full p-2 text-gray-900 bg-transparent border border-gray-400 rounded h-14 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base sm:leading-6" placeholder="Your Answer"></textarea>
                    @error('character_references') <span class="font-medium text-red-900 error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mt-3">
                <label for="characteristic">Discuss in order of importance to you, the personal characteristics which you feel are your strength and weaknesses. </label><span class="text-red-900">*</span></label>
                <div class="mt-1">
                    <textarea name="" id="" cols="20" rows="10" wire:model="character" class="flex-1 block w-full p-2 text-gray-900 bg-transparent border border-gray-400 rounded h-14 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base sm:leading-6" placeholder="Your Answer"></textarea>
                    @error('character') <span class="font-medium text-red-900 error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mt-3">
                <label for="plan">What is your short-term and long-term plan? </label><span class="text-red-900">*</span></label>
                <div class="mt-1">
                    <textarea name="" id="" cols="20" rows="10" wire:model="plan" class="flex-1 block w-full p-2 text-gray-900 bg-transparent border border-gray-400 rounded h-14 placeholder:text-gray-400 focus:ring-0 sm:text-sm md:text-base sm:leading-6" placeholder="Your Answer"></textarea>
                    @error('plan') <span class="font-medium text-red-900 error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mt-3">
                <label for="resume">Kindly upload your curriculum vitae or resume. </label><span class="text-red-900">*</span></label>
                <div class="mt-1">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full px-4 py-2 border border-gray-400 border-dashed rounded-md h-52 focus:outline-none focus:ring-2 focus:ring-black-500 focus:border-black-500">
                        <div class="flex-row items-center justify-center pt-5 pb-6 text-center ">
                            <div class="flex justify-center w-full"><img class="w-16 x" src="img/career/upload.png" alt=""></div>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">Click to upload</p>
                            <p class="hidden mb-2 text-sm text-gray-500 dark:text-gray-400 md:block">or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Docs and pdf with maximum of 5mb data.</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>
            </div>
             {{-- END APPLICATION FORM --}}
             <div class="flex justify-center gap-5 mt-10 text-center md:mt-10">
                <a href="/career" class="w-40 px-4 py-2 text-black border border-black h-42 hover:bg-red-900 hover:border-red-900 hover:text-white">Back</a>
                <button type="submit" class="w-40 px-4 py-2 text-white bg-black h-42 hover:bg-red-900 ">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

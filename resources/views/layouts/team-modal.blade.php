<div x-init="show=true" :class="{'hidden' : ! show}" class="hidden">
    <!-- Modal -->
    <!-- The Management -->
    <!-- Sir JVS -->
    <div class="fixed top-0 z-50 flex items-center justify-center w-screen h-screen bg-black bg-opacity-75"
        x-show="JVS">
        <div class="w-9/12 h-auto bg-white min-h-2/3 sm:w-7/12 md:w-7/12 lg:w-2/6 rounded-2xl"
            @click.outside="JVS = false">
            <div class="flex justify-end ">
                <button class="m-2 mr-4 font-bold opacity-60 hover:opacity-100" @click="JVS = false">&times;</button>
            </div>
            <div class="flex justify-center">
                <img class="rounded-full w-36 sm:w-44 md:w-52" src="img/team/JVSb.png" alt="" srcset="">
            </div>
            <div class="flex flex-col items-center mt-2 ">
                <p class="text-lg font-bold text-center text-gray-900 bg-white font-montserrat">JVS TEXT HERE</p>
                <p class="w-11/12 mt-3 mb-10 text-base leading-relaxed text-center text-black font-montserrat">Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua </p>
            </div>
        </div>
    </div>

    <!-- Sir PTS -->
    <div class="fixed top-0 z-50 flex items-center justify-center w-screen h-screen bg-black bg-opacity-75"
        x-show="PTS">
        <div class="w-9/12 h-auto bg-white min-h-2/3 sm:w-7/12 md:w-7/12 lg:w-2/6 rounded-2xl"
            @click.outside="PTS = false">
            <div class="flex justify-end ">
                <button class="m-2 mr-4 font-bold opacity-60 hover:opacity-100" @click="PTS = false">&times;</button>
            </div>
            <div class="flex justify-center">
                <img class="rounded-full w-36 sm:w-44 md:w-52" src="img/team/PTSb.png" alt="" srcset="">
            </div>
            <div class="flex flex-col items-center mt-2 ">
                <p class="text-lg font-bold text-center text-gray-900 bg-white font-montserrat">PTS TEXT HERE</p>
                <p class="w-11/12 mt-3 mb-10 text-base leading-relaxed text-center text-black font-montserrat">Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua </p>
            </div>
        </div>
    </div>

    <!-- MAAM    JSS -->
    <div class="fixed top-0 z-50 flex items-center justify-center w-screen h-screen bg-black bg-opacity-75"
        x-show="JSS">
        <div class="w-9/12 h-auto bg-white min-h-2/3 sm:w-7/12 md:w-7/12 lg:w-2/6 rounded-2xl"
            @click.outside="JSS = false">
            <div class="flex justify-end ">
                <button class="m-2 mr-4 font-bold opacity-60 hover:opacity-100" @click="JSS = false">&times;</button>
            </div>
            <div class="flex justify-center">
                <img class="rounded-full w-36 sm:w-44 md:w-52" src="img/team/JSSb.jpg" alt="" srcset="">
            </div>
            <div class="flex flex-col items-center mt-2 ">
                <p class="text-lg font-bold text-center text-gray-900 bg-white font-montserrat">JSS TEXT HERE</p>
                <p class="w-11/12 mt-3 mb-10 text-base leading-relaxed text-center text-black font-montserrat">Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua </p>
            </div>
        </div>
    </div>

    <!-- Key Officers -->
    <!-- Maam HRH -->
    <div class="fixed top-0 z-50 flex items-center justify-center w-screen h-screen bg-black bg-opacity-75"
        x-show="HRH">
        <div class="w-9/12 h-auto bg-white min-h-2/3 sm:w-7/12 md:w-7/12 lg:w-2/6 rounded-2xl"
            @click.outside="HRH = false">
            <div class="flex justify-end ">
                <button class="m-2 mr-4 font-bold opacity-60 hover:opacity-100" @click="HRH = false">&times;</button>
            </div>
            <div class="flex justify-center">
                <img class="rounded-full w-36 sm:w-44 md:w-52" src="img/officers/HRH.png" alt="HRH" srcset="">
            </div>
            <div class="flex flex-col items-center mt-2 ">
                <p class="text-lg font-bold text-center text-gray-900 bg-white font-montserrat">HRH TEXT HERE</p>
                <p class="w-11/12 mt-3 mb-10 text-base leading-relaxed text-center text-black font-montserrat">Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua </p>
            </div>
        </div>
    </div>
    <!-- SIR SHA -->
    <div class="fixed top-0 z-50 flex items-center justify-center w-screen h-screen bg-black bg-opacity-75"
        x-show="SHA">
        <div class="w-9/12 h-auto bg-white min-h-2/3 sm:w-7/12 md:w-7/12 lg:w-2/6 rounded-2xl"
            @click.outside="SHA = false">
            <div class="flex justify-end ">
                <button class="m-2 mr-4 font-bold opacity-60 hover:opacity-100" @click="SHA = false">&times;</button>
            </div>
            <div class="flex justify-center">
                <img class="rounded-full w-36 sm:w-44 md:w-52" src="img/officers/SHA.png" alt="SHA" srcset="">
            </div>
            <div class="flex flex-col items-center mt-2 ">
                <p class="text-lg font-bold text-center text-gray-900 bg-white font-montserrat">SHA TEXT HERE</p>
                <p class="w-11/12 mt-3 mb-10 text-base leading-relaxed text-center text-black font-montserrat">Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua </p>
            </div>
        </div>
    </div>
    <!-- SIR SHJE -->
    <div class="fixed top-0 z-50 flex items-center justify-center w-screen h-screen bg-black bg-opacity-75"
        x-show="SHJE">
        <div class="w-9/12 h-auto bg-white min-h-2/3 sm:w-7/12 md:w-7/12 lg:w-2/6 rounded-2xl"
            @click.outside="SHJE = false">
            <div class="flex justify-end ">
                <button class="m-2 mr-4 font-bold opacity-60 hover:opacity-100" @click="SHJE = false">&times;</button>
            </div>
            <div class="flex justify-center">
                <img class="rounded-full w-36 sm:w-44 md:w-52" src="img/officers/SHJE.png" alt="SHJE" srcset="">
            </div>
            <div class="flex flex-col items-center mt-2 ">
                <p class="text-lg font-bold text-center text-gray-900 bg-white font-montserrat">SHJE TEXT HERE</p>
                <p class="w-11/12 mt-3 mb-10 text-base leading-relaxed text-center text-black font-montserrat">Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua </p>
            </div>
        </div>
    </div>

    <!-- SIR SM -->
    <div class="fixed top-0 z-50 flex items-center justify-center w-screen h-screen bg-black bg-opacity-75" x-show="SM">
        <div class="w-9/12 h-auto bg-white min-h-2/3 sm:w-7/12 md:w-7/12 lg:w-2/6 rounded-2xl"
            @click.outside="SM = false">
            <div class="flex justify-end ">
                <button class="m-2 mr-4 font-bold opacity-60 hover:opacity-100" @click="SM = false">&times;</button>
            </div>
            <div class="flex justify-center">
                <img class="rounded-full w-36 sm:w-44 md:w-52" src="img/officers/SM.png" alt="SM" srcset="">
            </div>
            <div class="flex flex-col items-center mt-2 ">
                <p class="text-lg font-bold text-center text-gray-900 bg-white font-montserrat">SM TEXT HERE</p>
                <p class="w-11/12 mt-3 mb-10 text-base leading-relaxed text-center text-black font-montserrat">Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua </p>
            </div>
        </div>
    </div>
    <!-- SIR SSM -->
    <div class="fixed top-0 z-50 flex items-center justify-center w-screen h-screen bg-black bg-opacity-75"
        x-show="SSM">
        <div class="w-9/12 h-auto bg-white min-h-2/3 sm:w-7/12 md:w-7/12 lg:w-2/6 rounded-2xl"
            @click.outside="SSM = false">
            <div class="flex justify-end ">
                <button class="m-2 mr-4 font-bold opacity-60 hover:opacity-100" @click="SSM = false">&times;</button>
            </div>
            <div class="flex justify-center">
                <img class="rounded-full w-36 sm:w-44 md:w-52" src="img/officers/SSM.png" alt="SSM" srcset="">
            </div>
            <div class="flex flex-col items-center mt-2 ">
                <p class="text-lg font-bold text-center text-gray-900 bg-white font-montserrat">SSM TEXT HERE</p>
                <p class="w-11/12 mt-3 mb-10 text-base leading-relaxed text-center text-black font-montserrat">Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua </p>
            </div>
        </div>
    </div>
    <!-- SIR ITH -->
    <div class="fixed top-0 z-50 flex items-center justify-center w-screen h-screen bg-black bg-opacity-75"
        x-show="ITH">
        <div class="w-9/12 h-auto bg-white min-h-2/3 sm:w-7/12 md:w-7/12 lg:w-2/6 rounded-2xl"
            @click.outside="ITH = false">
            <div class="flex justify-end ">
                <button class="m-2 mr-4 font-bold opacity-60 hover:opacity-100" @click="ITH = false">&times;</button>
            </div>
            <div class="flex justify-center">
                <img class="rounded-full w-36 sm:w-44 md:w-52" src="img/officers/PM.png" alt="ITH" srcset="">
            </div>
            <div class="flex flex-col items-center mt-2 ">
                <p class="text-lg font-bold text-center text-gray-900 bg-white font-montserrat">ITH TEXT HERE</p>
                <p class="w-11/12 mt-3 mb-10 text-base leading-relaxed text-center text-black font-montserrat">Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua </p>
            </div>
        </div>
    </div>

    <!-- SIR OFM -->
    <div class="fixed top-0 z-50 flex items-center justify-center w-screen h-screen bg-black bg-opacity-75"
        x-show="OFM">
        <div class="w-9/12 h-auto bg-white min-h-2/3 sm:w-7/12 md:w-7/12 lg:w-2/6 rounded-2xl"
            @click.outside="OFM = false">
            <div class="flex justify-end ">
                <button class="m-2 mr-4 font-bold opacity-60 hover:opacity-100" @click="OFM = false">&times;</button>
            </div>
            <div class="flex justify-center">
                <img class="rounded-full w-36 sm:w-44 md:w-52" src="img/officers/OFM1.png" alt="OFM" srcset="">
            </div>
            <div class="flex flex-col items-center mt-2 ">
                <p class="text-lg font-bold text-center text-gray-900 bg-white font-montserrat">OFM TEXT HERE</p>
                <p class="w-11/12 mt-3 mb-10 text-base leading-relaxed text-center text-black font-montserrat">Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua </p>
            </div>
        </div>
    </div>
    <!-- Maam HS -->
    <div class="fixed top-0 z-50 flex items-center justify-center w-screen h-screen bg-black bg-opacity-75" x-show="HS">
        <div class="w-9/12 h-auto bg-white min-h-2/3 sm:w-7/12 md:w-7/12 lg:w-2/6 rounded-2xl"
            @click.outside="HS = false">
            <div class="flex justify-end ">
                <button class="m-2 mr-4 font-bold opacity-60 hover:opacity-100" @click="HS = false">&times;</button>
            </div>
            <div class="flex justify-center">
                <img class="rounded-full w-36 sm:w-44 md:w-52" src="img/officers/HS.png" alt="HS" srcset="">
            </div>
            <div class="flex flex-col items-center mt-2 ">
                <p class="text-lg font-bold text-center text-gray-900 bg-white font-montserrat">HS TEXT HERE</p>
                <p class="w-11/12 mt-3 mb-10 text-base leading-relaxed text-center text-black font-montserrat">Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua </p>
            </div>
        </div>
    </div>
    <!-- SIR MS -->
    <div class="fixed top-0 z-50 flex items-center justify-center w-screen h-screen bg-black bg-opacity-75" x-show="MS">
        <div class="w-9/12 h-auto bg-white min-h-2/3 sm:w-7/12 md:w-7/12 lg:w-2/6 rounded-2xl"
            @click.outside="MS = false">
            <div class="flex justify-end ">
                <button class="m-2 mr-4 font-bold opacity-60 hover:opacity-100" @click="MS = false">&times;</button>
            </div>
            <div class="flex justify-center">
                <img class="rounded-full w-36 sm:w-44 md:w-52" src="img/officers/MS.png" alt="MS" srcset="">
            </div>
            <div class="flex flex-col items-center mt-2 ">
                <p class="text-lg font-bold text-center text-gray-900 bg-white font-montserrat">MS TEXT HERE</p>
                <p class="w-11/12 mt-3 mb-10 text-base leading-relaxed text-center text-black font-montserrat">Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua </p>
            </div>
        </div>
    </div>

    <!-- TL ELMER -->
    <div class="fixed top-0 z-50 flex items-center justify-center w-screen h-screen bg-black bg-opacity-75"
        x-show="ELMER">
        <div class="w-9/12 h-auto bg-white min-h-2/3 sm:w-7/12 md:w-7/12 lg:w-2/6 rounded-2xl"
            @click.outside="ELMER = false">
            <div class="flex justify-end ">
                <button class="m-2 mr-4 font-bold opacity-60 hover:opacity-100" @click="ELMER = false">&times;</button>
            </div>
            <div class="flex justify-center">
                <img class="rounded-full w-36 sm:w-44 md:w-52" src="img/officers/TL_ELMER.png" alt="ELMER" srcset="">
            </div>
            <div class="flex flex-col items-center mt-2 ">
                <p class="text-lg font-bold text-center text-gray-900 bg-white font-montserrat">ELMER TEXT HERE</p>
                <p class="w-11/12 mt-3 mb-10 text-base leading-relaxed text-center text-black font-montserrat">Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua </p>
            </div>
        </div>
    </div>
    <!-- TL MAE -->
    <div class="fixed top-0 z-50 flex items-center justify-center w-screen h-screen bg-black bg-opacity-75"
        x-show="MAE">
        <div class="w-9/12 h-auto bg-white min-h-2/3 sm:w-7/12 md:w-7/12 lg:w-2/6 rounded-2xl"
            @click.outside="MAE = false">
            <div class="flex justify-end ">
                <button class="m-2 mr-4 font-bold opacity-60 hover:opacity-100" @click="MAE = false">&times;</button>
            </div>
            <div class="flex justify-center">
                <img class="rounded-full w-36 sm:w-44 md:w-52" src="img/officers/TL_MAE.png" alt="MAE" srcset="">
            </div>
            <div class="flex flex-col items-center mt-2 ">
                <p class="text-lg font-bold text-center text-gray-900 bg-white font-montserrat">MAE TEXT HERE</p>
                <p class="w-11/12 mt-3 mb-10 text-base leading-relaxed text-center text-black font-montserrat">Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua </p>
            </div>
        </div>
    </div>
    <!-- TL ERIKA -->
    <div class="fixed top-0 z-50 flex items-center justify-center w-screen h-screen bg-black bg-opacity-75"
        x-show="ERIKA">
        <div class="w-9/12 h-auto bg-white min-h-2/3 sm:w-7/12 md:w-7/12 lg:w-2/6 rounded-2xl"
            @click.outside="ERIKA = false">
            <div class="flex justify-end ">
                <button class="m-2 mr-4 font-bold opacity-60 hover:opacity-100" @click="ERIKA = false">&times;</button>
            </div>
            <div class="flex justify-center">
                <img class="rounded-full w-36 sm:w-44 md:w-52" src="img/officers/TL_ERIKA.png" alt="ERIKA" srcset="">
            </div>
            <div class="flex flex-col items-center mt-2 ">
                <p class="text-lg font-bold text-center text-gray-900 bg-white font-montserrat">ERIKA TEXT HERE</p>
                <p class="w-11/12 mt-3 mb-10 text-base leading-relaxed text-center text-black font-montserrat">Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua </p>
            </div>
        </div>
    </div>

</div>

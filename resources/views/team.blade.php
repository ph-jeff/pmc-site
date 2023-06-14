@extends('layouts/app')

@section('title')
    Team
@endsection('title')

@section('main')
<!-- Sticky Navigation Bar (Website View - team page) -->
<nav class="hidden md:h-20 md:flex md:justify-around md:sticky md:top-0 md:z-50 md:bg-black">
    <div class="flex w-full h-20 justify-center items-center">
        <div class="w-11/12 md:w-11/12 lg:w-9/12 flex justify-between content-center">
            <div>
                <a href="/">
                    <img class="" src="img/pmclogo.png" alt="logo" >
                </a>
            </div>
            <ul class="flex gap-1 text-center items-center">
                <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold  " href="/"> Home </a></li>
                <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/about"> About </a></li>
                <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/team"> Team </a></li>
                <li class="h-12 w-20 flex justify-center items-center bg-danger"><a class="text-white text-base font-semibold" href="/news"> News </a></li>
                <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/career"> Career </a></li>
                <li class="h-12 w-20 flex justify-center items-center hover:bg-danger"><a class="text-white text-base font-semibold" href="/contact"> Contact </a></li>
            </ul>
        </div>
    </div>
</nav>
<main class="background-cover bg-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg');" x-data="{ 
    JVS: false,
    PTS: false,
    JSS: false,

    HRH: false,
    SHA: false,
    SHJE: false,

    SM: false,
    SSM: false,
    ITH: false,

    OFM: false,
    HS: false,
    MS: false,

    ELMER: false,
    MAE: false,
    ERIKA: false,

}">
    <div class="w-full flex justify-center bg-white bg-opacity-75">
        <div class="w-3/4 sm:w-3/5 md:w-full lg:w-10/12">
            <div class="flex justify-center">
                <div class="text-center mt-12 md:mt-16">
                    <h1 class="font-bebas text-3xl sm:text-4xl md:text-5xl md:tracking-widest text-transparent bg-clip-text bg-gradient-to-r from-black via-red-900 to-red-800">Our Team</h1>
                    <h2 class="font-montserrat text-xl sm:text-2xl md:text-3xl mt-2 ">THE MANAGEMENT</h2>
                </div>
            </div>

            <!-- THE MANAGEMENT -->
            <div class="h-auto flex justify-center mt-1 md:mt-10">
                <div class=" h-auto w-5/6 md:flex gap-0 md:gap-14 lg:gap-14">
                    <!-- MAAM JSS -->
                    <div class="w-full flex justify-center rounded-2xl hover:bg-danger p-2 mt-5 md:mt-0">
                        <div class="group flex flex-col items-center font-montserrat " @click="JSS = true">
                            <img class="rounded-full hover-rounded-2xl" src="img/team/JSSb.png" alt="MAAM JSS" >
                            <div class="mt-2">
                                <p class="text-lg font-bold text-center group-hover:text-white" >MAAM JSS</p>
                                <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Chief Operation Officer</p>
                            </div>
                        </div>
                    </div>
                    <!-- SIR PTS -->
                    <div class="w-full flex justify-center rounded-2xl hover:bg-danger p-2 mt-5 md:mt-0">
                        <div class="group flex flex-col items-center font-montserrat " @click="PTS = true">
                            <img class="rounded-full hover-rounded-2xl" src="img/team/PTSb.png" alt="SIR PTS">
                            <div class="mt-2">
                                <p class="text-lg font-bold text-center group-hover:text-white" >SIR PTS</p>
                                <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Chief Executive Officer</p>
                            </div>
                        </div>
                    </div>
                    <!-- SIR JVS -->
                    <div class="w-full flex justify-center rounded-2xl hover:bg-danger p-2">
                        <div class="group flex flex-col items-center font-montserrat " @click="JVS = true">
                            <img class="rounded-full hover-rounded-2xl" src="img/team/JVSb.png" alt="SIR JVS" >
                            <div class="mt-2">
                                <p class="text-lg font-bold text-center group-hover:text-white" >SIR JVS</p>
                                <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Chief Marketing Officer</p>
                                <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Chief Finance Officer</p>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        
            <!-- KEY OFFICERS -->
            <div class="w-full pb-5 md:mb-10 md:pb-0">
                <div class="flex items-center justify-center font-normal">
                    <h2 class="font-montserrat text-xl md:text-3xl mt-10 md:mt-6">THE OFFICERS</h2>
                </div>
                <div class="h-auto flex justify-center mt-5 md:mt-10">
                    <div class="h-full w-5/6 gap-0 md:gap-14 flex flex-col md:flex-row justify-evenly items-center justify-center">
                        <!-- HRH -->
                        <div class="group flex flex-col items-center font-montserrat rounded-2xl hover:bg-danger p-2" @click="HRH = true">
                            <img class="rounded-full hover-rounded-2xl" src="img/officers/HRH.png" alt="MAAM HRH" >
                            <div class="mt-2">
                                <p class="text-lg font-bold text-center group-hover:text-white" >MAAM HRH</p>
                                <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Ms. Apple M. Eugenio</p>
                                <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Human Resources Head</p>
                            </div>
                        </div>
                        <!-- SHA -->
                        <div class="group flex flex-col items-center font-montserrat rounded-2xl hover:bg-danger p-2 mt-5 md:mt-0" @click="SHA = true">
                            <img class="rounded-full hover-rounded-2xl" src="img/officers/SHA.png" alt="SIR SHA" >
                            <div class="mt-2">
                                <p class="text-lg font-montserrat font-bold text-center group-hover:text-white" >SIR SHA</p>
                                <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Mr. Arvin Feliciano</p>
                                <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Sales Head</p>
                            </div>
                        </div>
                        <!-- SHJE -->
                        <div class="group flex flex-col items-center font-montserrat rounded-2xl hover:bg-danger p-2 mt-5 md:mt-0" @click="SHJE = true">
                            <img class="rounded-full hover-rounded-2xl" src="img/officers/SHJE.png" alt="SIR SHJE" >
                            <p class="text-lg font-bold text-center group-hover:text-white" >SIR SHJE</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Mr. Joseph Edward Villareal</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Sales Head</p>
                        </div>
                    </div>
                </div>
                <div class="h-auto flex justify-center mt-0 md:mt-10">
                    <div class="h-full w-5/6 gap-0 md:gap-14 flex flex-col md:flex-row justify-evenly items-center justify-center">
                        <!-- SM -->
                        <div class="group flex flex-col items-center font-montserrat rounded-2xl hover:bg-danger p-2 mt-5 md:mt-0" @click="SM = true">
                            <img class="rounded-full hover-rounded-2xl" src="img/officers/SM.png" alt="SIR SM" >
                            <p class="text-lg font-bold text-sm text-center group-hover:text-white" >SIR SM</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Mr. Anjolito Cruz</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Sales Manager</p>
                        </div>
                        <!-- SSM -->
                        <div class="group flex flex-col items-center font-montserrat rounded-2xl hover:bg-danger p-2 mt-5 md:mt-0" @click="SSM = true">
                            <img class="rounded-full hover-rounded-2xl" src="img/officers/SSM.png" alt="SIR SSM" >
                            <p class="text-lg font-bold text-center group-hover:text-white" >SIR SSM</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Mr. Obeth John Ocampo</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Sales Support Manager</p>
                        </div>
                        <!-- ITH -->
                        <div class="group flex flex-col items-center font-montserrat rounded-2xl hover:bg-danger p-2 mt-5 md:mt-0" @click="ITH = true">
                            <img class="rounded-full hover-rounded-2xl" src="img/officers/PM.png" alt="SIR ITH" >
                            <p class="text-lg font-bold text-center group-hover:text-white" >SIR ITH</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Mr. Mike Arnold Solano</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Project Manager</p>
                        </div>
                    </div>
                </div>

                <div class="h-auto flex justify-center mt-0 md:mt-10" >
                    <div class="h-full w-5/6 gap-0 md:gap-14 flex flex-col md:flex-row justify-evenly items-center justify-center">
                        <!-- OFM -->
                        <div class="group flex flex-col items-center font-montserrat rounded-2xl hover:bg-danger p-2 mt-5 md:mt-0" @click="OFM = true">
                            <img class="rounded-full hover-rounded-2xl" src="img/officers/OFM1.png" alt="SIR OFM" >
                            <p class="text-lg font-bold text-center group-hover:text-white" >SIR OFM</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Mr. Jay Emmanuel Goyal</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Order Fulfillment Manager</p>
                        </div>
                        <!-- HS -->
                        <div class="group flex flex-col items-center font-montserrat rounded-2xl hover:bg-danger p-2 mt-5 md:mt-0" @click="HS = true">
                            <img class="rounded-full hover-rounded-2xl" src="img/officers/HS.png" alt="MAAM HS" >
                            <p class="text-lg font-bold text-center group-hover:text-white" >MAAM HS</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Ms. Lyca Jean Lastimado</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Human Resources Supervisor</p>
                        </div>
                        <!-- MS -->
                        <div class="group flex flex-col items-center font-montserrat rounded-2xl hover:bg-danger p-2 mt-5 md:mt-0" @click="MS = true">
                            <img class="rounded-full hover-rounded-2xl" src="img/officers/MS.png" alt="SIR MS" >
                            <p class="text-lg font-bold text-center group-hover:text-white" >SIR MS</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Mr. Justine Cristopher Eugenio</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Marketing Supervisor</p>
                        </div>
                    </div>
                </div>

                <div class="h-auto flex justify-center mt-0 md:mt-10">
                    <div class="h-full w-5/6 gap-0 md:gap-14 flex flex-col md:flex-row justify-evenly items-center justify-center">
                        <!-- TL ELMER -->
                        <div class="group flex flex-col items-center font-montserrat rounded-2xl hover:bg-danger p-2 mt-5 md:mt-0" @click="ELMER = true">
                            <img class="rounded-full hover-rounded-2xl" src="img/officers/TL_ELMER.png" alt="TL ELMER" >
                            <p class="text-lg font-bold text-center group-hover:text-white">TL ELMER</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Mr. Elmer Roi Salapare</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">OFD Team Leader</p>
                        </div>
                        <!-- TL MAE -->
                        <div class="group flex flex-col items-center font-montserrat rounded-2xl hover:bg-danger p-2 mt-5 md:mt-0" @click="MAE = true">
                            <img class="rounded-full hover-rounded-2xl" src="img/officers/TL_MAE.png" alt="TL MAE" >
                            <p class="text-lg font-bold text-center group-hover:text-white" >TL MAE</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Ms. Laurence Mae Bathan</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Sales Team Leader</p>
                        </div>
                        <!-- TL ERIKA -->
                        <div class="group flex flex-col items-center font-montserrat rounded-2xl hover:bg-danger p-2 mt-5 md:mt-0" @click="ERIKA = true">
                            <img class="rounded-full hover-rounded-2xl" src="img/officers/TL_ERIKA.png" alt="TL ERIKA" >
                            <p class="text-lg font-bold text-center group-hover:text-white">TL ERIKA</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Ms. Mary Erika Portugal</p>
                            <p class="text-sm md:text-base font-medium text-center text-gray-800 group-hover:text-white">Sales Team Leader</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.team-modal')
</main>
    
@endsection('main')


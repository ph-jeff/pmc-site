@extends('layouts/app')

@section('title')
    Team
@endsection('title')

@section('main')
<!-- Sticky Navigation Bar (Website View - team page) -->
<nav class="hidden md:h-20 md:flex md:justify-around md:sticky md:top-0 md:z-50 md:bg-black">
    <div class="h-full w-[20%] flex items-center">
        <a href="">
            <img class="" src="img/pmc_logo.png" alt="logo" >
        </a>
    </div>
    <div class="w-[50%] flex items-center justify-end">
        <ul class="flex">        
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold " href="/"> Home </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/about"> About </a></li>
            <li class="p-3 px-5 bg-danger"><a class="text-white text-base font-semibold" href="/team"> Team </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/news"> News </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/career"> Career </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/contact"> Contact </a></li>
        </ul>
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
    PM: false,

    OFM: false,
    HS: false,
    MS: false,

    ELMER: false,
    MAE: false,
    ERIKA: false,

}">
    <div class="w-=full flex justify-center bg-white bg-opacity-75">
        <div class="w-3/4 sm:w-3/5 md:w-full lg:w-11/12">
            <div class="flex justify-center">
                <div class="text-center mt-5 md:mt-16">
                    <h1 class="font-bebas text-3xl sm:text-4xl md:text-5xl md:tracking-widest">Our Team</h1>
                    <h2 class="font-montserrat text-xl sm:text-2xl md:text-3xl mt-3 md:mt-6">THE MANAGEMENT</h2>
                </div>
            </div>

            <!-- THE MANAGEMENT -->
            <div class="h-auto flex justify-center mt-5 md:mt-10">
                <div class=" h-auto w-5/6 md:flex gap-0 md:gap-14 lg:gap-14 " >
                    <!-- SIR JVS -->
                    <div class="w-full flex justify-center rounded-2xl hover:bg-danger p-2">
                        <div class="group flex flex-col items-center font-montserrat hover:text-white" @click="JVS = true">
                            <img class="rounded-full" src="img/team/JVSb.png" alt="SIR JVS" >
                            <p class="text-lg font-bold text-center " >SIR JVS</p>
                            <p class="text-sm md:text-base font-medium text-center">Chief Marketing Officer</p>
                            <p class="text-sm md:text-base font-medium text-center">Chief Finance Officer</p>
                        </div>  
                    </div>
                    <!-- SIR PTS -->
                    <div class="w-full flex justify-center rounded-2xl hover:bg-danger p-2">
                        <div class="group flex flex-col items-center font-montserrat hover:text-white" @click="JVS = true">
                            <img class="rounded-full" src="img/team/PTSb.png" alt="SIR PTS" >
                            <p class="text-lg font-bold text-center " >SIR PTS</p>
                            <p class="text-sm md:text-base font-medium text-center">Chief Executive Officer</p>
                        </div>
                    </div>
                    <!-- MAAM JSS -->
                    <div class="w-full flex justify-center rounded-2xl hover:bg-danger p-2">
                        <div class="group flex flex-col items-center font-montserrat hover:text-white" @click="JVS = true">
                            <img class="rounded-full" src="img/team/JSSb.png" alt="MAAM JSS" >
                            <p class="text-lg font-bold text-center" >MAAM JSS</p>
                            <p class="text-sm md:text-base font-medium text-center">Chief Operation Officer</p>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- KEY OFFICERS -->
            <div class="w-full pb-5 mb-10 md:pb-0">
                <div class="flex items-center justify-center font-normal">
                    <h2 class="font-montserrat text-xl md:text-3xl mt-10 md:mt-6">THE OFFICERS</h2>
                </div>
                <div class="h-auto flex justify-center mt-5 md:mt-10">
                    <div class="h-full w-5/6 gap-0 md:gap-14 flex flex-col md:flex-row justify-evenly items-center justify-center">
                        <!-- HRH -->
                        <div class="group flex flex-col items-center font-montserrat hover:text-white  rounded-2xl hover:bg-danger p-2" @click="HRH = true">
                            <img class="rounded-full" src="img/officers/HRH.png" alt="MAAM HRH" >
                            <p class="text-lg font-bold text-center" >MAAM HRH</p>
                            <p class="text-sm md:text-base font-medium text-center">Ms. Apple M. Eugenio</p>
                            <p class="text-sm md:text-base font-medium text-center">Human Resources Head</p>
                        </div>
                        <!-- SHA -->
                        <div class="group flex flex-col items-center font-montserrat hover:text-white rounded-2xl hover:bg-danger p-2" @click="HRH = true">
                            <img class="rounded-full " src="img/officers/SHA.png" alt="SIR SHA" >
                            <p class="text-lg font-montserrat font-bold text-center" >SIR SHA</p>
                            <p class="text-sm md:text-base font-medium text-center">Mr. Arvin Feliciano</p>
                            <p class="text-sm md:text-base font-medium text-center">Sales Head</p>
                        </div>
                        <!-- SHJE -->
                        <div class="group flex flex-col items-center font-montserrat hover:text-white rounded-2xl hover:bg-danger p-2" @click="HRH = true">
                            <img class="rounded-full " src="img/officers/SHJE.png" alt="SIR SHJE" >
                            <p class="text-lg font-bold text-center" >SIR SHJE</p>
                            <p class="text-sm md:text-base font-medium text-center">Mr. Joseph Edward Villareal</p>
                            <p class="text-sm md:text-base font-medium text-center">Sales Head</p>
                        </div>
                    </div>
                </div>
                <div class="h-auto flex justify-center mt-0 md:mt-10">
                    <div class="h-full w-5/6 gap-0 md:gap-14 flex flex-col md:flex-row justify-evenly items-center justify-center">
                        <!-- SM -->
                        <div class="group flex flex-col items-center font-montserrat hover:text-white rounded-2xl hover:bg-danger p-2" @click="HRH = true">
                            <img class="rounded-full group-hover:rounded-none group-hover:rounded-t-[1rem]" src="img/officers/SM.png" alt="SIR SM" >
                            <p class="text-lg font-bold text-sm text-center " >SIR SM</p>
                            <p class="text-sm md:text-base font-medium text-center">Mr. Anjolito Cruz</p>
                            <p class="text-sm md:text-base font-medium text-center">Sales Manager</p>
                        </div>
                        <!-- SSM -->
                        <div class="group flex flex-col items-center font-montserrat hover:text-white rounded-2xl hover:bg-danger p-2" @click="HRH = true">
                            <img class="rounded-full " src="img/officers/SSM.png" alt="SIR SSM" >
                            <p class="text-lg font-bold text-center" >SIR SSM</p>
                            <p class="text-sm md:text-base font-medium text-center">Mr. Obeth John Ocampo</p>
                            <p class="text-sm md:text-base font-medium text-center">Sales Support Manager</p>
                        </div>
                        <!-- PM -->
                        <div class="group flex flex-col items-center font-montserrat hover:text-white rounded-2xl hover:bg-danger p-2" @click="HRH = true">
                            <img class="rounded-full" src="img/officers/PM.png" alt="SIR ITH" >
                            <p class="text-lg font-bold text-center " >SIR ITH</p>
                            <p class="text-sm md:text-base font-medium text-center">Mr. Mike Arnold Solano</p>
                            <p class="text-sm md:text-base font-medium text-center">CProject Manager</p>
                        </div>
                    </div>
                </div>

                <div class="h-auto flex justify-center mt-0 md:mt-10" >
                    <div class="h-full w-5/6 gap-0 md:gap-14 flex flex-col md:flex-row justify-evenly items-center justify-center">
                        <!-- OFM -->
                        <div class="group flex flex-col items-center font-montserrat hover:text-white rounded-2xl hover:bg-danger p-2" @click="HRH = true">
                            <img class="rounded-full" src="img/officers/OFM1.png" alt="SIR OFM" >
                            <p class="text-lg font-bold text-center " >SIR OFM</p>
                            <p class="text-sm md:text-base font-medium text-center">Mr. Jay Emmanuel Goyal</p>
                            <p class="text-sm md:text-base font-medium text-center">Order Fulfillment Manager</p>
                        </div>
                        <!-- HS -->
                        <div class="groupflex flex-col items-center font-montserrat hover:text-white rounded-2xl hover:bg-danger p-2" @click="HRH = true">
                            <img class="rounded-full" src="img/officers/HS.png" alt="MAAM HS" >
                            <p class="text-lg font-bold text-center" >MAAM HS</p>
                            <p class="text-sm md:text-base font-medium text-center">Ms. Lyca Jean Lastimado</p>
                            <p class="text-sm md:text-base font-medium text-center">Human Resources Supervisor</p>
                        </div>
                        <!-- MS -->
                        <div class="group flex flex-col items-center font-montserrat hover:text-white rounded-2xl hover:bg-danger p-2" @click="HRH = true">
                            <img class="rounded-full" src="img/officers/MS.png" alt="SIR MS" >
                            <p class="text-lg font-bold text-center" >SIR MS</p>
                            <p class="text-sm md:text-base font-medium text-center">Mr. Justine Cristopher Eugenio</p>
                            <p class="text-sm md:text-base font-medium text-center">Marketing Supervisor</p>
                        </div>
                    </div>
                </div>

                <div class="h-auto flex justify-center mt-0 md:mt-10">
                    <div class="h-full w-5/6 gap-0 md:gap-14 flex flex-col md:flex-row justify-evenly items-center justify-center">
                        <!-- TL ELMER -->
                        <div class="group flex flex-col items-center font-montserrat hover:text-white rounded-2xl hover:bg-danger p-2" @click="HRH = true">
                            <img class="rounded-full " src="img/officers/TL_ELMER.png" alt="TL ELMER" >
                            <p class="text-lg font-bold text-center ">TL ELMER</p>
                            <p class="text-sm md:text-base font-medium text-center">Mr. Elmer Roi Salapare</p>
                            <p class="text-sm md:text-base font-medium text-center">OFD Team Leader</p>
                        </div>
                        <!-- TL MAE -->
                        <div class="group flex flex-col items-center font-montserrat hover:text-white rounded-2xl hover:bg-danger p-2" @click="HRH = true">
                            <img class="rounded-full" src="img/officers/TL_MAE.png" alt="TL MAE" >
                            <p class="text-lg font-bold text-center " >TL MAE</p>
                            <p class="text-sm md:text-base font-medium text-center">Ms. Laurence Mae Bathan</p>
                            <p class="text-sm md:text-base font-medium text-center">Sales Team Leader</p>
                        </div>
                        <!-- TL ERIKA -->
                        <div class="groupflex flex-col items-center font-montserrat  hover:text-white rounded-2xl hover:bg-danger p-2" @click="HRH = true">
                            <img class="rounded-full" src="img/officers/TL_ERIKA.png" alt="TL ERIKA" >
                            <p class="text-lg font-bold text-center">TL ERIKA</p>
                            <p class="text-sm md:text-base font-medium text-center">Ms. Mary Erika Portugal</p>
                            <p class="text-sm md:text-base font-medium text-center">Sales Team Leader</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.team-modal')
</main>
    
@endsection('main')


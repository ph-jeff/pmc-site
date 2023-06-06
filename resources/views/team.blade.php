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
        
        <div class="h-[10vh] md:h-[30vh] flex flex-col items-center bg-white/[75%]" >
            <div class="h-[60%] flex justify-center items-end">
                <h1 class="text-3xl md:text-5xl tracking-[5px] font-bebas text-transparent bg-clip-text bg-gradient-to-r from-[#5E0505] to-[#9A0F0F]">Our Team</h1>
            </div>
            <div class="h-[40%]">
                <p class="font-normal text-[15px] md:text-[24.87px] mt-10px md:mt-[28px] font-montserrat">THE MANAGEMENT</p>
            </div>
        </div>

        <!-- THE MANAGEMENT -->
        <div class="h-auto md:h-[65vh] flex justify-center bg-white/[75%]">
            <div class=" h-auto w-5/6 md:flex md:justify-evenly md:items-center" >
                <!-- SIR JVS -->
                <div class="w-full flex justify-center">
                    <div class="group w-[201px] md:w-[271px] h-[290px] md:h-[377px] flex flex-col items-center font-montserrat hover:bg-[#860909] hover:rounded-[1rem] hover:text-white" @click="JVS = true">
                        <img class="rounded-full w-[250px] h-[250px] mt-[10px] group-hover:rounded-none group-hover:rounded-t-[1rem]" src="img/team/JVSb.png" alt="SIR JVS" >
                        <p class="font-bold w-[207px] mt-[10px] text-[15px] md:text-[20px] text-center " >SIR JVS</p>
                        <p class="position font-medium text-[14px] md:text-[16px] ">Chief Marketing Officer</p>
                        <p class="position font-medium text-[14px] md:text-[16px]">Chief Finance Officer</p>
                    </div>  
                </div>
                <!-- SIR PTS -->
                <div class="w-full flex justify-center">
                    <div class="group w-[201px] md:w-[271px] h-[270px] md:h-[377px] flex flex-col items-center font-montserrat hover:bg-[#860909] hover:rounded-[1rem] hover:text-white" @click="JVS = true">
                        <img class="rounded-full w-[250px] h-[250px] mt-[10px] group-hover:rounded-none group-hover:rounded-t-[1rem]" src="img/team/PTSb.png" alt="SIR PTS" >
                        <p class="font-bold w-[207px] mt-[10px] text-[15px] md:text-[20px] text-center " >SIR PTS</p>
                        <p class="position font-medium  text-[14px] md:text-[16px] ">Chief Executive Officer</p>
                    </div>
                </div>
                <!-- MAAM JSS -->
                <div class="w-full flex justify-center">
                    <div class="group w-[201px] md:w-[271px] h-[270px] md:h-[377px] flex flex-col items-center font-montserrat hover:bg-[#860909] hover:rounded-[1rem] hover:text-white" @click="JVS = true">
                        <img class="rounded-full w-[250px] h-[250px] mt-[10px] group-hover:rounded-none group-hover:rounded-t-[1rem]" src="img/team/JSSb.png" alt="MAAM JSS" >
                        <p class="font-bold w-[207px] mt-[10px] text-[15px] md:text-[20px] text-center " >MAAM JSS</p>
                        <p class="position font-medium text-[14px] md:text-[16px] ">Chief Operation Officer</p>
                    </div>
                </div>

            </div>
        </div>
    
        <!-- KEY OFFICERS -->
        <div class=" md:h-[260vh] w-full bg-white/[75%] pb-5 md:pb-0">
            <div class="h-[50px] flex items-center justify-center font-normal text-[15px] md:text-[24.87px] ">
                <p class="font-montserrat ">THE KEY OFFICERS</p>
            </div>
            <div class="h-auto md:h-[23.75%] w-full flex justify-center">
                <div class="h-full w-5/6 flex flex-col md:flex-row justify-evenly items-center justify-center">
                    <!-- HRH -->
                    <div class="group w-[201px] md:w-[271px] h-[290px] md:h-[377px] flex flex-col items-center font-montserrat hover:bg-[#860909] hover:rounded-[1rem] hover:text-white" @click="HRH = true">
                        <img class="rounded-full w-[250px] h-[250px] mt-[10px] group-hover:rounded-none group-hover:rounded-t-[1rem]" src="img/officers/HRH.png" alt="MAAM HRH" >
                        <p class="font-bold w-[207px]  mt-[10px] text-center text-sm md:text-[20px]" >MAAM HRH</p>
                        <p class="position font-medium text-[14px] md:text-[16px] ">Ms. Apple M. Eugenio</p>
                        <p class="position font-medium text-[14px] md:text-[16px]">Human Resources Head</p>
                    </div>
                    <!-- SHA -->
                    <div class="group w-[201px] md:w-[271px] h-[290px] md:h-[377px] flex flex-col items-center font-montserrat hover:bg-[#860909] hover:rounded-[1rem] hover:text-white" @click="HRH = true">
                        <img class="rounded-full w-[250px] h-[250px] mt-[10px] group-hover:rounded-none group-hover:rounded-t-[1rem]" src="img/officers/SHA.png" alt="SIR SHA" >
                        <p class="font-montserrat font-bold w-[207px] mt-[10px] text-center text-sm md:text-[20px] " >SIR SHA</p>
                        <p class="position font-medium  ">Mr. Arvin Feliciano</p>
                        <p class="position font-medium">Sales Head</p>
                    </div>
                    <!-- SHJE -->
                    <div class="group w-[201px] md:w-[271px] h-[290px] md:h-[377px] flex flex-col items-center font-montserrat hover:bg-[#860909] hover:rounded-[1rem] hover:text-white" @click="HRH = true">
                        <img class="rounded-full w-[250px] h-[250px] mt-[10px] group-hover:rounded-none group-hover:rounded-t-[1rem]" src="img/officers/SHJE.png" alt="SIR SHJE" >
                        <p class="font-bold w-[207px] mt-[10px] text-center text-sm md:text-[20px]" >SIR SHJE</p>
                        <p class="position font-medium text-[14px] md:text-[16px] ">Mr. Joseph Edward Villareal</p>
                        <p class="position font-medium text-[14px] md:text-[16px]">CSales Head</p>
                    </div>
                </div>
            </div>
            <div class="h-auto md:h-[23.75%] w-full flex justify-center">
                <div class="h-full w-5/6 flex flex-col md:flex-row justify-evenly items-center justify-center">
                    <!-- SM -->
                    <div class="group w-[201px] md:w-[271px] h-[290px] md:h-[377px] flex flex-col items-center font-montserrat hover:bg-[#860909] hover:rounded-[1rem] hover:text-white" @click="HRH = true">
                        <img class="rounded-full w-[250px] h-[250px] mt-[10px] group-hover:rounded-none group-hover:rounded-t-[1rem]" src="img/officers/SM.png" alt="SIR SM" >
                        <p class="Sir_jvs_name font-bold w-[207px] mt-[10px] text-sm md:text-[20px] text-center " >SIR SM</p>
                        <p class="position font-medium text-[14px] md:text-[16px] ">Mr. Anjolito Cruz</p>
                        <p class="position font-medium text-[14px] md:text-[16px]">Sales Manager</p>
                    </div>
                    <!-- SSM -->
                    <div class="group w-[201px] md:w-[271px] h-[290px] md:h-[377px] flex flex-col items-center font-montserrat hover:bg-[#860909] hover:rounded-[1rem] hover:text-white" @click="HRH = true">
                        <img class="rounded-full w-[250px] h-[250px] mt-[10px] group-hover:rounded-none group-hover:rounded-t-[1rem]" src="img/officers/SSM.png" alt="SIR SSM" >
                        <p class="Sir_jvs_name font-bold w-[207px] mt-[10px] text-sm md:text-[20px] text-center " >SIR SSM</p>
                        <p class="position font-medium text-[14px] md:text-[16px] ">Mr. Obeth John Ocampo</p>
                        <p class="position font-medium text-[14px] md:text-[16px]">Sales Support Manager</p>
                    </div>
                    <!-- PM -->
                    <div class="group w-[201px] md:w-[271px] h-[290px] md:h-[377px] flex flex-col items-center font-montserrat hover:bg-[#860909] hover:rounded-[1rem] hover:text-white" @click="HRH = true">
                        <img class="rounded-full w-[250px] h-[250px] mt-[10px] group-hover:rounded-none group-hover:rounded-t-[1rem]" src="img/officers/PM.png" alt="SIR ITH" >
                        <p class="font-bold w-[207px] mt-[10px] text-sm md:text-[20px] text-center " >SIR ITH</p>
                        <p class="position font-medium text-[14px] md:text-[16px] ">Mr. Mike Arnold Solano</p>
                        <p class="position font-medium text-[14px] md:text-[16px]">CProject Manager</p>
                    </div>
                </div>
            </div>

            <div class="h-auto md:h-[23.75%] w-full flex justify-center" >
                <div class="h-full w-5/6 flex flex-col md:flex-row justify-evenly items-center justify-center">
                    <!-- OFM -->
                    <div class="group w-[201px] md:w-[271px] h-[290px] md:h-[377px] flex flex-col items-center font-montserrat hover:bg-[#860909] hover:rounded-[1rem] hover:text-white" @click="HRH = true">
                        <img class="rounded-full w-[250px] h-[250px] mt-[10px] group-hover:rounded-none group-hover:rounded-t-[1rem]" src="img/officers/OFM1.png" alt="SIR OFM" >
                        <p class="font-bold w-[207px] mt-[10px] text-sm md:text-[20px] text-center " >SIR OFM</p>
                        <p class="position font-medium  text-[14px] md:text-[16px]">Mr. Jay Emmanuel Goyal</p>
                        <p class="position font-medium text-[14px] md:text-[16px]">Order Fulfillment Manager</p>
                    </div>
                    <!-- HS -->
                    <div class="group w-[201px] md:w-[271px] h-[290px] md:h-[377px] flex flex-col items-center font-montserrat hover:bg-[#860909] hover:rounded-[1rem] hover:text-white" @click="HRH = true">
                        <img class="rounded-full w-[250px] h-[250px] mt-[10px] group-hover:rounded-none group-hover:rounded-t-[1rem]" src="img/officers/HS.png" alt="MAAM HS" >
                        <p class="font-bold w-[207px] mt-[10px]  text-center text-sm md:text-[20px] " >MAAM HS</p>
                        <p class="position font-medium text-[14px] md:text-[16px] ">Ms. Lyca Jean Lastimado</p>
                        <p class="position font-medium text-[12px] md:text-[16px]">Human Resources Supervisor</p>
                    </div>
                    <!-- MS -->
                    <div class="group w-[201px] md:w-[271px] h-[290px] md:h-[377px] flex flex-col items-center font-montserrat hover:bg-[#860909] hover:rounded-[1rem] hover:text-white" @click="HRH = true">
                        <img class="rounded-full w-[250px] h-[250px] mt-[10px] group-hover:rounded-none group-hover:rounded-t-[1rem]" src="img/officers/MS.png" alt="SIR MS" >
                        <p class="font-bold w-[207px] mt-[10px]  text-center text-sm md:text-[20px]" >SIR MS</p>
                        <p class="position text-[12px] md:text-[16px] ">Mr. Justine Cristopher Eugenio</p>
                        <p class="position font-medium text-[14px] md:text-[16px]">Marketing Supervisor</p>
                    </div>
                </div>
            </div>

            <div class="h-auto md:h-[23.75%] w-full flex justify-center">
                <div class="h-full w-5/6 flex flex-col md:flex-row justify-evenly items-center justify-center">
                    <!-- TL ELMER -->
                    <div class="group w-[201px] md:w-[271px] h-[290px] md:h-[377px] flex flex-col items-center font-montserrat hover:bg-[#860909] hover:rounded-[1rem] hover:text-white" @click="HRH = true">
                        <img class="rounded-full w-[250px] h-[250px] mt-[10px] group-hover:rounded-none group-hover:rounded-t-[1rem]" src="img/officers/TL_ELMER.png" alt="TL ELMER" >
                        <p class="font-bold w-[207px] mt-[10px] text-sm md:text-[20px] text-center " >TL ELMER</p>
                        <p class="position font-medium text-[14px] md:text-[16px] ">Mr. Elmer Roi Salapare</p>
                        <p class="position font-medium text-[14px] md:text-[16px]">OFD Team Leader</p>
                    </div>
                    <!-- TL MAE -->
                    <div class="group w-[201px] md:w-[271px] h-[290px] md:h-[377px] flex flex-col items-center font-montserrat hover:bg-[#860909] hover:rounded-[1rem] hover:text-white" @click="HRH = true">
                        <img class="rounded-full w-[250px] h-[250px] mt-[10px] group-hover:rounded-none group-hover:rounded-t-[1rem]" src="img/officers/TL_MAE.png" alt="TL MAE" >
                        <p class="font-bold w-[207px] mt-[10px] text-sm md:text-[20px] text-center " >TL MAE</p>
                        <p class="position font-medium text-[14px] md:text-[16px] ">Ms. Laurence Mae Bathan</p>
                        <p class="position font-medium text-[14px] md:text-[16px]">Sales Team Leader</p>
                    </div>
                    <!-- TL ERIKA -->
                    <div class="group w-[201px] md:w-[271px] h-[290px] md:h-[377px] flex flex-col items-center font-montserrat hover:bg-[#860909] hover:rounded-[1rem] hover:text-white" @click="HRH = true">
                        <img class="rounded-full w-[250px] h-[250px] mt-[10px] group-hover:rounded-none group-hover:rounded-t-[1rem]" src="img/officers/TL_ERIKA.png" alt="TL ERIKA" >
                        <p class="font-bold w-[207px] mt-[10px] text-sm md:text-[20px] text-center " >TL ERIKA</p>
                        <p class="position font-medium text-[14px] md:text-[16px] ">Ms. Mary Erika Portugal</p>
                        <p class="position font-medium text-[14px] md:text-[16px]">Sales Team Leader</p>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.team-modal')
    </main>
    
@endsection('main')


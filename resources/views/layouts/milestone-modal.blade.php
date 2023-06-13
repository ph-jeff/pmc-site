
<div x-show="seemore1" xcloak class="z-50 h-screen w-screen bg-black bg-opacity-75 fixed top-0 flex justify-center items-center">
    <div class="min-h-2/3 h-auto w-11/12 sm:w-11/12 md:w-7/12 lg:w-2/6 bg-white rounded-xl" @click.outside="seemore1= false">
        
        <div class="flex justify-end ">
            <button class="font-bold m-2 mr-4 opacity-60 hover:opacity-100" @click="seemore1 = false">&times;</button>
        </div>
        <div class="w-full flex justify-center">
            <div class=" w-11/12">
                <div class="flex justify-center">
                    <img class="h-52 w-36 sm:w-96" src="img/about/milestone5.png" alt="" srcset="">
                </div>
                <h1 class="font-bebas text-2xl tracking-wider text-center">CAPTION HERE</h1>
                <p class="font-semibold md:text-sm text-center">(DATE HERE)</p>
                {{-- <p class=" text-justify text-xs sm:text:sm " style="text-indent: 1.5rem">Donec et tincidunt justo. Vivamus vitae turpis ex. Vestibulum hendrerit .</p> --}}
                <p class="text-justify text-">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae rerum exercitationem id veniam velit ut quaerat et, inventore amet saepe illo fuga quos laboriosam adipisci minima voluptatum sit alias dolor. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores minus repellat iure rerum explicabo odit beatae laboriosam, deleniti, earum error inventore similique neque. Distinctio voluptatem sit, illum quos laboriosam dolorum eum magnam dignissimos dicta, amet autem assumenda. Ipsa, doloribus voluptates culpa consectetur facilis laboriosam officia ipsum nobis eius omnis autem, illum, dolor dolore expedita animi vero molestiae ad doloremque et voluptate modi. Reprehenderit laudantium quaerat nulla atque consectetur veritatis delectus ad officia consequuntur blanditiis debitis odit aspernatur suscipit quod, deleniti repellendus ipsum voluptatum provident iure ratione. Ut sunt neque expedita error aut voluptates autem dolorem, labore suscipit quos odit qui?</p>
            </div>
        </div>
    </div>
</div>
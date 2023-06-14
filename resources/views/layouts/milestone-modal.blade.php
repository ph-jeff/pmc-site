   <style>
    /* Customize the scrollbar */
    .scrollbar-container::-webkit-scrollbar {
      width: 5px;
    }
  
    .scrollbar-container::-webkit-scrollbar-track {
      background-color: #F1F1F1;
    }
  
    .scrollbar-container::-webkit-scrollbar-thumb {
      background-color: #888;
    }
  
    .scrollbar-container::-webkit-scrollbar-thumb:hover {
      background-color: #555;
    }
  
    /* Force scrollbar to be always visible */
    .scrollbar-container {
      scrollbar-width: thin;
      scrollbar-color: #888 #F1F1F1;
      overflow-y: scroll;
    }
  </style>

  {{-- milestone1 --}}
  <div x-show="seemore1" xcloak class="z-50 h-screen w-screen bg-black bg-opacity-75 fixed top-0 flex justify-center items-center">
    <div class="min-h-auto w-11/12 sm:w-11/12 md:w-7/12 lg:w-2/6 bg-white rounded-xl " @click.outside="seemore1 = false">
      <div class="flex justify-end top-0">
        <button class="font-bold m-2 mr-4 opacity-60 hover:opacity-100" @click="seemore1 = false">&times;</button>
      </div>
      <div class="w-full flex justify-center">
        <div class="w-full scrollbar-container mb-2" style="max-height: 30rem;">
            <div class="flex justify-center ">
                <img class="h-48 w-42 sm:w-96" src="img/about/milestone1.png" alt="" srcset="">
              </div>
              <div class="text-center px-4">
                <h1 class="font-bebas text-2xl tracking-wider">CAPTION HERE</h1>
                <p class="font-semibold md:text-sm">(DATE HERE)</p>
              </div>
              <div class="p-4">
                <p class="text-justify text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae rerum exercitationem id veniam velit ut quaerat et, inventore amet saepe illo fuga quos laboriosam adipisci minima voluptatum sit alias dolor. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores minus repellat iure rerum explicabo odit beatae laboriosam, deleniti, earum error inventore similique neque. Distinctio voluptatem sit, illum quos laboriosam dolorum eum magnam dignissimos dicta, amet autem assumenda. Ipsa, doloribus voluptates culpa consectetur facilis laboriosam officia ipsum nobis eius omnis autem, illum, dolor dolore expedita animi vero molestiae ad doloremque et voluptate modi. Reprehenderit laudantium quaerat nulla atque consectetur veritatis delectus ad officia consequuntur blanditiis debitis odit aspernatur suscipit quod, deleniti repellendus ipsum voluptatum provident iure ratione. Ut sunt neque expedita error aut voluptates autem dolorem, labore suscipit quos odit qui?</p>
              </div>
        </div>
      </div>
    </div>
  </div>
  
  {{-- milestone2 --}}
  <div x-show="seemore2" xcloak class="z-50 h-screen w-screen bg-black bg-opacity-75 fixed top-0 flex justify-center items-center">
    <div class="min-h-auto w-11/12 sm:w-11/12 md:w-7/12 lg:w-2/6 bg-white rounded-xl " @click.outside="seemore2 = false">
      <div class="flex justify-end top-0">
        <button class="font-bold m-2 mr-4 opacity-60 hover:opacity-100" @click="seemore2 = false">&times;</button>
      </div>
      <div class="w-full flex justify-center">
        <div class="w-full scrollbar-container mb-2" style="max-height: 30rem;">
            <div class="flex justify-center ">
                <img class="h-48 w-42 sm:w-96" src="img/about/milestone2.png" alt="" srcset="">
              </div>
              <div class="text-center px-4">
                <h1 class="font-bebas text-2xl tracking-wider">CAPTION HERE</h1>
                <p class="font-semibold md:text-sm">(DATE HERE)</p>
              </div>
              <div class="p-4">
                <p class="text-justify text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae rerum exercitationem id veniam velit ut quaerat et, inventore amet saepe illo fuga quos laboriosam adipisci minima voluptatum sit alias dolor. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores minus repellat iure rerum explicabo odit beatae laboriosam, deleniti, earum error inventore similique neque. Distinctio voluptatem sit, illum quos laboriosam dolorum eum magnam dignissimos dicta, amet autem assumenda. Ipsa, doloribus voluptates culpa consectetur facilis laboriosam officia ipsum nobis eius omnis autem, illum, dolor dolore expedita animi vero molestiae ad doloremque et voluptate modi. Reprehenderit laudantium quaerat nulla atque consectetur veritatis delectus ad officia consequuntur blanditiis debitis odit aspernatur suscipit quod, deleniti repellendus ipsum voluptatum provident iure ratione. Ut sunt neque expedita error aut voluptates autem dolorem, labore suscipit quos odit qui?</p>
              </div>
        </div>
      </div>
    </div>
  </div>
  
  {{-- milestone3 --}}
  <div x-show="seemore3" xcloak class="z-50 h-screen w-screen bg-black bg-opacity-75 fixed top-0 flex justify-center items-center">
    <div class="min-h-auto w-11/12 sm:w-11/12 md:w-7/12 lg:w-2/6 bg-white rounded-xl " @click.outside="seemore3 = false">
      <div class="flex justify-end top-0">
        <button class="font-bold m-2 mr-4 opacity-60 hover:opacity-100" @click="seemore3 = false">&times;</button>
      </div>
      <div class="w-full flex justify-center">
        <div class="w-full scrollbar-container mb-2" style="max-height: 30rem;">
            <div class="flex justify-center ">
                <img class="h-48 w-42 sm:w-96" src="img/about/milestone3.png" alt="" srcset="">
              </div>
              <div class="text-center px-4">
                <h1 class="font-bebas text-2xl tracking-wider">CAPTION HERE</h1>
                <p class="font-semibold md:text-sm">(DATE HERE)</p>
              </div>
              <div class="p-4">
                <p class="text-justify text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae rerum exercitationem id veniam velit ut quaerat et, inventore amet saepe illo fuga quos laboriosam adipisci minima voluptatum sit alias dolor. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores minus repellat iure rerum explicabo odit beatae laboriosam, deleniti, earum error inventore similique neque. Distinctio voluptatem sit, illum quos laboriosam dolorum eum magnam dignissimos dicta, amet autem assumenda. Ipsa, doloribus voluptates culpa consectetur facilis laboriosam officia ipsum nobis eius omnis autem, illum, dolor dolore expedita animi vero molestiae ad doloremque et voluptate modi. Reprehenderit laudantium quaerat nulla atque consectetur veritatis delectus ad officia consequuntur blanditiis debitis odit aspernatur suscipit quod, deleniti repellendus ipsum voluptatum provident iure ratione. Ut sunt neque expedita error aut voluptates autem dolorem, labore suscipit quos odit qui?</p>
              </div>
        </div>
      </div>
    </div>
  </div>
  
  {{-- milestone4 --}}
  <div x-show="seemore4" xcloak class="z-50 h-screen w-screen bg-black bg-opacity-75 fixed top-0 flex justify-center items-center">
    <div class="min-h-auto w-11/12 sm:w-11/12 md:w-7/12 lg:w-2/6 bg-white rounded-xl " @click.outside="seemore4 = false">
      <div class="flex justify-end top-0">
        <button class="font-bold m-2 mr-4 opacity-60 hover:opacity-100" @click="seemore4 = false">&times;</button>
      </div>
      <div class="w-full flex justify-center">
        <div class="w-full scrollbar-container mb-2" style="max-height: 30rem;">
            <div class="flex justify-center ">
                <img class="h-48 w-42 sm:w-96" src="img/about/milestone4.png" alt="" srcset="">
              </div>
              <div class="text-center px-4">
                <h1 class="font-bebas text-2xl tracking-wider">CAPTION HERE</h1>
                <p class="font-semibold md:text-sm">(DATE HERE)</p>
              </div>
              <div class="p-4">
                <p class="text-justify text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae rerum exercitationem id veniam velit ut quaerat et, inventore amet saepe illo fuga quos laboriosam adipisci minima voluptatum sit alias dolor. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores minus repellat iure rerum explicabo odit beatae laboriosam, deleniti, earum error inventore similique neque. Distinctio voluptatem sit, illum quos laboriosam dolorum eum magnam dignissimos dicta, amet autem assumenda. Ipsa, doloribus voluptates culpa consectetur facilis laboriosam officia ipsum nobis eius omnis autem, illum, dolor dolore expedita animi vero molestiae ad doloremque et voluptate modi. Reprehenderit laudantium quaerat nulla atque consectetur veritatis delectus ad officia consequuntur blanditiis debitis odit aspernatur suscipit quod, deleniti repellendus ipsum voluptatum provident iure ratione. Ut sunt neque expedita error aut voluptates autem dolorem, labore suscipit quos odit qui?</p>
              </div>
        </div>
      </div>
    </div>
  </div>
  
  {{-- milestone5 --}}
  <div x-show="seemore5" xcloak class="z-50 h-screen w-screen bg-black bg-opacity-75 fixed top-0 flex justify-center items-center">
    <div class="min-h-auto w-11/12 sm:w-11/12 md:w-7/12 lg:w-2/6 bg-white rounded-xl " @click.outside="seemore5 = false">
      <div class="flex justify-end top-0">
        <button class="font-bold m-2 mr-4 opacity-60 hover:opacity-100" @click="seemore5 = false">&times;</button>
      </div>
      <div class="w-full flex justify-center">
        <div class="w-full scrollbar-container mb-2" style="max-height: 30rem;">
            <div class="flex justify-center ">
                <img class="h-48 w-42 sm:w-96" src="img/about/milestone5.png" alt="" srcset="">
              </div>
              <div class="text-center px-4">
                <h1 class="font-bebas text-2xl tracking-wider">CAPTION HERE</h1>
                <p class="font-semibold md:text-sm">(DATE HERE)</p>
              </div>
              <div class="p-4">
                <p class="text-justify text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae rerum exercitationem id veniam velit ut quaerat et, inventore amet saepe illo fuga quos laboriosam adipisci minima voluptatum sit alias dolor. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores minus repellat iure rerum explicabo odit beatae laboriosam, deleniti, earum error inventore similique neque. Distinctio voluptatem sit, illum quos laboriosam dolorum eum magnam dignissimos dicta, amet autem assumenda. Ipsa, doloribus voluptates culpa consectetur facilis laboriosam officia ipsum nobis eius omnis autem, illum, dolor dolore expedita animi vero molestiae ad doloremque et voluptate modi. Reprehenderit laudantium quaerat nulla atque consectetur veritatis delectus ad officia consequuntur blanditiis debitis odit aspernatur suscipit quod, deleniti repellendus ipsum voluptatum provident iure ratione. Ut sunt neque expedita error aut voluptates autem dolorem, labore suscipit quos odit qui?</p>
              </div>
        </div>
      </div>
    </div>
  </div>
  
   {{-- milestone6 --}}
   <div x-show="seemore6" xcloak class="z-50 h-screen w-screen bg-black bg-opacity-75 fixed top-0 flex justify-center items-center">
    <div class="min-h-auto w-11/12 sm:w-11/12 md:w-7/12 lg:w-2/6 bg-white rounded-xl " @click.outside="seemore6 = false">
      <div class="flex justify-end top-0">
        <button class="font-bold m-2 mr-4 opacity-60 hover:opacity-100" @click="seemore6 = false">&times;</button>
      </div>
      <div class="w-full flex justify-center">
        <div class="w-full scrollbar-container mb-2" style="max-height: 30rem;">
            <div class="flex justify-center ">
                <img class="h-48 w-42 sm:w-96" src="img/about/milestone6.png" alt="" srcset="">
              </div>
              <div class="text-center px-4">
                <h1 class="font-bebas text-2xl tracking-wider">CAPTION HERE</h1>
                <p class="font-semibold md:text-sm">(DATE HERE)</p>
              </div>
              <div class="p-4">
                <p class="text-justify text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae rerum exercitationem id veniam velit ut quaerat et, inventore amet saepe illo fuga quos laboriosam adipisci minima voluptatum sit alias dolor. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores minus repellat iure rerum explicabo odit beatae laboriosam, deleniti, earum error inventore similique neque. Distinctio voluptatem sit, illum quos laboriosam dolorum eum magnam dignissimos dicta, amet autem assumenda. Ipsa, doloribus voluptates culpa consectetur facilis laboriosam officia ipsum nobis eius omnis autem, illum, dolor dolore expedita animi vero molestiae ad doloremque et voluptate modi. Reprehenderit laudantium quaerat nulla atque consectetur veritatis delectus ad officia consequuntur blanditiis debitis odit aspernatur suscipit quod, deleniti repellendus ipsum voluptatum provident iure ratione. Ut sunt neque expedita error aut voluptates autem dolorem, labore suscipit quos odit qui?</p>
              </div>
        </div>
      </div>
    </div>
  </div>
  
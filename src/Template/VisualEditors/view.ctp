


  
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
   <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
  
 
    }
  </style>
  
<body class="md:bg-[#F1F6FA] w-[100%] mx-auto">
<div class="main max-w-[1024px] mx-auto px-3">
    <div class="mx-auto">
      
<nav class="bg-[#F1F6FA]border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
  <div class="flex flex-wrap justify-between items-center mx-auto">
    <a href="" class="flex items-center">
        <img src="../img/logo1.png" class="mr-3 w-[150px]" alt="Flowbite Logo">
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto " id="navbar-default">
      <ul class="flex flex-col p-4 mt-4  bg-[#F1F6FA] rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="block border-2 md:border-0 py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">ENTREPRISES</a>
        </li>
        <li>
          <a href="#" class="block border-2 md:border-0 py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">SECTEUR PUBLIC</a>
        </li>
        <li>
          <a href="#" class="block border-2 md:border-0 py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">À PROPOS</a>
        </li>
        <li>
          <a href="#" class="block border-2 md:border-0 py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">CONTACT</a>
        </li>
        <li>
          <a href="#" class="block border-2 md:border-0 py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">BLOG</a>
        </li>
        <li>
          <a href="#" class="block border-2 md:border-0 md:hidden py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">LOGIN</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    </div>
    
  <div class="mw-[1024px] mx-auto border relative mh-[500px] mt-[80px] md:mb-[126px] mb-[400px] hover:border-[#000]">
    <div class="flex md:justify-end justify-start mt-[40px] mr-[50px] w-full"><img src="../img/d2.png" class="md:w-[733px] h-[412px]">
    
<button id="dropdownDefault" data-dropdown-toggle="dropdown" class="absolute top-0 text-[#000] hover:bg-[#ccc] rounded-full" type="button"><i class="fa-solid fa-list"></i></button>

<!-- Dropdown menu -->
<div id="dropdown" class="hidden z-10 w-44  rounded divide-y divide-gray-100 shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 510px);">
<?php foreach ($banners as $banner): ?>
    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
      <li>
        <a href="#" class="flex py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><?= $this->Number->format($banner->id)?> <?= $this->Html->link(__('Editor'), ['controller' => 'VisualEditors', 'action' => 'edit', $banner->id]) ?></a>
      </li>
    </ul>
    <?php endforeach; ?>
</div>

  </div>
      <div class="absolute md:top-0 left-0 top-[330px]">
      <div class="font-medium leading-[70px]"><h1 class="max-w-[630px] sm:text-[70px] text-[50px]">Fédérateur. Personnalisé. Souple & adapté.</h1></div>
      <div class="text-[20px] font-medium mt-5"><p class="max-w-[420px]">Avec z0 Gravity, découvrez la simplicité et la performance d’une gestion de projet collaborative.</p></div>
      <div class="font-medium mt-5 max-w-[205px] h-[39px] bg-[#FFD051] text-center rounded-full "><a class="leading-[39px]" href="">Découvrez z0 Gravity</a></div>
      <div class="font-medium mt-5 max-w-[150px] flex justify-between items-center" type="button" data-modal-toggle="large-modal" ><a class="leading-[40px]" href=""><i class="fa-solid fa-circle-play text-[40px]"></i></a>Voir la vidéo</div>
      <div class="block space-y-4 md:flex md:space-y-0 md:space-x-4"> 
      <!-- Large Modal -->
      <div id="large-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center" aria-hidden="true">
          <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Large modal
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="large-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
            <!-- Modal body -->
              <div class="p-6 space-y-6">
                  <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                      With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                  </p>
                  <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                      The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                  </p>
              </div>
        
      </div>
    </div>
</div>
           
 

    </div>
  </div>
</div>
    <div class="max-w-[1024px] mx-auto mb-[80px]">
      
<div id="controls-carousel" class="relative" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg h-[422px]">
         <!-- Item 1 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10" data-carousel-item="">
        <div class="w-[190px] h-[422px] border bg-sky-500 hidden rounded-tr-[22px] rounded-br-[22px]"></div>
      <div class="max-w-[1024px] h-[422px] border rounded-[22px] bg-white p-[30px] relative mx-auto">
        <div class=" font-medium text-[#ccc] flex justify-between w-full ">PRESSE <div class=" w-[100px]"><i class="fa-solid fa-circle-chevron-left text-[30px] text-[#ccc] mr-3"></i> <i class="fa-solid fa-circle-chevron-right text-[30px] text-[#ccc]"></i></div> </div>
        <div class=""><img src="https://i.pinimg.com/236x/c2/fc/c0/c2fcc0a977fd997263a9cd768c50578f.jpg" alt=""></div>
        <div class=" h-2/5 text-[20px] italic">Il y avait tout d’abord la sécurité, l’outil z0 Gravity a pu être rapidement validé par les équipes d’Orange Cyberdéfense.</div>
        <div class="font-medium text-[18px]">Stéphane Touchet </div>
        <div class="absolute bottom-[30px] flex justify-between w-11/12 text-[#ccc]  text-[18px]"> <p>PMO service client Orange Sud-Ouest</p> 
         <a href="">Lire l’article</a> </div>
      </div>
      <div class="w-[190px] h-[422px] border bg-sky-500 hidden rounded-tl-[22px] rounded-bl-[22px]"></div>
        </div>
        <!-- Item 2 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20" data-carousel-item="active">
        <div class="w-[190px] h-[422px] border bg-sky-500 hidden rounded-tr-[22px] rounded-br-[22px]"></div>
      <div class="max-w-[1024px] h-[422px] border rounded-[22px] bg-white p-[30px] relative mx-auto">
        <div class=" font-medium text-[#ccc] flex justify-between w-full ">PRESSE <div class=" w-[100px]"><i class="fa-solid fa-circle-chevron-left text-[30px] text-[#ccc] mr-3"></i> <i class="fa-solid fa-circle-chevron-right text-[30px] text-[#ccc]"></i></div> </div>
        <div class=""><img src="https://i.pinimg.com/236x/c2/fc/c0/c2fcc0a977fd997263a9cd768c50578f.jpg" alt=""></div>
        <div class=" h-2/5 text-[20px] italic">Il y avait tout d’abord la sécurité, l’outil z0 Gravity a pu être rapidement validé par les équipes d’Orange Cyberdéfense.</div>
        <div class="font-medium text-[18px]">Stéphane Touchet </div>
        <div class="absolute bottom-[30px] flex justify-between w-11/12 text-[#ccc]  text-[18px]"> <p>PMO service client Orange Sud-Ouest</p> 
         <a href="">Lire l’article</a> </div>
      </div>
      <div class="w-[190px] h-[422px] border bg-sky-500 hidden rounded-tl-[22px] rounded-bl-[22px]"></div>
        </div>
        <!-- Item 3 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10" data-carousel-item="">
        <div class="w-[190px] h-[422px] border bg-sky-500 hidden rounded-tr-[22px] rounded-br-[22px]"></div>
      <div class="max-w-[1024px] h-[422px] border rounded-[22px] bg-white p-[30px] relative mx-auto">
        <div class=" font-medium text-[#ccc] flex justify-between w-full ">PRESSE <div class=" w-[100px]"><i class="fa-solid fa-circle-chevron-left text-[30px] text-[#ccc] mr-3"></i> <i class="fa-solid fa-circle-chevron-right text-[30px] text-[#ccc]"></i></div> </div>
        <div class=""><img src="https://i.pinimg.com/236x/c2/fc/c0/c2fcc0a977fd997263a9cd768c50578f.jpg" alt=""></div>
        <div class=" h-2/5 text-[20px] italic">Il y avait tout d’abord la sécurité, l’outil z0 Gravity a pu être rapidement validé par les équipes d’Orange Cyberdéfense.</div>
        <div class="font-medium text-[18px]">Stéphane Touchet </div>
        <div class="absolute bottom-[30px] flex justify-between w-11/12 text-[#ccc]  text-[18px]"> <p>PMO service client Orange Sud-Ouest</p> 
         <a href="">Lire l’article</a> </div>
      </div>
      <div class="w-[190px] h-[422px] border bg-sky-500 hidden rounded-tl-[22px] rounded-bl-[22px]"></div>
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev=""></button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next=""></button>
</div>

</div>      
    </div>
    <div class="max-w-[1571px] bg-[#041839] mx-auto ">
      <div class="md:flex justify-center mb-[100px]">
        <h1 class="text-[50px] text-white md:w-[200px] font-medium text-center text-[#049BF7]">POUR FAIRE COURT.</h1>
        <p class="text-white max-w-[739px] flex items-center text-[26px] text-center md:text-start">
          Z0 Gravity est un logiciel de gestion multi-projets :
           quelle que soit leur complexité, vous gérez facilement les plannings, 
          les budgets et les ressources humaines de vos projets par un usage transversal 
          et collaboratif.</p>
      </div>

  
  
    <div class="max-w-[1024px] h-[678px] md:flex mx-auto justify-between bg-[#FF7D66] md:rounded-[22px] mb-[100px]">
          <div class="pl-5">
            <h1 class="text-white text-[40px] mt-[150px] font-medium">Notre engagement:</h1>
            <p class="max-w-[400px] text-[#1C2A34] text-[20px] mt-5">Cest aider tuor d'organisation a realier ses projefs avec aeul mot d'order</p>
            <h4 class="text-[40px] font-medium"> sim-pli-ci-te!</h4>
           
          </div>
            <div class=""><img src="../img/m1.jpg" class="md:w-[400px] md:h-[100%] md:rounded-tr-[22px] md:rounded-br-[22px]"></div>

    </div>
          <div class="mx-auto max-w-[1024px] text-center">
            <h1 class="text-[#049BF7] text-[40px] font-medium">Découvrez l’univers z0 Gravity</h1>
            <p class="text-[#F1F6FA] max-w-[700px] text-center mx-auto">Plannings, budgets, calendriers… En un clin d'œil, vous avez une vision globale et stratégique de l'avancée de vos projets en temps réel !</p>
            <button class=" bg-[#FFD051]">Présentation vidéo</button>
          </div>
  
</div>

 
 

</body>
</html>


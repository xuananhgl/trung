


  
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
           
 


</body>
</html>



<legend><?= __('Edit Banner') ?></legend>
<?= $this->Form->create($banner) ?>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('video_url');
            echo $this->Form->control('btn_content');
            echo $this->Form->control('image_url');
            echo $this->Form->control('background_color',['type'=>'color']);
            echo $this->Form->control('text_color',['type'=>'color']);
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
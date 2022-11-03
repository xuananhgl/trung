


  
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
 
<body class="md:bg-[<?=$banner->background_color?>] w-[100%] mx-auto px-0">
<div class="main w-full mx-auto md:px-0 px-3">
        <div class="mx-auto bg-[#fff] h-[100px] z-20">     
            <nav class="border-gray-200 p-0 rounded dark:bg-gray-900 max-w-[1024px] mx-auto   ">
              <div class="flex flex-wrap justify-between mx-auto h-[100px] items-center">
                <a href="" class="">
                    <img src="../img/logo1.png" class="mr-3 w-[150px]" alt="Flowbite Logo">
                </a>
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>
                <div class="hidden w-full md:block md:w-auto z-20" id="navbar-default">
                  <ul class="flex flex-col p-4 mt-4 text-medium  bg-[#fff] rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                      <a href="#" class="block font-[600] border-2 md:border-0 py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">ENTREPRISES</a>
                    </li>
                    <li>
                      <a href="#" class="block font-[600] border-2 md:border-0 py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">SECTEUR PUBLIC</a>
                    </li>
                    <li>
                      <a href="#" class="block font-[600] border-2 md:border-0 py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">À PROPOS</a>
                    </li>
                    <li>
                      <a href="#" class="block font-[600] border-2 md:border-0 py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">CONTACT</a>
                    </li>
                    <li>
                      <a href="#" class="block font-[600] border-2 md:border-0 py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">BLOG</a>
                    </li>
                    <li>
                      <a href="#" class="block font-[600] border-2 md:border-0 md:hidden py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">LOGIN</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
  </div>
              <?= $this->Form->create($banner) ?>
             
           
              <div class="block absolute right-5 z-10 cursor-pointer top-[180px]">  
                <select name="banner_id" id="banner-id" class="w-[150px] rounded-full text-center cursor-pointer">
                <option value="<?= $visualeditor->banner_id ?>">list-banner (<?= $visualeditor->banner_id ?>)</option>
                <option value="2">2</option>
                <option value="1">1</option>
                <option value="33">33</option>   
              </select>
              <button type="submit" ><i class="fa-solid fa-display"></i></button>
              </div>



              <!-- Extra Large Modal -->
              <div id="extralarge-modal" tabindex="-1" class="hidden    fixed top-0 right-0 left-0 z-50  md:inset-0  h-full justify-center items-center" aria-hidden="true">
                  <div class="relative p-4 max-w-[1571px] h-full md:h-auto md:flex justify-between overflow-auto">
                      <!-- Modal content -->
                      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 max-w-[1024px] md:w-[1024px]">
                          <!-- Modal header -->
                          <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                              <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                  Editor banner
                              </h3>
                              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="extralarge-modal">
                                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                  <span class="sr-only">Close modal</span>
                              </button>
                          </div>
                          <!-- Modal body -->
                          <div class="p-6 space-y-6 bg-[<?=$banner->background_color?>]">
                          <div class="max-w-[1024px] mx-auto border-0 relative mh-[500px] md:mt-[80px] md:mb-[126px] mb-[400px] z-0">

                          <div class="flex md:justify-end justify-start mt-[40px] mr-[50px] w-full z-0"><img src="<?=$banner->image_url?>" class=" h-[412px]"> </div>
                        <div class="absolute md:top-0 left-0 top-[130px]">
                                    
                              <textarea class="max-w-[630px] text-[<?=$banner->text_color?>] md:text-[70px] text-[50px] leading-[56px] bg-[transparent] border-0 hover:bg-[transparent] font-medium md:leading-[76px] min-h-[230px]" 
                              name="title" required="required" maxlength="255" id="title" rows="3"><?=$banner->title?></textarea>
                              
                            
                              <textarea class="max-w-[420px] text-[<?=$banner->text_color?>] text-[20px] font-medium mt-5 bg-[transparent] border-0 hover:bg-[transparent]" name="description" id="description" rows="3"><?=$banner->description?></textarea>
                              
                              <input class="font-medium mt-5 max-w-[205px] h-[39px]  bg-[#FFD051] text-[<?=$banner->text_color?>] text-center rounded-full leading-[39px]"
                              name="btn_content" required="required" maxlength="99" id="btn-content" value="<?=$banner->btn_content?>">   
                        <div id="dropdownDefault" data-dropdown-toggle="dropdown" class="font-medium mt-5 max-w-[150px] flex justify-between items-center" 
                              type="button"><i class="fa-solid fa-circle-play text-[40px] text-[<?=$banner->text_color?>] "></i><p class="mt-3 text-[<?=$banner->text_color?>]">Voir la vidéo</p>
                        </div>
                              <!-- Dropdown menu -->
                        <div id="dropdown" class="hidden z-10 w-[400px] bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 210px);">
                              <input class="mx-0" type="text" name="video_url" required="required" maxlength="255" id="video-url" value="<?=$banner->video_url?>">
                        </div>

                                    
                            
                        </div>       
                        </div>
                            
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                            <button type="submit" class="bg-[#ccc] w-[50px] rounded-lg">Save</button>
                        </div>
                    </div>
                    <div class="md:w-[300px] w-full bg-white rounded-lg  md:ml-5 px-5 mx-auto">
                      <h1 class="text-center font-bold text-[20px] bg-[#ccc] mt-5 mb-5">Theme</h1>
                     
                      <?=$this->Form->control('background_color',['type'=>'color']);?>
                      <?=$this->Form->control('text_color',['type'=>'color']);?>
                      
                      <img src="<?=$banner->image_url?>" alt="">
                      <?=$this->Form->control('image_url');?>

              </div>
                   
              </div>

            </div>
            
                <div class="max-w-[1024px] mx-auto border-0 relative mh-[500px] mt-[80px] md:mb-[126px] mb-[400px]">
                <div class="block cursor-pointer w-[50px] absolute right-0 mx-auto text-white bg-[transparent] hover:bg-blue-800 focus:ring-4 focus:outline-none 
                focus:ring-blue-300 font-medium rounded-full text-center" data-modal-toggle="extralarge-modal">
                  <i class="fa-solid fa-gear"></i>
                </div>
                    <div class="flex md:justify-end justify-start mt-[40px] mr-[50px] w-full z-0"><img src="<?=$banner->image_url?>" class=" h-[412px]">
                    
                  </div>
                      <div class="absolute md:top-[-44px] left-0 top-[330px]">
                      <div class="sm:text-[70px] text-[50px] font-[500] leading-[76px] max-w-[630px] text-[<?=$banner->text_color?>]"><?=$banner->title?></div>
                      <div class="text-[20px] font-medium mt-5"><p class="max-w-[420px] text-[<?=$banner->text_color?>] "><?=$banner->description?></p></div>
                      <div class="font-medium mt-5 max-w-[205px] h-[39px] bg-[#FFD051] text-center rounded-full "><a  class="leading-[39px] text-[<?=$banner->text_color?>]" href=""><?=$banner->btn_content?></a></div>
                      <div class="font-medium mt-5 max-w-[150px] flex justify-between items-center text-[<?=$banner->text_color?>]" type="button" data-modal-toggle="large-modal" ><a class="leading-[40px]" href=""><i class="fa-solid fa-circle-play text-[40px] text-[<?=$banner->text_color?>]"></i></a>Voir la vidéo</div>
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
                            <div class=""><img src="./img/m1.jpg" class="md:w-[400px] md:h-[100%] md:rounded-tr-[22px] md:rounded-br-[22px]"></div>

                    </div>
                          <div class="mx-auto max-w-[1024px] text-center">
                            <h1 class="text-[#049BF7] text-[40px] font-medium">Découvrez l’univers z0 Gravity</h1>
                            <p class="text-[#F1F6FA] max-w-[700px] text-center mx-auto">Plannings, budgets, calendriers… En un clin d'œil, vous avez une vision globale et stratégique de l'avancée de vos projets en temps réel !</p>
                            <button class=" bg-[#FFD051]">Présentation vidéo</button>
                          </div>

  </div>
  <?= $this->Form->create($testimonial) ?>
    <fieldset>
        <legend><?= __('Edit Testimonial') ?></legend>
        <?php
            echo $this->Form->control('logo_url');
            echo $this->Form->control('description');
            echo $this->Form->control('testimonial_author');
            echo $this->Form->control('testimonial_author_position');
            echo $this->Form->control('testimonial_url');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
   
 
<?= $this->Form->end() ?> 
</body>
</html>


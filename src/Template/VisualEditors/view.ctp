


  
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
    <style>
 .line-article
 {
   -webkit-line-clamp: 4;
   -webkit-box-orient: vertical;
    overflow: hidden;
     display: -webkit-box;
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
  <div class="relative max-w-[1571px] mx-auto">
           
              <div class="block absolute right-5 z-10 cursor-pointer top-0"> 
                
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
        </div>
            
                <div class="relative max-w-[1571px] mx-auto">
                  <div class="block absolute right-5 z-10 cursor-pointer top-0"> 
                        <select name="testimonials_id" id="testimonials-id" class="w-[150px] rounded-full text-center cursor-pointer">
                        <option value="<?= $visualeditor->testimonials_id ?>">testimonial (<?= $visualeditor->testimonials_id ?>)</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>   
                      </select>
                      <button type="submit" ><i class="fa-solid fa-display"></i></button>
                  </div>
                <div class="max-w-[1024px] mx-auto mb-[80px]">             
                      <!-- <div class="w-[190px] h-[422px] border bg-sky-500 hidden rounded-tr-[22px] rounded-br-[22px]"></div> -->
                      <div class="max-w-[1024px] h-[422px] border rounded-[22px] bg-white p-[30px] relative mx-auto">
                      <!-- Modal toggle -->
                          <div class="block w-[50px] absolute right-0 bg-transparent  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5  text-center "data-modal-toggle="defaultModal">
                          <i class="fa-solid fa-gear text-cyan-400 "></i>
                          </div>

                          <!-- Main modal -->
                          <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden  overflow-auto fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                              <div class="relative p-4 w-full h-full md:h-auto overflow-auto">
                                  <!-- Modal content -->
                                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700  overflow-auto">
                                      <!-- Modal header -->
                                      <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                              Editor-testimonial
                                          </h3>
                                          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                                              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                              <span class="sr-only">Close modal</span>
                                          </button>
                                      </div>
                                      <!-- Modal body -->
                                  
                                      <div class="p-6 space-y-6 lg:flex scroll-auto overflow-auto">
                                            <div class="lg:w-[1024px] max-w-[1024px] h-[422px] border rounded-[22px] bg-white p-[30px] relative mx-auto">
                                              <div class=" font-medium text-[#ccc] flex justify-between w-full ">PRESSE </div>
                                              <div class=""><img src="https://i.pinimg.com/236x/c2/fc/c0/c2fcc0a977fd997263a9cd768c50578f.jpg" alt=""></div>
                                              <textarea class="h-2/5 text-[20px] italic bg-transparent border-0" name="description_testimonial" id="description-testimonial" rows="4"><?=$testimonial->description?></textarea>
                                  
                                              <input class="font-medium text-[18px] mt-5" name="testimonial_author" maxlength="255" id="testimonial-author" value="<?=$testimonial->testimonial_author?>">
                                              <div class="absolute bottom-[30px] flex justify-between w-11/12 text-[#ccc] text-[18px] ">  
                                              <input class="md:w-[600px]" name="testimonial_author_position" maxlength="255" id="testimonial-author-position" value="<?=$testimonial->testimonial_author_position?>">
                                              <a href="">Lire l’article</a> </div>
                                            </div>
                                            <div class="max-w-[400px] lg:w-[400px] border rounded-xl p-5 mx-auto">
                                              <h1 class="text-center mt-5 mb-5 text-[20px] font-extrabold hidden md:block bg-[#CCC] text-white">Themes</h1>
                                              <img src="<?=$testimonial->logo_url ?>" alt="" class="my-5 hidden md:block">
                                              <p class="font-bold">url-logo</p>
                                              <input type="text" name="logo_url" required="required" maxlength="255" id="logo-url" value="<?=$testimonial->logo_url ?>">
                                              <div class="input text required"><label for="testimonial-url">Testimonial Url</label><input type="text" name="testimonial_url" required="required" maxlength="255" id="testimonial-url" value="<?=$testimonial->testimonial_url?>"></div>

                                            </div>
                                        
                                      
                                      </div>
                                      <!-- Modal footer -->
                                      <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                          <button data-modal-toggle="defaultModal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                                          
                                      </div>
                                  </div>
                              </div>
                          </div>

                        <div class=" font-medium text-[#ccc] flex justify-between w-full ">PRESSE</div>
                        <div class=""><img src="https://i.pinimg.com/236x/c2/fc/c0/c2fcc0a977fd997263a9cd768c50578f.jpg" alt=""></div>
                        <div class=" h-2/5 text-[24px] italic font-mono font-[400] leading-[24px]"><?=$testimonial->description?></div>
                        <div class="font-medium text-[18px]"><?=$testimonial->testimonial_author?></div>
                        <div class="absolute bottom-[30px] flex justify-between w-11/12 text-[#ccc]  text-[18px]"><?=$testimonial->testimonial_author_position?> 
                        <a href="">Lire l’article</a> </div>
                      </div>
                      <!-- <div class="w-[190px] h-[422px] border bg-sky-500 hidden rounded-tl-[22px] rounded-bl-[22px]"></div> -->
                       
                       
               

                    </div> 
              </div>     
                 
                    <div class="w-full bg-[#041839] mx-auto ">
                      <div class="md:flex justify-center mb-[100px] pt-[100px]">
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
                            <p class="text-[#F1F6FA] max-w-[700px] text-center mx-auto mt-5">Plannings, budgets, calendriers… En un clin d'œil, vous avez une vision globale et stratégique de l'avancée de vos projets en temps réel !</p>
                            <div class=" bg-[#FFD051] rounded-full mt-5 h-[39px] max-w-[230px] mx-auto leading-[39px]">Présentation vidéo</div>
                          </div>
                          <div class="max-w-[1571px] mx-auto mt-[100px]">
                            <img src="../img/app.jpg" alt="" class="mx-auto">
                          </div>
  </div>       
                          
                            <h1 class="text-[40px] font-bold text-center mt-[100px] mb-[100px]">Vous êtes…</h1>
                            <div class=" md:flex gap-5 justify-center ">
                            <div class="text-center border rounded-lg h-[343px] p-3 max-w-[318px] flex flex-col justify-between">
                              <img src="../img/ZG_icon_home_entreprise@3x.png" alt="" class="w-[100px] mx-auto">
                              <h3 class="text-[#049BF7] text-[20px] font-bold">Une entreprise </h3>
                              <p>Jouez collectif : fédérez vos équipes autour  d'un objectif commun.</p>
                              <div class="text-white w-[230px] h-[39px] leading-[39px] text-center bg-[#049BF7] rounded-full mx-auto"><a href="">3,2,1… Go !</a></div>
                            </div>

                            <div class="text-center border rounded-lg h-[343px] p-3 max-w-[318px] flex flex-col justify-between">
                              <img src="../img/ZG_icon_home_collectivites@3x.png" alt="" class="w-[100px] mx-auto">
                              <h3 class="text-[#FF7D66] text-[20px] font-bold">Une collectivité </h3>
                              <p>Rassemblez les acteurs de votre projet via un logiciel commun !</p>
                              <div class="text-white w-[230px] h-[39px] leading-[39px] text-center bg-[#FF7D66] rounded-full mx-auto"><a href="">Découvrez comment</a></div>
                            </div>

                            <div class="text-center border rounded-lg h-[343px] p-3 max-w-[318px] flex flex-col justify-between">
                              <img src="../img/ZG_icon_home_promeneur@3x.png" alt="" class="w-[100px] mx-auto">
                              <h3 class="text-[20px] font-bold text-[#FFD051]">Un promeneur égaré </h3>
                              <p>Bienvenue !  Installez-vous et  laissez-vous guider.</p>
                              <div class="text-white w-[230px] h-[39px] leading-[39px] text-center bg-[#FFD051] rounded-full mx-auto"><a href="">Commençons par ici</a></div>
                            </div>

                          </div>

                        <div class="block right-5 z-10 cursor-pointer "> 
                        <select name="article_id" id="article-id" class="w-[350px] rounded-full text-center cursor-pointer">
                        <option value="<?= $visualeditor->article_id ?>">testimonial (<?= $visualeditor->article_id ?>)</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option> 
                        <option value="4">4</option>   
                      </select>
                      <button type="submit" ><i class="fa-solid fa-display"></i></button>
                  </div>
                              <h1 class="text-center text-[40px] font-bold mt-[200px]">Nos articles</h1>
                 
           
                              
<!-- Modal toggle -->
<div class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center w-[100px]"  data-modal-toggle="authentication-modal">
  article
</div>
<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
    <div class="relative p-4 w-full h-full md:h-auto flex justify-around">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 ">
        <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
           <h3 class="text-xl font-semibold text-gray-900 dark:text-white"> Editor-article </h3>
           <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
              </div>
            <div class="py-6 px-6 lg:px-8">
             
              <div class="max-w-[500px] h-[554px] border mx-auto rounded-lg relative p-5 ">
                <div class="  ">
                  <img src="../img/news3.jpg" alt="" class="mx-auto mb-5">

                  <textarea class="text-bold text-[24px] bg-transparent border-0 leading-[32px]" name="title_article" id="title-article" rows="3"><?=$article->title?></textarea>                        
                  <input class="text-[#FF7D66] bg-[#FF7D6626] mt-3 mb-3" name="category" maxlength="255" id="category" value="<?=$article->category?>">
                  <textarea class="bg-transparent border-0" name="description_article" id="description-article" rows="3"><?=$article->description?></textarea>
                 
                  <div class="border rounded-full w-[150px] h-[39px] leading-[39px] text-center mt-3 mb-3 absolute border-[#049BF7] bottom-0"><a class=" text-[#049BF7]" href="">Lire l’article</a></div>
               
                </div>
              
              </div> 
             
            </div>
              <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
               <button  type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
              </div>                            
              </div>
              <div class="w-[400px] h-full mx-auto border rounded-lg p-5 bg-white absolute right-5">
                <h3 class="text-[24px] font-semibold text-center bg-[#ccc]">Dashboard</h3>
               
    
                
                      <?php
                        // <input type="text">
                          echo $this->Form->control('user_id', ['options' => $users]);
                          // echo $this->Form->control('tags', ['options' => $tags]);
                      ?>

                   <h1 class="font-semibold mt-5 mb-5 ">img-url</h1>
                  <img src="../img/news3.jpg" alt="">
               
                  <input type="text" name="img_url" required="required" maxlength="255" id="img-url" value="<?= $article->img_url?>">
                  <h1 class="font-semibold mt-5 mb-5 ">article-url</h1>
                  <input type="text" name="article_url" required="required" maxlength="255" id="article-url" value="<?=$article->article_url?>">
                </div>
        
  </div>
                  </div>
                    
                <div class="max-w-[1024px] mx-auto ">
              
                
                
            
      
                
                        
                     <div class="md:flex h-[454px]">
                          <div class=" w-[318px] border rounded-[22px] mr-[30px] p-4">
                           <div class="max-w-[280px] mx-auto"><img src="<?= $article1[0]['img_url']?>" alt="" class=" w-full max-h-[126px] "></div>
                            <h1 class="text-[24px] font-bold"><?= $article1[0]['title']?></h1>
                            <p class="text-[13px] font-sans text-[#FF7D66] "><?= $article1[0]['category']?></p>
                            <p class="line-article"><?= $article1[0]['description']?></p>
                            <div class=""><a href="">Lire l’article</a></div>
                          </div>
                          <div class="w-[676px] border rounded-[22px] flex">
                            <div class="">
                            <img src="<?= $article1[1]['img_url']?>" alt=""></div>
                            <div class="">
                            <h1><?= $article1[1]['title']?>;</h1>
                            <p class="text-[13px] font-sans text-[#4CC6A0] "><?= $article1[1]['category']?></p>
                            <p class="text-[13px] font-sans"><?= $article1[1]['description']?></p>
                            <div class=""><a href="">Lire l’article</a></div>
                          </div>
                          </div>
                    </div>

                          <div class="">
                              <h1><?= $article1[2]['title']?>;</h1>
                              <p class="text-[13px] font-sans text-[#1C9DF4] ]"><?= $article1[2]['category']?></p>
                              <p class="text-[13px] font-sans"><?= $article1[2]['description']?></p>
                              <div class=""><a href=""></a></div>
                          </div>
                        <div class="">
                      
                          <h1><?= $article1[3]['title']?>;</h1>
                          <p class="text-[13px] font-sans text-[#EAAB00] ]"><?= $article1[3]['category']?></p>
                          <p class="text-[13px] font-sans"> <?= $article1[3]['description']?></p>
                          <div class=""><a href="">Lire l’article</a></div>
                         </div>
                      
                </div>



  </div>
   
<?= $this->Form->end() ?> 
</body>
</html>


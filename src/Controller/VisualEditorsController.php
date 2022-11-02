<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Filesystem\File;
use Cake\Filesystem\Folder;

/**
 * Banners Controller
 *
 * @property \App\Model\Table\BannersTable $Banners
 *
 * @method \App\Model\Entity\Banner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VisualEditorsController extends AppController
{
    public $banner_path = '/userfiles/banners/';
    public function isAuthorized($user)
    {
        return parent::isAuthorized($user);
    }
    public function initialize()
    {
        $this->loadModel('Banners');
        $this->loadModel('Testimonials');
        $this->loadModel('Articles');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function view()
    {
        $banner = $this->Banners->find('all', ['limit' => 100 ])->first();
            $this->paginate = ['contain' => ['Users'],];
        $banners = $this->paginate($this->Banners);       
        $testimonials = $this->Testimonials->find('all', [
            'limit' => 3])->all();

        $Articles = $this->Articles->find('all',[
            'limit'=>4,
            'order'=> 'rand()',
        ])->all();

        $this->set(compact('banner','testimonials','Articles','banners'));

        $testimonial = $this->Testimonials->get($pres[0]['id'], [
            'finder' => 'translations',
                                        ]);
        $article = $this->Articles->get($article[3]['id_article'], [
            'finder' => 'translations',
                                        ]);
        $banner = $this->Banners->get($post->article2, [
            'finder' => 'translations',
                                        ]);

        $post = $this->Posts->get($post['id_posts']);

            // DATA PRESS
     if ($this->request->is(['post', 'put'])) {

          $this->Testimonials->patchEntity($testimonial, $this->request->getData());    
           $this->Banners->patchEntity($banner, $this->request->getData());
           $this->Articles->patchEntity($article1,$this->request->getData() );
           $this->Bars->patchEntity($bar, $this->request->getData());
           $this->Posts->patchEntity($post, $this->request->getData());  
         if ($this->Testimonials->save($testimonial)  && $this->Banners->save($banner)
             && $this->Articles->save($article) && $this->Posts->save($post)) {
             $this->Flash->success(__('Your banner has been updated.'));
             return $this->redirect(['action' => 'home']);
         }
         $this->Flash->error(__('Unable to update your banner.'));
     }


            $this->set('banner', $banner);
            $this->set('testimonial', $testimonial);      
            $this->set('article', $article);
            $this->set('post', $post);

       


    }

    /**
     * View method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function index($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('banner', $banner);
       
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $banner = $this->Banners->newEntity();
        if ($this->request->is('post')) {
            $banner = $this->Banners->patchEntity($banner,  $this->request->getData());
            if(!$banner->getErrors()){
                $image = $this->request->getUploadedFile('image_url');
                $name = $image->getClientFilename();
                
                $bannersPath = USERFILES. 'banners';
                $targetPath = $bannersPath . DS . $name;

                $forderUserfiles = new Folder(USERFILES, true, 0775);
                $folderBanners = new Folder($bannersPath, true, 0775);
                
                $image->moveTo($targetPath);        
                $banner->image_url = $this->banner_path.$name;

                if ($this->Banners->save($banner)) {
                    $this->Flash->success(__("The {0} has been saved.", 'banner'));
                    return $this->redirect(['action' => 'index']);
                }
                
            }
            // debug($banner->getErrors); exit;
            // if ($this->Banners->save($banner)) {
            //     $this->Flash->success(__('The banner has been saved.'));

            //     return $this->redirect(['action' => 'index']);
            // }
            $this->Flash->error( __('The {0} could not be saved. Please, try again.', 'banner'));
        }
        $users = $this->Banners->Users->find('list', ['limit' => 200]);
        $this->set(compact('banner', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $banner = $this->Banners->patchEntity($banner, $this->request->getData());
            
            if(!$banner->getErrors()){
                $image = $this->request->getUploadedFile('image_url');
                $name = $image->getClientFilename();
                
                $bannersPath = USERFILES. 'banners';
                $targetPath = $bannersPath . DS . $name;

                $forderUserfiles = new Folder(USERFILES, true, 0775);
                $folderBanners = new Folder($bannersPath, true, 0775);
                
                $image->moveTo($targetPath);        
                $banner->image_url = $this->banner_path.$name;

                if ($this->Banners->save($banner)) {
                    $this->Flash->success(__('The banner has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
            }
            $this->Flash->error(__('The banner could not be saved. Please, try again.'));
        }
        $users = $this->Banners->Users->find('list', ['limit' => 200]);
        $this->set(compact('banner', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $banner = $this->Banners->get($id);
        if ($this->Banners->delete($banner)) {
            $this->Flash->success(__('The banner has been deleted.'));
        } else {
            $this->Flash->error(__('The banner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

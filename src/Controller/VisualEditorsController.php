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
        parent::initialize();
        $this->loadComponent('Flash');
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
        // $banners = $this->paginate($this->Banners);
        // $this->set(compact('banners'));     
        $visualeditor = $this->VisualEditors->get(1); 
        $this->set('visualeditor', $visualeditor);      
        $banner = $this->Banners->get($visualeditor->banner_id, ['contain' => [],]);
        $testimonial = $this->Testimonials->get($visualeditor->testimonials_id, ['contain' => [],]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $banner = $this->Banners->patchEntity($banner, $this->request->getData());
            $testimonial = $this->Testimonials->patchEntity($testimonial, $this->request->getData());
            $visualeditor = $this->VisualEditors->patchEntity($visualeditor, $this->request->getData());

            if ($this->Banners->save($banner) && $this->VisualEditors->save($visualeditor) 
                && $this->Testimonials->save($testimonial)) {
                $this->Flash->success(__('The banner has been saved.'));

                return $this->redirect(['action' => 'view']);
            } 
            $this->Flash->error(__('The banner could not be saved. Please, try again.'));
        }
        $users = $this->Banners->Users->find('list', ['limit' => 200]);
        $this->set(compact('banner', 'users', 'testimonial'));
        // $this->set(compact('visualeditors'));
       

    }
}
   
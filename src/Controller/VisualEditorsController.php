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
        $query = $this->Articles->find('all', ['order'=> 'rand()','limit'=>4, ]);
        $query->enableHydration(false); 
        $article1 = $query->toList(); 
            $this->set(compact('article1')); 
        $visualeditor = $this->VisualEditors->get(1); 
        $this->set('visualeditor', $visualeditor);      
        $banner = $this->Banners->get($visualeditor->banner_id, ['contain' => [],]);
        $testimonial = $this->Testimonials->get($visualeditor->testimonials_id, ['contain' => [],]);
        $article = $this->Articles->get($visualeditor->article_id, ['contain' => ['Tags'],]);
        $data = [
            'logo_url' => $this->request->getData('logo_url'),
            'description' => $this->request->getData('description_testimonial'),
            'testimonial_author' => $this->request->getData('testimonial_author'),
            'testimonial_author_position' => $this->request->getData('testimonial_author_position'),
            'testimonial_url' => $this->request->getData('testimonial_url'),
         ];
         $data2 = [
            'img_url' => $this->request->getData('img_url'),
            'title' => $this->request->getData('title_article'),
            'category' => $this->request->getData('category'),
            'description' => $this->request->getData('description_article'),
            'article_url' => $this->request->getData('article_url'),
         ];
       

        if ($this->request->is(['patch', 'post', 'put'])) {
            $banner = $this->Banners->patchEntity($banner, $this->request->getData());
            $testimonial = $this->Testimonials->patchEntity($testimonial, $data);
            $article = $this->Articles->patchEntity($article, $data2);
            $visualeditor = $this->VisualEditors->patchEntity($visualeditor, $this->request->getData());

            if ($this->Banners->save($banner) && $this->VisualEditors->save($visualeditor) 
                && $this->Testimonials->save($testimonial) && $this->Articles->save($article)) {
                $this->Flash->success(__('The banner has been saved.'));

                return $this->redirect(['action' => 'view']);
            } 
            $this->Flash->error(__('The banner could not be saved. Please, try again.'));
        }
        $users = $this->Banners->Users->find('list', ['limit' => 200]);
        $this->set(compact('banner', 'users', 'testimonial', 'article'));
     
        // $this->set(compact('visualeditors'));
       

    }
}
   
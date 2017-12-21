<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Schools Controller
 *
 * @property \App\Model\Table\SchoolsTable $Schools
 *
 * @method \App\Model\Entity\School[] paginate($object = null, array $settings = [])
 */
class SchoolsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $schools = $this->paginate($this->Schools);

        $this->set(compact('schools'));
        $this->set('_serialize', ['schools']);
    }
    
    public function indexJson()
    {
        $schools = $this->Schools->find('all',[
            'conditions'=> [],
            //'limit '=>1,
            //'offset'=>[],
            'contain'=>['Users'],
            //'fields '=>[],
            //'group'=>[],
            //'having'=>[],
            //'join'=>[],
            'order'=>['Schools.id'=>'ASC']
        ]);
        $this->set('schools',$schools);
        $this->set('_serialize',['schools']);
    }

    /**
     * View method
     *
     * @param string|null $id School id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $school = $this->Schools->get($id, [
            'contain' => ['Levels', 'LevelsUsers', 'SchoolYears', 'Users']
        ]);

        $this->set('school', $school);
        $this->set('_serialize', ['school']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $school = $this->Schools->newEntity();
        if ($this->request->is('post')) {
            $school = $this->Schools->patchEntity($school, $this->request->getData());
            if ($this->Schools->save($school)) {
                $this->Flash->success(__('The school has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The school could not be saved. Please, try again.'));
        }
        $this->set(compact('school'));
        $this->set('_serialize', ['school']);
    }

    /**
     * Edit method
     *
     * @param string|null $id School id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $school = $this->Schools->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $school = $this->Schools->patchEntity($school, $this->request->getData());
            if ($this->Schools->save($school)) {
                $this->Flash->success(__('The school has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The school could not be saved. Please, try again.'));
        }
        $this->set(compact('school'));
        $this->set('_serialize', ['school']);
    }

    /**
     * Delete method
     *
     * @param string|null $id School id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $school = $this->Schools->get($id);
        if ($this->Schools->delete($school)) {
            $this->Flash->success(__('The school has been deleted.'));
        } else {
            $this->Flash->error(__('The school could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StudentLevels Controller
 *
 * @property \App\Model\Table\StudentLevelsTable $StudentLevels
 *
 * @method \App\Model\Entity\StudentLevel[] paginate($object = null, array $settings = [])
 */
class StudentLevelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Levels', 'Students']
        ];
        $studentLevels = $this->paginate($this->StudentLevels);

        $this->set(compact('studentLevels'));
        $this->set('_serialize', ['studentLevels']);
    }

    /**
     * View method
     *
     * @param string|null $id Student Level id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $studentLevel = $this->StudentLevels->get($id, [
            'contain' => ['Levels', 'Students']
        ]);

        $this->set('studentLevel', $studentLevel);
        $this->set('_serialize', ['studentLevel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $studentLevel = $this->StudentLevels->newEntity();
        if ($this->request->is('post')) {
            $studentLevel = $this->StudentLevels->patchEntity($studentLevel, $this->request->getData());
            if ($this->StudentLevels->save($studentLevel)) {
                $this->Flash->success(__('The student level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student level could not be saved. Please, try again.'));
        }
        $levels = $this->StudentLevels->Levels->find('list', ['limit' => 200]);
        $students = $this->StudentLevels->Students->find('list', ['limit' => 200]);
        $this->set(compact('studentLevel', 'levels', 'students'));
        $this->set('_serialize', ['studentLevel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Student Level id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $studentLevel = $this->StudentLevels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $studentLevel = $this->StudentLevels->patchEntity($studentLevel, $this->request->getData());
            if ($this->StudentLevels->save($studentLevel)) {
                $this->Flash->success(__('The student level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student level could not be saved. Please, try again.'));
        }
        $levels = $this->StudentLevels->Levels->find('list', ['limit' => 200]);
        $students = $this->StudentLevels->Students->find('list', ['limit' => 200]);
        $this->set(compact('studentLevel', 'levels', 'students'));
        $this->set('_serialize', ['studentLevel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Student Level id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $studentLevel = $this->StudentLevels->get($id);
        if ($this->StudentLevels->delete($studentLevel)) {
            $this->Flash->success(__('The student level has been deleted.'));
        } else {
            $this->Flash->error(__('The student level could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

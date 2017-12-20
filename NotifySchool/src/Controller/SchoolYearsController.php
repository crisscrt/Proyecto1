<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SchoolYears Controller
 *
 * @property \App\Model\Table\SchoolYearsTable $SchoolYears
 *
 * @method \App\Model\Entity\SchoolYear[] paginate($object = null, array $settings = [])
 */
class SchoolYearsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Schools', 'Users']
        ];
        $schoolYears = $this->paginate($this->SchoolYears);

        $this->set(compact('schoolYears'));
        $this->set('_serialize', ['schoolYears']);
    }

    /**
     * View method
     *
     * @param string|null $id School Year id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schoolYear = $this->SchoolYears->get($id, [
            'contain' => ['Schools', 'Users']
        ]);

        $this->set('schoolYear', $schoolYear);
        $this->set('_serialize', ['schoolYear']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schoolYear = $this->SchoolYears->newEntity();
        if ($this->request->is('post')) {
            $schoolYear = $this->SchoolYears->patchEntity($schoolYear, $this->request->getData());
            if ($this->SchoolYears->save($schoolYear)) {
                $this->Flash->success(__('The school year has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The school year could not be saved. Please, try again.'));
        }
        $schools = $this->SchoolYears->Schools->find('list', ['limit' => 200]);
        $users = $this->SchoolYears->Users->find('list', ['limit' => 200]);
        $this->set(compact('schoolYear', 'schools', 'users'));
        $this->set('_serialize', ['schoolYear']);
    }

    /**
     * Edit method
     *
     * @param string|null $id School Year id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $schoolYear = $this->SchoolYears->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schoolYear = $this->SchoolYears->patchEntity($schoolYear, $this->request->getData());
            if ($this->SchoolYears->save($schoolYear)) {
                $this->Flash->success(__('The school year has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The school year could not be saved. Please, try again.'));
        }
        $schools = $this->SchoolYears->Schools->find('list', ['limit' => 200]);
        $users = $this->SchoolYears->Users->find('list', ['limit' => 200]);
        $this->set(compact('schoolYear', 'schools', 'users'));
        $this->set('_serialize', ['schoolYear']);
    }

    /**
     * Delete method
     *
     * @param string|null $id School Year id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $schoolYear = $this->SchoolYears->get($id);
        if ($this->SchoolYears->delete($schoolYear)) {
            $this->Flash->success(__('The school year has been deleted.'));
        } else {
            $this->Flash->error(__('The school year could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

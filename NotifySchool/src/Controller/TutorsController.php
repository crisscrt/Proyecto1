<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tutors Controller
 *
 * @property \App\Model\Table\TutorsTable $Tutors
 *
 * @method \App\Model\Entity\Tutor[] paginate($object = null, array $settings = [])
 */
class TutorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Levels', 'SchoolYears']
        ];
        $tutors = $this->paginate($this->Tutors);

        $this->set(compact('tutors'));
        $this->set('_serialize', ['tutors']);
    }

    /**
     * View method
     *
     * @param string|null $id Tutor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tutor = $this->Tutors->get($id, [
            'contain' => ['Users', 'Levels', 'SchoolYears']
        ]);

        $this->set('tutor', $tutor);
        $this->set('_serialize', ['tutor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tutor = $this->Tutors->newEntity();
        if ($this->request->is('post')) {
            $tutor = $this->Tutors->patchEntity($tutor, $this->request->getData());
            if ($this->Tutors->save($tutor)) {
                $this->Flash->success(__('The tutor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tutor could not be saved. Please, try again.'));
        }
        $users = $this->Tutors->Users->find('list', ['limit' => 200]);
        $levels = $this->Tutors->Levels->find('list', ['limit' => 200]);
        $schoolYears = $this->Tutors->SchoolYears->find('list', ['limit' => 200]);
        $this->set(compact('tutor', 'users', 'levels', 'schoolYears'));
        $this->set('_serialize', ['tutor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tutor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tutor = $this->Tutors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tutor = $this->Tutors->patchEntity($tutor, $this->request->getData());
            if ($this->Tutors->save($tutor)) {
                $this->Flash->success(__('The tutor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tutor could not be saved. Please, try again.'));
        }
        $users = $this->Tutors->Users->find('list', ['limit' => 200]);
        $levels = $this->Tutors->Levels->find('list', ['limit' => 200]);
        $schoolYears = $this->Tutors->SchoolYears->find('list', ['limit' => 200]);
        $this->set(compact('tutor', 'users', 'levels', 'schoolYears'));
        $this->set('_serialize', ['tutor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tutor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tutor = $this->Tutors->get($id);
        if ($this->Tutors->delete($tutor)) {
            $this->Flash->success(__('The tutor has been deleted.'));
        } else {
            $this->Flash->error(__('The tutor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

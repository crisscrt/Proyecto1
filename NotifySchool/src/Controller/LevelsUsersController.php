<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LevelsUsers Controller
 *
 * @property \App\Model\Table\LevelsUsersTable $LevelsUsers
 *
 * @method \App\Model\Entity\LevelsUser[] paginate($object = null, array $settings = [])
 */
class LevelsUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Schedules', 'Schools', 'Levels']
        ];
        $levelsUsers = $this->paginate($this->LevelsUsers);

        $this->set(compact('levelsUsers'));
        $this->set('_serialize', ['levelsUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Levels User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $levelsUser = $this->LevelsUsers->get($id, [
            'contain' => ['Users', 'Schedules', 'Schools', 'Levels']
        ]);

        $this->set('levelsUser', $levelsUser);
        $this->set('_serialize', ['levelsUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $levelsUser = $this->LevelsUsers->newEntity();
        if ($this->request->is('post')) {
            $levelsUser = $this->LevelsUsers->patchEntity($levelsUser, $this->request->getData());
            if ($this->LevelsUsers->save($levelsUser)) {
                $this->Flash->success(__('The levels user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The levels user could not be saved. Please, try again.'));
        }
        $users = $this->LevelsUsers->Users->find('list', ['limit' => 200]);
        $schedules = $this->LevelsUsers->Schedules->find('list', ['limit' => 200]);
        $schools = $this->LevelsUsers->Schools->find('list', ['limit' => 200]);
        $levels = $this->LevelsUsers->Levels->find('list', ['limit' => 200]);
        $this->set(compact('levelsUser', 'users', 'schedules', 'schools', 'levels'));
        $this->set('_serialize', ['levelsUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Levels User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $levelsUser = $this->LevelsUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $levelsUser = $this->LevelsUsers->patchEntity($levelsUser, $this->request->getData());
            if ($this->LevelsUsers->save($levelsUser)) {
                $this->Flash->success(__('The levels user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The levels user could not be saved. Please, try again.'));
        }
        $users = $this->LevelsUsers->Users->find('list', ['limit' => 200]);
        $schedules = $this->LevelsUsers->Schedules->find('list', ['limit' => 200]);
        $schools = $this->LevelsUsers->Schools->find('list', ['limit' => 200]);
        $levels = $this->LevelsUsers->Levels->find('list', ['limit' => 200]);
        $this->set(compact('levelsUser', 'users', 'schedules', 'schools', 'levels'));
        $this->set('_serialize', ['levelsUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Levels User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $levelsUser = $this->LevelsUsers->get($id);
        if ($this->LevelsUsers->delete($levelsUser)) {
            $this->Flash->success(__('The levels user has been deleted.'));
        } else {
            $this->Flash->error(__('The levels user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

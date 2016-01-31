<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RolesUsuarios Controller
 *
 * @property \App\Model\Table\RolesUsuariosTable $RolesUsuarios
 */
class RolesUsuariosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('rolesUsuarios', $this->paginate($this->RolesUsuarios));
        $this->set('_serialize', ['rolesUsuarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Roles Usuario id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rolesUsuario = $this->RolesUsuarios->get($id, [
            'contain' => []
        ]);
        $this->set('rolesUsuario', $rolesUsuario);
        $this->set('_serialize', ['rolesUsuario']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rolesUsuario = $this->RolesUsuarios->newEntity();
        if ($this->request->is('post')) {
            $rolesUsuario = $this->RolesUsuarios->patchEntity($rolesUsuario, $this->request->data);
            if ($this->RolesUsuarios->save($rolesUsuario)) {
                $this->Flash->success(__('The roles usuario has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The roles usuario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('rolesUsuario'));
        $this->set('_serialize', ['rolesUsuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Roles Usuario id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rolesUsuario = $this->RolesUsuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rolesUsuario = $this->RolesUsuarios->patchEntity($rolesUsuario, $this->request->data);
            if ($this->RolesUsuarios->save($rolesUsuario)) {
                $this->Flash->success(__('The roles usuario has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The roles usuario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('rolesUsuario'));
        $this->set('_serialize', ['rolesUsuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Roles Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rolesUsuario = $this->RolesUsuarios->get($id);
        if ($this->RolesUsuarios->delete($rolesUsuario)) {
            $this->Flash->success(__('The roles usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The roles usuario could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

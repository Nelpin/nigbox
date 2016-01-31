<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PermisosUsuarios Controller
 *
 * @property \App\Model\Table\PermisosUsuariosTable $PermisosUsuarios
 */
class PermisosUsuariosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('permisosUsuarios', $this->paginate($this->PermisosUsuarios));
        $this->set('_serialize', ['permisosUsuarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Permisos Usuario id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $permisosUsuario = $this->PermisosUsuarios->get($id, [
            'contain' => []
        ]);
        $this->set('permisosUsuario', $permisosUsuario);
        $this->set('_serialize', ['permisosUsuario']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $permisosUsuario = $this->PermisosUsuarios->newEntity();
        if ($this->request->is('post')) {
            $permisosUsuario = $this->PermisosUsuarios->patchEntity($permisosUsuario, $this->request->data);
            if ($this->PermisosUsuarios->save($permisosUsuario)) {
                $this->Flash->success(__('The permisos usuario has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The permisos usuario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('permisosUsuario'));
        $this->set('_serialize', ['permisosUsuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Permisos Usuario id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $permisosUsuario = $this->PermisosUsuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $permisosUsuario = $this->PermisosUsuarios->patchEntity($permisosUsuario, $this->request->data);
            if ($this->PermisosUsuarios->save($permisosUsuario)) {
                $this->Flash->success(__('The permisos usuario has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The permisos usuario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('permisosUsuario'));
        $this->set('_serialize', ['permisosUsuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Permisos Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $permisosUsuario = $this->PermisosUsuarios->get($id);
        if ($this->PermisosUsuarios->delete($permisosUsuario)) {
            $this->Flash->success(__('The permisos usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The permisos usuario could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

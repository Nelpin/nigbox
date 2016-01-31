<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PermisosRoles Controller
 *
 * @property \App\Model\Table\PermisosRolesTable $PermisosRoles
 */
class PermisosRolesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('permisosRoles', $this->paginate($this->PermisosRoles));
        $this->set('_serialize', ['permisosRoles']);
    }

    /**
     * View method
     *
     * @param string|null $id Permisos Role id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $permisosRole = $this->PermisosRoles->get($id, [
            'contain' => []
        ]);
        $this->set('permisosRole', $permisosRole);
        $this->set('_serialize', ['permisosRole']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $permisosRole = $this->PermisosRoles->newEntity();
        if ($this->request->is('post')) {
            $permisosRole = $this->PermisosRoles->patchEntity($permisosRole, $this->request->data);
            if ($this->PermisosRoles->save($permisosRole)) {
                $this->Flash->success(__('The permisos role has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The permisos role could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('permisosRole'));
        $this->set('_serialize', ['permisosRole']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Permisos Role id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $permisosRole = $this->PermisosRoles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $permisosRole = $this->PermisosRoles->patchEntity($permisosRole, $this->request->data);
            if ($this->PermisosRoles->save($permisosRole)) {
                $this->Flash->success(__('The permisos role has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The permisos role could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('permisosRole'));
        $this->set('_serialize', ['permisosRole']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Permisos Role id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $permisosRole = $this->PermisosRoles->get($id);
        if ($this->PermisosRoles->delete($permisosRole)) {
            $this->Flash->success(__('The permisos role has been deleted.'));
        } else {
            $this->Flash->error(__('The permisos role could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

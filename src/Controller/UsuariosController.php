<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 */
use TipoDocumentos; 
class UsuariosController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('usuarios', $this->paginate($this->Usuarios));
        $this->set('_serialize', ['usuarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => ['Permisos', 'Roles']
        ]);
        $this->set('usuario', $usuario);
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuario = $this->Usuarios->newEntity();
        if ($this->request->is('post')) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('Su registro ha sido exitoso'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('No se ha podido guardar el registro, intente nuevamente.'));
            }
        }
        $TipoDocs = $this->Usuarios->tipo_documentos->find('list',
            array('fields' => 
                array('tipo_documentos.id_documento','tipo_documentos.documento'),
                    'conditions' =>  array('tipo_documentos.id_documento')
                )
            );
        $permisos = $this->Usuarios->Permisos->find('list', ['limit' => 200]);
        $roles = $this->Usuarios->Roles->find('list', ['limit' => 200]);
        $this->set(compact('usuario', 'permisos', 'roles','TipoDocs'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => ['Permisos', 'Roles']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
            }
        }
        $permisos = $this->Usuarios->Permisos->find('list', ['limit' => 200]);
        $roles = $this->Usuarios->Roles->find('list', ['limit' => 200]);
        $this->set(compact('usuario', 'permisos', 'roles'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuarios->get($id);
        if ($this->Usuarios->delete($usuario)) {
            $this->Flash->success(__('The usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The usuario could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function inicio()
    {
        $usuario = $this->Usuarios->newEntity();
        if ($this->request->is('post')) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
            }
        }
        $TipoDocs = $this->Usuarios->tipo_documentos->find('list',
            array(
                    'fields' =>  array('tipo_documentos.id_documento','tipo_documentos.documento'),
                    'conditions' =>  array('tipo_documentos.id_documento')
                )
            );        
        $this->set(compact('usuario', 'TipoDocs'));
        $this->set('_serialize', ['usuario']);
    }
}

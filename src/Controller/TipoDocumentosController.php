<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TipoDocumentos Controller
 *
 * @property \App\Model\Table\TipoDocumentosTable $TipoDocumentos
 */
class TipoDocumentosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('tipoDocumentos', $this->paginate($this->TipoDocumentos));
        $this->set('_serialize', ['tipoDocumentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Documento id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoDocumento = $this->TipoDocumentos->get($id, [
            'contain' => []
        ]);
        $this->set('tipoDocumento', $tipoDocumento);
        $this->set('_serialize', ['tipoDocumento']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoDocumento = $this->TipoDocumentos->newEntity();
        if ($this->request->is('post')) {
            $tipoDocumento = $this->TipoDocumentos->patchEntity($tipoDocumento, $this->request->data);
            if ($this->TipoDocumentos->save($tipoDocumento)) {
                $this->Flash->success(__('The tipo documento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipo documento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tipoDocumento'));
        $this->set('_serialize', ['tipoDocumento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Documento id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoDocumento = $this->TipoDocumentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoDocumento = $this->TipoDocumentos->patchEntity($tipoDocumento, $this->request->data);
            if ($this->TipoDocumentos->save($tipoDocumento)) {
                $this->Flash->success(__('The tipo documento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipo documento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tipoDocumento'));
        $this->set('_serialize', ['tipoDocumento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Documento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoDocumento = $this->TipoDocumentos->get($id);
        if ($this->TipoDocumentos->delete($tipoDocumento)) {
            $this->Flash->success(__('The tipo documento has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo documento could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

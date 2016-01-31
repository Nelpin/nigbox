<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles', 'Permisos']
        ];
        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuario = $this->Users->get($id, [
            'contain' => ['Permisos', 'Roles']
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {

            $permisos = [
                'id_permiso' => 3,
                'permiso' => 'Editar Posts',
                'key' => 'Editar Posts',
                'create_at' => '"2016-01-31 01:06:23"',
                'update_at' => '"2016-01-31 01:06:23"',
            ];
            $roles = [
                'id_role' => 4,
                'role' => 'Registrado'
            ];
            $user = $this->Users->patchEntity($user, $this->request->data, ['associated' => ['permisos.usuario','roles']]);            
           /* $user['estado']=0;
            $user['tipo_documento']=1;
            $user['fecha_inicio']=date('Y-m-d H:i:s');
            $user['fecha_nacimiento']=date('Y-m-d'); */

            $user['tipo_documento']=1;
            $user['numero_documento']='13741070'; 
            $user['primer_nombre']="Nelson"; 
            $user['segundo_nombre']=''; 
            $user['primer_apellido']='Pinto'; 
            $user['segundo_apellido']='Chacón'; 
            $user['genero']='1';
            $user['usuario']='nelpin'; 
            $user['pass']='123';
            $user['email']="nlsnpnto@gmail.com"; 
            $user['telefono']="3156353020"; 
            $user['id_ciudad']=199567;
            $user['direccion']="Calle 27#11-127";
            $user['fecha_nacimiento']="2016-01-31"; 
            $user['foto']="asdasdsasa"; 
            $user['estado']=0;
            $user['fecha_inicio']="2016-01-31 01:06:23";
            $user['codigo']="11";
            $user['create_at']="2016-01-31 01:06:23";
            $user['update_at']="2016-01-31 01:06:23";

           


           /* $user['permiso'][1]=1;
            $user['id_role'][1]=4;
            */
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__($user));
            }
        }

        $TipoDocs = $this->Users->tipo_documentos->find('list',
            array('fields' => 
                array('tipo_documentos.id_documento','tipo_documentos.documento'),
                    'conditions' =>  array('tipo_documentos.id_documento')
                )
            );
        $permisos = $this->Users->Permisos->find('list', ['limit' => 200]);
        $ciudades = $this->Users->Ciudades->find('list',
            array('fields' => 
                array('Ciudades.idCiudades','Ciudades.Ciudad'),
                    'conditions' =>  array('Ciudades.Paises_Codigo ='=>'CO'),
                    'order' => ['Ciudades.Ciudad' => 'ASC']
                )
            );
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'permisos', 'roles','TipoDocs','ciudades'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $permisos = $this->Users->Permisos->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'permisos', 'roles','TipoDocs'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function registro()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            $user['tipo_documento']=0;
            $user['numero_documento']=0;
            $user['id_ciudad']=1;
            $user['usuario']=$user['email'];

            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }

        $TipoDocs = $this->Users->tipo_documentos->find('list',
            array('fields' => 
                array('tipo_documentos.id_documento','tipo_documentos.documento'),
                    'conditions' =>  array('tipo_documentos.id_documento')
                )
            );
        $permisos = $this->Users->Permisos->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'permisos', 'roles','TipoDocs'));
        $this->set('_serialize', ['user']);
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user=$this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            //-----------Usuario no identificado.
            $this->Flash->error(__('Usuario no identificado'));
        }
        
    }
    public function logout()
    {
        $this->Flash->success(__('No esta logeado.'));
        return $this->redirect($this->Auth->logout());
    }
}

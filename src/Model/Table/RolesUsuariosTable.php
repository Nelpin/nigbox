<?php
namespace App\Model\Table;

use App\Model\Entity\RolesUsuario;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RolesUsuarios Model
 *
 */
class RolesUsuariosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('roles_usuarios');

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id_rol', 'valid', ['rule' => 'numeric'])
            ->requirePresence('id_rol', 'create')
            ->notEmpty('id_rol');

        $validator
            ->add('id_usuario', 'valid', ['rule' => 'numeric'])
            ->requirePresence('id_usuario', 'create')
            ->notEmpty('id_usuario');

        $validator
            ->add('create_at', 'valid', ['rule' => 'datetime'])
            ->requirePresence('create_at', 'create')
            ->notEmpty('create_at');

        $validator
            ->add('update_at', 'valid', ['rule' => 'datetime'])
            ->requirePresence('update_at', 'create')
            ->notEmpty('update_at');

        return $validator;
    }
}

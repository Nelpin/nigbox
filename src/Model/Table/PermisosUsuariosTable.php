<?php
namespace App\Model\Table;

use App\Model\Entity\PermisosUsuario;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PermisosUsuarios Model
 *
 */
class PermisosUsuariosTable extends Table
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

        $this->table('permisos_usuarios');

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
            ->add('usuario', 'valid', ['rule' => 'numeric'])
            ->requirePresence('usuario', 'create')
            ->notEmpty('usuario');

        $validator
            ->add('permiso', 'valid', ['rule' => 'numeric'])
            ->requirePresence('permiso', 'create')
            ->notEmpty('permiso');

        $validator
            ->add('valor', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('valor');

        return $validator;
    }
}

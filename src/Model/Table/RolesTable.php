<?php
namespace App\Model\Table;

use App\Model\Entity\Role;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Roles Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Permisos
 * @property \Cake\ORM\Association\BelongsToMany $Usuarios
 */
class RolesTable extends Table
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

        $this->table('roles');
        $this->displayField('id_role');
        $this->primaryKey('id_role');

        $this->belongsToMany('Permisos', [
            'foreignKey' => 'role_id',
            'targetForeignKey' => 'permiso_id',
            'joinTable' => 'permisos_roles'
        ]);
        $this->belongsToMany('Usuarios', [
            'foreignKey' => 'role_id',
            'targetForeignKey' => 'usuario_id',
            'joinTable' => 'roles_usuarios'
        ]);
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
            ->add('id_role', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_role', 'create');

        $validator
            ->requirePresence('role', 'create')
            ->notEmpty('role');

        return $validator;
    }
}

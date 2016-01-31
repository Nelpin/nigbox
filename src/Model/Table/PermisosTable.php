<?php
namespace App\Model\Table;

use App\Model\Entity\Permiso;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Permisos Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Roles
 * @property \Cake\ORM\Association\BelongsToMany $Usuarios
 */
class PermisosTable extends Table
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

        $this->table('permisos');
        $this->displayField('id_permiso');
        $this->primaryKey('id_permiso');

        $this->belongsToMany('Roles', [
            'foreignKey' => 'permiso_id',
            'targetForeignKey' => 'role_id',
            'joinTable' => 'permisos_roles'
        ]);
        $this->belongsToMany('Usuarios', [
            'foreignKey' => 'permiso_id',
            'targetForeignKey' => 'usuario_id',
            'joinTable' => 'permisos_usuarios'
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
            ->add('id_permiso', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_permiso', 'create');

        $validator
            ->requirePresence('permiso', 'create')
            ->notEmpty('permiso');

        $validator
            ->requirePresence('key', 'create')
            ->notEmpty('key');

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

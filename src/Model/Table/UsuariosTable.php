<?php
namespace App\Model\Table;

use App\Model\Entity\Usuario;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Permisos
 * @property \Cake\ORM\Association\BelongsToMany $Roles
 */
class UsuariosTable extends Table
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

        $this->table('usuarios');
        $this->displayField('id');
        $this->primaryKey('id');

        //$this->hasOne('tipo_documentos');


        $this->hasOne('tipo_documentos', [
            'foreignKey' => 'usuario_id',
            'targetForeignKey' => 'documento_id',
            'joinTable' => 'tipo_documentos'
        ]);
        $this->belongsToMany('Permisos', [
            'foreignKey' => 'usuario_id',
            'targetForeignKey' => 'permiso_id',
            'joinTable' => 'permisos_usuarios'
        ]);
        $this->belongsToMany('Roles', [
            'foreignKey' => 'usuario_id',
            'targetForeignKey' => 'role_id',
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->add('tipo_documento', 'valid', ['rule' => 'numeric'])
            ->requirePresence('tipo_documento', 'create')
            ->notEmpty('tipo_documento');

        $validator
            ->allowEmpty('numero_documento');

        $validator
            ->requirePresence('primer_nombre', 'create')
            ->notEmpty('primer_nombre');

        $validator
            ->allowEmpty('segundo_nombre');

        $validator
            ->requirePresence('primer_apellido', 'create')
            ->notEmpty('primer_apellido');

        $validator
            ->allowEmpty('segundo_apellido');

        $validator
            ->allowEmpty('genero');

        $validator
            ->requirePresence('usuario', 'create')
            ->notEmpty('usuario');

        $validator
            ->requirePresence('pass', 'create')
            ->notEmpty('pass');

        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('telefono', 'create')
            ->notEmpty('telefono');

        $validator
            ->add('id_ciudad', 'valid', ['rule' => 'numeric'])
            ->requirePresence('id_ciudad', 'create')
            ->notEmpty('id_ciudad');

        $validator
            ->allowEmpty('direccion');

        $validator
            ->add('fecha_nacimiento', 'valid', ['rule' => 'date'])
            ->requirePresence('fecha_nacimiento', 'create')
            ->notEmpty('fecha_nacimiento');

        $validator
            ->allowEmpty('foto');

        $validator
            ->add('estado', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('estado');

        $validator
            ->add('fecha_inicio', 'valid', ['rule' => 'datetime'])
            ->requirePresence('fecha_inicio', 'create')
            ->notEmpty('fecha_inicio');

        $validator
            ->add('codigo', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('codigo');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}

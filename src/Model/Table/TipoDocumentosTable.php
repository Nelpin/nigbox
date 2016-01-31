<?php
namespace App\Model\Table;

use App\Model\Entity\TipoDocumento;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TipoDocumentos Model
 *
 */
class TipoDocumentosTable extends Table
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

        $this->table('tipo_documentos');
        $this->displayField('id_documento');
        $this->primaryKey('id_documento');
        $this->displayField('documento');
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
            ->add('id_documento', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_documento', 'create');

        $validator
            ->requirePresence('documento', 'create')
            ->notEmpty('documento');

        $validator
            ->requirePresence('descripcion_documento', 'create')
            ->notEmpty('descripcion_documento');

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

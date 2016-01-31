<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TipoDocumento Entity.
 *
 * @property int $id_documento
 * @property string $documento
 * @property string $descripcion_documento
 * @property \Cake\I18n\Time $create_at
 * @property \Cake\I18n\Time $update_at
 */
class TipoDocumento extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id_documento' => false,
    ];
}

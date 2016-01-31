<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Permiso Entity.
 *
 * @property int $id_permiso
 * @property string $permiso
 * @property string $key
 * @property \Cake\I18n\Time $create_at
 * @property \Cake\I18n\Time $update_at
 * @property \App\Model\Entity\Role[] $roles
 * @property \App\Model\Entity\Usuario[] $usuarios
 */
class Permiso extends Entity
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
        'id_permiso' => false,
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity.
 *
 * @property int $id
 * @property int $tipo_documento
 * @property string $numero_documento
 * @property string $primer_nombre
 * @property string $segundo_nombre
 * @property string $primer_apellido
 * @property string $segundo_apellido
 * @property string $genero
 * @property string $usuario
 * @property string $pass
 * @property string $email
 * @property string $telefono
 * @property int $id_ciudad
 * @property string $direccion
 * @property \Cake\I18n\Time $fecha_nacimiento
 * @property string $foto
 * @property int $estado
 * @property \Cake\I18n\Time $fecha_inicio
 * @property int $codigo
 * @property \Cake\I18n\Time $create_at
 * @property \Cake\I18n\Time $update_at
 * @property \App\Model\Entity\Permiso[] $permisos
 * @property \App\Model\Entity\Role[] $roles
 */
class Usuario extends Entity
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
        'id' => false,
    ];
}

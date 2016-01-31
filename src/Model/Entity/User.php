<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity.
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
 */
class User extends Entity
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
     protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
          return (new DefaultPasswordHasher)->hash($password);
        }
    }
}

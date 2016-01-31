<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PermisosUsuariosFixture
 *
 */
class PermisosUsuariosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'usuario' => ['type' => 'integer', 'length' => 4, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'permiso' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'valor' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'usuario' => ['type' => 'index', 'columns' => ['usuario'], 'length' => []],
            'permiso' => ['type' => 'index', 'columns' => ['permiso'], 'length' => []],
        ],
        '_constraints' => [
            'permisos_usuarios_ibfk_1' => ['type' => 'foreign', 'columns' => ['usuario'], 'references' => ['usuarios', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'permisos_usuarios_ibfk_2' => ['type' => 'foreign', 'columns' => ['permiso'], 'references' => ['permisos', 'id_permiso'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'usuario' => 1,
            'permiso' => 1,
            'valor' => 1
        ],
    ];
}

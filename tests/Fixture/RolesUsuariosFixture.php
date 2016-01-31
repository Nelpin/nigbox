<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RolesUsuariosFixture
 *
 */
class RolesUsuariosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_rol' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_usuario' => ['type' => 'integer', 'length' => 4, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'create_at' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'update_at' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'id_rol' => ['type' => 'index', 'columns' => ['id_rol'], 'length' => []],
            'id_usuario' => ['type' => 'index', 'columns' => ['id_usuario'], 'length' => []],
        ],
        '_constraints' => [
            'roles_usuarios_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_rol'], 'references' => ['roles', 'id_role'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'roles_usuarios_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_usuario'], 'references' => ['usuarios', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
            'id_rol' => 1,
            'id_usuario' => 1,
            'create_at' => '2016-01-19 02:26:26',
            'update_at' => '2016-01-19 02:26:26'
        ],
    ];
}

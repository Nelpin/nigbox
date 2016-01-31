<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PermisosRolesFixture
 *
 */
class PermisosRolesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'role' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'permiso' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'valor' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'role' => ['type' => 'index', 'columns' => ['role'], 'length' => []],
            'permiso' => ['type' => 'index', 'columns' => ['permiso'], 'length' => []],
        ],
        '_constraints' => [
            'permisos_roles_ibfk_1' => ['type' => 'foreign', 'columns' => ['role'], 'references' => ['roles', 'id_role'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'permisos_roles_ibfk_2' => ['type' => 'foreign', 'columns' => ['permiso'], 'references' => ['permisos', 'id_permiso'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
            'role' => 1,
            'permiso' => 1,
            'valor' => 1
        ],
    ];
}

<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CiudadesFixture
 *
 */
class CiudadesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idCiudades' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Paises_Codigo' => ['type' => 'string', 'length' => 2, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Ciudad' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'Paises_Codigo' => ['type' => 'index', 'columns' => ['Paises_Codigo'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idCiudades'], 'length' => []],
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
            'idCiudades' => 1,
            'Paises_Codigo' => '',
            'Ciudad' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}

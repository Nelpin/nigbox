<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PaisesFixture
 *
 */
class PaisesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Codigo' => ['type' => 'string', 'length' => 2, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Pais' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'ciudades_idCiudades' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_paises_ciudades' => ['type' => 'index', 'columns' => ['ciudades_idCiudades'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Codigo'], 'length' => []],
            'Codigo' => ['type' => 'unique', 'columns' => ['Codigo'], 'length' => []],
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
            'Codigo' => '45bc5b75-2309-4c23-90a6-4d7506226027',
            'Pais' => 'Lorem ipsum dolor sit amet',
            'ciudades_idCiudades' => 1
        ],
    ];
}

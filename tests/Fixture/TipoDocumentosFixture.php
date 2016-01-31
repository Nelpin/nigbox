<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TipoDocumentosFixture
 *
 */
class TipoDocumentosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_documento' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'documento' => ['type' => 'string', 'fixed' => true, 'length' => 4, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'descripcion_documento' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'create_at' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'update_at' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_documento'], 'length' => []],
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
            'id_documento' => 1,
            'documento' => 'Lo',
            'descripcion_documento' => 'Lorem ipsum dolor sit amet',
            'create_at' => '2016-01-19 02:25:13',
            'update_at' => '2016-01-19 02:25:13'
        ],
    ];
}

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PermisosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PermisosTable Test Case
 */
class PermisosTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.permisos',
        'app.roles',
        'app.permisos_roles',
        'app.usuarios',
        'app.permisos_usuarios',
        'app.roles_usuarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Permisos') ? [] : ['className' => 'App\Model\Table\PermisosTable'];
        $this->Permisos = TableRegistry::get('Permisos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Permisos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

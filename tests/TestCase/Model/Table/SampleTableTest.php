<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SampleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SampleTable Test Case
 */
class SampleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SampleTable
     */
    public $Sample;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sample'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Sample') ? [] : ['className' => SampleTable::class];
        $this->Sample = TableRegistry::get('Sample', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sample);

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

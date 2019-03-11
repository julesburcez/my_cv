<?php namespace App\Tests;

use App\Entity\Experience;

class ExampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \App\Tests\UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $exp = new Experience();
        $exp->setTitle('Stage');
        $this->assertEquals('Stage', $exp->getTitle());
    }
}

<?php

use Mockery as m;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-08-23 at 09:22:03.
 */
class Twitter_Bootstrap_CodeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Twitter_Bootstrap_Code
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Twitter_Bootstrap_Code();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        $this->object = null;
    }

    /**
     * @covers Twitter_Bootstrap_Code::code
     */
    public function testCode()
    {
        $view = m::mock('Zend_View');
        $view->shouldReceive('escape')->with('class')->once()->andReturn('class');
        $view->shouldReceive('escape')->with('pre-scrollable')->once()->andReturn('pre-scrollable');
        $view->shouldReceive('escape')->with('test')->once()->andReturn('test');

        $this->object->setView($view);
        $this->assertEquals('<pre class="pre-scrollable">test</pre>', $this->object->code('test', true));
    }
}

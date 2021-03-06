<?php

use Mockery as m;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-08-23 at 09:22:03.
 */
class Twitter_Bootstrap_Images_RoundedImageTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Twitter_Bootstrap_Images_RoundedImage
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Twitter_Bootstrap_Images_RoundedImage();
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
     * @covers Twitter_Bootstrap_Images_RoundedImage::roundedImage
     */
    public function testRoundedImage()
    {
        $expected = <<<EOS
<img src="/test.jpg" class="class img-rounded" alt="test" />
EOS;

        $view = m::mock('Zend_View');
        $view->shouldReceive('escape')->andReturnUsing(function($arg) {
            return $arg;
        });

        $this->object->setView($view);
        $this->assertEquals($expected, $this->object->roundedImage('/test.jpg', array('class' => 'class', 'alt' => 'test')));
    }
}

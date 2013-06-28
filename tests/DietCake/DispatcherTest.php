<?php

namespace DietCake;

require_once dirname(__DIR__) . '/bootstrap.php';

class DispatcherTest extends \PHPUnit_Framework_TestCase
{
    public function test_parseAction()
    {
        $this->assertEquals(array('top', 'index'), Dispatcher::parseAction('top/index'));
        $this->assertEquals(array('player', 'view_record'), Dispatcher::parseAction('player/view_record'));
        $this->assertEquals(array('event_top', 'index'), Dispatcher::parseAction('event/top/index'));

    }

    public function test_parseAction_02()
    {
        $this->setExpectedException('DietCake\DCException', 'invalid url format');
        Dispatcher::parseAction('top');
    }

    public function test_getController()
    {
        $this->assertTrue(Dispatcher::getController('hello') instanceof \App\Controller\HelloController);
    }

    public function test_getController_02()
    {
        $this->setExpectedException('DietCake\DCException', 'FooController is not found');
        Dispatcher::getController('foo');
    }
}

namespace App\Controller;

class HelloController extends \DietCake\Controller
{
}

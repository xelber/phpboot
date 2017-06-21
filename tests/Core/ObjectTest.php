<?php
use PHPUnit\Framework\TestCase;
use Phpboot\Core\Object;

class ObjectTest extends TestCase
{
    public function testObject()
    {
        $object = new Object();
        $this->assertEquals('Phpboot\Core\Object', $object->toString());

	    $object->setName('Xelber');
	    $this->assertEquals('Xelber', $object->getName());

	    $object->setEmptyParam();
	    $this->assertEquals(null, $object->getEmptyParam());
    }
}

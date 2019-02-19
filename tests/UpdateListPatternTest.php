<?php 
declare(strict_types = 1);

namespace UpdateListPattern\Tests;
use UpdateListPattern\UpdateListPattern;
use PHPUnit\Framework\TestCase;

class UpdateListPatternTest extends TestCase
{
    protected $_update;

    protected function setUp(): void
    {
        $array1 = array("a" => "sky", "star", "moon", "cloud", "moon");
        $array2 = array("b" => "sky", "sun", "moon");
 
        $this->_update = new UpdateListPattern($array1, $array2);
    }

    public function testInstanceOfUpdateListPattern() 
	{
        $this->assertInstanceOf(UpdateListPattern::class, $this->_update);
    }
    
    public function testTypeOfKept()
    {
        $this->assertIsArray($this->_update->getKept());
    }

    public function testTypeOfExcluded()
    {
        $this->assertIsArray($this->_update->getExcluded());
    }

    public function testTypeOfIncluded()
    {
        $this->assertIsArray($this->_update->getIncluded());
    }

    public function testTotalKept()
    {
        $result = new UpdateListPattern(array(), array());
        $total = count($result->getKept()) + count($result->getExcluded()) + count($result->getIncluded());
        $this->assertEquals(0, $total);
    }
}
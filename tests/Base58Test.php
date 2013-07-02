<?php
use Allty\Utils\Base58;

class Base58Test extends PHPUnit_Framework_TestCase{
    
    private $sample = 627868726;
    private $expectedEncoded = "XtZuS";
    
    public function testEncode() {
        $encoded = Base58::encode($this->sample);
        $this->assertEquals($encoded, $this->expectedEncoded);
    }
    
    public function testDecode() {
        $decoded = Base58::decode($this->expectedEncoded);
        $this->assertEquals($decoded, $this->sample);
    }
    
}

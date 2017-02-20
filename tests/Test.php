<?php
class FooTest extends PHPUnit_Framework_TestCase{

    public function testFoo(){
    	echo "★";
    	echo $PHP_ZTS;
    	echo "★";
        $this->assertTrue(true);
    }
}

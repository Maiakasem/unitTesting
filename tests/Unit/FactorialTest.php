

<?php

use PHPUnit\Framework\TestCase;

require_once('./src/Factorial.php');

class FactorialTest extends TestCase {
    public function testGetFact() {

        $this->assertEquals(Factorial::getFact(0) , 1);

        $this->assertEquals(Factorial::getFact(1) , 1);
        $this->assertEquals(Factorial::getFact(5) , 120);

        $rnd = round( rand(3, getrandmax()));
        $calculatedFact = $rnd * Factorial::getFact($rnd - 1);
        $this->assertEquals(Factorial::getFact($rnd) , $calculatedFact);

        $this->assertEquals(Factorial::getFact(-3) , null);
        $this->assertEquals(Factorial::getFact(1.5) , null);
        $this->assertEquals(Factorial::getFact(false) , null);
        $this->assertEquals(Factorial::getFact('abc') , null);       

    }
}







?>
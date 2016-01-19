<?php

namespace App\Test\Models;

use App\Models\CalculateRoots;

class CalculateRootsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider providerCalculate
     */
    public function testFindRoots($a, $b, $c, $discriminant, $expected)
    {
        $roots = new CalculateRoots($discriminant, $a, $b, $c);
        $this->assertEquals($expected, $roots->findRoots());
    }

    public function providerCalculate()
    {
        return array(
            array(30, 21, 1, 321, array(-0.05, -0.65)),
            array(9, 15, 5, 45, array(-0.46, -1.21)),
            array(2, -9, 3, 57, array(4.14, 0.36))
        );
    }
}
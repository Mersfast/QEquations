<?php

namespace App\Test\Models;

use App\Models\SolvingEquation as Solution;

class SolvingEquationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider providerEvaluate
     */

    public function testEvaluate($a, $b, $c, $expected)
    {
        $evaluate = new Solution();
        $this->assertEquals($expected, $evaluate->evaluate($a, $b, $c));
    }

    public function providerEvaluate()
    {
        return array(
            array(1, 2, 3, false),
            array(5, -10, 4, array(1.45, 0.55)),
            array(-100, -200, 5, array(-2.02, 0.02)),
            array(20, 21, 2, array(-0.11, -0.94))
        );
    }
}
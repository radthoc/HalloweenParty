<?php
namespace Kata\Tests;

use Kata\ChocolateCutter;

class ChocolateCutterTest extends \PHPUnit_Framework_TestCase
{

    private $chocolateCutter;

    protected function setUp()
    {
        $this->chocolateCutter = new ChocolateCutter();
    }

    public function testResturnOneWithNoCuts()
    {
        $this->check(1, 0);
    }

    public function testReturnTwoWithACut()
    {
        $this->check(2, 1);
    }

    public function testReturnFourWithTwoCuts()
    {
        $this->check(4, 2);
    }

    public function testReturnSixWithThreeCuts()
    {
        $this->check(6, 3);
    }

    public function testReturnNineWithFourCuts()
    {
        $this->check(9, 4);
    }

    public function testReturnTwelveWithFiveCuts()
    {
        $this->check(12, 5);
    }

    public function testReturnSixteenWithSixCuts()
    {
        $this->check(16, 6);
    }

    /**
     * @dataProvider expectations
     * @param $expected
     * @param $cuts
     */
    public function testMultiplecases($cuts, $expected)
    {
        $this->check($expected, $cuts);
    }

    public function expectations()
    {
        return [
            [0,1],
            [1,2],
            [2,4],
            [3,6],
            [4,9],
            [5,12],
            [6,16],
            [7,20],
            [8,25],
            [9,30],
            [10,36],
            [11,42],
            [12,49],
        ];
    }

    private function check($expected, $cuts)
    {
        $this->assertSame($expected, $this->chocolateCutter->cut($cuts));
    }
}

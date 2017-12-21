<?php

require_once "vendor/autoload.php";

use PHPUnit\Framework\TestCase;

class simpleTest extends TestCase
{
    public function testValue()
    {
        $a    = 999;
        $b    = 555;
        $temp = $a;
        $a    = $b;
        $b    = $temp;

        $this->assertEquals(555, $a);
        $this->assertEquals(999, $b);
    }

    public function testDouble()
    {
        $num    = 3;
        $total  = 2 * $num;

        $this->assertEquals(6, $total);
    }

    public function testArea()
    {
        $lado1  = 3;
        $lado2  = 9;

        $area   = ($lado1 * $lado2);

        $this->assertEquals(27, $area);
    }

    public function testNextBefore()
    {
        $num    = 2;
        $before = ($num -1);
        $next   = ($num +1);

        $this->assertEquals(1, $before);
        $this->assertEquals(3, $next);
    }

    public function testAverage()
    {
        $value1 = 3;
        $value2 = 3;
        $value3 = 3;
        $divvy  = 3;

        $total = (($value1 + $value2 + $value3)/$divvy);

        $this->assertEquals(3, $total);
    }

    public function testMonth()
    {
        $days   = 30;

        $months = 7;

        $total  = ($months * $days);

        $this->assertEquals(210, $total);
    }

    public function testOperationsPlus()
    {
        $numPlus = 1;

        $plus    = ($numPlus + $numPlus);

        $this->assertEquals(2, $plus);
    }

    public function testOperationsMultiply()
    {
        $numMult = 1;

        $mult    = ($numMult * $numMult);

        $this->assertEquals(1, $mult);
    }

    public function testOperationsDivide()
    {
        $numDiv  = 1;

        $div     = ($numDiv / $numDiv);

        $this->assertEquals(1, $div);
    }

    public function testOperationsSubtract()
    {
        $numSub = 1;

        $sub    = ($numSub - $numSub);

        $this->assertEquals(0, $sub);
    }

    public function testCarCost()
    {
        $fabricCost = 1000000;
        $dealerPerc = (( 28 / 100 ) * $fabricCost);
        $taxesPerc  = (( 45 / 100 ) * $fabricCost);

//        $finalCost  = ($fabricCost + ($fabricCost * $dealerPerc) + ($fabricCost * $taxesPerc));

        $finalCost  = ($fabricCost + $dealerPerc + $taxesPerc);

        $this->assertEquals(1730000,$finalCost);
    }

    public function testLoan()
    {
        $capital  = 16000;
        $loanRate = 0.04;
        $time     = 4;

        $loan     = ($capital * $loanRate * $time);

        $this->assertEquals(2560, $loan);
    }

    public function testSalary()
    {
        $salary    = 100000;
        $readjust  = 0.15;

        $newSalary = ($salary * $readjust);

        $this->assertEquals(15000, $newSalary);
    }

    public function testPair()
    {
        $num = 3;

        $test = ($num % 2);

        if ($test == 0){
            echo "numero par ".$test;
        }
        else{
            echo "numero impar ".$test;
        }

        $this->assertEquals(1, $test);
    }

}

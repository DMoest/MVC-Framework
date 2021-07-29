<?php

declare(strict_types=1);

namespace daap19\Dice;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for Dice class.
 */
class DiceHandTest extends TestCase
{
    protected object $diceHand;


    /**
     * @description setUp for test suit. Each test case will run this at first.
     */
    final protected function setUp(): void
    {
        $this->diceHand = new DiceHand();
    }


    /**
     * @description tearDown for test suit. Each test case will run this when done is done.
     */
    final protected function tearDown(): void
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }


    /**
     * @description Test construct method for DiceHand class.
     */
    final public function testDiceHandConstruct(): void
    {
        /* Setup test case */
        $dices = $this->diceHand->getDices();
        $lastRoll = $this->diceHand->getLastRoll();
        $sum = $this->diceHand->getSum();
        $average = $this->diceHand->getAverage();

        /* Test class object for namespace */
        $this->assertInstanceOf("daap19\Dice\DiceHand", $this->diceHand);

        /* Test class attributes existence */
        $this->assertObjectHasAttribute("faces", $this->diceHand);
        $this->assertObjectHasAttribute("dices", $this->diceHand);
        $this->assertObjectHasAttribute("numberOfDices", $this->diceHand);
        $this->assertObjectHasAttribute("lastRoll", $this->diceHand);
        $this->assertObjectHasAttribute("sum", $this->diceHand);
        $this->assertObjectHasAttribute("average", $this->diceHand);

        /* Test class attributes type */
        $this->assertIsArray($dices);
        $this->assertIsIterable($dices);
        $this->assertIsArray($lastRoll);
        $this->assertIsIterable($lastRoll);
        $this->assertIsInt($sum);
        $this->assertIsFloat($average);

        /* Test class attributes initial values */
        $this->assertCount(1, $dices);
        $this->assertEquals(0, $sum);
        $this->assertEquals(0, $average);

        foreach ($dices as $dice) {
            $faces = $dice->getFaces();
            $this->assertIsInt($faces);
            $this->assertEquals(6, $faces);
        }
    }


    /**
     * @description Test DiceHand method getDices.
     */
    final public function testDiceHandGetDices(): void
    {
        /* Setup test case */
        $diceHand2 = new DiceHand(13);
        $dices = $this->diceHand->getDices();
        $dices2 = $diceHand2->getDices();

        /* Test class method return types */
        $this->assertIsIterable($dices);
        $this->assertIsArray($dices);
        $this->assertIsIterable($dices2);
        $this->assertIsArray($dices2);

        /* Test class method return values */
        $this->assertCount(1, $dices);
        $this->assertCount(13, $dices2);
        $this->assertNotSame($this->diceHand, $diceHand2);
        $this->assertNotSame($dices, $dices2);

        /* Test the values of the returned arrays */
        foreach ($dices as $dice) {
            $this->assertIsObject($dice);
        }

        foreach ($dices2 as $dice) {
            $this->assertIsObject($dice);
        }
    }


    /**
     * @description 
     */
    final public function testDiceHandRoll(): void
    {
        /* setup test case */
        $diceHandRoll = $this->diceHand->roll();

        /* test case assertions */
        $this->assertIsArray($diceHandRoll);

        /* Test the values of the returned arrays */
        foreach ($diceHandRoll as $dice) {
            $this->assertIsInt($dice);
        }
    }


    /**
     * @description Test DiceHand getLastRoll method.
     */
    final public function testDiceHandLastRoll(): void
    {
        /* setup test case */
        $this->diceHand->roll();
        $dices = $this->diceHand->getLastRoll();

        $this->assertIsIterable($dices);
        $this->assertIsArray($dices);
        $this->assertNotEmpty($dices);
        $this->assertCount(1, $dices); // test default argument

        foreach ($dices as $dice) {
            $this->assertIsInt($dice);
        }
    }


    /**
     * @description Test case for DiceHand getLastRollAsString() method.
     */
    final public function testDiceHandLastRollAsString(): void
    {
        /* setup test case */
        $this->diceHand->roll();
        $lastRollAsStr = $this->diceHand->getLastRollAsString();

        /* test case assertions */
        $this->assertIsString($lastRollAsStr);
    }


    /**
     * @description Test case for DiceHand getSum() method.
     */
    final public function testDiceHandSum(): void
    {
        /* setup test case */
        $this->diceHand->roll();
        $sum = $this->diceHand->getSum();
        $lastRoll = $this->diceHand->getLastRoll();

        /* test case assertions */
        $this->assertIsInt($sum);
        $this->assertEquals(array_sum($lastRoll), $sum);
    }


    /**
     * @description Test case for DiceHand getAverage() method.
     */
    final public function testDiceHandAverage(): void
    {
        /* setup test case */
        $this->diceHand = new DiceHand(5, 6); // need more then 1 dice to get floats
        $this->diceHand->roll();
        $average = $this->diceHand->getAverage();
        $lastRoll = $this->diceHand->getLastRoll();
        $expected = round(array_sum($lastRoll) / count($lastRoll), 2);

        /* test case assertions */
        $this->assertIsFloat($average);
        $this->assertEquals($expected, $average);
    }
}
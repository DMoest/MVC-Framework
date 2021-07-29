<?php

declare(strict_types=1);

namespace Daap19\Dice;
use PHPUnit\Framework\TestCase;



/**
 * Test cases for Dice class.
 */
class DiceTest extends TestCase
{
    protected object $dice;


    /**
     * @description setUp for test suit. Each test case will run this at first.
     */
    final protected function setUp(): void
    {
        $this->dice = new Dice();
    }


    /**
     * @description tearDown for test suit. Each test case will run this when done is done.
     */
    final protected function tearDown(): void
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }


    /**
     * @description Test construct method for Dice class. Test instance of namespace and test default value for property faces.
     */
    final public function testDiceConstruct(): void
    {
        /* Setup test case */
        $faces = $this->dice->getFaces();
        $results = $this->dice->getDiceResults();
        $lastRoll = $this->dice->getLastRoll();

        /* Test class object for namespace */
        $this->assertInstanceOf("daap19\Dice\Dice", $this->dice);

        /* Test class attributes existence */
        $this->assertObjectHasAttribute("faces", $this->dice);
        $this->assertObjectHasAttribute("diceResults", $this->dice);
        $this->assertObjectHasAttribute("lastRoll", $this->dice);

        /* Test class attributes type */
        $this->assertIsInt($faces);
        $this->assertIsArray($results);
        $this->assertNull($lastRoll);

        /* Test class attributes initial values */
        $this->assertEquals(6, $faces);
        $this->assertEmpty($results);

        /* Test existence of expected class methods */
        $this->assertTrue(method_exists($this->dice, "__construct"), "Class does not have expected method __construct.");
        $this->assertTrue(method_exists($this->dice, "roll"), "Class does not have expected method roll.");
        $this->assertTrue(method_exists($this->dice, "getFaces"), "Class does not have expected method getFaces.");
        $this->assertTrue(method_exists($this->dice, "getLastRoll"), "Class does not have expected method getLastRoll.");
        $this->assertTrue(method_exists($this->dice, "getDiceResults"), "Class does not have expected method getDiceResults.");
    }


    /**
     * @description Test dice roll method. Test dice value for type integer.
     */
    final public function testDiceGetFaces(): void
    {
        /* setup test case */
        $diceFaces = $this->dice->getFaces();

        /* Test case assertions */
        $this->assertIsInt($diceFaces);
        $this->assertEquals(6, $diceFaces);
    }


    /**
     * @description Test dice roll method. Test dice value for type integer.
     */
    final public function testDiceRoll(): void
    {
        /* setup test case */
        $diceValue = $this->dice->roll();

        /* Test case assertions */
        $this->assertIsInt($diceValue);
    }


    /**
     * @description Test dice getLastRoll method. Test dice value for type integer.
     */
    final public function testDiceGetLastRoll(): void
    {
        /* setup test case */
        $this->dice->roll();
        $diceValue = $this->dice->getLastRoll();

        /* Test case assertions */
        $this->assertIsInt($diceValue);
    }


    /**
     * @method testGetDiceResults()
     * @description Test dice method getDiceResults. Roll the dice three times, assert each value for type, assert dice results for type and assert each rolled value is contained i dice results.
     */
    final public function testGetDiceResults(): void
    {
        /* setup test case */
        $diceValue1 = $this->dice->roll();
        $diceValue2 = $this->dice->roll();
        $diceValue3 = $this->dice->roll();
        $diceResults = $this->dice->getDiceResults();

        /* Test case assertions */
        $this->assertIsInt($diceValue1);
        $this->assertIsInt($diceValue2);
        $this->assertIsInt($diceValue3);
        $this->assertIsArray($diceResults);
        $this->assertContains($diceValue1, $diceResults);
        $this->assertContains($diceValue2, $diceResults);
        $this->assertContains($diceValue3, $diceResults);
    }
}

<?php

declare(strict_types=1);

namespace Daap19\Dice;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for Dice class.
 */
class PlayerResultsTraitTest extends TestCase
{
    protected object $player;

    /**
     * @description setUp for test suit. Each test case will run this at first.
     */
    final protected function setUp(): void
    {
        $this->player = new Player();
    }


    /**
     * @description tearDown for test suit. Each test case will run this when done is done.
     */
    final protected function tearDown(): void
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }


    /**
     * @test
     * @description Test Player class with trait ResultsAsString with method getResultsAsString.
     */
    final public function test_Player_Trait_Results_As_String_Method(): void
    {
        /* Setup test case */
        $this->player->rollDices();
        $resultString = $this->player->getResultsAsString();

        /* Test existence of expected class methods */
        $this->assertTrue(method_exists($this->player, "getResultsAsString"), "Class does not have expected method getResultsAsString.");

        /* Test class method return type */
        $this->assertIsString($resultString);
    }


    /**
     * @test
     * @description Test Player class with trait ResultsAsString with method getLastRollAsString.
     */
    final public function test_Player_Trait_Last_Roll_As_String_Method(): void
    {
        /* setup test case */
        $this->player->rollDices();
        $lastRollString = $this->player->getLastRollAsString();

        $this->assertIsString($lastRollString);
    }
}

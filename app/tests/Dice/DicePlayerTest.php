<?php

declare(strict_types=1);

namespace Daap19\Dice;
use PHPUnit\Framework\TestCase;



/**
 * Test cases for Dice class.
 */
class DicePlayerTest extends TestCase
{
    protected object $player;


    /**
     * @description setUp for test suit. Each test case will run this at first.
     */
    final protected function setUp(): void
    {
        $this->player = new DicePlayer();
    }


    /**
     * @description tearDown for test suit. Each test case will run this when done is done.
     */
    final protected function tearDown(): void
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }


    /**
     * @description Test DicePlayer constructor method.
     */
    final public function testDicePlayerConstructor(): void
    {
        $this->assertIsObject($this->player);
        $this->assertInstanceOf("daap19\Dice\DicePlayer", $this->player);

        /* Test unique parent::class attributes */
        $this->assertObjectHasAttribute("lastRoll", $this->player);
        $this->assertObjectHasAttribute("results", $this->player);
        $this->assertObjectHasAttribute("lastHand", $this->player);
        $this->assertObjectHasAttribute("sum", $this->player);
        $this->assertObjectHasAttribute("average", $this->player);
        $this->assertObjectHasAttribute("faces", $this->player);
        $this->assertObjectHasAttribute("dices", $this->player);

        /* Test object attributes */
        $this->assertObjectHasAttribute("credit", $this->player);
        $this->assertObjectHasAttribute("wins", $this->player);
        $this->assertObjectHasAttribute("stopped", $this->player);
        $this->assertObjectHasAttribute("bust", $this->player);
        $this->assertObjectHasAttribute("out", $this->player);
        $this->assertObjectHasAttribute("machine", $this->player);

        /* Test if class have expected methods */
        $this->assertTrue(method_exists($this->player, "getCredit"), "Class does not have expected method getCredit.");
        $this->assertTrue(method_exists($this->player, "setCredit"), "Class does not have expected method setCredit.");
        $this->assertTrue(method_exists($this->player, "setWin"), "Class does not have expected method setWin.");
        $this->assertTrue(method_exists($this->player, "getWins"), "Class does not have expected method getWins.");
        $this->assertTrue(method_exists($this->player, "stop"), "Class does not have expected method stop.");
        $this->assertTrue(method_exists($this->player, "hasStopped"), "Class does not have expected method hasStopped.");
        $this->assertTrue(method_exists($this->player, "isBust"), "Class does not have expected method isBust.");
        $this->assertTrue(method_exists($this->player, "setBust"), "Class does not have expected method setBust.");
        $this->assertTrue(method_exists($this->player, "isOut"), "Class does not have expected method isOut.");
        $this->assertTrue(method_exists($this->player, "setOut"), "Class does not have expected method setOut.");
        $this->assertTrue(method_exists($this->player, "isMachine"), "Class does not have expected method isMachine.");
        $this->assertTrue(method_exists($this->player, "setForNextRound"), "Class does not have expected method setForNextRound.");
    }


    /**
     * @description Test DicePlayer getCredit method return type.
     */
    final public function testDicePlayerGetCredit(): void
    {
        $credit = $this->player->getCredit();
        $this->assertIsInt($credit);
    }


    /**
     * @description Test DicePlayer getWins method return type and value after class construct.
     */
    final public function testDicePlayerGetWins(): void
    {
        $wins = $this->player->getWins();
        $this->assertIsInt($wins);
        $this->assertEquals(0, $wins);
    }


    /**
     * @description Test DicePlayer stop property after class construct.
     */
    final public function testDicePlayerHasStopped(): void
    {
        $stopped = $this->player->hasStopped();
        $this->assertIsBool($stopped);
        $this->assertEquals(false, $stopped);
    }


    /**
     * @description Test DicePlayer bust property after class construct.
     */
    final public function testDicePlayerIsBust(): void
    {
        $bust = $this->player->isBust();
        $this->assertIsBool($bust);
        $this->assertEquals(false, $bust);
    }


    /**
     * @description Test DicePlayer out property after class construct.
     */
    final public function testDicePlayerIsOut(): void
    {
        $out = $this->player->isOut();
        $this->assertIsBool($out);
        $this->assertEquals(false, $out);
    }


    /**
     * @description Test machine operated DicePlayer after construct.
     */
    final public function testMachineDicePlayer(): void
    {
        $this->player = new DicePlayer(25, 1);

        $machine = $this->player->isMachine();
        $credit = $this->player->getCredit();

        $this->assertIsObject($this->player);
        $this->assertIsBool($machine);
        $this->assertEquals(true, $machine);
        $this->assertIsInt($credit);
        $this->assertEquals(25, $credit);
    }


    /**
     * @description Test DicePlayer set for next game round method.
     */
    final public function testPlayerSetForNextRound(): void
    {
        $this->player = new DicePlayer(25, 1);

        /* Pre setForNextRound */
        $rolledLastRoll = $this->player->rollDices(5);
        $rolledResults = $this->player->getResults();
        $rolledSum = $this->player->getSumTotal();
        $rolledAverage = $this->player->getAverage();
        $this->player->stop();
        $setStop = $this->player->hasStopped();
        $this->player->setBust();
        $setBust = $this->player->isBust();
        $this->player->setForNextRound();

        /* Post setForNextRound */
        $resetResults = $this->player->getResults();
        $resetLastRoll = $this->player->getLastRoll();
        $resetSum = $this->player->getSumTotal();
        $resetAverage = $this->player->getAverage();
        $resetStop = $this->player->hasStopped();
        $resetBust = $this->player->isBust();

        /* Testing */
        $this->assertIsArray($rolledLastRoll);
        $this->assertIsArray($resetLastRoll);
        $this->assertEmpty($resetLastRoll);
        $this->assertIsArray($rolledResults);
        $this->assertIsArray($resetResults);
        $this->assertEmpty($resetResults);
        $this->assertIsInt($rolledSum);
        $this->assertIsInt($resetSum);
        $this->assertEquals(0, $resetSum);
        $this->assertIsFloat($rolledAverage);
        $this->assertNull($resetAverage);
        $this->assertEquals(0, $resetAverage);
        $this->assertIsBool($setStop);
        $this->assertTrue($setStop);
        $this->assertIsBool($resetStop);
        $this->assertFalse($resetStop);
        $this->assertIsBool($setBust);
        $this->assertTrue($setBust);
        $this->assertIsBool($resetBust);
        $this->assertFalse($resetBust);
    }

    /**
     * @description Test DicePlayer set for next game round method if credit is zero.
     */
    final public function testPlayerSetForNextRoundZeroCredit(): void
    {
        $this->player = new DicePlayer(25, 1);

        $this->player->stop();
        $stopped = $this->player->hasStopped();
        $this->player->setCredit(0);
        $this->player->setForNextRound();

        $this->assertIsBool($stopped);
        $this->assertTrue($stopped);
    }
}

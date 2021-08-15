<?php

declare(strict_types=1);

namespace Daap19\Dice;
use PHPUnit\Framework\TestCase;



/**
 * Test cases for Dice class.
 */
class DiceGameLogicMethodsTest extends TestCase
{
    protected object $diceGame;


    /**
     * @description setUp for test suit. Each test case will run this at first.
     */
    final protected function setUp(): void
    {
        $this->diceGame = new DiceGame21(2, 25, false);
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
     * @description Test DiceGame method setNextPlayerIndex.
     */
    final public function test_Dice_Game_Set_Next_Round(): void
    {
        $round = $this->diceGame->getRound();

        $this->assertIsInt($round);
        $this->assertEquals(1, $round);

        $this->diceGame->setNextRound();
        $round = $this->diceGame->getRound();

        $this->assertIsInt($round);
        $this->assertEquals(2, $round);

        $this->diceGame->setNextRound();
        $round = $this->diceGame->getRound();

        $this->assertIsInt($round);
        $this->assertEquals(3, $round);
    }


    /**
     * @test
     * @description Test DiceGame method checkScore.
     */
    final public function test_DiceGame_Check_Score(): void
    {
        $players = $this->diceGame->getPlayers();

        foreach ($players as $player) {
            $this->diceGame->checkScore($player);
            $score = $player->getSumTotal();
            $stopped = $player->hasStopped();
            $bust = $player->isBust();

            $this->assertIsInt($score);
            $this->assertEquals(0, $score);
            $this->assertIsBool($stopped);
            $this->assertFalse($stopped);
            $this->assertIsBool($bust);
            $this->assertFalse($bust);
        }
    }


    /**
     * @test
     * @description Test DiceGame method checkScore with busted player score.
     */
    final public function test_DiceGame_Check_Score_Busted_Score(): void
    {
        $players = $this->diceGame->getPlayers();
        $index = $this->diceGame->getPlayerIndex();
        $player = $players[$index];

        /*Make sure sum of results is passed 21, roll 22 dices. Probability is that its impossible for all 21 to get 1 in score, but just to build a strong/religable test case.*/
        for ($i = 0; $i <= 22; $i++) {
            $player->rollDices();
        }

        $this->diceGame->checkScore($player);

        $score = $player->getSumTotal();
        $stopped = $player->hasStopped();
        $bust = $player->isBust();

        $this->assertIsInt($score);
        $this->assertGreaterThan(21, $score);

        $this->assertIsBool($stopped);
        $this->assertTrue($stopped);

        $this->assertIsBool($bust);
        $this->assertTrue($bust);
    }


    /**
     * @test
     * @description Test DiceGame method playGame with argument "roll" from form submit. Player is not machine player.
     */
    final public function test_DiceGame_Play_Game_With_Roll_Argument(): void
    {
        /* Setup test case */
        $this->diceGame->playGame(2, "roll");
        $players = $this->diceGame->getPlayers();
        $index = $this->diceGame->getPlayerIndex();
        $player = $players[$index];
        $results = $player->getResults();
        $machine = $player->isMachine();

        /* test case assertions */
        $this->assertFalse($machine);
        $this->assertNotEmpty($results);
    }


    /**
     * @test
     * @description Test DiceGame method playGame with argument "stop" from form submit. Player is not machine player.
     */
    final public function test_DiceGame_Play_Game_With_Stop_Argument(): void
    {
        /* Setup test case */
        $players = $this->diceGame->getPlayers();
        $index = $this->diceGame->getPlayerIndex();
        $player = $players[$index];
        $this->diceGame->playGame(1, "stop");
        $results = $player->getResults();
        $stopped = $player->hasStopped();

        /* test case assertions */
        $this->assertTrue($stopped);
        $this->assertEmpty($results);
    }


    /**
     * @test
     * @description Test the method checkAllPlayersCredit.
     */
    final public function test_Check_All_Players_Credit(): void
    {
        $players = $this->diceGame->getPlayers();
        $outOfTheGame = $this->diceGame->checkAllPlayersCredit();

        $this->assertIsInt($outOfTheGame);
        $this->assertEquals(0, $outOfTheGame);

        $players[0]->setCredit(0);

        $outOfTheGame = $this->diceGame->checkAllPlayersCredit();

        $this->assertIsInt($outOfTheGame);
        $this->assertEquals(1, $outOfTheGame);

        $winner = $players[1]->isWinner();
        $looser = $players[0]->isWinner();

        $this->assertIsBool($winner);
        $this->assertTrue($winner);
        $this->assertIsBool($looser);
        $this->assertFalse($looser);

        foreach ($players as $player) {
            $player->setCredit(0);
        }

        $outOfTheGame = $this->diceGame->checkAllPlayersCredit();

        $this->assertIsInt($outOfTheGame);
        $this->assertEquals(2, $outOfTheGame);
    }
}

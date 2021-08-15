<?php

declare(strict_types=1);


/**
 * Namespace declared and others in use.
 */
namespace Daap19\Yatzy;
use PHPUnit\Framework\TestCase;


/**
 * Test cases for Dice class.
 */
class YatzyPlayerScoreHandlersTest extends TestCase
{
    protected object $player;


    /**
     * @description setUp for test suit. Each test case will run this at first.
     */
    final protected function setUp(): void
    {
        $this->player = new YatzyPlayer();
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
     * @description Test YatzyPlayer saveScores method with zero count of chosen value.
     */
    final public function test_Yatzy_Player_Save_Scores_No_Value(): void
    {
        /* Setup case */
        $diceHand = [1, 2, 3, 4, 5];
        $referenceValue = 6;
        $this->player->saveScores($diceHand, $referenceValue);
        $savedScores = $this->player->getPlayerScore();

        /* Test case assertions */
        $this->assertIsIterable($savedScores);
        $this->assertIsArray($savedScores);
        $this->assertArrayHasKey($referenceValue - 1, $savedScores);

        foreach ($savedScores as $key => $score) {
            if ($key !== $referenceValue - 1) {
                $this->assertNull($score);
            } elseif ($key === $referenceValue-1) {
                $this->assertIsInt($score);
                $this->assertEquals(0, $score);
            }
        }
    }


    /**
     * @test
     * @description Test YatzyPlayer saveScores method.
     */
    final public function test_Yatzy_Player_Save_Scores_Multiples_Of_Dice_Value(): void
    {
        /* Setup case */
        $diceHand = [1, 3, 3, 3, 5];
        $referenceValue = 3;
        $this->player->saveScores($diceHand, $referenceValue);
        $savedScores = $this->player->getPlayerScore();

        /* Test case assertions */
        $this->assertIsIterable($savedScores);
        $this->assertIsArray($savedScores);
        $this->assertArrayHasKey($referenceValue - 1, $savedScores);

        foreach ($savedScores as $key => $score) {
            if ($key !== $referenceValue - 1) {
                $this->assertNull($score);
            } elseif ($key === $referenceValue - 1) {
                $this->assertIsInt($score);
                $this->assertEquals(9, $score);
            }
        }
    }


    /**
     * @test
     * @description Test YatzyPlayer getAmountOfSaveScores method.
     */
    final public function test_Yatzy_Player_Get_Amount_Of_Saved_Scores(): void
    {
        /* Setup case */
        $diceHand = [1, 3, 3, 3, 5];
        $this->player->saveScores($diceHand, 3);
        $this->player->saveScores($diceHand, 5);
        $amountOfSavedScores = $this->player->getAmountOfScoresSaved();

        /* Test case assertions */
        $this->assertIsInt($amountOfSavedScores);
        $this->assertEquals(2, $amountOfSavedScores);
    }


    /**
     * @test
     * @description Test YatzyPlayer saveScoresSum method.
     */
    final public function test_Yatzy_Player_Get_Saved_Scores_Sum(): void
    {
        /* Setup case */
        $diceHand = [1, 4, 3, 4, 5];
        $this->player->saveScores($diceHand, 3);
        $this->player->saveScores($diceHand, 4);
        $savedScoresSum = $this->player->getPlayerScoreSum();

        /* Test case assertions */
        $this->assertIsInt($savedScoresSum);
        $this->assertEquals(11, $savedScoresSum);
    }


    /**
     * @test
     * @description Test YatzyPlayer getPlayerScores method.
     */
    final public function test_Yatzy_Player_Get_Player_Scores(): void
    {
        /* Setup case */
        $diceHand = $this->player->rollDices();
        $referenceValue = $diceHand[0];
        $this->player->saveScores($diceHand, $referenceValue);
        $savedScores = $this->player->getPlayerScore();
        $occurrence = 0;

        /* Count reference value occurence */
        foreach ($diceHand as $diceValue) {
            if ($diceValue === $referenceValue) {
                $occurrence++;
            }
        }

        /* Test case assertions */
        $this->assertIsIterable($savedScores);
        $this->assertIsArray($savedScores);
        $this->assertArrayHasKey($referenceValue - 1, $savedScores);
        $this->assertEquals($referenceValue, ($savedScores[$referenceValue - 1] / $occurrence));
    }
}

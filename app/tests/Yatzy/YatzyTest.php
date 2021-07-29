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
class YatzyTest extends TestCase
{
    protected object $yatzy;


    /**
     * @description setUp for test suit. Each test case will run this at first.
     */
    final protected function setUp(): void
    {
        $this->yatzy = new Yatzy();
    }


    /**
     * @description tearDown for test suit. Each test case will run this when done is done.
     */
    final protected function tearDown(): void
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }


    /**
     * @description Test YatzyPlayer object construct method.
     */
    final public function testYatzyConstruct(): void
    {
        $this->assertIsObject($this->yatzy);
        $this->assertInstanceOf("daap19\Yatzy\Yatzy", $this->yatzy);

        /* Test YatzyPlayer attributes */
        $this->assertObjectHasAttribute("round", $this->yatzy);
        $this->assertObjectHasAttribute("numOfPlayers", $this->yatzy);
        $this->assertObjectHasAttribute("players", $this->yatzy);
        $this->assertObjectHasAttribute("playerIndex", $this->yatzy);

        /* Test if class have expected methods */
        $this->assertTrue(method_exists($this->yatzy, "play"), "Class does not have expected method play.");
        $this->assertTrue(method_exists($this->yatzy, "getRound"), "Class does not have expected method getRound.");
        $this->assertTrue(method_exists($this->yatzy, "setNextRound"), "Class does not have expected method setNextRound.");
        $this->assertTrue(method_exists($this->yatzy, "getPlayers"), "Class does not have expected method getPlayers.");
        $this->assertTrue(method_exists($this->yatzy, "getCurrentPlayer"), "Class does not have expected method getCurrentPlayer.");
        $this->assertTrue(method_exists($this->yatzy, "getPlayerIndex"), "Class does not have expected method getPlayerIndex.");
        $this->assertTrue(method_exists($this->yatzy, "setPlayerIndex"), "Class does not have expected method setPlayerIndex.");
        $this->assertTrue(method_exists($this->yatzy, "showGraphicDices"), "Class does not have expected method showGraphicDices.");
        $this->assertTrue(method_exists($this->yatzy, "scoreSelection"), "Class does not have expected method scoreSelection.");
    }


    /**
     * @description Test Yatzy method getRound.
     */
    final public function testYatzyGetRound(): void
    {
        /* Setup test case */
        $round = $this->yatzy->getRound();

        /* Test case assertions */
        $this->assertIsInt($round);
        $this->assertEquals(0, $round);
    }


    /**
     * @description Test Yatzy method getPlayers.
     */
    final public function testYatzyGetPlayers(): void
    {
        /* Setup test case */
        $players = $this->yatzy->getPlayers();

        /* Test case assertions */
        $this->assertIsIterable($players);
        $this->assertIsArray($players);
        $this->assertNotEmpty($players);
        $this->assertCount(1, $players);
    }


    /**
     * @description Test Yatzy method getPlayerIndex.
     */
    final public function testYatzyGetPlayerIndex(): void
    {
        /* Setup test case */
        $index = $this->yatzy->getPlayerIndex();
        $players = $this->yatzy->getPlayers();

        /* Test case assertions */
        $this->assertIsInt($index);
        $this->assertEquals(0, $index);
        $this->assertNotEmpty($players);
        $this->assertArrayHasKey($index, $players);
    }


    /**
     * @description Test Yatzy method setPlayerIndex.
     */
    final public function testYatzySetPlayerIndex(): void
    {
        $this->yatzy = new Yatzy(3);

        /* Setup test case */
        $players = $this->yatzy->getPlayers();
        $firstIndex = $this->yatzy->getPlayerIndex();
        $this->yatzy->setPlayerIndex();
        $secondIndex = $this->yatzy->getPlayerIndex();
        $this->yatzy->setPlayerIndex();
        $thirdIndex = $this->yatzy->getPlayerIndex();
        $this->yatzy->setPlayerIndex();
        $shouldBeFirstIndex = $this->yatzy->getPlayerIndex();

        /* Test case assertions */
        $this->assertIsInt($firstIndex);
        $this->assertArrayHasKey($firstIndex, $players);
        $this->assertEquals(0, $firstIndex);

        $this->assertIsInt($secondIndex);
        $this->assertArrayHasKey($secondIndex, $players);
        $this->assertEquals(1, $secondIndex);

        $this->assertIsInt($thirdIndex);
        $this->assertArrayHasKey($thirdIndex, $players);
        $this->assertEquals(2, $thirdIndex);

        $this->assertIsInt($shouldBeFirstIndex);
        $this->assertArrayHasKey($shouldBeFirstIndex, $players);
        $this->assertEquals(0, $shouldBeFirstIndex);
        $this->assertSame($firstIndex, $shouldBeFirstIndex);
    }


    /**
     * @description Test Yatzy method setPlayerIndex.
     */
    final public function testYatzyShowGraphicDices(): void
    {
        /* Setup test case */
        $this->yatzy->play("roll");
        $player = $this->yatzy->getCurrentPlayer();
        $diceHand = $player->getDiceHand();
        $graphicDices = $this->yatzy->showGraphicDices($diceHand);

        /* Test case assertions */
        $this->assertIsIterable($graphicDices);
        $this->assertIsArray($graphicDices);
        $this->assertNotEmpty($graphicDices);
    }


    /**
     * @description Test Yatzy method selectScores without saved scores.
     */
    final public function testYatzyScoreSelectionNoScores(): void
    {
        /* Setup test case */
        $this->yatzy->play("roll");
        $this->yatzy->play("roll");
        $this->yatzy->play("roll");
        $scoreSelection = $this->yatzy->scoreSelection();

        /* Test case assertions */
        $this->assertIsString($scoreSelection);
        $this->assertNotEmpty($scoreSelection);
    }


    /**
     * @description Test Yatzy method selectScores with saved scores.
     */
    final public function testYatzyScoreSelectionWithScores(): void
    {
        /* Setup test case */
        $this->yatzy->play("roll");
        $player = $this->yatzy->getCurrentPlayer();
        $lastRoll = $player->getlastRoll();
        $player->saveScores($lastRoll, 1);
        $playerScores = $player->getPlayerScore();
        $scoreSelection = $this->yatzy->scoreSelection();

        /* Test case assertions */
        $this->assertIsIterable($playerScores);
        $this->assertIsArray($playerScores);
        $this->assertNotEmpty($playerScores);
        $this->assertIsString($scoreSelection);
        $this->assertNotEmpty($scoreSelection);
    }
}

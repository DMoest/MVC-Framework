<?php

/**
 * Namespace declared and others in use.
 */
namespace Daap19\Dice;
use Daap19\Traits\ResultsAsStringTrait;



/**
 * @name Player
 * @package Daap19\Dice
 */
class Player implements PlayerInterface
{
    use ResultsAsStringTrait;

    protected array $results = [];
    protected array $lastRoll = [];
    protected object $diceHand;
    protected ?int $sum = null;
    protected ?float $average = null;
    protected int $faces = 6;
    protected int $dices = 1;


    /**
     * @method __construct()
     * @description YatzyPlayer class constructor method.
     */
    public function __construct(int $dices = 1, int $faces = 6)
    {
        $this->sum = 0;
        $this->average = 0;
        $this->diceHand = new DiceHand($dices, $faces);
    }


    /**
     * @method rollDices()
     * @description creates a new object from class DiceHand and rolls the hand of dices.
     * @param int $dices as number of dices in hand.
     * @param int $faces as number of faces on the dices in the hand.
     * @return array of integers as values from dice hand roll.
     */
    public function rollDices(int $dices = 1, int $faces = 6): array
    {
        $this->lastRoll = $this->diceHand->roll($dices);

        foreach ($this->lastRoll as $key => $dice) {
            $this->lastRoll[$key] = $dice;
            $this->results[] = $dice;
        }

        return $this->lastRoll;
    }


    /**
     * @method getResults()
     * @description returns results as array of integers representing values from rolling dices.
     * @return array of integers
     */
    public function getResults(): array
    {
        return $this->results;
    }


    /**
     * @method getSumTotal()
     * @description setter/getter method combined that returns the sum total of all result values from the property array results.
     * @return int as total value of array results.
     */
    public function getSumTotal(): int
    {
        /* Set sum total */
        $this->sum = intval(array_sum($this->results));

        /* Get sum total */
        return $this->sum;
    }


    /**
     * @method getLastRoll()
     * @description returns array of values from last dice hand roll.
     * @return array of integers as values.
     */
    public function getLastRoll(): array
    {
        return $this->lastRoll;
    }


    /**
     * @method getLastHand()
     * @description return dice hand as object.
     * @return ?object
     */
    public function getDiceHand(): ?object
    {
        return $this->diceHand;
    }


    /**
     * @method getAverage()
     * @description setter/getter method combined that returns the average float|integer value of values in array of results.
     * @return float|null as a calculated average value from results.
     */
    public function getAverage(): ?float
    {
        if (count($this->results) > 0) {
            $this->average = round(array_sum($this->results) / count($this->results), 2);
        }

        return $this->average;
    }

}

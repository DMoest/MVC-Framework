<?php

/**
 * Namespace declared and others in use.
 */
namespace Daap19\Dice;
use Daap19\Traits\ResultsAsStringTrait;



/**
 * Class DicePlayer
 * @description Class DicePlayer extends the Player class. For easier use of same base class interfaces are implemented for each of the related classes.
 * @package Daap19\Dice
 */
class DicePlayer extends Player implements DicePlayerInterface
{
    use ResultsAsStringTrait;

    private int $credit;
    private int $wins;
    private bool $stopped;
    private bool $bust;
    private bool $out;
    private bool $winner;
    private bool $machine;


    /**
     * @method __construct()
     * @description YatzyPlayer class constructor method.
     * @param int $startCredit
     * @param int $machinePlayer
     */
    public function __construct(int $startCredit = 25, int $machinePlayer = 1)
    {
        parent::__construct(2, 6); // construct from parent class.

        $this->credit = $startCredit;
        $this->wins = 0;
        $this->stopped = false;
        $this->bust = false;
        $this->out = false;
        $this->winner = false;
        $this->machine = boolval($machinePlayer); // convert back to boolval.
    }


    /**
     * @method getCredit()
     * @description getter function to return players credit account.
     * @return int as value of player credit.
     */
    public function getCredit(): int
    {
        return $this->credit;
    }


    /**
     * @method setCredit()
     * @description setter function to set new credit to player credit account.
     * @param int $newCredit as the credit to set.
     * @return void
     */
    public function setCredit(int $newCredit): void
    {
        $this->credit = $newCredit;
    }


    /**
     * @method setWin()
     * @description setter method that iterates the property wins +1.
     * @returns void
     */
    public function setWin(): void
    {
        $this->wins++;
    }


    /**
     * @method getWins()
     * @description getter method that returns the integer value of the property wins.
     * @return int
     */
    public function getWins(): int
    {
        return $this->wins;
    }


    /**
     * @method stop()
     * @description setter method to set boolean property to indicate that player have stopped at this score.
     * @return void
     */
    public function stop(): void
    {
        $this->stopped = true;
    }


    /**
     * @method hasStopped()
     * @description getter method that returns a boolean value to indiate if player have stopped or not.
     * @return bool as indicator if player have stopped.
     */
    public function hasStopped(): bool
    {
        return $this->stopped;
    }


    /**
     * @method isBust()
     * @description returns a boolean value to indicate if this player has gone bust in the current round.
     * @return bool
     */
    public function isBust(): bool
    {
        return $this->bust;
    }


    /**
     * @method setBust()
     * @description Setter method to set boolean value when player is bust in current round.
     * @return void
     */
    public function setBust(): void
    {
        $this->bust = true;
    }


    /**
     * @method isOut()
     * @description returns a boolean value to indicate if this player has gone bust in the current round.
     * @return bool
     */
    public function isOut(): bool
    {
        return $this->out;
    }


    /**
     * @method setOut()
     * @description Setter method to set boolean value when player is bust in current round.
     * @return void
     */
    public function setOut(): void
    {
        $this->out = true;
    }


    /**
     * @method isMachine()
     * @description returns boolean value to indicate if this player is run by computer/machine or not.
     * @return bool as indicator of machine player or not.
     */
    public function isMachine(): bool
    {
        return $this->machine;
    }

    /**
     * @description Setter method to set the player to winner of the game.
     */
    final public function setWinner(): void
    {
        $this->winner = true;
    }


    /**
     * @description Getter method to return if player is winner or not.
     * @return bool
     */
    final public function isWinner(): bool
    {
        return $this->winner;
    }


    /**
     * @method setForNextRound()
     * @description setter method that setts up a player for next round of dice game.
     * @return void
     */
    public function setForNextRound(): void
    {
        $this->results = [];
        $this->lastRoll = [];
        $this->sum = null;
        $this->average = null;
        $this->stopped = false;
        $this->bust = false;
    }
}

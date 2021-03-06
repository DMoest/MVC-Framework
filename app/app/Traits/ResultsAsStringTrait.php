<?php

/**
 * Namespace declared and others in use.
 */
namespace Daap19\Traits;



/**
 * Trait ResultsAsStringTrait
 * @package daap19\Dice
 */
trait ResultsAsStringTrait
{
    /**
     * @method getResultsAsString()
     * @description Getter method for results as string. Works for any of the Player classes.
     * @return string as all values in the results array seperated by commas, ending with equal to the sum of the values in the array.
     */
    public function getResultsAsString(): string
    {
        $numberOfDices = count($this->results);
        $outputString = "";

        foreach ($this->results as $key => $diceValue) {
            if ($key < $numberOfDices - 1) {
                $outputString .= $diceValue.", ";
            } else if ($key === $numberOfDices - 1) {
                $outputString .= $diceValue." = ".array_sum($this->results);
            }
        }

        return $outputString;
    }


    /**
     * @method getLastRollAsString()
     * @description Getter method for lastRoll as string. Works for any of the Player classes.
     * @return string as all values in the lastRoll array seperated by commas, ending with equal to the sum of the values in the array.
     */
    public function getLastRollAsString(): string
    {
        $numberOfDices = count($this->lastRoll);
        $lastRollString = "";

        foreach ($this->lastRoll as $key => $diceValue) {
            if ($key < $numberOfDices - 1) {
                $lastRollString .= $diceValue.", ";
            } else if ($key === $numberOfDices - 1) {
                $lastRollString .= $diceValue." = ".array_sum($this->lastRoll);
            }
        }

        return $lastRollString;
    }
}

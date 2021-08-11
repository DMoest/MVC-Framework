<?php

/**
 * Namespace declared and others in use.
 */
namespace Daap19\Traits;



/**
 * Trait ScoreBoardTrait
 * @package daap19\Dice
 */
trait ScoreBoardTrait
{
    /**
     * @method printDiceScoreBoard()
     * @description trait method is used to generate a scoreboard for all players in a game of Dice 21.
     * Counts players. Sets up a element container for the scoreboard.
     * Gets the player then collects data from the player object thru its class methods.
     * Builds information elements depending on the data collected.
     * Closes the containing element.
     * Returns a string object to be presented as a score board.
     * @return string
     */
    final public function printDiceScoreBoard(): string
    {
        /* Setup score board outer container element */
        $numOfPlayers = count($this->players);
        $scoreBoard = "<div class=\"flex flex-row justify-between gap-1 md:gap-4\">";

        /* Generate inner elements for scores */
        for ($i = 0; $i < $numOfPlayers; $i++) {

            /* Get the player */
            $player = $this->players[$i];

            /* Collect data from player object thru its methods */
            $stringRes = $player->getResultsAsString();
            $average = $player->getAverage();
            $totalScore = $player->getSumTotal();
            $playerCredit = $player->getCredit();
            $playerWins = $player->getWins();
            $stopped = $player->hasStopped();
            $bust = $player->isBust();
            $out = $player->isOut();

            /* Build elements */
            $scoreBoard .= "<div class='w-full p-2 md:p-4 border-solid border-2 border-gray-400 rounded bg-blue-100'>";
            $scoreBoard .= "<h4 class='pb-2 font-weight-bold'>Player ".($i + 1)."</h4>";

            /* Only add elements if player have results */
            if ($totalScore > 0) {
                $scoreBoard .= "<p>$stringRes</p>";
                $scoreBoard .= "<p>Average dice value = ".$average."</p>";
                $scoreBoard .= "<p>Player ".($i + 1)." score = ".$totalScore."</p>";
            }

            /* Remaining credit for this player */
            $scoreBoard .= "<p class='pt-4'>Credit: ".$playerCredit."</p>";

            /* If there are winning round print them */
            if ($playerWins > 0) {
                $scoreBoard .= "<p>Winning rounds: ".$playerWins."</p>";
            }

            /* Print message if player have stopped or is bust. */
            if (intval($bust) === 1) {
                $scoreBoard .= "<span class='font-weight-bold text-red-500'>Player is bust.</span>";
            } else if (intval($stopped) === 1) {
                $scoreBoard .= "<span class='font-weight-bold text-green-500'>Player has stopped.</span>";
            } else if (intval($out) === 1) {
                $scoreBoard .= "<span class='font-weight-bold text-red-500'>Player is out of the game.</span>";
            }

            /* Close the div */
            $scoreBoard .= "</div>";
        }

        /* Close outer element container tag */
        $scoreBoard .= "</div>";

        return $scoreBoard;
    }


    /**
     * @method printYatzyScoreBoard()
     * @description trait method is used to generate a scoreboard for all players in a game of Yatzy.
     * Counts players. Sets up a element container for the scoreboard.
     * Gets the player then collects data from the player object thru its class methods.
     * Builds information elements depending on the data collected.
     * Closes the containing element.
     * Returns a string object to be presented as a score board.
     * @return string
     */
    final public function printYatzyScoreBoard(): string
    {
        /* Setup score board outer container element */
        $scoreBoard = "<div class=\"diceForm__results--container\">";

        foreach ($this->players as $key => $player) {

            /* Results as string */
            $playerNumber = $this->/** @scrutinizer ignore-call */getPlayerIndex() + 1;
            $sum = $player->getScore();
            $average = $player->getAverage();
            $totalScore = $player->getPlayerScoreSum();
            $diceHand = $player->getDiceHand();
            $graphicDices = $this->/** @scrutinizer ignore-call */showGraphicDices($diceHand);

            /* Build elements */
            $scoreBoard .= "<div class=\"diceForm__results--player-".$key."\">";
            $scoreBoard .= "<h4>Player ".($key + 1)."</h4>";

            /* Add graphic dices to scoreboard */
            foreach ($graphicDices as $diceClass) {
                $scoreBoard .= "<span class=\"dice-utf8\">";
                $scoreBoard .= "<i class=".$diceClass."></i>";
                $scoreBoard .= "</span>";
            }

            $scoreBoard .= "<p>Dice hand sum total: <b>".$sum."</b></p>";
            $scoreBoard .= "<p>Player rolls an average dice value of: <b>".$average."</b></b></p>";

            /* Only add element if player have results */
            if ($totalScore > 0) {
                $scoreBoard .= "<p>Player ".$playerNumber." game score: <b>".$totalScore."</b></p>";
            }

            /* Close the player container div element */
            $scoreBoard .= "</div>";
        }

        /* Close outer container element tag */
        $scoreBoard .= "</div>";

        return $scoreBoard;
    }
}

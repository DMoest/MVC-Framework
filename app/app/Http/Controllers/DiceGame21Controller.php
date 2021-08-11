<?php

/**
 * Namespace declared and others in use.
 */
namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Daap19\Dice\DiceGame21;



/**
 * Class DiceGame21Controller
 */
class DiceGame21Controller extends Controller
{
    /**
     * @description
     * @return View
     */
    final public function viewInit(): View
    {
        $data = [
            "header" => "DiceGame 21",
            "message" => "Welcome, please setup a game of dice 21.
                You choose the amout of players to be in it and the starting credit each player have.
                Keep in mind, there will be an extra player added on top of the number of players you choose if the checkbox for a computer player is selected.
                All players you create from the slider will be user controlled. ",
            "action" => url("/dice/init/process"),
        ];

        return view("diceGame21_init", $data);
    }



    /**
     * @description
     * @param Request $request
     * @return RedirectResponse
     */
    final public function processInit(Request $request): RedirectResponse
    {
        /* Catch POST request from dice/init/view form */
        $input = $request->all();
        $players = intval($input["players"]);
        $startCredit = intval($input["credit"]);
        $machine = null;

        if (isset($input["machine"])) {
            $machine = boolval($input["machine"]);
        } elseif (!isset($input["machine"])) {
            $machine = false;
        }

        /* Create new DiceGame object on SESSION variable */
        $diceGame = new DiceGame21($players, $startCredit, boolval($machine));
        session()->put('diceGame21', $diceGame);

        return redirect(url("/dice/view"));
    }



    /**
     * @description
     * @return View
     */
    final public function viewMain(): View
    {
        $diceGame = session()->get("diceGame21");
        $players = $diceGame->getPlayers();
        $playerIndex = $diceGame->getPlayerIndex();
        $player = $players[$playerIndex];
        $credit = $player->getCredit();
        $diceHand = $player->getDiceHand();
        $graphicDices = $diceGame->showGraphicDices($diceHand);

        $data = [
            "header" => "DiceGame 21",
            "message" => "DiceGame on, roll them dices!",
            "action" => url("/dice/process"),
            "round" => $diceGame->getRound(),
            "players" => $diceGame->getPlayers(),
            "score" => $player->getSumTotal(),
            "credit" => $credit,
            "numberOfPlayers" => count($diceGame->getPLayers()),
            "playerNumber" => $diceGame->getPlayerIndex() + 1,
            "graphicDices" => $graphicDices,
            "scoreBoard" => $diceGame->printDiceScoreBoard(),
        ];

        return view("diceGame21", $data);
    }



    /**
     * @description Controller method to render main view.
     * @param Request $request
     * @return RedirectResponse
     */
    final public function processMain(Request $request): RedirectResponse
    {
        $input = $request->all();
        $diceGame = session()->get("diceGame21");

        /* Catch POST request from dice__init form and store values to SESSION variable */
        $dices = intval($input["dices"]) ?? null;
        $submit = strval($input["submit"]) ?? null;

        /* Play game */
        $players = $diceGame->getPlayers();
        $playerIndex = $diceGame->getPlayerIndex();
        $diceGame->playGame($dices, $submit);

        // Return the redirect depending on where we are in this round.
        if ($playerIndex !== array_key_last($players)) {
            return redirect(url("/dice/view"));
        }

        return redirect(url("/dice/result/view"));
    }



    /**
     * @description
     * @return View
     */
    final public function viewResult(): View
    {
        $diceGame = session()->get("diceGame21");

        $data = [
            "header" => "DiceGame 21 - Results",
            "message" => "Results for this round.",
            "action" => url("/dice/result/process"),
            "round" => $diceGame->getRound(),
            "players" => $diceGame->getPlayers(),
            "playerNumber" => $diceGame->getPLayerIndex() + 1,
            "scoreBoard" => $diceGame->printDiceScoreBoard(),
        ];

        return view("diceGame21_result", $data);
    }



    /**
     * @description
     * @return RedirectResponse
     */
    final public function processResult(): RedirectResponse
    {
        $diceGame = session()->get("diceGame21");
        $diceGame->setNextRound();
        $playersOutOfTheGame = $diceGame->checkAllPlayersCredit();
        $numberOfPlayers = count($diceGame->getPlayers());

        if ($playersOutOfTheGame < $numberOfPlayers - 1) {
            return redirect(url("/dice/view"));
        }

        return redirect(url("/dice/finalResult/view"));
    }



    /**
     * @description
     * @return View
     */
    final public function viewFinalResult(): View
    {
        $diceGame = session()->get("diceGame21");

        $data = [
            "header" => "DiceGame 21 - Final Results",
            "message" => "The game is over and here are the results. Thank you for playing this game and welcome back any time! ...just bring more credit to the game.",
            "round" => $diceGame->getRound(),
            "players" => $diceGame->getPlayers()
        ];

        return view("diceGame21_finalResult", $data);
    }
}

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
            "message" => "Welcome, please setup a game of dice.
                You choose the amout of players to be in it and the starting credit each player have.
                Keep in mind that there will be an extra player added on top of the number you choose.
                This player is played by the computer.",
            "action" => url("/dice/init/process"),
        ];

        return view("dice_init", $data);
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
        } elseif(!isset($input["machine"])) {
            $machine = false;
        }

        /* Create new DiceGame object on SESSION variable */
        $diceGame = new DiceGame21($players, $startCredit, $machine);
        session()->put('diceGame21', $diceGame);

        return redirect(url("/dice/view"));
    }



    /**
     * @description
     * @return View
     */
    final public function viewMain(): View
    {

    }



    /**
     * @description Controller method to render main view.
     * @param Request $request
     * @return RedirectResponse
     */
    final public function processMain(Request $request): RedirectResponse
    {

    }



    /**
     * @description
     * @return View
     */
    final public function viewResult(): View
    {
        $diceGame = session()->get("diceGame21");
        $players = $diceGame->getPlayers();
        $player = $players[$diceGame->getPlayerIndex()];

        $data = [
            "header" => "DiceGame 21 - Results",
            "message" => "Results for this round.",
            "action" => url("/dice/result/process"),
            "round" => $diceGame->getRound(),
            "playerNumber" => $diceGame->getPLayerIndex() +1,
            "graphicDices" => $diceGame->showGraphicDices($player->getLastHand()),
            "scoreBoard" => $diceGame->printDiceScoreBoard(),
        ];

        return view("layout/dice/result/view.php", $data);
    }


    /**
     * @description
     * @return RedirectResponse
     */
    final public function processResult(): RedirectResponse
    {
        $diceGame = session()->get("diceGame21");
        $players = $diceGame->getPlayers();
        $playerIndex = $diceGame->getPlayerIndex();
        $player = $players[$playerIndex];
        $lastIndex = array_key_last($players);
        $bust = intval($player->isBust());
        $stopped = intval($player->hasStopped());

        if ($stopped === 1 ?? $bust === 1) {
            if ($playerIndex === $lastIndex) {
                $diceGame->setNextRound();
            }

            $diceGame->setNextPlayerIndex();
        }

        return redirect(url("/dice/view"));
    }
}
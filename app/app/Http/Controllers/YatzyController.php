<?php

/**
 * Namespace declared and others in use.
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Daap19\Yatzy\Yatzy;



/**
 * Class YatzyController
 */
class YatzyController extends Controller
{
    /**
     * @description Render view with form for user input. This view is intended to start a game of Yatzy.
     * @return View
     */
    final public function viewInit(): View
    {
        return view('yatzy_init', [
            'header' => "Play a game of Yatzy",
            'message' => "Welcome to a game of Yatzy.
                This is a simplyfied version of the game Yatzy.
                You will only play the first part of the game where you roll and collect dices of the same value.
                First you roll the dices then you select the dices to keep/hold, if any, before you roll again.
                You have three times rolling the dices per round. At the end of each round you can choose where to position your points/dices,
                check your hand carefully before selecting position as it will be zero points if no dices of the selected value exists.
                After all posibilities f placing your points/dices have been chosen the game is over and you will see a summary of your game.
                Please press start to play, good luck!",
            'action' => url('/yatzy/init/process'),
        ]);
    }


    /**
     * @description Create new instance of class Yatzy and process response by saving to named session. Lastly redirect to route.
     * @param Request $request
     * @return Redirector
     */
    final public function processInit(Request $request): Redirector
    {
        $yatzy = new Yatzy();

        $request->session()->put('yatzy', $yatzy);

        $theSession = $request->session()->get('yatzy');

        return redirect('/yatzy/view')->with($theSession);
    }


    /**
     * Main view the result.
     */
    final public function viewMain(): View
    {
        $yatzy = new Yatzy();

        session()->put('yatzy', $yatzy);

        $yatzy = session()->get('yatzy');
        $player = $yatzy->getCurrentPlayer();
        $diceHand = $player->getDiceHand();

        $data = [
            "header" => "Yatzy",
            "message" => "Collect them dices good!",
            "action" => url("/yatzy/process"),
            "selectScoresURL" => url("/yatzy__selectScores/view"),
            "round" => $yatzy->getRound(),
            "playerRolls" => $player->getRolls(),
        ];

        if ($diceHand !== null) {
            $data["graphicDices"] = $yatzy->showGraphicDices($diceHand);
        }

        return view('yatzy', $data);
    }


    /**
     * @method processMain()
     * @description method to process POST action to return response object.
     */
    final public function processMain(Request $request): Redirector
    {
        /* Catch POST request from dice__init form and store values to SESSION variable */
        $yatzy = session()->get('yatzy');
        $player = $yatzy->getCurrentPlayer();
        $submit = strval($_POST["submit"]);
        $diceHand = $player->getDiceHand();
        $dices = $diceHand->getDices();
        $keepThese = [];
        $input = $request->all();


        ddd($input);


        /* Keep user selected dice values */
        if ($diceHand !== null) {
            if (isset($_POST["dice-0"])) {
                $keepThese[0] = $dices[0];
            }

            if (isset($_POST["dice-1"])) {
                $keepThese[1] = $dices[1];
            }

            if (isset($_POST["dice-2"])) {
                $keepThese[2] = $dices[2];
            }

            if (isset($_POST["dice-3"])) {
                $keepThese[3] = $dices[3];
            }

            if (isset($_POST["dice-4"])) {
                $keepThese[4] = $dices[4];
            }

            $diceHand->keepDices($keepThese);
        }

        /* Play game */
        $yatzy->play($submit);
        $this->scoreBoard = $yatzy->printYatzyScoreBoard();

        // Return the redirect through parent class ControllerBase destination depends on number of rolls.
        if ($player->getRolls() < 3) {
            return $this->redirect(url("/yatzy/view"));
        }

        return $this->redirect(url("/yatzy__selectScores/view"));
    }
}

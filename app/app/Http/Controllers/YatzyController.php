<?php

/**
 * Namespace declared and others in use.
 */
namespace App\Http\Controllers;

use App\Models\HighscoreYatzy;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Daap19\Yatzy\Yatzy;



/**
 * Class YatzyController
 */
class YatzyController extends Controller
{
    /**
     * @description Controller method to render view for initialization of a game of Yatzy.
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
     * @return RedirectResponse
     */
    final public function processInit(Request $request): RedirectResponse
    {
        $yatzy = new Yatzy();

        $request->session()->put('yatzy', $yatzy);

        return redirect('/yatzy/view');
    }



    /**
     * @description Controller method to render main yatzy game view.
     * @return View
     */
    final public function viewMain(): View
    {
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
            "playerNumber" => $yatzy->getPlayerIndex() + 1,
        ];

        if ($diceHand !== null) {
            $data["graphicDices"] = $yatzy->showGraphicDices($diceHand);
        }

        return view('yatzy', $data);
    }



    /**
     * @description Controller method to render main view.
     * @param Request $request
     * @return RedirectResponse
     */
    final public function processMain(Request $request): RedirectResponse
    {
        /* Catch POST request from dice__init form and store values to SESSION variable */
        $input = $request->all();
        $yatzy = session()->get('yatzy');

        $player = $yatzy->getCurrentPlayer();
        $submit = strval($input["submit"]);
        $diceHand = $player->getDiceHand();
        $dices = $diceHand->getDices();
        $keepThese = [];

        /* Keep user selected dice values */
        if ($diceHand !== null) {
            if (isset($input["dice-0"])) {
                $keepThese[0] = $dices[0];
            }

            if (isset($input["dice-1"])) {
                $keepThese[1] = $dices[1];
            }

            if (isset($input["dice-2"])) {
                $keepThese[2] = $dices[2];
            }

            if (isset($input["dice-3"])) {
                $keepThese[3] = $dices[3];
            }

            if (isset($input["dice-4"])) {
                $keepThese[4] = $dices[4];
            }

            $diceHand->keepDices($keepThese);
        }

        /* Play game */
        $yatzy->play($submit);
        $this->scoreBoard = $yatzy->printYatzyScoreBoard();

        // Return the redirect through parent class ControllerBase destination depends on number of rolls.
        if ($player->getRolls() < 3) {
            return redirect(url("/yatzy/view"));
        }

        return redirect(url("/yatzy/select/view"));
    }



    /**
     * @description Renders view where player can select where to place her/his score.
     * @return View
     */
    final public function viewSelect(): View
    {
        $yatzy = session()->get('yatzy');
        $player = $yatzy->getCurrentPlayer();

        $data = [
            "header" => "Yatzy - Player Points Selection",
            "message" => "Select where on the chart to place your points. Once your points for this round have been placed you can not place more points to this position. Try to make strategic placement for a higher sum total as your end result.",
            "action" => url("/yatzy/select/process"),
            "round" => $yatzy->getRound(),
            "playerNumber" => $yatzy->getPlayerIndex() + 1,
            "graphicDices" => $yatzy->showGraphicDices($player->getDiceHand()),
            "scoreBoard" => $yatzy->printYatzyScoreBoard(),
            "scoreSelection" => $yatzy->scoreSelection(),
            "scoreSum" => $player->getPlayerScoreSum(),
        ];

        return view("/yatzy_select", $data);
    }



    /**
     * @description Controller method to recive and process request from user input.
     * @param Request $request
     * @return RedirectResponse
     */
    final public function processSelect(Request $request): RedirectResponse
    {
        $input = $request->all();
        $yatzy = session()->get('yatzy');
        $player = $yatzy->getCurrentPlayer();
        $diceHand = $player->getDiceHand();
        $lastRoll = $player->getLastRoll();
        $maxScores = count($player->getPlayerScore());
        $playerSavedScores = $player->getAmountOfScoresSaved();

        /* Control where points are stored */
        switch ($input["scoreSelect"]) {
            case "0":
                $player->saveScores($lastRoll, 1);
                break;
            case "1":
                $player->saveScores($lastRoll, 2);
                break;
            case "2":
                $player->saveScores($lastRoll, 3);
                break;
            case "3":
                $player->saveScores($lastRoll, 4);
                break;
            case "4":
                $player->saveScores($lastRoll, 5);
                break;
            case "5":
                $player->saveScores($lastRoll, 6);
                break;
        }

        $playerSavedScores++;
        $diceHand->setForNextRound();
        $player->setForNextRound();
        $yatzy->setNextRound();

        if ($playerSavedScores < $maxScores) {
            // Return the redirect through parent class ControllerBase
            return redirect(url("/yatzy/view"));
        }

        // Return the redirect through parent class ControllerBase if player saved $maxScores or more.
        return redirect(url("/yatzy/result/view"));
    }


    /**
     * @description
     * @return View
     */
    final public function viewResult(): View
    {
        $yatzy = session()->get("yatzy");
        $player = $yatzy->getCurrentPlayer();

        $data = [
            "header" => "Yatzy - Players Final Results",
            "message" => "You have compleated this part of the game and here are your current scores.",
            "action" => url("/yatzy/result/process"),
            "round" => $yatzy->getRound(),
            "playerNumber" => $yatzy->getPlayerIndex() + 1,
            "scoreBoard" => $yatzy->printYatzyScoreBoard(),
            "playerScores" => $player->getPlayerScore(),
            "scoreSum" => $player->getPlayerScoreSum(),
        ];

        return view("yatzy_result", $data);
    }


    /**
     * @return RedirectResponse
     */
    final public function processResult(Request $request): RedirectResponse
    {
        $input = $request->post();
        $yatzy = session()->get("yatzy");
        $player = $yatzy->getCurrentPlayer();
        $score = $player->getPlayerScoreSum();

        HighscoreYatzy::create(['name' => $input['name'], 'score' => $score]);

        return redirect('/yatzy/highscore/view');
    }



    final public function viewHighscore() {

        $data = [
            'header' => 'Yatzy - Highscore',
            'message' => "Here's the all time highscore list. Check if you have made it!",
            'highscores' => HighscoreYatzy::orderBy('score', 'desc')->limit(10)->get(),
        ];

        return view('yatzy_highscore', $data);
    }
}

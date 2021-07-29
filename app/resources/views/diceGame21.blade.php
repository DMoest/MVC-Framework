@extends('layouts.layout_diceGame21')


@section('content')

    <form method="post" action="{{ $action }}" class="diceForm">
    @csrf
        <h1>{{ $header }}</h1>
        <p><i>{{ $message }}</i></p>
        <p>Round: {{ $round }}</p>
        <p>It's Player {{ $playerNumber }} </p>
        <p>Player {{ $playerNumber }} score is: {{ $score }}</p>

        <div>
            <label class="diceForm__text--paragraph" for="dices">Number of dices:
                <input class="diceForm__input--slider" type="range" name="dices" min="1" max="2" value="1" class="diceForm__input--slider">
            </label>
            <p><i>This range is 1-2 for the dices to be rolled.</i></p>
        </div>

        <div class="diceForm__submit--container">
            <button class="diceForm__input--button diceForm__input--buttonSuccess" type="submit" name="submit" value="roll">Roll the dices</button>
            <button class="diceForm__input--button diceForm__input--buttonDanger" type="submit" name="submit" value="stop">Stop</button>
        </div>
    </form>

@endsection

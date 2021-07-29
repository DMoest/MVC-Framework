@extends ('layouts.layout_yatzy')


@section('content')

    <form method="post" action="{{ $action }}" class="diceForm">
    @csrf

        <p>{{ $header  }}</p>
        <p>{{ $message }}</p>
        <p>Round: {{ $round }}</p>
        <p>Times player have rolled the dices: <b>{{ $playerRolls }}</b></p>

        @if(isset($graphicDices))
            <p class="diceForm__results"></p>
                <h3>Player {{ $playerNumber }} score</h3>
                <div class="diceForm__graphicDices">

                @foreach($graphicDices as $key => $value)
                    <div class="diceForm__graphicDices--selectionBox">
                    <i class="dice-utf8 {{ $value }}"></i>

                    @if($playerRolls !== 3)
                        <label>
                        <input class="diceForm__input--checkbox" id="dice-{{ $key }}" name="dice-{{ $key }}" type="checkbox"/></label>
                    @endif

                    </div>
                @endforeach

                </div>
                <p><i>Select dices to keep at next throw of dices.</i></p>
            </p>
        @endif

        <div class="diceForm__submit--container">
            @if($playerRolls < 3)
                <button class="diceForm__input--button diceForm__input--buttonSuccess" type="submit" name="submit" value="roll">Roll the dices</button>
                <button class="diceForm__input--button diceForm__input--buttonDanger" type="submit" name="submit" value="stop">Stop</button>
            @elseif($playerRolls === 3)
                <button class="diceForm__input--button diceForm__input--buttonSuccess" type="submit" name="submit" value="selectScores">Select scores</button>
            @endif
        </div>
    </form>

@endsection

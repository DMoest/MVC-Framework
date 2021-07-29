@extends('layouts.layout_diceGame21')


@section('content')

    <form method="post" action="{{ $action }}" class="diceForm">
    @csrf
        <h1>{{ $header }}</h1>
        <p><i>{{ $message }} - round {{ $round }}</i></p>
        <div class="diceForm__results">
            <h3>Current players score</h3>

            <p>Last played hand from Player {{ $playerNumber }}</p>
            <p class="dice-utf8">
                @foreach($graphicDices as $value)
                    <i class="{{ $value }}"></i>
                @endforeach
            </p>

            {{ $scoreBoard }}
        </div>

        <div class="diceForm__submit--container">
            <input class="diceForm__input--button diceForm__input--buttonLink" type="submit" name="submit" value="next"/>
        </div>
    </form>

@endsection

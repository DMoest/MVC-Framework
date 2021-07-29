@extends('layouts.layout_yatzy')


@section('content')

    <h1>{{ $header }}</h1>
    <p><i>{{ $message }}</i></p>

    @if (isset($playerScores))
        <h3>Player {{ $playerNumber }}</h3>
        <div>

        @foreach($playerScores as $key => $value)
            <div class="diceContainer__results">
                <p><i class="dice-utf8 dice-{{ $key +1 }}"></i> Points: <b></b>{{ $value }}</b></p>
            </div>
        @endforeach

        <h4>Player total score: {{ $scoreSum }}</h4>
        </div>
    @endif

@endsection

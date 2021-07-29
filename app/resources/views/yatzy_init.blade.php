@extends('layouts.layout_yatzy')


@section('content')

    <form action="{{ $action  }}" method="POST" class="diceForm">
    @csrf

        <h2 class="diceForm__text--header">{{ $header  }}</h2>
        <p class="diceForm__text--paragraph">{{ $message }}</p>

        <div class="diceForm__submit--container">
            <button class="diceForm__input--button diceForm__input--buttonLink" type="submit">Start game</button>
        </div>
    </form>

@endsection

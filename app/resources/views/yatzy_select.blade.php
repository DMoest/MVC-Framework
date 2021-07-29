@extends ('layouts.layout_yatzy')


@section('content')

    <form method="post" action="{{ $action }}" class="yatzyForm">
    @csrf
        <h1>{{ $header }}</h1>

        @if (isset($graphicDices))
            <div class="diceForm__results">
                <h3>Player {{ $playerNumber }}</h3>
                <div class="diceForm__graphicDices">

                    @foreach($graphicDices as $key => $value)

                        <!-- Each graphic dice representation -->
                        <div class="dice-utf8 diceForm__graphicDices--selectionBox">
                            <i class="dice-utf8 {{ $value }}"></i>
                        </div>
                    @endforeach

                </div>
                <p><i>{{ $message }}</i></p>
                {!! $scoreSelection !!}
                <p>Players total score: <b></b>{{ $scoreSum }}</b></p>
            </div>
        @endif

        <div class="diceForm__submit--container">
            <button class="diceForm__input--button diceForm__input--buttonLink" type="submit" name="submit">Position points</button>
        </div>
    </form>

@endsection

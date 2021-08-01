<x-layout>
    <x-section>
        <x-form method="post"
                action="{{ $action }}"
                class="p-4 bg-gray-100 border-2 border-solid border-gray-400 rounded-sm mb-6">

            <h2 class="font-header text-bold text-2xl mb-4">{{ $header }}</h2>

            @if (isset($graphicDices))
                <div class="">
                    <p class="pb-2">Player {{ $playerNumber }}</p>

                    <div class="w-60 flex flex-row justify-between">
                        @foreach($graphicDices as $key => $value)
                            <div class="dice-utf8 diceForm__graphicDices--selectionBox">
                                <i class="dice-utf8 {{ $value }}"></i>
                            </div>
                        @endforeach
                    </div>

                    <p class="text-sm italic"><i>{{ $message }}</i></p>
                    {!! $scoreSelection !!}
                    <p>Players total score: <b></b>{{ $scoreSum }}</b></p>
                </div>
            @endif

            <div class=" w-100 p-4">
                <button class="w-60 m-auto flex flex-row justify-around p-4 rounded-sm bg-blue-200 uppercase font-link font-semibold hover:bg-blue-300 hover:text-white" type="submit" name="submit">Position points <i class="p-1 fas fa-cash-register"></i></button>
            </div>

        </x-form>
    </x-section>
</x-layout>

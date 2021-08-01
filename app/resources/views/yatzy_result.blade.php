<x-layout>
    <x-section>
        <x-form method="get"
                action="{{ $action }}"
                class="p-4 bg-gray-100 border-2 border-solid border-gray-400 rounded-sm mb-6">

            <h1 class="font-header text-bold text-2xl mb-4">{{ $header }}</h1>
            <p class="pb-2 italic text-sm">{{ $message }}</p>

            @if (isset($playerScores))
                <h3>Player {{ $playerNumber }}</h3>

                <div>
                    @foreach($playerScores as $key => $value)
                        <div class="flex flex-row justify-between p-0 m-0">
                            <p class=""><i class="dice-utf8 dice-{{ $key +1 }}"></i> Points: <b></b>{{ $value }}</b></p>
                        </div>
                    @endforeach

                    <p class="py-4">Player total score: {{ $scoreSum }}</p>
                </div>
            @endif

        </x-form>
    </x-section>
</x-layout>

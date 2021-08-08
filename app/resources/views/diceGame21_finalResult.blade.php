<x-layout>
    <x-section>

        <div class="p-4">

            <h2 class="py-6 text-2xl text-center font-weight-bold font-header">{{ $header }}</h2>

            <p class="text-sm italic py-4">{{ $message }}</p>

            @foreach($players as $key => $player)

                @if ($player->isWinner() === true)
                    <div class="pb-4">
                        <p class="text-green-400 font-weight-bold">Player {{ $key+1 }} is the winner! </p>
                        <p>Player {{ $key+1 }} won {{ $player->getWins() }} rounds in the game and walks away with a total of {{ $player->getCredit() }} bitcoins. </p>
                    </div>
                @endif

            @endforeach

            @foreach($players as $key => $player)

                @if ($player->isWinner() !== true)
                    <p>Player {{ $key+1 }} lost.</p>

                    @if ($player->getWins() > 0)
                        <p>Even thou player {{ $key+1 }} did not win the game in the end this player had {{ $player->getWins() }} winning rounds in the game. Well played, better luc next time!</p>
                    @endif

                @endif

            @endforeach

        </div>

    </x-section>
</x-layout>

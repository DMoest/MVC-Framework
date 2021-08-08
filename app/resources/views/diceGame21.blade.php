<x-layout>
    <x-section>
        <x-form method="post" action="{{ $action }}"
                class="p-2 md:p-4 md:bg-gray-100 md:border-2 md:border-solid md:border-gray-400 md:rounded-sm mb-6">

            {{-- Header and motivation text --}}
            <h2 class="font-header text-center font-weight-bold text-2xl mb-4">{{ $header }}</h2>
            <p class="pb-2 text-center italic">{{ $message }} </p>


            {{-- Game information --}}
            <p class="pb-1">Game round: {{ $round }}</p>
            <p class="pb-1">It's Player {{ $playerNumber }} </p>
            <p class="pb-1">Score is: {{ $score }}</p>


            {{-- Graphic dices --}}
            @if ($graphicDices !== NULL)
                <p class="mt-4">Last played hand:</p>
                <p class="dice-utf8">
                    @foreach($graphicDices as $value)
                        <i class="{{ $value }}"></i>
                    @endforeach
                </p>
            @endif


            {{-- Choose dices to roll --}}
            <div class="pt-2 md:pt-6">
                <label for="dices" class="">Number of dices:
                    <input type="range" name="dices" min="1" max="2" value="1" class="block w-16">
                </label>

                <p class="text-sm pb-2 italic">This range is 1-2 and represents the dices to be rolled.</p>
            </div>


            {{-- Submit buttons to controll move --}}
            <div class="md:m-auto md:p-4 my-6 flex flex-row gap-2 justify-between md:justify-around">
                <button class="w-52 flex flex-row justify-around p-4 rounded-sm bg-green-400 uppercase font-link font-semibold hover:bg-green-300 hover:text-white" type="submit" name="submit" value="roll">
                    Roll dices <x-icon-play class="w-4" /></button>
                <button class="w-52 flex flex-row justify-around p-4 bg-red-400 text-center rounded-sm uppercase font-link font-semibold hover:bg-red-300 hover:text-white" type="submit" name="submit" value="stop">
                    Stop <x-icon-hand-stop class="w-4 inline-block group-hover:fill-current group-hover:text-white" /></button>
            </div>


            {!! $scoreBoard !!}


        </x-form>
    </x-section>
</x-layout>

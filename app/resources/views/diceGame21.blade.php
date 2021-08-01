<x-layout>
    <x-section>
        <x-form method="post" action="{{ $action }}"
                class="p-4 bg-gray-100 border-2 border-solid border-gray-400 rounded-sm mb-6">

            <h2 class="font-header text-bold text-2xl mb-4">{{ $header }}</h2>
            <p class="pb-2 italic">{{ $message }} </p>
            <p class="pb-2">Round: {{ $round }}</p>
            <p class="pb-2">It's Player {{ $playerNumber }} </p>
            <p class="pb-2">Player {{ $playerNumber }} score is: {{ $score }}</p>

            <label for="dices" class="">Number of dices:
                <input type="range" name="dices" min="1" max="2" value="1" class="">
            </label>

            <p class="pb-2 italic">This range is 1-2 for the dices to be rolled.</p>

            <div class="m-auto p-4 flex flex-row justify-around">
                <button class="w-52 flex flex-row justify-around p-4 rounded-sm bg-green-400 uppercase font-link font-semibold hover:bg-green-300 hover:text-white" type="submit" name="submit" value="roll">
                    Roll dices <x-icon-play class="w-4" /></button>
                <button class="group w-60 flex flex-row justify-around p-4 bg-red-400 text-center rounded-sm uppercase font-link font-semibold hover:bg-red-300 hover:text-white" type="submit">
                    Stop <x-icon-hand-stop class="w-4 inline-block group-hover:fill-current group-hover:text-white" /></button>
            </div>

        </x-form>
    </x-section>
</x-layout>

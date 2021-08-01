<x-layout>
    <x-section>
        <x-form method="post"
              action="{{ $action }}"
              class="p-4 bg-gray-100 border-2 border-solid border-gray-400 rounded-sm">

            <h2 class="font-header text-bold text-2xl mb-4">{{ $header }}</h2>
            <p class="pb-2">{{ $message }}</p>

            <label for="players" class="" >Number of players in range of 1-3 (excl. computer):
                <input type="range" name="players" placeholder="players" min="1" max="3" value="1" class=""></label><br>
            <p class="text-sm italic pb-2">This range is 1 to 3 and represents a value for number of players in the game.</p>

            <label for="credit" class="">Amount of BitCoins players staring with:
                <input type="number" name="credit" placeholder="players starting credit" min="5" max="100" value="25" step="5" class="pb-2"></label><br>

            <label for="machine" class="pb-2">Play against computer?
                <input type="checkbox" name="machine" value="true" checked class=""/></label>

            <div class="m-auto flex flex-row justify-around">
                <button class="group w-60 flex flex-row justify-around p-4 bg-blue-100 border-2 border-blue-200 text-center rounded-sm uppercase font-link font-semibold hover:bg-blue-200 hover:text-white" type="submit">
                    Start game <x-icon-play class="w-4 inline-block group-hover:fill-current group-hover:text-white" /></button>
            </div>

        </x-form>
    </x-section>
</x-layout>

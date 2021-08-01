<x-layout>
    <x-section>
        <x-form method="post"
                action="{{ $action }}"
                class="p-4 bg-gray-100 border-2 border-solid border-gray-400 rounded-sm mb-6">

            <h2 class="font-header text-bold text-2xl mb-4">{{ $header  }}</h2>
            <p class="pb-2">{{ $message }}</p>
            <p class="pb-2">Round: {{ $round }}</p>
            <p class="pb-2">Times player have rolled the dices: <b>{{ $playerRolls }}</b></p>

            @if(isset($graphicDices))
                <h3>Player {{ $playerNumber }} score</h3>

                <div class="w-80 flex flex-row justify-between">
                    @foreach($graphicDices as $key => $value)
                        <div class="flex flex-col justify-around">
                            <i class="dice-utf8 {{ $value }}"></i>

                            @if($playerRolls !== 3)
                                <label  class="m-auto">
                                    <input class="w-auto" id="dice-{{ $key }}" name="dice-{{ $key }}" type="checkbox"/></label>
                            @endif

                        </div>
                    @endforeach

                </div>

                <p class="italic text-sm py-2">Select dices to keep at next throw of dices.</p>
            @endif

            <div class="m-auto p-4 flex flex-row justify-around">
                <button class="w-52 flex flex-row justify-around p-4 rounded-sm bg-green-400 uppercase font-link font-semibold hover:bg-green-300 hover:text-white" type="submit" name="submit" value="roll">Roll dices <i class="p-1 fas fa-dice"></i></button>
                <button class="w-52 flex flex-row justify-around p-4 rounded-sm bg-red-400 uppercase font-link font-semibold hover:bg-red-300 hover:text-white" type="submit" name="submit" value="stop">Stop <i class="p-1 fas fa-hand-paper"></i></button>
            </div>

        </x-form>
    </x-section>
</x-layout>

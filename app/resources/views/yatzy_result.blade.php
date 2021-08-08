<x-layout>
    <x-section>
        <x-form method="post"
                action="{{ $action }}"
                class="p-4 bg-gray-100 border-2 border-solid border-gray-400 rounded-sm mb-6">

            <h1 class="font-header text-bold text-2xl mb-4">{{ $header }}</h1>
            <p class="pb-2 italic text-sm">{{ $message }}</p>

            @if (isset($playerScores))
                <h3 class="font-weight-bold text-xl">Player {{ $playerNumber }}</h3>

                <div>
                    @foreach($playerScores as $key => $value)
                        <div class="flex flex-row justify-between p-0 m-0">
                            <p><i class="dice-utf8 dice-{{ $key +1 }}"></i> Points: <b></b>{{ $value }}</b></p>
                        </div>
                    @endforeach

                    <p class="py-4">Player total score: {{ $scoreSum }}</p>
                </div>
            @endif

            @if ($round >= 6)
                <div class="p-4 flex flex-row gap-14">
                    <label class="my-auto">
                        <input type="text" name="name" required class="h-14 bg-blue-100 form-input inline-block italic" placeholder="Write your name here">
                    </label>

                    <button class="w-52 flex flex-row justify-around p-4 rounded-sm bg-green-400 uppercase font-link font-semibold hover:bg-green-300 hover:text-white" type="submit" name="submit" value="roll">
                        Save Scores <x-icon-play class="w-4" /></button>
                </div>
            @endif

        </x-form>
    </x-section>
</x-layout>

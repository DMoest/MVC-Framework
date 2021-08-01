<x-layout>
    <x-section>
        <x-form method="post" action="{{ $action }}" class="p-4 bg-gray-100 border-2 border-solid border-gray-400 rounded-sm mb-6">
            <h2 class="font-header text-bold text-2xl mb-4">{{ $header }}</h2>
            <p class="pb-2">{{ $message }} - round {{ $round }}</p>
            <div class="pb-2">
                <h3 class="">Current players score</h3>

                <p class="">Last played hand from Player {{ $playerNumber }}</p>
                <p class="dice-utf8">
                    @foreach($graphicDices as $value)
                        <i class="{{ $value }}"></i>
                    @endforeach
                </p>

                {!! $scoreBoard !!}
            </div>

            <div class="w-52 m-auto">
                <button class="w-52 p-4 bg-blue-300 rounded-sm flex flex-row justify-around font-link uppercase font-semibold hover:bg-blue-200 hover:text-white" type="submit" name="submit">Next <i class="p-1 fas fa-forward"></i></button>
            </div>
        </x-form>
    </x-section>
</x-layout>

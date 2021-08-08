<x-layout>
    <x-section>
        <x-form method="post" action="{{ $action }}" class="p-4 bg-gray-100 border-2 border-solid border-gray-400 rounded-sm mb-6">
            <h2 class="font-header text-bold text-2xl mb-4">{{ $header }}</h2>
            <p class="pb-2">{{ $message }} - round {{ $round }}</p>
            <div class="pb-2">
                <h3 class="">Current players score</h3>

                {!! $scoreBoard !!}
            </div>

            <div class="p-4">
                <button class="w-60 m-auto flex flex-row justify-around p-4 rounded-sm bg-blue-200 uppercase font-link font-semibold hover:bg-blue-300 hover:text-white" type="submit" name="submit">
                    Next <x-icon-fast-forward class="w-4" /></button>
            </div>
        </x-form>
    </x-section>
</x-layout>

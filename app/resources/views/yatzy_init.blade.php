<x-layout>
    <x-section>
        <x-form method="post"
                action="{{ $action  }}"
                class="p-4 bg-gray-100 border-2 border-solid border-gray-400 rounded-sm">

            <h2 class="font-header text-bold text-2xl mb-4">{{ $header  }}</h2>
            <p class="pb-2">{{ $message }}</p>

            <div class="m-auto flex flex-row justify-around">
                <button class="w-60 p-3 bg-blue-100 border-2 border-blue-200 text-center rounded-sm uppercase font-link font-semibold hover:bg-blue-200 hover:text-white" type="submit">Start game</button>
            </div>

        </x-form>
    </x-section>
</x-layout>

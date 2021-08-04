<x-layout>
    <x-section>

        <div class="w-1/2 m-auto my-10 p-4 flex flex-row justify-around">
            <div>
                <h2>{{ $book->title }}</h2>
                <p>ISBN: {{ $book->isbn }}</p>
                <p>Author: {{ $book->author }}</p>
                <p>Release year: {{ $book->released }}</p>
                <p>Publisher: {{ $book->publisher }}</p>
                <p>Added to library: {{ $book->added_to_library }}</p>
            </div>

            <div class="w-32">
                <img src="{{ asset($book->picture) }}">
            </div>
        </div>

    </x-section>
</x-layout>

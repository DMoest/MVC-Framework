<x-layout>
    <x-section>

        <div class="w-3/4 m-auto my-10 p-4 flex flex-row justify-around gap-8">
            <div class="font-body">
                <h2 class="text-xl font-weight-bold font-header pb-6">{{ $book->title }}</h2>
                <p class="py-1">ISBN: {{ $book->isbn }}</p>
                <p class="py-1">Author: {{ $book->author->name }}</p>
                <p class="py-1">Category: {{ $book->category->name }}</p>
                <p class="py-1">Publisher: {{ $book->publisher->name }}</p>
                <p class="py-1">This Edition Released: {{ $book->released }}</p>
                <p class="py-1">Added here: {{ $book->added_to_library }}</p>
            </div>

            <div class="w-52 m-2">
                <img src="{{ asset($book->picture) }}">
            </div>
        </div>

    </x-section>
</x-layout>

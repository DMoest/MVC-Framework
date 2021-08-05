<x-layout>
    <x-section>

        <h2 class="text-2xl text-center font-weight-bold font-header py-6">{{ $header }}</h2>
        <p class="font-body">{{ $message }}</p>

        <x-table class="m-auto my-8 border-solid border-2 border-blue-200">
            {{-- Table explanatory row --}}
            <tr class="p-2 bg-blue-200">
                <th></th> {{-- Empty column over book number--}}
                <th class="p-1 text-center text-grey-500">Index</th>
                <th class="p-1 text-center text-grey-500">ISBN</th>
                <th class="p-1 text-center text-grey-500">Title</th>
                <th class="p-1 text-center text-grey-500">Author</th>
                <th class="p-1 text-center text-grey-500">Publisher</th>
                <th class="p-1 text-center text-grey-500">Released</th>
                <th class="p-1 text-center text-grey-500">Added</th>
                <th class="p-1 text-center text-grey-500">Cover</th>
            </tr>


        @foreach ($books as $key => $book)
            <x-table-row class="hover:cursor-pointer">
                <th class="px-2">Book: </th>

                <x-td-link route="book/{{ $book->id }}"><p class="px-2 m-0 text-center"> {{ $key }} </p></x-td-link>
                <x-td-link route="book/{{ $book->id }}"><p class="px-2 m-0 text-right"> {{ $book->isbn }} </p></x-td-link>
                <x-td-link route="book/{{ $book->id }}"><p class="px-2 m-0 text-left"> {{ $book->title }} </p></x-td-link>
                <x-td-link route="author/{{ $book->author_id }}"><p class="px-2 m-0 text-center"> {{ $book->author->name }} </p></x-td-link>
                <x-td-link route="publisher/{{ $book->publisher_id }}"><p class="px-2 m-0 text-center"> {{ $book->publisher->name }} </p></x-td-link>
                <td><p class="px-2 m-0 text-right"> {{ $book->released }} </p></td>
                <td><p class="px-2 m-0 text-right"> {{ $book->added_to_library }} </p></td>
                <x-td-link route="book/{{ $book->id }}">
                    <img src="{{ asset($book->picture) }}" class="w-14 p-2 m-0 text-right"/>
                </x-td-link>
            </x-table-row>
        @endforeach

        </x-table>

    </x-section>
</x-layout>

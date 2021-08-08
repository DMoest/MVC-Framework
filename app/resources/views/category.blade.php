<x-layout>
    <x-section>

        <div class="w-3/4 m-auto my-10 p-4">
            <div class="font-body">
                <h2 class="text-2xl text-center font-weight-bold font-header py-6">{{ $category->name }}</h2>

                <p class="py-1 text-center">This is the part of {{ $category->name }}'s work I have.</p>
            </div>


            <x-table>

                {{-- Table explanatory row --}}
                <tr class="p-2 bg-blue-200">
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

                        <x-td-link route="./../book/{{ $book->id }}"><p class="px-2 m-0 text-center"> {{ $key }} </p></x-td-link>
                        <x-td-link route="./../book/{{ $book->id }}"><p class="px-2 m-0 text-right"> {{ $book->isbn }} </p></x-td-link>
                        <x-td-link route="./../book/{{ $book->id }}"><p class="px-2 m-0 text-left"> {{ $book->title }} </p></x-td-link>
                        <x-td-link route="./../author/{{ $book->author_id }}"><p class="px-2 m-0 text-left"> {{ $book->author->name }} </p></x-td-link>
                        <x-td-link route="./../publisher/{{ $book->publisher_id }}"><p class="px-2 m-0 text-center"> {{ $book->publisher->name }} </p></x-td-link>
                        <td><p class="px-2 m-0 text-right"> {{ $book->released }} </p></td>
                        <td><p class="px-2 m-0 text-right"> {{ $book->added_to_library }} </p></td>
                        <x-td-link route="./../book/{{ $book->id }}">
                            <img src="{{ asset($book->picture) }}" class="w-14 p-2 m-0 text-right"/>
                        </x-td-link>
                    </x-table-row>
                @endforeach
            </x-table>
        </div>

    </x-section>
</x-layout>

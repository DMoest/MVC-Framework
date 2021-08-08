<x-layout>
    <x-section>

        <div class="w-3/4 m-auto my-10 p-4">
            <div class="font-body">
                <h2 class="text-2xl text-center font-weight-bold font-header py-6">{{ $publisher->name }}</h2>
            </div>



            <h2 class="text-xl font-weight-bold">I have {{ $publisher->name }} books writen by these authors</h2>

            <x-table>
                <tr class="p-2 bg-blue-200">
                    <th></th> {{-- Empty column over book number--}}
                    <th class="p-1 text-center text-grey-500">Index</th>
                    <th class="p-1 text-center text-grey-500">Name</th>
                </tr>

                @foreach($publisher->authors as $key => $author)
                    <x-table-row class="hover:cursor-pointer">
                        <th class="px-2">Author: </th>

                        <x-td-link route="./../author/{{ $author->id }}"><p class="px-2 m-0 text-center"> {{ $key }} </p></x-td-link>
                        <x-td-link route="./../author/{{ $author->id }}"><p class="px-2 m-0 text-left"> {{ $author->name }} </p></x-td-link>
                    </x-table-row>
                @endforeach
            </x-table>



            <h2 class="text-xl font-weight-bold">The work from {{ $publisher->name }}'s authors I have in my library</h2>

            <x-table>

                {{-- Table explanatory row --}}
                <tr class="p-2 bg-blue-200">
                    <th></th> {{-- Empty column over book number--}}
                    <th class="p-1 text-center text-grey-500">Index</th>
                    <th class="p-1 text-center text-grey-500">ISBN</th>
                    <th class="p-1 text-center text-grey-500">Title</th>
                    <th class="p-1 text-center text-grey-500">Author</th>
                    <th class="p-1 text-center text-grey-500">Released</th>
                    <th class="p-1 text-center text-grey-500">Added</th>
                    <th class="p-1 text-center text-grey-500">Picture</th>
                </tr>

                @foreach ($publisher->books as $key => $book)
                    <x-table-row class="hover:cursor-pointer">
                        <th class="px-2">Book: </th>

                        <x-td-link route="./../book/{{ $book->id }}"><p class="px-2 m-0 text-center"> {{ $key }} </p></x-td-link>
                        <x-td-link route="./../book/{{ $book->id }}"><p class="px-2 m-0 text-right"> {{ $book->isbn }} </p></x-td-link>
                        <x-td-link route="./../book/{{ $book->id }}"><p class="px-2 m-0 text-left"> {{ $book->title }} </p></x-td-link>
                        <x-td-link route="./../author/{{ $book->author->id }}"><p class="px-2 m-0 text-center"> {{ $book->author->name }} </p></x-td-link>
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

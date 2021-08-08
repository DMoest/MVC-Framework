<x-layout>
    <x-section>

        <h2 class="text-2xl text-center font-weight-bold font-header py-6">{{ $header }}</h2>
        <p class="font-body">{{ $message }}</p>

        <x-table class="m-auto my-8 border-solid border-2 border-blue-200">
            {{-- Table explanatory row --}}
            <tr class="p-2 bg-blue-200">
                <th class="p-1 text-center text-grey-500">Position</th>
                <th class="p-1 text-center text-grey-500">Score</th>
                <th class="p-1 text-center text-grey-500">Player</th>
                <th class="p-1 text-center text-grey-500">Time</th>
            </tr>


            @foreach ($highscores as $score)
                <x-table-row class="hover:cursor-pointer">
                    <td><p class="px-2 m-0 text-center"> {{ $score->id }} </p></td>
                    <td><p class="px-2 m-0 text-center"> {{ $score->score }} </p></td>
                    <td><p class="px-2 m-0 text-center"> {{ $score->name }} </p></td>
                    <td><p class="px-2 m-0 text-center"> {{ $score->created_at }} </p></td>
                </x-table-row>
            @endforeach

        </x-table>

    </x-section>
</x-layout>

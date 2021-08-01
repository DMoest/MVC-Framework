<div x-data="{ open: false }" @click.away="open = false">
    {{-- The trigger element --}}
    <div @click="open = ! open" class="w-28 p-2 rounded-sm bg-white flex flex-row justify-around hover:bg-blue-100">
        {{ $trigger }}
    </div>

    {{-- The drop down menu with links --}}
    <div {{ $attributes->merge(['class' => 'absolute p-2 z-50 shadow-md border-solid border-2 border-grey-700 rounded-sm shadow-sm flex-col flex flex-nowrap justify-between flex-gap-1 bg-yellow-50']) }}
         x-show="open">

        {{ $slot  }}
    </div>
</div>

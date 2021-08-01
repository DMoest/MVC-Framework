<header class="">

    <h1 class="font-title text-5xl text-grey-500 text-xl text-bold p-4">Daniels Super Application</h1>

    {{-- Desktop navigation --}}
    <nav class="hidden md:flex flex-row justify-content-between">
        <x-navigation-link route="index">Laravel Docs</x-navigation-link>
        <x-navigation-link route="hello">Hello</x-navigation-link>
        <x-navigation-link route="hello-world">Hello World</x-navigation-link>
        <x-navigation-link route="form">Form</x-navigation-link>
        <x-navigation-link route="diceInitView">Dice 21</x-navigation-link>
        <x-navigation-link route="yatzyInitView">Yatzy</x-navigation-link>
    </nav>

    {{-- Mobile navigation --}}
    <div class="md:hidden">
        <x-dropdown>

            {{-- Trigger button --}}
            <x-slot name="trigger">
                <x-icon-menu x-show="! open" class="w-4" />
                <x-icon-close x-show="open" class="w-4" />
                <button class="font-link uppercase">Menu</button>
            </x-slot>

            {{-- Links to routes --}}
            <x-navigation-link route="index">Laravel Docs</x-navigation-link>
            <x-navigation-link route="hello">Hello</x-navigation-link>
            <x-navigation-link route="hello-world">Hello World</x-navigation-link>
            <x-navigation-link route="form">Form</x-navigation-link>
            <x-navigation-link route="diceInitView">Dice 21</x-navigation-link>
            <x-navigation-link route="yatzyInitView">Yatzy</x-navigation-link>
        </x-dropdown>
    </div>

</header>

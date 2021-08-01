<header class="">
    <h1 class="font-title text-5xl text-grey-500 text-xl text-bold p-4">Daniels Super Application</h1>

    <nav class="hidden md:flex flex-row justify-content-between">
        <x-navigation-link route="index">Laravel Docs</x-navigation-link>
        <x-navigation-link route="hello">Hello</x-navigation-link>
        <x-navigation-link route="hello-world">Hello World</x-navigation-link>
        <x-navigation-link route="form">Form</x-navigation-link>
        <x-navigation-link route="diceInitView">Dice 21</x-navigation-link>
        <x-navigation-link route="yatzyInitView">Yatzy</x-navigation-link>
    </nav>


    <div class="md:hidden">
        <x-dropdown>
            <x-slot name="trigger">
                <x-icon-menu class="w-4" />
                <button class="font-link uppercase">Menu</button>
            </x-slot>

            <x-navigation-link route="index">Laravel Docs</x-navigation-link>
            <x-navigation-link route="hello">Hello</x-navigation-link>
            <x-navigation-link route="hello-world">Hello World</x-navigation-link>
            <x-navigation-link route="form">Form</x-navigation-link>
            <x-navigation-link route="diceInitView">Dice 21</x-navigation-link>
            <x-navigation-link route="yatzyInitView">Yatzy</x-navigation-link>
        </x-dropdown>
    </div>

</header>

<header class="">
    <h1 class="font-title text-5xl text-grey-500 text-xl text-bold p-4">Daniels Super Application</h1>

{{--    <nav class="flex flex-row justify-content-between">--}}
{{--        <x-nav-link href="/">Laravel Documentetion</x-nav-link>--}}
{{--        <x-nav-link href="/hello">Hello</x-nav-link>--}}
{{--        <x-nav-link href="/hello-world">Hello World</x-nav-link>--}}
{{--        <x-nav-link href="/form">Form</x-nav-link>--}}
{{--        <x-nav-link href="/dice/init/view">Dice 21</x-nav-link>--}}
{{--        <x-nav-link href="/yatzy/init/view">Yatzy</x-nav-link>--}}
{{--    </nav>--}}

    <x-dropdown>
        <x-slot name="trigger">
            <i class="p-2 fas fa-bars"></i>
            <button class="font-link uppercase">Menu</button>
        </x-slot>

        <x-dropdown-link href="/">Laravel Documentation</x-dropdown-link>
        <x-dropdown-link href="/hello">Hello</x-dropdown-link>
        <x-dropdown-link href="/hello-world">Hello world</x-dropdown-link>
        <x-dropdown-link href="/form">Form</x-dropdown-link>
        <x-dropdown-link href="/dice/init/view">Dice 21</x-dropdown-link>
        <x-dropdown-link href="/yatzy/init/view">Yatzy</x-dropdown-link>
    </x-dropdown>
</header>

@props(['href'])


<td {{ $attributes->merge(['class' => 'px-2 m-0 ']) }}>
    <a href ="{{ $href }}" class="hover:text-blue-500 hover:underline">

            {{ $slot }}

    </a>
</td>

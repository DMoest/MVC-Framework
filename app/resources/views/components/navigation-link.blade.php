@props(['route'])


@php
  $classes = Request::routeIs($route) ? 'text-blue-400 underline' : 'hover:underline hover:text-blue-400';
@endphp

<a href='{{ route($route) }}' {{ $attributes->merge(['class' => 'px-6 ' . $classes]) }}>
    {{ $slot }}
</a>

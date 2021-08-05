@props(['route'])

@php
  $classes = Request::routeIs($route) ? 'text-white bg-blue-200 ' : 'hover:underline hover:text-blue-400';
@endphp

<a href='{{ route($route) }}' {{ $attributes->merge(['class' => 'px-6 rounded-sm font-link ' . $classes]) }}>
    {{ $slot }}
</a>

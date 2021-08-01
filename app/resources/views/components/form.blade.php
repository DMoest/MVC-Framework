@props([
    'method' => [
        'GET',
        'POST'
    ],
    'action' => ''
])

<form method="{{ $method === 'GET' ? 'GET' : 'POST' }}"
      action="{{ $action }}" {{ $attributes }}>
    @csrf {{-- protection against -> cross site refresh forgery. --}}

    {{-- if not in props method array let laravel do it --}}
    @if (! in_array($method, ['GET', 'POST']))
        @method($method)
    @endif

    {{ $slot }}

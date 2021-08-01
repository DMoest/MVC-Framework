@props([
    'type' => 'success',
    'color' => [
        'success' => 'green',
        'error' => 'red',
        'warning' => 'redorange'
    ]
])



{{-- This is the FLASHMESSAGE section, SLOT is where the message is provided. $attributes->merge() calls for dynamic  --}}
<section {{ $attributes->merge(['class' => "{$colors[$type]}"]) }}>

    <p>
        {{ $slot  }}
    </p>

    <button>&times;</button>

</section>

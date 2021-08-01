{{-- add any attributes provided on element declaration and also merge these default attributes here --}}
{{-- $slot is where link text is --}}
<a {{ $attributes->merge(['class'=>'inline-block px-4 py-1 rounded-sm text-sm font-link transition-colors duration-200 hover:text-blue-500 hover:bg-blue-100 hover:shadow-sm']) }}>
    {{ $slot }}
</a>

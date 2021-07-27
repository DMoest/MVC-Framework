{{--    för utskrift utan 'escape', html hantering {!! !!}     --}}

@extends ('layouts.layout_yatzy')

@section('content')
    <p>{{ $header  }}</p>

    <p>{{ $message }}</p>
@endsection

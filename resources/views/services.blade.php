@extends('layouts.landing')

@section('title', 'services')
    
@section('content')
    <h1>Services</h1>
    @component('_components.card')
        @slot('title','Services 1')

        @slot('content','Lorem ipsum dolor set aimet.')
    @endcomponent

    @component('_components.card')
        @slot('title','Services 2')

        @slot('content','Lorem ipsum dolor set aimet.')
    @endcomponent

    @component('_components.card')
        @slot('title','Services 3')

        @slot('content','Lorem ipsum dolor set aimet.')
    @endcomponent
@endsection
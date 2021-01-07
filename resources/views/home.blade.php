@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <section id="series">
        <div class="container">
            @foreach ($series as $element)
                <div class="comics">
                    <div class="img">
                        <img src="{{ $element['thumb'] }}" alt="{{ $element['series'] }}">
                    </div>
                    <div class="title">
                        <h2>{{ $element['series'] }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

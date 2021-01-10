@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <section id="series">
        <div class="container">
            <div class="section-title">
                <h2 class="uppercase">Current Series</h2>
            </div>
            <div class="card-container">
                @foreach ($series as $index => $item)
                    <div class="comics">
                        <a href="{{ route('comic-details', ['id' => $index]) }}">
                            <div class="img">
                                <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">
                            </div>
                            <div class="comic-name">
                                <span class="uppercase">
                                    {{ $item['series'] }}
                                </span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

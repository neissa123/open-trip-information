@extends('layouts.app')

@section('content')
    <h1 class="title">Tripfest</h1>
    <div class="columns is-multiline">
        @foreach($trips as $trip)
        <div class="column is-one-quarter">
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="{{ $trip->image_url }}" alt="Image of {{ $trip->trip_name }}">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <div class="media-content">
                            <p class="title is-4">{{ $trip->trip_name }}</p>
                            <p class="subtitle is-6">{{ $trip->destination }}</p>
                        </div>
                    </div>

                    <div class="content">
                        <p><strong>{{ $trip->price }}</strong></p>
                        <p>{{ $trip->duration }}</p>
                        <a href="{{ route('trips.show', $trip->id) }}" class="button is-link">Details</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <a href="{{ route('trips.index') }}" class="button is-primary">Kembali</a>
    <br><br>
    <div class="card">
        <div class="card-image">
            <figure class="image is-16by9">
                <img src="{{ $trip->image_url }}" alt="Image of {{ $trip->trip_name }}">
            </figure>
        </div>
        <div class="card-content">
            <div class="media">
                <div class="media-content">
                    <p class="title is-4">{{ $trip->trip_name }}</p>
                    <p class="subtitle is-6">{{ $trip->destination }}</p>
                    <p class="subtitle is-12">{{ $trip->detail }}</p>
                    
                </div>
            </div>

            <div class="content">
                <p>{{ $trip->start_date }}</p> 
                <p><strong>{{ $trip->price }}</strong></p>
               
             
            </div>
        </div>
    </div>
@endsection

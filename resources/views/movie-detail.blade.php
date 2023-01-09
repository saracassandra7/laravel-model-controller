@extends('layout.main')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$movie->title}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Original title: {{$movie->original_title}}</h6>
                  <p class="card-text">Release date: {{$movie->date}}</p>
                  <p class="card-text">Nationality: {{$movie->nationality}}</p>
                  <p class="card-text">Rating: {{$movie->vote}}</p>

                  <a href="/" class="card-link">Go back</a>

                </div>
              </div>
        </div>
    </div>


</div>

@endsection

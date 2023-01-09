@extends('layout.main')

@section('content')
<div class="container">
    <h1 class="text-center m-3">Movies</h1>
    <div class="row">
      @foreach ( $movies as $movie )
       <div class="col-4 mb-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$movie->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
              <p class="card-text">Release date: {{$movie->date}}</p>
              {{-- <a href="#" class="card-link">Card link</a> --}}
            </div>
          </div>

       </div>

      @endforeach
    </div>
</div>

@endsection

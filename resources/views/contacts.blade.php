@extends('layout.main')

@section('content')
<div class="container">
    <h1 class="text-center m-3">Contacts</h1>
    @foreach ($contactsList as $contact )
     <li>{{$contact}}</li>

    @endforeach
</div>

@endsection

@extends('layouts.app')
<link rel="stylesheet"href="{{ URL::asset('css/show.css') }}">
@section('content')

<div class="content">
<h1>DETAILS</h1>
<h2>Name: {{$name}}</h2>
<h2>Description: {{$description}}</h2>

 <!-- Home Button -->

  <form action="{{ url('/') }}" method="GET">
    {{ csrf_field() }}
      <button type="submit" class="btn btn-secondary">
          <i class="fa fa-trash"></i> Home
      </button>
    </form>

</div>
@endsection
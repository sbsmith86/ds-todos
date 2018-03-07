@extends('layouts.app')

@section('content')

<h1>DETAILS</h1>
<h2>Name: {{$name}}</h2>
<h2>Description: {{$description}}</h2>

 <!-- Home Button -->
<td>
  <form action="{{ url('/') }}" method="GET">
    {{ csrf_field() }}
      <button type="submit" class="btn btn-default">
          <i class="fa fa-trash"></i> Home
      </button>
    </form>
</td>

@endsection
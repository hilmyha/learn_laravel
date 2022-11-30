@extends('layouts.template')

@section('container')
  <h1>About Page</h1>

  <h4>{{ $name }}</h4>
  <h4>{{ $email }}</h4>
  <img src="{{ $img_uri }}" alt="{{ $name }}">
@endsection
@extends('layouts.app')

@section('title')
#120 | Home
@endsection

@section('content')
<div class="container-fluid">

  <div class="row justify-content-center">
    <a class="h20-link-main d-flex col-md-6 text-decoration-none" href="{{ url('/lesmateriaal') }}">
      <h2 class="m-auto display-4 text-white">LESMATERIAAL</h2>
    </a>
    <a class="h20-link-main d-flex col-md-6 text-decoration-none" href="{{ url('/videos') }}">
      <h2 class="m-auto display-4 text-white">VIDEOS</h2>
    </a>
  </div>

  <div class="row justify-content-center">
    <a class="h20-link-main d-flex col-md-6 text-decoration-none" href="{{ url('/over') }}">
      <h2 class="m-auto display-4 text-white">OVER #120</h2>
    </a>
    <a class="h20-link-main d-flex col-md-6 text-decoration-none" href="{{ url('/dilemma') }}">
      <h2 class="m-auto display-4 text-white">DILEMMA</h2>
    </a>
  </div>

  <div class="row justify-content-center">
    <a class="h20-link-main d-flex col-md-6 text-decoration-none" href="{{ url('/contact') }}">
      <h2 class="m-auto display-4 text-white">CONTACT</h2>
    </a>
    <a class="h20-link-main d-flex col-md-6 text-decoration-none" href="{{ url('/') }}">
      <h2 class="m-auto display-4 text-white">#120</h2>
    </a>
  </div>

</div>
@endsection

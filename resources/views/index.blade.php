@extends('layouts.main')

@section('content')
<div class="container mt-5 content">
  <div class="row justify-content-center">
    <div class="col col-lg-4 col-sm-6 col-12">
      <div class="card">
        <img src="{{ asset('thumbnail/tweet-lookup.jpg') }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Tweet Lookup</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary w-100">Go</a>
        </div>
      </div>
    </div>
    <div class="col col-lg-4 col-sm-6 col-12">
      <div class="card">
        <img src="{{ asset('thumbnail/users-lookup.jpg') }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Users Lookup</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary w-100">Go</a>
        </div>
      </div>
    </div>
    <div class="col col-lg-4 col-sm-6 col-12">
      <div class="card">
        <img src="{{ asset('thumbnail/manage-tweets.jpg') }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Manage Tweets</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary w-100">Go</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('css')
<style>  
  .container .row {
    min-height: 100vh;
  }
</style>
@endsection
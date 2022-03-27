@extends('layouts.main')

@section('content')
<div class="container mt-5 content">
  <div class="row justify-content-center">
    <div class="col col-lg-4 col-sm-6 col-12">
      <div class="card">
        <img src="{{ asset('thumbnail/tweet-lookup.jpg') }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Timelines</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="/tweet-lookup" class="btn btn-primary w-100">Go</a>
        </div>
      </div>
    </div>
    <div class="col col-lg-4 col-sm-6 col-12">
      <div class="card">
        <img src="{{ asset('thumbnail/users-lookup.jpg') }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Users Lookup</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="/users-lookup" class="btn btn-primary w-100">Go</a>
        </div>
      </div>
    </div>
    <div class="col col-lg-4 col-sm-6 col-12">
      <div class="card">
        <img src="{{ asset('thumbnail/manage-tweets.jpg') }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Search Tweets</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="/manage-tweets" class="btn btn-primary w-100">Go</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('css')

@endsection
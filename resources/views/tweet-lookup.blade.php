
@extends('layouts.main')

@section('content')
<div class="container mt-5 content">
  <h2>Get Single Tweet</h2>
  <form action="">
    <p>Required. Enter a single Tweet ID.</p>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Tweet ID" name="tweetid">
      <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
    </div>    
  </form>
  <hr>
  <h2>Get Multiple Tweets</h2>
  <form action="">
    <p>Required. Enter up to 100 comma-separated Tweet IDs.</p>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Tweet IDs" name="tweetids">
      <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
    </div>
  </form>
</div>
@endsection

@section('css')
<style>

</style>
@endsection
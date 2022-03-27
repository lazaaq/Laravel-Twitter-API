
@extends('layouts.main')

@section('content')
<div class="container mt-5 content">
  <div id="create">
    <h2>Create a Tweet</h2>
    <form action="">
      <p>Input The Tweet</p>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="What's Happening" name="thetweet">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
      </div>    
    </form>
  </div>
  <hr>
  <div id="delete">
    <h2>Delete a Tweet</h2>
    <form action="">
      <p>Delete your tweet using Tweet ID</p>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Tweet ID" name="tweetid">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
      </div>
    </form>
  </div>
</div>
@endsection

@section('css')
<style>

</style>
@endsection
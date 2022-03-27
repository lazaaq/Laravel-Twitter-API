
@extends('layouts.main')

@section('content')
<div class="container mt-5 content">
  <div id="single">
    <h2>Get Tweet Timelines using User ID</h2>
    <form action="{{ route('timelines.tweet') }}" method="post">
      @csrf
      <p>Required. Enter a single User ID.</p>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="User Id" name="userid">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Fetch</button>
      </div>    
    </form>
  </div>
  <hr>
  <div id="multiple">
    <h2>Get Mention Timelines using User ID</h2>
    <form action="{{ route('timelines.mention') }}" method="post">
      @csrf
      <p>Required. Enter up to 100 comma-separated User IDs.</p>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="User Ids" name="userids">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Fetch</button>
      </div>
    </form>
  </div>
</div>
@endsection

@section('css')
<style>

</style>
@endsection
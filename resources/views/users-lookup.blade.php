

@extends('layouts.main')

@section('content')
<div class="container mt-5 content">
  <div id="byid">
    <h2>Get User By ID</h2>
    <form action="">
      <p>Required. Enter a single user ID.</p>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="User's ID" name="userid">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
      </div>    
    </form>
  </div>
  <hr>
  <div id="byids">
    <h2>Get Users By ID</h2>
    <form action="">
      <p>Required. Enter up to 100 comma-separated user IDs.</p>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Users ID" name="userids">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
      </div>
    </form>
  </div>
  <hr>
  <div id="byUsername">
    <h2>Get Users By Username</h2>
    <form action="">
      <p>Required. Enter a single Twitter username (handle).</p>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="User's Username" name="username">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
      </div>
    </form>
  </div>
  <hr>
  <div id="byUsernames">
    <h2>Get Users By Username</h2>
    <form action="">
      <p>Required. Enter up to 100 comma-separated usernames.</p>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Users Username" name="usernames">
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
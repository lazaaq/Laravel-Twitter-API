
@extends('layouts.main')

@section('content')
<div class="container mt-5 content">
  <div id="create">
    <h2>Search Tweets</h2>
    <form action="{{ route('search-tweets.search') }}" method="post">
      @csrf
      <p>Input The Query</p>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="What's Happening" name="myquery">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
      </div>
    </form>
  </div>
</div>
@endsection

@section('css')
<style>

</style>
@endsection
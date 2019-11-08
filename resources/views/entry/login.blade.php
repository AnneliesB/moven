@extends('layouts/entry')
@section('content')
    <h2>Signup</h2>
    <form action="{{action('EntryController@handleLogin')}}" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username">

        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <a href="/signup" class="btn btn-redirect">Don't have an account yet? Signup here!</a>
        
        <div class="btn-container">
            <input type="submit" value="LOGIN">
        </div>
        {{csrf_field()}}
    </form>
@endsection
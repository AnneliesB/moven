@extends('layouts/entry')
@section('content')
    <h2>JOIN THE MOVEMENT</h2>
    <form action="{{action('EntryController@handleSignup')}}" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username">

        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <a href="/login" class="btn btn-redirect">Already have an account? Login here!</a>
        <div class="btn-container">
            <input type="submit" value="SIGN UP">
        </div>
        
        {{csrf_field()}}
    </form>
@endsection
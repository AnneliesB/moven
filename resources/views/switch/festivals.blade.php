@extends('layouts/switch')
@section('content')
<a href="/dashboard" class="festival-link">
    <div class="festival-logo">
        <img src="{{asset('images/mobilelogo.svg')}}" alt="">
    </div>

    <div class="festivals">
        <img src="{{asset('images/werchter.png')}}" alt="">
        <img src="{{asset('images/pukkelpop.png')}}" alt="">
        <img src="{{asset('images/doel.png')}}" alt="">
        <img src="{{asset('images/geenidee.png')}}" alt="">
        <img src="{{asset('images/extrema.png')}}" alt="">
    </div>
</a>
@endsection
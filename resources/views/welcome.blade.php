@extends('layout')

@section('content')
    <h1>home.</h1>
    <img src="/Images/ZachCollinsBackground.png" height="509px" width="1920px" />

    <ul>
        @foreach($categories as $category)
            <li>{{ $category }}</li>
        @endforeach
    </ul>
@endsection
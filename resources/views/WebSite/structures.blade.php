@extends('WebSite.layouts.master')

@section('content')
    <h1>Our Structures</h1>
    <ul>
        @foreach($policlinics as $policlinic)
            <li>{{ $policlinic->name }}</li>
        @endforeach
    </ul>
@endsection

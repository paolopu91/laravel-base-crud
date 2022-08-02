@extends('layouts.app')

@section('page_title', "Description #" . $data->id)
    
@section('page_content')

    <h2>{{ $data->title }}</h2>
    <img src="{{$data['thumb']}}" alt="">
    <p>{{ $data['description'] }}</p>

@endsection
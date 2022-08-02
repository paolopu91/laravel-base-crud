@extends('layouts.app')

@section('page_title', "Description #" . $data->id)
    
@section('page_content')
<div>
    <div class="container">
        <h2 class="pt-5 pb-3">{{ $data->title }}</h2>
        <img class="px-5 py-5" src="{{$data['thumb']}}" alt="">
    </div>
    
    <div class="container">
        <p class="pt-3">{{ $data['description'] }}</p>
    </div>
</div>

    

@endsection
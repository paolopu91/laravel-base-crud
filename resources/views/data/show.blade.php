@extends('layouts.app')

@section('page_title', "Description #" . $data->id)
    
@section('page_content')
<div>
    <div class="container">
        <h2 class="pt-5 pb-3">{{ $data->title }}</h2>
        <img class="px-5 py-5" src="{{$data['thumb']}}" alt="">
        <div>
            <span class="text-success">{{$data['price']}}$</span>
        </div>
        
    </div>
    
    <div class="container">
        <p class="pt-3 text-secondary">{{ $data['description'] }}</p>
    </div>
</div>

    

@endsection
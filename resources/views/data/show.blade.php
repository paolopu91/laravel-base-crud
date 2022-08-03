@extends('layouts.app')

@section('page_title', "Description #" . $data->id)
    
@section('page_content')
<div>
    <div class="container">

        <div class="pt-5 container text-center d-flex justify-content-between">
            
            <a class="text-decoration-none border-bottom text-success" href=" {{route('data.edit', $data['id'])}} ">Edit</a> 
            
            <form action="{{ route('data.destroy', $data->id) }}" method="POST">
                @csrf
                @method("DELETE")

                <button type="submit" class="btn btn-danger">
                    DELETE
                </button>
            </form>
            

        </div>

        
        
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
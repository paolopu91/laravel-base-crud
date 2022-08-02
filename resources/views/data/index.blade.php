@extends('layouts.app')

@section('page_title', "Db Comics")
    
@section('page_content')
    <div>
        <div class="container pt-5 text-center">
            <button>
                <a class="text-decoration-none" href="{{ route('home') }}">Back to Homepage</a>
            </button>
        </div>
    </div>

    {{-- //here i will stamp my array --}}
    
    <div class="section">
        <div class="container">
            <div class="row">
                @foreach ($data as $comic)
                    <div class="col-4">
                        {{$comic['title']}}
                        {{$comic['price']}}
                        {{$comic['series']}}
                    </div>
                @endforeach
            </div>
            
        </div>
        
    </div>
@endsection
@extends('layouts.app')

@section('page_title', "Db Comics")
    
@section('page_content')
    <div class=" container d-flex">
        <div class="container pt-5 text-center">
            
            <a class="text-decoration-none border-bottom" href="{{ route('home') }}">Back to Homepage</a>
        </div>

        <div class="pt-5 container text-center">
            
            <a class="text-decoration-none border-bottom" href=" {{route('data.create')}} ">ADD NEW</a> 
           
        </div>

        
        
    </div>

   

    {{-- //here i will stamp my array --}}
    
    <div class="section">
        <div class="container">
            <div class="row pb-5 pt-5">
                @foreach ($data as $comic)
                    <div class="col-4 border">
                        <ul class="list-unstyled text-center">
                            <li class="pt-5">
                              <h5 class="text-primary">{{$comic['title']}}</h5>  
                            </li>
                            <li class="pt-2">
                                <img src="{{ $comic['thumb']}}" alt="">
                            </li>
                            <li class="pt-2">
                                <div class="pb-5">
                                    <button>
                                        <a class="text-decoration-none" href="{{ route('data.show', $comic->id)}}">Description</a>
                                    </button>
                                </div>   
                            </li>
                            <li>
                                <span class="text-success">{{$comic['series']}} </span>
                            </li>
                            <li>
                                <span>{{$comic['sale_date']}}</span>
                            </li>
                            <li>
                                <span class="text-info">{{$comic['type']}}</span>
                            </li>
                        </ul>
                        
                        
                    </div>
                @endforeach
            </div>

        </div>
        
    </div>
@endsection
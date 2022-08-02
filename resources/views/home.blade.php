@extends('layouts.app')

@section('page_title', "Home")
    
@section('page_content')
    <div class="section-main">
        <div class="container">
            
                {{-- @foreach ($comics as $comic) --}}
                    <div class=" pt-5 pb-5 container text-center">

                       <h1 class="text-primary">
                            HOME PAGE COMICS
                       </h1>
                       
                       <div class="container">
                            <p class="pt-5 px-5 mx-5">
                                Questa è la pagina home del mio sito lato backend di Laravel 7,
                                per vedere i fumetti contenuti in questa pagina clicca su Comics
                                in alto a sinistra
                            </p>
                       </div>
                        
                       
                    
                    </div>
                {{-- @endforeach --}}
            
        </div>
    </div>
@endsection
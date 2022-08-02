@extends('layouts.app')

@section('page_title', "New Dc")
    
@section('page_content')

<div class="container pt-5">
    <form action="{{route('data.store')}}" method="post">
    @csrf
        
        <div class="mb-3">
            <label for="titleInput" class="form-label">Title</label>
            <input type="email" class="form-control" name="title" id="titleInput" placeholder="Title Comic">
        </div>

        <div class="mb-3 pt-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        <div class="mb-3 pt-3">
            <label for="priceInput" class="form-label">Price</label>
            <input type="email" class="form-control" name="price" id="priceInput" placeholder="10$">
        </div>
        

        <div class=" container btn-group pt-5">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Choose your img
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><button><img src="https://fumettologica.it/wp-content/uploads/2020/06/dc-comics-diamond.jpeg" alt=""></button></li>
              <li><button><img src="https://nientepopcorn.b-cdn.net/wp-content/uploads/2019/01/tutti_i_film_dc_universe_watchmen_zack_snyder.jpg" alt=""></button></li>
              <li><button><img src="https://i0.wp.com/www.universalmovies.it/wp-content/uploads/2021/08/marvel-vs-dc-film-serie-tv-2023.jpg?resize=1210%2C642&ssl=1" alt=""></button></li>
            </ul>
        </div>

        <div class="d-flex gap-2 pt-5 justify-content-center">
            <button type="submit" class="btn btn-primary">
                Save
            </button>

            <button type="reset" class="btn btn-danger">
               <a class="text-decoration-none text-white" href="{{route('data.index')}}">Don't save</a> 
            </button>
        </div>
    </form>
</div>
@endsection
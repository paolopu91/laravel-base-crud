@extends('layouts.app')

@section('page_title', "New Dc")
    
@section('page_content')

<div class="container">
    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Title Comic">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
    </form>
</div>
@endsection
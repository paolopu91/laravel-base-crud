@extends('layouts.app')

@section('page_title', "Edit Comic #" . $data->id )
    
@section('page_content')

<div class="container pt-5">

    <form action="{{route('data.update', $data->id)}}" method="post">
    @csrf
    @method("PATCH")
        
        <div class="mb-3">
            <label for="titleInput" class="form-label border-bottom">Title</label>
            <input type="text" class="form-control" name="title" id="titleInput" value=" {{ $data->title }} ">
        </div>

        <div class="mb-3 pt-3">
            <label for="text-input" class="form-label border-bottom">Description</label>
            <textarea class="form-control" name="description" id="text-input" rows="3">{!! $data->description !!}</textarea>
        </div>

        <div class="mb-3 pt-3">
            <label for="thumbInpunt" class="form-label border-bottom">thumb</label>
            <input type="text" class="form-control" name="thumb" id="thumbInpunt" value=" {{ $data->thumb }} " >
        </div>

        <div class="mb-3 pt-3">
            <label for="priceInput" class="form-label border-bottom">Price</label>
            <input type="text" class="form-control" name="price" id="priceInput" value=" {{ $data->price }} ">
        </div>

        
        <div class="mb-3 pt-3">
            <label for="seriesInput" class="form-label border-bottom">Series</label>
            <input type="text" class="form-control" name="series" id="seriesInput" value=" {{ $data->series }} ">
        </div>

        <div class="mb-3 pt-3">
            <label for="sale_date" class="form-label border-bottom">Sale Date</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date" value=" {{ $data->sale_date }} ">
        </div>
         

        <div class="mb-3 pt-3">
            <label for="type" class="form-label border-bottom">Type</label>
            <input type="text" class="form-control" name="type" id="type" value=" {{ $data->type }} ">
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
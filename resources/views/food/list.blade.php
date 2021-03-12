@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    @foreach ($categories as $category)
        
    <div class="col-md-12">
      <h2 style="color:blue">{{ $category->name }}</h2>
      <div class="jumbotron">
        <div class="row">
          @foreach (App\Models\Food::where('category_id', $category->id)->get() as $food)
              
          <div class="col-md-3">
            <img src="{{ asset('images') }}/{{ $food->image }}" width="200" height="155" class="rounded mx-auto d-block">
            <p class="text-center">{{ $food->name }}</p>
            <p class="text-center">{{ $food->price }}€</p>

            <p class="text-center"><a href="">View</a></p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <div class="card">
            <div class="card-header">
                {{$product->name}}
            </div>
            <img src="{{$product->image}}" class="card-img-top" alt="..." style="height: 600px; width: 300;">

            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Price:</b> {{$product->price}} €</li>
                <li class="list-group-item"><b>Company:</b> {{$product->company}}</li>
                <li class="list-group-item"><b>Type:</b> {{$product->type}}</li>
                <li class="list-group-item"><b>Product code:</b> {{$product->product_code}}</li>
            </ul>
            <div class="card-body">
                @if($product->status == 'not available')
                    <a href="#" class="btn btn-light disabled">Buy</a>
                @else
                    <a href="{{route('public.show', ['product'=> $product->id])}}" class="btn btn-light">Buy</a>
                @endif
            </div>
        </div>

    </div>
@endsection

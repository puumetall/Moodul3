@extends('layouts.app')
@section('content')
    <div class="container text-center">
        {{$products->links()}}
        <div class="row">
            @foreach($products as $product)
                <div class="col-3 pb-3">
                    <div class="card bg-dark text-white">
                        <div class="card-header">
                            {{$product->name}}
                        </div>
                        <img src="{{$product->image}}" class="card-img-top" alt="..." style="width: auto; height: 200px;">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Price:</b> {{$product->price}} €</li>
                            <li class="list-group-item"><b>Company:</b> {{$product->company}}</li>
                            <li class="list-group-item"><b>Type:</b> {{$product->type}}</li>

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
            @endforeach
        </div>
        {{$products->links()}}
    </div>
@endsection

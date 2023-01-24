@extends('layout.main')

@section('page-title', 'Product List')

@section('page-content')



    <div class="container">
        @include('page.includes.header')
        <div class="row pt-5">
            @foreach($products as $product)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ $product->image }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->price }}</p>
                            <a href="{{ route('products.show', ['id' => $product->id]) }}" class="btn btn-outline-info text-dark">More info</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection




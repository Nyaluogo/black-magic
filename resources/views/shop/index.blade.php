@extends('layouts.app')
@section('title')
    BlackMagik shop
@endsection
@section('content')
  @if(Session::has('success'))
  <div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
      <div class="alert alert-success" id="charge-message">
        {{ Session::get('success') }}
      </div>
    </div>
  </div>
@endif
  @foreach($products->chunk(3) as $productChunk)
    <div class="row">
    @foreach($productChunk as $product)
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{ $product->thumb }}" alt="..." class="img-responsive">
      <div class="caption clearfix">
        <h3>TITLE: {{ $product->title }}</h3>
        <h4>ARTIST: {{ $product->user->name }}</h4>
        <p class = "description">DESCRIPTION: {{ $product->description }}</p>
        <div class="pull-left price">PRICE: ${{ $product->price }}</div>
        {{-- <p><a href="#" class="btn btn-primary pull-right" role="button">Add to wish-list</a> --}}
         <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-default pull-right" role="button"> Add to Cart</a></p>
      </div>
    </div>
  </div>

  @endforeach
</div>
@endforeach
@endsection

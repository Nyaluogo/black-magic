@extends('layouts.app')

@section('content')

<!-- Gallery Items
        ================================================== -->
        <div class="span12 gallery-single">

            <div class="row">
                <div class="span6">
                    <img src="{{ $image[0]->path }}" class="align-left thumbnail" alt="image">
                </div>
                <div class="span6">
                    <h2>{{ $image[0]->title }}</h2>
                    <p class="lead">{{ $image[0]->description }}</p>


                    <ul class="project-info">

                        <li><h6>Artist:</h6> {{ $image[0]->user->name }} </li>
                        <li><h6>Medium:</h6> {{ $image[0]->medium }}</li>
                        <li><h6>Price:</h6> {{ $image[0]->price }}</li>
                        <li><h6>Category:</h6> {{ $image[0]->category }} </li>
                    </ul>
                    <like :id= {{ $image[0]->id }} ></like>
                    {{-- Check if the file is available for download --}}
                    @if($image[0]->download_options == 1)
                    <button class="btn btn-inverse pull-right" type="button">
                      <a href="{{ route('product.download', ['id' => $image[0]->id]) }}" class="pull-right">download</a>

                    </button>
                  @endif

                  @if($image[0]->print_options == 1)
                    <button class="btn btn-inverse " type="button">
                      {{-- <a href="{{ route('product.download', ['id' => $image[0]->id]) }}" class="pull-right">download</a> --}}
                       <a href="{{ route('product.addToCart', ['id' => $image[0]->id]) }}" class="btn btn-default" role="button"> Add to Cart</a></p>

                    </button>
                  @endif

                  {{-- if the user is auth.. enable delete --}}
                  @if(Auth::id() == $image[0]->user_id)
                    <button class="btn btn-inverse pull-right" type="button">
                      <a href="{{ route('product.delete', ['id' => $image[0]->id]) }}" class="pull-right">delete</a>

                    </button>
                  @endif
                    {{-- <a href="{{ route('product.delete', ['id' => $image[0]->id]) }}" class="pull-right"><i class="icon-arrow-left"></i>Delete post</a> --}}

                </div>
            </div>

        </div><!-- End gallery-single-->
        {{-- <similarImages></similarImages> --}}
@endsection

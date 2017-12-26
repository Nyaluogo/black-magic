@extends('layouts.app')

@section('content')


<div id = "app">

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    {{-- <router-link to="/" tag="li" active-class="active" exact><a>Upload</a></router-link> --}}
                     {{-- <router-link to="/list" tag="li" active-class="active" exact><a>List</a></router-link>  --}}
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">

        <div class="content">

            {{-- <router-view></router-view> --}}

        </div>

    </div>

    <form id = "upload_form" action="{{ route('portfolio.store') }}" role="form" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="form-group"  >
            {{--Upload image--}}
               <div>

                    {{--upload details --}}

                <upload></upload>



        </form>

</div>




@endsection

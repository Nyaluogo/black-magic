@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Edit your profile
                </div>
                <div class="panel-body">
                    <form action="{{ route('profile.update') }}" role="form" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <center>
                          <img src="{{ Storage::url(Auth::user()->avatar) }}" width="70px" height="70px" style="border-radius:50px;" alt="avatar">
                      </center>
                        <label for="first_name">Upload profile picture</label>
                        <input type="file" name="avatar" accept="image/*" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" value="{{ Auth::user()->first_name }}" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" value="{{ Auth::user()->last_name }}" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" name="phone_number" value="" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" name="country" value="" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" name="city" value="" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" name="website" value="" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="fav_visual_artist">Favorite Artist</label>
                        <input type="text" name="fav_visual_artist" value="" class="form-control" >
                    </div>



                    <div class="form-group">
                        <label for="fav_movies">Favourite Movies</label>
                        <input type="text" name="fav_movies" value="" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="biography">Biography</label>
                        <textarea name="biography" id="biography" cols="30" rows="10" class="form-control" >{{ old('biography') }}</textarea
                    </div>

                    <div class="form-group">
                        <label for="type_of_artist">Type Of Artist</label>
                        <select class="form-control" name="type_of_artist">
                          <option value="student">Student</option>
                          <option value="hobbyist">Hobbyist</option>
                          <option value="professional">Professional</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="area_of_specialty">Area of Specialization</label>
                        <select class="form-control" name="area_of_specialty">
                          <option value="photography">Photography</option>
                          <option value="digital_art">Digital Art</option>
                          <option value="design_and_interfaces">Design and Interfaces</option>
                          <option value="traditional_art">Traditional Art</option>
                          <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <p class="text-center">
                        <button  name="button" class= "btn btn-primary btn-md" type="submit">
                          Save
                        </button>
                      </p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@extends('layouts.app')

@section('content')
  @if(Auth::id() == $user->id)
        <auth_gallery :profile_user_id = {{ $user->id }}></auth_gallery>
 @endif

 @if(Auth::id() != $user->id)
       <personal_gallery :profile_user_id = {{ $user->id }}></personal_gallery>
 @endif
@endsection

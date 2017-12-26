<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Blackmagik | Login</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <!-- <link href="{{asset('css/welcome_css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" /> -->
      <link rel="stylesheet" href="{{asset('css/login/style.css')}}">

  
</head>

<body>

  
<div class="cont">
  <div class="form sign-in">
    <h2>Welcome back,</h2>
    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email">
        <span>Email</span>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus/>
        </label>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password">
        <span>Password</span>
        <input id="password" type="password" class="form-control" name="password" required />
        </label>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
    <a class="forgot-pass" href="{{ route('password.request') }}">
        <p class="forgot-pass">Forgot password?</p>
    </a>

    <div class="form-group">
        <div class="">
            <div class="checkbox">
                <label>
                    
                    <p class="forgot-pass">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        Remember Me
                     </p>
                </label>
            </div>
        </div>
    </div>

        <button type="submit" class="submit">Sign In</button>
    </form>
    <button type="button" class="fb-btn">Connect with <span>facebook</span></button>
  </div>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Sign up and discover great amount of new opportunities!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already has an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
      <h2>Time to feel like home,</h2>
      <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label>
                <span>Username</span>
                <input id="name" type="text"  name="name" value="{{ old('name') }}" required autofocus>
            </label>

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">
            <span>E-Mail Address</span>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            </label>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password">
                <span>Password</span>
                <input id="password" type="password" class="form-control" name="password" required>
            </label>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

            
        </div>
        <div class="form-group">
                <label for="password-confirm">
                    <span>Confirm Password</span>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </label>

            </div>
      
        <button type="submit" class="submit">Sign Up</button>
      </form>
      <a  href="{{ url('auth/facebook') }}" class="fb-btn">Join with <span>facebook</span></a>
    </div>
  </div>
</div>



    <script  src="{{asset('js/login/index.js')}}"></script>




</body>

</html>

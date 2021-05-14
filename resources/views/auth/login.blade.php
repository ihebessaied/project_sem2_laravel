<head>
    <link rel="stylesheet" href="/css/login.css">
</head>
{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<div class="container">
    <div class="form-body">
    <div class="form-container">
        <div class="inline">
        <div class="header">
            <h2>{{ __('Log in') }}</h2>
            <p>Don t have <a href="{{ route('register') }}">{{ __('Create Your Acount') }}</a></p>
        </div>
        <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
        <div class="input-group">
            <input type="email" placeholder="Username" class="form-control @error('email') is-invalid @enderror"  id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="input-group">
            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="input-group flex">
          <div class="remember">
            <input type="checkbox" placeholder="Username" id="checkbox"><label for="checkbox">Remeber Me</label>
          </div> 
          <div class="forgot"> @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif</div> 
        </div>
        <div class="input-group right">
            <button type="submit">{{__('Log in')}}</button>
       
        </div>
        </div>
    </form>
    </div>
       <div class="form-image">
           <div class="text">
            <h2>Welcome<br>back!</h2>
            <p>Lorem ipsuariatur quaerat quibupe commodi dolid asperiores?</p>
           </div>
       </div>
    </div>
</div>
</div>
{{-- @endsection --}}

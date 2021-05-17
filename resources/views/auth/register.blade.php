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
            <h2>{{ __('Register') }}</h2>
            <p>I have account ?<a href="{{ route('login') }}">{{ __('Log in Now') }}</a></p>
        </div>
        <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">

        <div class="input-group">
            <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>








        <div class="input-group">
            <input id="email" type="email"  placeholder="E-Mail Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>



      <div class="input-group" >

 <input id="password" type="password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
   </div>
   <div class="input-group">
    <input id="password-confirm" type="password" placeholder="Confirm  Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
   </div>





        {{-- <div class="input-group flex">
          <div class="remember">
            <input type="checkbox" placeholder="Username" id="checkbox"><label for="checkbox">Remeber Me</label>
          </div> 
          <div class="forgot"> @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif</div> 
        </div> --}}

        <div class="input-group right">
            <button type="submit">{{ __('Register') }}</button>
       
        </div>
        </div>
    </form>
    </div>
       <div class="form-image">
           <div class="text">
            <h2>FREE Online <br>Register !</h2>
            <p>Lorem ipsuariatur quaerat quibupe commodi dolid asperiores?</p>
           </div>
       </div>
    </div>
</div>
</div>
{{-- @endsection --}}




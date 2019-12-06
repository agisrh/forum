@extends('layouts.auth')

@section('title')
    <title>Login</title>
@endsection

@section('content')

<div class="sign-in-page">
    <div class="signin-popup">
        <div class="signin-pop">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cmp-info">
                        <div class="cm-logo">
                            <img src="{{ asset('assets/images/cm-logo.png') }}" alt="">
                            <p>Forum untuk bertukar informasi bagi komunitas mahasiswa Sekolah Tinggi Teknologi Duta Bangsa.</p>
                        </div><!--cm-logo end-->	
                        <img src="{{ asset('assets/images/cm-main-img.png') }}" alt="">			
                    </div><!--cmp-info end-->
                </div>
                <div class="col-lg-6">
                    <div class="login-sec">
                        <ul class="sign-control">
                            <li data-tab="tab-1" class="current"><a href="#" title="">{{ __('Login') }}</a></li>				
                            <li data-tab="tab-2"><a href="#" title="">{{ __('Register') }}</a></li>				
                        </ul>			
                        <div class="sign_in_sec current" id="tab-1">
                            
                            <h3>{{ __('Login') }}</h3>
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="row">
                                    <div class="col-lg-12 no-pdd">
                                        <div class="sn-field">
                                            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                            <i class="la la-user"></i>
                                        </div><!--sn-field end-->
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 no-pdd">
                                        <div class="sn-field">
                                            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                            <i class="la la-lock"></i>
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 no-pdd">
                                        <div class="checky-sec">
                                            <div class="fgt-sec">
                                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label for="remember">
                                                    <span></span>
                                                </label>
                                                <small>{{ __('Remember Me') }}</small>
                                            </div><!--fgt-sec end-->
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12 no-pdd">
                                        <button type="submit" value="submit">{{ __('Login') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div><!--sign_in_sec end-->
                        <div class="sign_in_sec" id="tab-2">
                            <div class="dff-tab current" id="tab-3">
                            <h3>{{ __('Register') }}</h3>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                    <div class="row">
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">
                                                <i class="la la-user"></i>
                                            </div>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                                <i class="la la-envelope"></i>
                                            </div>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                                <i class="la la-lock"></i>
                                            </div>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Password">
                                                <i class="la la-lock"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-pdd">
                                            <button type="submit" value="submit">{{ __('Register') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div><!--dff-tab end-->
                        </div>		
                    </div><!--login-sec end-->
                </div>
            </div>		
        </div><!--signin-pop end-->
    </div><!--signin-popup end-->
</div><!--sign-in-page end-->
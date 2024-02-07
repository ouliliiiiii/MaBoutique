@extends('layouts.app')



@section('content')
<div class="login-section">
        <div class="materialContainer">
            <div class="box">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input type="hidden" name="_token" value="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
                    <div class="login-title">
                        <h2>Connection</h2>
                    </div>
                    <div class="input">
                        <label for="name">E-mail</label>
                        <input type="email" id="name" name="email" :value="old('email')" required autofocus  autocomplete="name">
                    </div>

                    <div class="input">
                        <label for="pass">Mot de Passe</label>
                        <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password">
                    </div>
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="pass-forgot"> {{ __('Forgot your password?') }}</a>
                    @endif

                    <div class="button login">
                        <button type="submit">
                            <span>  {{ __('Log in') }}</span>
                            <i class="fa fa-check"></i>
                        </button>
                    </div>

                    <p>Vous n'etes pas membre?<a href="{{asset('register')}}" class="theme-color">Sign up now</a></p>
                </form>
            </div>
        </div>
    </div>
@endsection





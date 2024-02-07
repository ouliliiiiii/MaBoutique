@extends('web.layouts.app')

@section('content')
<div class="login-section">
        <div class="materialContainer">
            <div class="box">
                <form method="POST" action="{{ route('register') }}">
                    <input type="hidden" name="_token" value="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
                    <div class="login-title">
                        <h2>Register</h2>
                    </div>

                    <div class="input">
                        <label for="name">Name</label>
                        <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus >
                    </div>

                   <!--  <div class="input">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" class="block mt-1 w-full" type="text" name="phone"
                            :value="old('phone')" required="" autofocus="" autocomplete="phone">
                    </div> -->

                    <div class="input">
                        <label for="emailname">Email Address</label>
                        <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>

                    <div class="input">
                        <label for="pass">Password</label>
                        <input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
                    </div>

                    <div class="input">
                        <label for="compass">Confirm Password</label>
                        <input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required  >
                    </div>

                    <div class="button login">
                        <button type="submit">
                            <span> {{ __('Register') }}</span>
                            <i class="fa fa-check"></i>
                        </button>
                    </div>
                </form>
            </div>
            <p><a  href="{{ route('login') }}" class="theme-color"> {{ __('Already registered?') }}</a></p>
        </div>
    </div>
@endsection







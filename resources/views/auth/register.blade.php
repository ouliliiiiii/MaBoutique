@extends('web.layouts.app')

@section('content')
<div class="login-section">
        <div class="materialContainer">
            <div class="box">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="login-title">
                        <h2>Register</h2>
                    </div>

                    <div class="input">
                        <label for="name">Nom</label>
                        <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus >
                    </div>
                    <div>
                        @error('name')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>

                   <div class="input">
                        <label for="phone">Telehone</label>
                        <input type="text" id="phone" class="block mt-1 w-full" type="text" name="phone"
                            :value="old('phone')" autofocus="" autocomplete="phone">
                    </div> 
                    <div>
                        @error('phone')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>

                    <div class="input">
                        <label for="emailname">Email Address</label>
                        <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
                    </div>
                    <div>
                        @error('email')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>

                    <div class="input">
                        <label for="pass">Password</label>
                        <input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                 autocomplete="new-password" />
                    </div>
                    <div>
                        @error('password')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>

                    <div class="input">
                        <label for="compass">Confirm Password</label>
                        <input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation"   >
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







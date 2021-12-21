{{--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>--}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<div class="login">
    <div style="padding-bottom: 10px;">
        <img width="300" height="46" src="https://cloudpbx.com.co/wp-content/uploads/2021/02/tipografia-300x46.png" class="vc_single_image-img attachment-medium" alt="" loading="lazy" srcset="https://cloudpbx.com.co/wp-content/uploads/2021/02/tipografia-300x46.png 300w, https://cloudpbx.com.co/wp-content/uploads/2021/02/tipografia-600x92.png 600w, https://cloudpbx.com.co/wp-content/uploads/2021/02/tipografia-1024x157.png 1024w, https://cloudpbx.com.co/wp-content/uploads/2021/02/tipografia-768x117.png 768w, https://cloudpbx.com.co/wp-content/uploads/2021/02/tipografia.png 1472w" sizes="(max-width: 300px) 100vw, 300px">
    </div>
    <div>
        <div class="col">
            <a type="button" class="btn btn-danger btn-block btn-large" href="{{url('auth/google/redirect')}}">Iniciar Sesion con Google</a>
        </div>
    </div>
    <hr>
    <form method="POST" action="{{ route('login') }}">
        @csrf
    	<input id="email" type="email" name="email" :value="old('email')" required placeholder="Email" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Login.</button>
    </form>
    @if ($errors->any())
        <div class="alert alert-warning" role="alert">
            <strong class="font-bold">Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            </span>
        </div>
        <br>
    @endif
</div>
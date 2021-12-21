{{--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>--}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<div class="register">
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
    @else
        <img width="300" height="46" src="https://cloudpbx.com.co/wp-content/uploads/2021/02/tipografia-300x46.png" class="vc_single_image-img attachment-medium" alt="" loading="lazy" srcset="https://cloudpbx.com.co/wp-content/uploads/2021/02/tipografia-300x46.png 300w, https://cloudpbx.com.co/wp-content/uploads/2021/02/tipografia-600x92.png 600w, https://cloudpbx.com.co/wp-content/uploads/2021/02/tipografia-1024x157.png 1024w, https://cloudpbx.com.co/wp-content/uploads/2021/02/tipografia-768x117.png 768w, https://cloudpbx.com.co/wp-content/uploads/2021/02/tipografia.png 1472w" sizes="(max-width: 300px) 100vw, 300px">
    @endif
    <div style="padding-bottom: 10px;">
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
    	<input id="email" type="email" name="email" :value="old('email')" required placeholder="Email" required="required" />
        <input type="password" id="password" name="password" :value="old('password')" placeholder="Password" required="required" />
        <input type="password" id="password_confirmation" name="password_confirmation" :value="old('password_confirmation')"  placeholder="password_confirmation" required="required" />
        <input type="text" id="name" name="name" placeholder="name" :value="old('name')" required="required" />
        <input type="text" id="telefono" name="telefono" placeholder="telefono" :value="old('telefono')" required="required" />
        <input type="text"  id="identificacion" name="identificacion" placeholder="identificacion" :value="old('identificacion')" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" >Register.</button>
    </form>
</div>

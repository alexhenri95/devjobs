@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-screen-md">
    <div class="flex flex-wrap justify-center">

        <div class="md:w-1/2 order-2 md:order-1">
            <div class="w-full max-w-sm">
                <div class="flex flex-col break-words bg-white border-2 shadow-md mt-10">

                    <div class="bg-indigo-800 text-white font-bold uppercase text-center py-3 px-6 mb-0">
                        {{ __('Register') }}
                    </div>

                    <form method="POST" action="{{ route('register') }}" class="py-8 px-5" novalidate="">
                        @csrf

                        <div class="flex flex-wrap mb-6">
                            <label for="name" class="block text-gray-700 text-sm mb-2">{{ __('Name') }}</label>
                            <input id="name" type="text" class="p-2 bg-gray-300 rounded form-input w-full @error('name') border-red-500 border @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                            @error('name')
                                <span class="bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 text-xs w-full mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="block text-gray-700 text-sm mb-2">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="p-2 bg-gray-300 rounded form-input w-full @error('email') border-red-500 border @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                            @error('email')
                                <span class="bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 text-xs w-full mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password" class="block text-gray-700 text-sm mb-2">{{ __('Password') }}</label>

                            <input id="password" type="password" class="p-2 bg-gray-300 rounded form-input w-full @error('password') border-red-500 border @enderror" name="password" autocomplete="new-password">

                            @error('password')
                                <span class="bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 text-xs w-full mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password-confirm" class="block text-gray-700 text-sm mb-2">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="p-2 bg-gray-300 rounded form-input w-full" name="password_confirmation" autocomplete="new-password">
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit" class="bg-indigo-500 w-full hover:bg-indigo-700 text-gray-100 p-3 focus:outline-none focus:shadow-outline uppercase font-bold">
                                    {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="md:w-1/2 order-1 md:order-2 text-center flex flex-col justify-center px-10 mt-10">
            <h1 class="text-indigo-700 text-2xl">??Eres reclutador?</h1>
            <p class="text-l mt-5 leading-7">Crea una cuenta totalmente gratis y comineza a publicar hasta 10 vacantes.</p>
        </div>

    </div>
</div>
@endsection

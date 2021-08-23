@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words bg-white border-2 shadow-md mt-20">

                <div class="bg-indigo-800 text-white font-bold uppercase text-center py-3 px-6 mb-0">
                    {{ __('Reset Password') }}
                </div>

                <form method="POST" action="{{ route('password.email') }}" class="py-8 px-5" novalidate="">
                    @csrf

                    @if (session('status'))
                        <div class="bg-green-100 mb-4 border-l-4 border-r-4 mx-lg-3 block border-green-500 text-green-700 px-4 py-2 text-xs w-full " role="alert">
                            <strong>{{ session('status') }}</strong>
                        </div>
                    @endif

                    <div class="flex flex-wrap mb-6">
                        <label for="email" class="block text-gray-700 text-sm mb-2">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email" class="p-2 bg-gray-300 rounded form-input w-full @error('email') border-red-500 border @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                        @error('email')
                            <span class="bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 text-xs w-full mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit" class="bg-indigo-500 w-full hover:bg-indigo-700 text-gray-100 p-3 focus:outline-none focus:shadow-outline uppercase font-bold text-sm">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

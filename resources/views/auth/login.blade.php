@extends('layouts.admin-template')
@section('body')

   <!--  <x-auth-session-status class="mb-4" :status="session('status')" />
    <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <!-- <label for="email">Email</label> -->
            <input id="email" class="form-control" placeholder="Enter your username" type="email" name="email" value="{{old('email')}}" required autofocus />
        </div>

        <div class="form-group">
            <!-- <label for="password">Password</label> -->
            <input id="password" class="form-control" placeholder="Enter your password" type="password" name="password" required autocomplete="current-password" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="">
            @if (Route::has('password.request'))
                <a class="tx-info tx-12 d-block mg-t-10" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            <button type="submit" class="btn btn-info btn-block">Login</button>
        </div>



        <!-- <div class="form-group">
          <input type="email" class="form-control" placeholder="Enter your username" name="email" value="{{old('email')}}" required autofocus>
        </div> -->

        <!-- <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your password" name="password" required autocomplete="current-password" value="{{__('Password')}}" >
          <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div> -->

        <!-- <button type="submit" class="btn btn-info btn-block">Sign In</button> -->

            <div class="mg-t-60 tx-center">Not yet a member? <a href="{{ Route('register') }}" class="tx-info">Sign Up</a></div>





        </div>
    </form>


@endsection
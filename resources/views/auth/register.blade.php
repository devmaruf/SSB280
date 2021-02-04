@extends('layouts.admin-template')
@section('body')
    <!-- <x-auth-validation-errors class="form-group" :errors="$errors" /> -->
<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div class="form-group">
        <!-- <label for="name"/>Name</label> -->
        <input id="name" class="form-control" type="text" name="name" value="{{old('name')}}" required autofocus  placeholder="Enter your Name"/>
    </div>

    <!-- Email Address -->
    <div class="form-group">
        <!-- <label for="email"/>Email</label> -->
        <input id="email" class="form-control" type="email" name="email" value="{{old('email')}}" required  placeholder="Enter your Email"/>
    </div>

    <!-- Password -->
    <div class="form-group">
        <!-- <label for="password"/>Password</label> -->
        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password"  placeholder="Enter your Password"/>
    </div>

    <!-- Confirm Password -->
    <div class="form-group">
        <!-- <label for="password_confirmation"/>Retype Password</label> -->
        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required  placeholder="Retype Password"/>
    </div>

        <button type="submit" class="btn btn-info btn-block">Register</button>
    
    <div class="mg-t-20 tx-center">
        <a class="tx-info" href="{{ route('login') }}">{{ __('Already registered?') }}</a>
    </div>


</form>
@endsection

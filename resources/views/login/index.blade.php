@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/login.css') }}" type="text/css"/>
@endsection

@section('content')
<div class="container">
    <form id="login-form" class="m-auto">
        <!-- Email input -->
        <div class="form-outline mb-4">
        <input type="email" placeholder="Email address" id="form2Example1" class="form-control" />
        </div>
    
        <!-- Password input -->
        <div class="form-outline mb-4">
        <input type="password" placeholder="Password" id="form2Example2" class="form-control" />
        </div>
    
        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4 text-center">

            <div class="col-6">
                <input class="form-check-input" type="checkbox" value="" id="remember-me-check" checked />
                <label class="form-check-label" for="remember-me-check"> Remember me </label>
                
            </div>
            <div class="col-6">
                <a href="#!">Forgot password?</a>
            </div>
            

        </div>
    
        <!-- Submit button -->
        <div class="row">
            <div class="text-center">
                <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>
            </div>
        </div>
    
        <!-- Register buttons -->
        <div class="text-center">
        <p>Not a member? <a href="#!">Register</a></p>
        <p>or sign up with:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
        </button>
    
        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
        </button>
    
        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
        </button>
    
        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
        </button>
        </div>
    </form>
</div>
@endsection
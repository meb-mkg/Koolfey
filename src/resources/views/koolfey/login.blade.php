<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Koolfey') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/assets/font-awesome/css/all.css') }}">
    <link rel="shortcut icon" href="{{ url('css/assets/ico/mit.jpg') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="margin-bottom: 20px;">
            <div class="container">
                <div>
                    <img src="{{ url('css/assets/images/logo.jpg') }}" width="100px" height="100px">
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="navbar-brand" href="{{ url('/api/koolfey/login') }}" style="font-size: 20px">
                        <h1>{{ config('app.name', 'Koolfey') }}</h1>
                    </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                </div>
            </div>
        </nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-1" style="margin-top: 50px;font-size: 100px">
                        <i class='fa fa-key'></i>
                    </div>
                    <form method="POST" action="{{ url('/koolfey') }}" style="margin-top:-120px;margin-left: 90px;">
                        @csrf
                        <div class="form-group row">
                            <label for="pn" class="col-md-4 col-form-label text-md-right">{{ __('Personal Number') }}</label>
                            <div class="col-md-6">
                                <input id="pn" type="text" class="form-control" name="pn" value="{{ old('pn') }}" required autocomplete="pn" autofocus>
                            </div>
                        </div>
                        @if(session('error'))
                        <p class="text-danger text-center" style="">
                            <strong>{{ session('error') }}</strong>
                        </p>
                        @endif
                            


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div style="margin-top: 50px;margin-left:300px;">
                        <a href="{{ url('http://localhost:8000/register') }}">Register Here!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
        <div class="text text-center" style="margin-top:10px;padding:10px;">
            Copyright &copy; 2018 MIT
        </div>
</div>
</div>


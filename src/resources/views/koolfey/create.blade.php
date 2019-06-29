@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="margin-top: 15px;margin-left:-100px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if(isset($_POST['add']))
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong> Your Personal Number is : {{ $pn }} </strong>
                            </div>
                        </div>
                    </div>
                @endif
                <form method="post" action="/koolfey/register">
                    @csrf()
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" required>
                        </div>
                    </div>
                    <!--@error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong></span>
                    @enderror -->
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <div class="input-group">
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="phone">Phone</label>
                    <div class="input-group">
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="dob">DOB</label>
                        <div class="input-group">
                            <input type="date" name="dob" class="form-control @error('dob') is-invalid @enderror" value="{{ old('dob') }}" required>
                        </div>
                    </div><br>
                    <div class="form-group">
                        <input type="submit" name="add" value="Register" class="btn btn-primary pull-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{ url('/api/koolfey/login') }}" class="btn btn-primary pull-center">Back</a>
                    </div>
                    <div style="margin-left: -40px;">
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <ul style="list-style-type: none">
                                    <li><button class="btn btn-danger">{{ $error }}</button></li></li>
                                </ul>
                            @endforeach
                        @endif
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
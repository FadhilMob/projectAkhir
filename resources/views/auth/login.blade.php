@extends('layouts.app')

@section('title')
    | LOGIN
@endsection
@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block">
                                <p> <center>
                                <img src="https://th.bing.com/th/id/R.26a4fbb5b11507db98408e71938be5f3?rik=ir2%2b4ZudtSgIPg&riu=http%3a%2f%2f1.bp.blogspot.com%2f-Xix68xvfQMo%2fUOJAT1FJmHI%2fAAAAAAAAEro%2fExw177elxwE%2fs1600%2fLogo%2bKota%2bBatu.jpg&ehk=T5aEpiKTdCdhiYfVSwse9if3TmuqAvybLNIEV80usRU%3d&risl=&pid=ImgRaw&r=0" 
                                width="400" height="370"> 
                            </p></center>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">LOGIN!</h1>
                                    </div>
                            <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row mb-4">
                                        <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                                        <div class="col-md-6">
                                            <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </div>
                            </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
@endsection
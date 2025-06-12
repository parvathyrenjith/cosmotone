@extends('admin.layouts.app')

@section('content')

<body class="background no-footer">
    <div class="fixed-background"></div>
    <main>
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-9 mx-auto my-auto">
                    <div class="card auth-card">
                        <div class="position-relative image-side ">

                            <p class=" text-white h2">Cosmotone Conductors Pvt. Ltd</p>

                            <p class="white mb-0">
                                Please use your credentials to login.
                                <br>If you are not a member, please
                                <a href="" class="white">register</a>.
                            </p>


                        </div>
                        <div class="form-side text-center">
                            <img class="mb-4" src="{{ URL::asset('asset/logos/logo-with-title.svg') }}" width="150" />

                            <!-- <h6 class="mb-4">Login </h6> -->
                            <form method="POST" action="{{ route('admin.login') }}">
                                @csrf
                                <label class="form-group has-float-label mb-4">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                    <span>Email Address</span>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </label>


                                <label class="form-group has-float-label mb-4">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <span>Password</span>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </label>
                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                    <!-- <button class="btn btn-primary btn-lg btn-shadow" type="submit">LOGIN</button> -->
                                    <input type="submit" class="btn btn-primary btn-lg btn-shadow" value="LOGIN">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>  
</body>
@endsection
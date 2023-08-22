<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/assets') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ url('/assets') }}/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url('/assets') }}/css/app.css">
    <link rel="stylesheet" href="{{ url('/assets') }}/css/pages/auth.css">
    <link rel="shortcut icon" href="{{ url('/assets') }}/images/logo/logo-kampus.png" type="image/x-icon"
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <Div class="col-lg-3 d-none d-lg-block">
                
            </div>
            <div class="col-lg-6 col-12">
                <div id="auth-left">
                    <div class="auth-logo text-center">
                        <a href="{{ url('/dashboard') }}"><img src="{{ url('/assets') }}/images/logo/logo-kampus.png" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title text-center">Sign Up</h1>
                    <form  method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} position-relative has-icon-left mb-2">
                            <input id="email" type="email" class="form-control form-control-xl" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="off">
                            
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} position-relative has-icon-left mb-2">
                            <input id="name" type="text" class="form-control form-control-xl" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="off">
                            
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} position-relative has-icon-left mb-2">
                            <input id="password" type="password"  name="password" class="form-control form-control-xl" placeholder="Password" required>
                            
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group position-relative has-icon-left mb-2">
                            <input id="password-confirm" name="password_confirmation" type="password" class="form-control form-control-xl" placeholder="Confirm Password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit"  class="btn btn-primary btn-block btn-lg shadow-lg mt-2">Sign Up</button>
                    </form>
                    <div class="text-center mt-2 text-lg fs-4">
                        <p class='text-gray-600'>Already have an account? <a href="{{ url('/login') }}"
                                class="font-bold">Log
                                in</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-none d-lg-block">
            </div>
        </div>

    </div>
</body>

</html>
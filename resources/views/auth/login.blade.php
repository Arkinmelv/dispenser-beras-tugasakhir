<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Dashboard</title>
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
                <div id="auth-left">

                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div id="auth-left">
                    <div class="auth-logo text-center">
                        <a href="{{ url('/dashboard') }}"><img src="{{ url('/assets') }}/images/logo/logo-kampus.png" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title text-center">Log in.</h1>

                    <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input style="border: none;border-bottom: 1px solid #BBBBBB;box-shadow: none;" id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus  autocomplete="off">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input style="border: none;border-bottom: 1px solid #BBBBBB;box-shadow: none;" id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5 submit" type="submit">Log in</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="{{ route('register') }}"
                                class="font-bold">Sign
                                up</a>.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-none d-lg-block">

                </div>
            </div>
        </div>

    </div>
</body>

</html>
                            
                           
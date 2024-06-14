{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 --}}
 <!doctype html>
 <html lang="en">
 
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Furnifantasi</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <style>
         body {
             background-color: grey;
         }
 
         .login-container {
             max-width: 400px;
             margin: auto;
             padding: 2rem;
             background: white;
             border-radius: 8px;
             box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
         }
 
         .login-container h1 img {
             width: 150px;
         }
 
         .btn-custom {
             background-color: #343a40;
             color: white;
         }
 
         .btn-custom:hover {
             background-color: #23272b;
         }
     </style>
 </head>
 
 <body>
     @if(session('error') !== null)
     <div class="alert alert-danger text-center">
         {{ session('error') }}
     </div>
     @endif
     <div class="container">
         <div class="login-container mt-5">
             <h1 class="text-center mb-4"><img src="images/logo.jpg" alt="Furnifantasi Logo"></h1>
             <form action="/login" method="post">
                 @csrf
                 <div class="mb-3">
                     <label for="email" class="form-label">Email</label>
                     <input class="form-control" type="email" name="email" id="email" placeholder="Enter email" required>
                 </div>
                 <div class="mb-3">
                     <label for="password" class="form-label">Password</label>
                     <input class="form-control" type="password" name="password" id="password"
                         placeholder="Enter Password" required>
                 </div>
                 <div class="d-grid gap-2 mb-3">
                     <button class="btn btn-custom" type="submit">Login</button>
                 </div>
                 <div class="text-center">
                     <a href="/newAccount">Don't have an account? Register here</a>
                 </div>
             </form>
         </div>
     </div>
 
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
         integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
         integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
     </script>
 </body>
 
 </html>
 

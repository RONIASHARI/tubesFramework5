<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Controller & View pada Laravel</title>
    @vite('resources/sass/app.scss')
</head>
<body style="background-color: bisque">
    <div class="container text-center my-5">
        <h1 class="mb-4">KA U</h1>
        <div style="width: 200px; margin: 0 auto;">
            <div class="col-floating mb-3">
                <label for="userName" class="form-label">User Name</label>
                <input class="form-control" type="text" name="userName" id="userName" value="" placeholder="Enter User Name">
            </div>
            <div class="col-floating md-6 mb-3">
                <label for="password" class="form-label">Password</label>
                <input class="form-control" type="text" name="password" id="password" value="" placeholder="Enter Password">
            </div>
        </div>


        {{-- <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div> --}}

        {{-- Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite --}}
        {{-- <img class="img-thumbnail" src="{{ Vite::asset('resources/images/') }}" alt="image"> --}}

        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a class="btn btn-dark" href="">Login</a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>

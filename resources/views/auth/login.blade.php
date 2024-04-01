<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body{
            background: rgb(2,0,36);
            background: linear-gradient(299deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 20%, rgba(5,94,177,1) 47%, rgba(3,152,215,1) 78%, rgba(0,212,255,1) 100%);

        }

        .input {
            background-color: rgba(0, 0, 0, 0) !important;
            border: 0px !important;
            border-bottom: 1px solid black !important;
            color: white !important;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container d-flex" style="justify-content: center; height: 100vh;">
        <div class="card text-white shadow-lg p-3 mb-5 rounded" style="
            align-self: center;
            height: 40%;
            width: 40%;
            background-color: rgba(0, 0, 0, 0);
            font-size: 20px;
            ">
            <div class="card-header">
                Login
            </div>
            <div class="card-body">
                <form action="{{ route('admin') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" name="email" class="form-control input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control input" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-success w-100 mt-5">Login</button>
                  </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>

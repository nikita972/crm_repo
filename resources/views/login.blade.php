<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('login_assets/css/bootstrap.min.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="container col-md-4">
        @if(session('error'))
            <div class="alert alert-danger mt-2">
                {{session('error')}}
            </div>
         @endif
        <form action="{{route('login.check')}}" method="post"  enctype="multipart/form-data">
        @csrf
            <div class="card border-0 shadow-lg mt-4">
                <div class="card-body">
                    <div class="h2 text-center">Login</div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">mobile</label>
                        <input type="text" name="mobile" id="mobile" placeholder="enter mobile number" class="form-control @error('mobile') is-invalid @enderror">
                        @error('mobile')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="password" name="password" id="password" placeholder="enter password" class="form-control @error('password') is-invalid @enderror" >
                        @error('password')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary mt-3">Login</button>
                    </div>   
                </div>
            </div>
        </form>
    </div>
</body>
</html>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - Admin</title>
    <link href="{{asset('_admin/css/styles.css')}}" rel="stylesheet" /> 
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js')}}" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
   <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                            <div class="card-body">
                               <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                  <label class="small mb-1" for="email">{{ __('E-Mail Address') }}</label>
                                  <input class="form-control py-4  @error('email') is-invalid @enderror" id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter email address"/>
                                  @error('email')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                             <label class="small mb-1" for="password">{{ __('Password') }}</label>
                             <input class="form-control py-4 @error('password') is-invalid @enderror" id="         password" type="password" name="password" required autocomplete="current-password"          placeholder="Enter password" />
                             @error('password')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>  
                </div>
                <div class="card-footer text-center">
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</div>
<div id="layoutAuthentication_footer">
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2019</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
<script src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('_admin/js/scripts.js')}}"></script>
</body>
</html>
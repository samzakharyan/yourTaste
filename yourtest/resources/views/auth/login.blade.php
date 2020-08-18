 @extends("layouts.main")
        @section("title")
           Login 
        @endsection
            @section("name")
                 Login 
            @endsection
                @section("content")
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
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                             @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                    </form>  
                        <div class="card-footer text-center">
                            <div class="small"><a href="{{route('register')}}">Need an account? Sign up!</a></div>
                        </div>
                @endsection                    

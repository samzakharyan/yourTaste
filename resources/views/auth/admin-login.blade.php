  @extends("layouts.main")
      @section("title")
         Admin Login 
      @endsection
           @section("name")
                Admins  Login 
           @endsection
               @section("content")
                    <form method="POST" action="{{ route('admin.login.submit') }}">
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
                                     <input class="form-control py-4 @error('password') is-invalid @enderror" 
                                     id="password" type="password" name="password" required autocomplete="current-password"placeholder="Enter password" />
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                                </div>

                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                             @if (Route::has('admin.password.request'))
                                    <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                    </form> 
                @endsection                     

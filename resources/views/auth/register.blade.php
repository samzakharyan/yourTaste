 @extends("layouts.main")
        @section("title")
           Register 
        @endsection
            @section("name")
                 Create Account 
            @endsection
                @section("content")
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="name">First Name</label> 
                                    <input id="name" type="text" class="form-control py-4 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter first name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Email</label>
                                    <input id="email" type="email" class="form-control py-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email address">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="password">Password</label>
                                     <input id="password" type="password" class="form-control py-4 
                                         @error('password') is-invalid @enderror" name="password" 
                                         required autocomplete="new-password" placeholder="Enter password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="password-confirm">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control py-4" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4 mb-0">
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                        <div class="card-footer text-center">
                            <div class="small"><a href="{{route('login')}}">Have an account? Go to login</a></div>
                        </div>
                @endsection                   

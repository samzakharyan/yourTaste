    @extends("layouts.main")
        @section("title")
          Admin Password Recovery
        @endsection
            @section("name")
                Admin Password Recovery
            @endsection
                @section("content")
                <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your password.
                @if (session('status'))
                 <div class="alert alert-success" role="alert">
                     {{ session('status') }}
                 </div>
                 @endif
                </div>
                    <form method="POST" action="{{ route('admin.password.email') }}">
                        @csrf
                         <div class="form-group">
                            <label class="small mb-1" for="email">Email</label>
                            <input id="email" type="email" class="form-control  py-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter email address">
                 @error('email')
                   <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                   </span>
                 @enderror
                         </div>

                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="small" href="{{route('admin.login')}}">Return to login</a>
                            <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
            @endsection
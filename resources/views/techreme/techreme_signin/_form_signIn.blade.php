<div class="col-12 mb-20"><input id="email" type="email" name="email"
        class="form-control form-control-line @error('email') is-invalid @enderror" placeholder="Email"
        value="{{ old('email') }}" required autocomplete="email" autofocus></div>
@error('email')
    <div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-20"><input id="password" type="password" name="password"
        class="form-control form-control-line @error('password') is-invalid @enderror" placeholder="Password"
        value="{{ old('password') }}" required autocomplete="password" autofocus></div>
@error('password')
    <div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12">
    <div class="row justify-content-between">
        <div class="col-auto mb-15">
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </div>
</div>

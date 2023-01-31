

<input type="hidden" name="token" value="{{ $token }}">
<div class="col-12 mb-20"><input id="email" type="email" name="email" class="form-control form-control-line @error('email') is-invalid @enderror" value="{{ $email ?? old('email') }}" required autocomplete="email"  autofocus></div>
@error('email')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-15"><input id="password" type="password" name="password" class="form-control form-control-sm @error('password') is-invalid @enderror" placeholder="New Password" required autocomplete="new-password"></div>
@error('password')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-15"><input id="password_confirm" type="password" name="password_confirmation" class="form-control form-control-sm" placeholder="Retype Password" required autocomplete="new-password"></div>



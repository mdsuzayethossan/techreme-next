
<div class="col-12 mb-20"><input id="email" type="email" name="email" class="form-control form-control-line @error('email') is-invalid @enderror" placeholder="Enter E-Mail Address" value="{{ old('email') }}" required autocomplete="email" autofocus></div>
@error('email')
<div class=" text-danger">{{ $message }}</div>
@enderror

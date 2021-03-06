@extends('layouts.auth')

@section('content')
<section id="values" class="values" style="background-image: {{asset('assets/css/img/hero-bg.png') }}">

    <div class="container aos-init aos-animate" data-aos="fade-up">

        <header class="section-header">
          <h2>{{ env('APP_NAME') }}</h2>
          <p>{{ __('Register') }}</p>
        </header>

        <div class="row justify-content-center">

          <div class="col-lg-4">
                <div class="box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" style="background-color: #ffffff">
                <img src="{{ asset('assets/img/values-3.png') }}" class="img-fluid" alt="">
                <p>{{ __('Please enter the required details below') }}</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group mb-2">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('Name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="off" placeholder="{{ __('Phone Number') }}">
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group mb-2">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                        </div>

                        <div class="form-group mb-2">
                            <input type="hidden" name="g-recaptcha-response" id="recaptcha">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                    @if (Route::has('login'))
                    <p>Already registered? 
                        <a href="{{ route('login') }}">
                            {{ __('Login') }}
                        </a>
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="https://www.google.com/recaptcha/api.js?render={{ env('NOCAPTCHA_SITEKEY') }}"></script>
<script>
  grecaptcha.ready(function() {
    grecaptcha.execute('{{ env('NOCAPTCHA_SITEKEY') }}', {action: 'contact'}).then(function(token) {
      if (token) {
        document.getElementById('recaptcha').value = token;
      }
    });
  });
</script>
@endpush
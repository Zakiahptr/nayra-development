@extends('layouts.auth.app')

@section('content')
<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-5">
            <div class="card card-primary">
                <div class="text-center mt-3 mb-3">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo" width="100" class="shadow-light rounded-circle">
                  </div>
                <div class="text-center mb-3"><h4>Amany Residence</h4></div>
                <div class="text-center"><h5>Masuk Admin</h5></div>
              <div class="card-body">

                @if ($errors->any())
                    <div>
                        <div class="alert alert-danger text-center">
                            {{ __('Gagal Masuk. Email atau kata sandi salah') }}
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Kata Sandi</label>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Masuk
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection

@extends('layouts.app')

@section('content')

<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Iniciar sesión <small>Ingrese correo y contraseña</small></h2>
                    


                  <div class="clearfix"></div>
                  </div>
                 
                  <div class="x_content">
                    <br />
                    
                    <form method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('login') }}">
                        @csrf

                      <div class="form-group">
                            <label for="email" class="control-label col-md-4 col-sm-3 col-xs-12 ">{{ __('Correo') }}<span class="required">*</span></label>

                             <div class="col-md-4 col-sm-6 col-xs-12">
                                <input id="email" type="email" class="form-control  col-md-7 col-xs-12 @error('email')
                                is-invalid @enderror" name="email" value="{{ old('email') }}" 
                                required autocomplete="email" autofocus></div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                            <label for="password" class="control-label col-md-4 col-sm-3 col-xs-12">{{ __('Contraseña') }}<span class="required">*</span></label>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <input id="password" type="password" class="form-control @error('password') 
                                is-invalid @enderror" name="password" required autocomplete="current-password">


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--<div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" 
                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>-->

                     
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">

                      <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>

                      @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                         <div class="ln_solid"></div>
                  </div>
                </div>
              </div>
            </div>

@endsection

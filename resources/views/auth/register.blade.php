@extends('auth.auth-master')

@section('title')
    Registrar
@endsection

@section('content')
    <div class="container-login100" style="background-image: url({{ asset('images/bg-01.jpg') }});">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" method="post" action="{{ route('register.perform') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <span class="login100-form-title p-b-49">
                    Registrar
                </span>
                <div class="wrap-input100 validate-input m-b-23" data-validate="Email is reauired">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" name="email" value="{{ old('email') }}" required="required" placeholder="">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                    <span class="label-input100">Nome de usuário</span>
                    <input class="input100" type="text" name="username" value="{{ old('username') }}" required="required" placeholder="">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Senha</span>
                    <input class="input100" type="password" name="password" value="{{ old('password') }}"  placeholder="">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Repetir senha</span>
                    <input class="input100" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"  placeholder="">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                    @if ($errors->has('password_confirmation'))
                        <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>

                <div class="text-right p-t-8 p-b-31"></div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Registrar
                        </button>
                    </div>
                </div>
                <div class="flex-col-c p-t-25">
                    <a href="{{ route('login.show') }}" class="">
                        Já registrado? 
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
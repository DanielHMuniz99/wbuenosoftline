@extends('auth.auth-master')

@section('title')
    Logar
@endsection

@section('content')
    <div class="container-login100" style="background-image: url({{ asset('images/bg-01.jpg') }});">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" method="post" action="{{ route('login.perform') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <span class="login100-form-title p-b-49">
                    Logar
                </span>
                @if ($errors->login->first('not_match'))
                    <div class="alert alert-danger text-center" role="alert">
                        <span class="text-danger">{{ $errors->login->first('not_match') }}</span>
                    </div>
                @endif
                <div class="wrap-input100 validate-input m-b-23" data-validate="Username is required">
                    <span class="label-input100">Nome de usuário</span>
                    <input class="input100" type="text" name="username" value="{{ old('username') }}" required="required" placeholder="Digite seu nome de usuário">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Senha</span>
                    <input class="input100" type="password" name="password" value="{{ old('password') }}"  placeholder="Digite sua Senha">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>
                <div class="text-center p-t-8 p-b-31">
                    <small class="text-muted">admin@email.com</small>
                    <br>
                    <small class="text-muted">password</small>
                </div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Logar
                        </button>
                    </div>
                </div>
                <div class="flex-col-c p-t-25">
                    <a href="{{ route('register.show') }}" class="txt2">
                        Registrar
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection

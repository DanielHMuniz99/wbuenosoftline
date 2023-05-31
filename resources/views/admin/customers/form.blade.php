<!DOCTYPE html>
<html lang="en">
    @include("admin.header")
    <body>
        @include("admin.sidebar")
        <div class="wrapper d-flex flex-column min-vh-100 bg-light">
            <header class="header header-sticky mb-4">
                <div class="container-fluid">
                    <ul class="header-nav float-left d-md-flex">
                        <li class="nav-item"><a class="nav-link" href="#">
                        </a></li>
                    </ul>
                </div>
            </header>
            <div class="body flex-grow-1 px-3">
                <div class="container">
                    <div id="content">
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-12">
                                        <strong>{{ trans('Clientes') }}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content rounded-bottom">
                                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1252">
                                        <form name="customers" id="form-customers" action="/customers" method="POST" class="form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-3">
                                                    <label class="form-label" for="code">{{ trans('Código') }}</label>
                                                    <input class="form-control form-input" id="code" name="code" type="text" value="{{ isset($data) ? $data->code : '' }}" {{ isset($data) ? 'disabled' : '' }}>
                                                </div>
                                                <div class="col-9">
                                                    <label class="form-label" for="name">{{ trans('Nome') }}</label>
                                                    <input class="form-control form-input" id="name" name="name" type="text" value="{{ isset($data) ? $data->name : '' }}">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label class="form-label" for="company_name">{{ trans('Fantasia') }}</label>
                                                    <input class="form-control form-input" id="company_name" name="company_name" type="text" value="{{ isset($data) ? $data->company_name : '' }}">
                                                </div>
                                                <div class="col-4">
                                                    <label class="form-label" for="document">{{ trans('Documento') }}</label>
                                                    <input class="form-control form-input" id="document" name="document" type="text" value="{{ isset($data) ? $data->document : '' }}">
                                                </div>
                                                <div class="col-4">
                                                    <label class="form-label" for="address">{{ trans('Endereço') }}</label>
                                                    <input class="form-control form-input" id="address" name="address" type="text" value="{{ isset($data) ? $data->address : '' }}">
                                                </div>
                                            </div>
                                            <hr/>
                                            @if(isset($data))
                                                <button type="button" onclick="update('customers', {{ $data->id }})" class="btn btn-success float-right">Atualizar</button>
                                            @else
                                                <button type="button" onclick="save('customers')" class="btn btn-success float-right">Salvar</button>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include("admin.footer")
    </body>
</html>
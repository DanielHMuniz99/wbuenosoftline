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
                                        <strong>{{ trans('Produtos') }}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content rounded-bottom">
                                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1252">
                                        <form name="products" id="form-products" action="/products/update/{{ isset($data) ? $data->id : '' }}" method="{{ isset($data) ? 'POST' : 'POST' }}" class="form">
                                            <div class="row">
                                                <div class="col-3">
                                                    <label class="form-label" for="code">{{ trans('Código') }}</label>
                                                    <input class="form-control form-input" id="code" name="code" type="text" value="{{ isset($data) ? $data->code : '' }}" {{ isset($data) ? 'disabled' : '' }}>
                                                </div>
                                                <div class="col-9">
                                                    <label class="form-label" for="description">{{ trans('Descrição') }}</label>
                                                    <input class="form-control form-input" id="description" name="description" type="text" value="{{ isset($data) ? $data->description : '' }}">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label class="form-label" for="bar_code">{{ trans('Código de barras') }}</label>
                                                    <input class="form-control form-input" id="bar_code" name="bar_code" type="text" value="{{ isset($data) ? $data->bar_code : '' }}">
                                                </div>
                                                <div class="col-3">
                                                    <label class="form-label" for="sale_value">{{ trans('Valor de Venda') }}</label>
                                                    <input class="form-control form-input" id="sale_value" name="sale_value" type="number" value="{{ isset($data) ? $data->sale_value : '' }}">
                                                </div>
                                                <div class="col-3">
                                                    <label class="form-label" for="gross_weight">{{ trans('Peso Bruto') }}</label>
                                                    <input class="form-control form-input" id="gross_weight" name="gross_weight" type="number" value="{{ isset($data) ? $data->gross_weight : '' }}">
                                                </div>
                                                <div class="col-3">
                                                    <label class="form-label" for="net_weight">{{ trans('Peso Líquido') }}</label>
                                                    <input class="form-control form-input" id="net_weight" name="net_weight" type="number" value="{{ isset($data) ? $data->net_weight : '' }}">
                                                </div>
                                            </div>
                                            <hr/>
                                            @if(isset($data))
                                                <button type="button" onclick="update('products', {{ $data->id }})" class="btn btn-success float-right">Atualizar</button>
                                            @else
                                                <button type="button" onclick="save('products')" class="btn btn-success float-right">Salvar</button>
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
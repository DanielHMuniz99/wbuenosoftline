<div class="card mb-4">
    <div class="card-header">
        <div class="row">
            <div class="col-11">
                <strong>Clientes</strong>
            </div>
            <div class="col-1">
                <a href="/customers/create" onclick="parentNode.submit();">
                    <button class="btn btn-primary float-right" type="button">Novo</button>
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1252">
                <div class="row">
                    <table>
                        <thead>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Fantasia</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($data as $customer)
                                <tr>
                                    <td>{{ $customer->code }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->company_name }}</td>
                                    <td>
                                        <div class="text-center">
                                            <button onclick='window.location.href="/customers/edit/{{ $customer->id }}"' class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button>
                                            <button onclick="confirm('customers', {{ $customer->id }})" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
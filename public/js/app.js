$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function datatable()
{
    $("table").DataTable({
        searching: false,
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json',
        }
    })
}

function list(model = "")
{
    $.ajax({
        method: "GET",
        url: "/" + model + "/list",
        dataType: "html",
    })
    .done(function(data) {
        $("#content").html(data);
        datatable();
    });
}

function update(model = "", id = 0)
{
    let form = $('#form-' + model).serialize();
    $.ajax({
        method: "PUT",
        url: "/" + model + "/update/" + id,
        dataType: "json",
        data: form
    })
    .done(function(data) {
        toastr.success(data)
        load(model)
    }).fail(function (data) {
        toastr.error(data.responseJSON.message)
    });    
}

function remove(model, id)
{
    $.ajax({
        method: "DELETE",
        url: "/" + model + "/" + id,
        dataType: "json",
    })
    .done(function(data) {
        toastr.success(data)
        list(model)
    });
}

function confirm(model, id)
{
    $.confirm({
        title: 'Atenção!',
        content: 'Essa operação não pode ser revertida, tem certeza que deseja prosseguir?',
        buttons: {
            firstOption: {
                text: 'Cancelar',
                btnClass: 'btn-secondary',
                keys: ['enter', 'shift'],
                action: function(){

                }
            },
            secondOption: {
                text: 'Deletar',
                btnClass: 'btn-danger',
                keys: ['enter', 'shift'],
                action: function(){
                    remove(model, id);
                }
            }
        }
    });
}

function save(model)
{
    let form = $('#form-' + model).serialize();
    $.ajax({
        method: "POST",
        url: "/" + model,
        dataType: "json",
        data: form
    })
    .done(function(data) {
        toastr.success(data)
        list(model)
    }).fail(function (data) {
        toastr.error(data.responseJSON.message)
    });
}

function load(url)
{
    window.location.href = "/" + url
}
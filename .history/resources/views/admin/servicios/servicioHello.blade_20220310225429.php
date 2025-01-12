@extends('admin.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color:white;">.</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tabla de Servicios</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div id="msj_alert__"></div>
                <div class="col-12">
                    <div class="pull-right" style="text-align: center;">
                        <a href="javascript:void(0)" onclick="openModalTraining(false,'CREAR')"
                            class="btn btn-block bg-gradient-success"><i class="far fa-edit"></i> Crear Servicio</a>
                    </div>

                    <div class="row" style="text-align: center;display: initial;">
                        <div class="form-group">
                            <label>Filtrar Tipo de Servicio</label>
                            <select class="form-control" name="txt_id_servicio_filtrar">
                                <option value="0">------------All ---------------- </option>
                                @foreach ($rowData_cb_ as $rows)
                                <option value="{{ $rows->id_servicio }}">
                                    {{ $rows->superior_titulo1 }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable de servicios</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" id="updateDiv"></div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Modal de CRUD-->
    <div class="modal fade" id="modalTraining" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="txt_tituloModal">Actualizar Servicio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="uploadFormTraining">
                        <input type="hidden" name="txt_id_descripcion" />
                        <input type="hidden" name="isValues" />
                        <input type="hidden" name="txt_titulo_principal__" />
                        <!-- 1 : ES EL SERVICIO TENIS -->
                        <input type="hidden" name="txt_id_servicio__" />
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="card card-primary">
                                    <div class="card-body">


                                        <div class="form-group editShowHide">
                                            <div class="form-group">
                                                <label>Tipo de Servicio</label>
                                                <select class="form-control" name="txt_id_servicio">
                                                    @foreach ($rowData_cb_ as $rows)
                                                    <option value="{{ $rows->id_servicio }}">
                                                        {{ $rows->superior_titulo1 }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group editShowHide">
                                            <div class="form-group">
                                                <label>Titulo Principal</label>
                                                <select class="form-control" name="txt_titulo_principal"></select>
                                            </div>
                                        </div>

                                        <div class="form-group ShowHideHeader">
                                            <label for="txt_header_titulo">Titulo Header</label>
                                            <input type="text" class="form-control" name="txt_sub_titulo" required>
                                        </div>
                                        <div class="form-group ShowHideHeader">
                                            <label for="txt_header_descripcion">Descripción Header</label>
                                            <input type="text" class="form-control" name="txt_sub_titulo" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="txt_sub_titulo">Sub Titulo</label>
                                            <input type="text" class="form-control" name="txt_sub_titulo" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="txt_descripcion">Descripción</label>
                                            <textarea class="form-control" name="txt_descripcion" rows="3"
                                                placeholder="Enter ..." required></textarea>
                                        </div>
                                        <div class="form-group txt_descripcion">
                                            <label for="txt_descripcion">URL Link</label>
                                            <textarea class="form-control" name="txt_url_link" rows="3"
                                                placeholder="Enter ..." required></textarea>
                                        </div>

                                        <div class="form-group" style="text-align: center">
                                            <div class="contain animated bounce">
                                                <div class="alert"></div>
                                                <div id='img_contain'>
                                                    <img id="blah" align='middle'
                                                        src="http://www.clker.com/cliparts/c/W/h/n/P/W/generic-image-file-icon-hi.png"
                                                        alt="your image" title='' name="txt_url_image" />
                                                </div>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" id="inputGroupFile01" name="image"
                                                            class="imgInp custom-file-input"
                                                            aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="/template_admin/img/modelo/medic.png"
                                                class="btn btn-primary btn-sm" download><i class="far fa-thumbs-up"></i>
                                                Descargar Modelo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button class="btn btn-primary" id="btn_sumit">Aplicar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</div>





@push('scripts')
<script>
function openModalTraining(id_descripcion, isValues) {

    console.log(id_descripcion)
    console.log(isValues)

    if (isValues == "ELIMINAR") {
        if (confirm('Esta seguro de Eliminar?')) {
            let formData = new FormData();
            formData.append('txt_id_descripcion', id_descripcion)
            formData.append('isValues', isValues)
            axios.post('createServicioTraining',
                formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(function(response) {
                if (response.data.state == "error") {
                    $('#msj_alert__').html(
                            '<div class="alert alert-danger" role="alert">' + response.data.data + '</div>')
                        .fadeOut(9500);
                } else {
                    $('#msj_alert__').html(
                            '<div class="alert alert-success" role="alert">' + response.data.data + '</div>'
                        )
                        .fadeOut(9500);
                    listarDataTable(0)
                }

            }).catch(function() {
                console.log('FAILURE!!');
            });
        }

    }else if(isValues == "INFORMACION"){
        $('.editShowHide').hide();
        $('.ShowHideHeader').show();
        $('#modalTraining').modal('show')
        $("#uploadFormTraining").closest('form').find("input[type=text], textarea").val("");
      
        $('input[name=txt_id_descripcion]').val(id_descripcion)//ID_SERVICIO
        $('input[name=isValues]').val(isValues) //OPCION DE CREAR, ACTUALIZAR, INFORMACION
        $('laber[for=txt_sub_titulo]').text("Titulo");
        $('input[name=txt_id_servicio__]').val(id_descripcion); //SIRVE PARA MANTENER LA TABLA EN EL FILTRO
        $('.txt_descripcion').hide();

    } else {

        $('#modalTraining').modal('show')
        $('input[name=txt_id_descripcion]').val(id_descripcion)
        $('input[name=isValues]').val(isValues) //OPCION DE CREAR, ACTUALIZAR

        if (isValues == 'CREAR') {

            $('.editShowHide').show();
            $('.txt_descripcion').show();
            $('.ShowHideHeader').hide();
            //LIMPIAR
            $('select[name=txt_titulo_principal]').val("");
            $('input[name=txt_sub_titulo]').val("");
            $('textarea[name=txt_descripcion]').val("");
            $('textarea[name=txt_url_link]').val("");
            $('img[name=txt_url_image]').attr('src', "https://sistemas.com/wp-content/uploads/2013/12/twitpic.png");
            $("input[name=image]").val(null);
        }

        if (id_descripcion) {

            $('.editShowHide').hide();

            let formData = new FormData();
            formData.append('txt_id_descripcion', id_descripcion)
            axios.post('editServicioTraining',
                formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then(function(response) {
                console.log(response.data[0].id_servicio);
                $('input[name=txt_id_servicio__]').val(response.data[0].id_servicio); //SIRVE PARA MANTENER LA TABLA EN EL FILTRO
                $('input[name=txt_titulo_principal__]').val(response.data[0].id_titulo);
                $('select[name=txt_titulo_principal]').val(response.data[0].id_titulo);
                $('input[name=txt_sub_titulo]').val(response.data[0].title);
                $('textarea[name=txt_descripcion]').val(response.data[0].descripcion);
                $('textarea[name=txt_url_link]').val(response.data[0].url_link);
                $('img[name=txt_url_image]').attr('src', response.data[0].url_image);

            }).catch(function() {
                console.log('FAILURE!!');
            });
        }
    }
}


//:::::::::::: CRUD SERVICIOS :::::::::::::::::::::::::::::
$('#uploadFormTraining').on('submit', function (e) {
    e.preventDefault();

    $('#modalTraining').modal('hide')
    let formData = new FormData(this);
    axios.post('createServicioTraining',
        formData, {
        headers: {
            'Content-Type': 'multipart/form-data'
        }
    }
    ).then(function (response) {
        if (response.data.state == "error") {
            $('#msj_alert__').html(
                '<div class="alert alert-danger" role="alert">' + response.data.data + '</div>')
                .fadeOut(9500);
        } else {
            $('#msj_alert__').html(
                '<div class="alert alert-success" role="alert">' + response.data.data + '</div>'
            )
                .fadeOut(9500);
            if (response.data.src) {
                $('img[name=txt_url_image]').attr('src', response.data.src);
            }

            listarDataTable($('input[name=txt_id_servicio__]').val())
            $("input[name=image]").val(null);
            $("input[name=image]").val("");
        }

    }).catch(function () {
        console.log('FAILURE!!');
    });

});

function listarDataTable(id_servicio) {
    $.ajax({
        type: 'get',
        dataType: 'html',
        url: 'listarDataTable',
        data: "txt_id_servicio=" + id_servicio,
        success: function (response) {
            $('#updateDiv').html(response);
        }
    });
}

listarDataTable(0)


</script>
@endpush


<style type="text/css">
.alert {
    text-align: center;
}

#blah {
    max-height: 256px;
    height: auto;
    width: auto;
    display: block;
    margin-left: auto;
    margin-right: auto;
    padding: 5px;
}

.input-group {
    /* margin-left:calc(calc(100vw - 320px)/2); */
    /* margin-top: 40px;
    width: 320px; */
    margin-bottom: 25px;
}

.imgInp {
    width: 150px;
    /* margin-top: 10px; */
    padding: 10px;
    background-color: #d3d3d3;
}

.loading {
    animation: blinkingText ease 2.5s infinite;
}

@keyframes blinkingText {
    0% {
        color: #000;
    }

    50% {
        color: #transparent;
    }

    99% {
        color: transparent;
    }

    100% {
        color: #000;
    }
}

.custom-file-label {
    cursor: pointer;
}

/************CREDITS**************/
.credit {
    font: 14px "Century Gothic", Futura, sans-serif;
    font-size: 12px;
    color: #3d3d3d;
    text-align: left;
    /* margin-top: 10px; */
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}

.credit a {
    color: gray;
}

.credit a:hover {
    color: black;
}

.credit a:visited {
    color: MediumPurple;
}
</style>
@endsection
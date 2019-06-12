@extends('layouts.gentemplate')

@section('css')

<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans')}}">
<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}">

@endsection()

@section('Content')

<div class="page-title">
    <div class="title_left">
    <h3>Delimitación del tema</h3>
    </div>
</div>

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    
    <div class="x_panel">
        <div class="x_title">
        <h2>Componentes del enunciado holopráxico</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
        </div>

        <div class="x_content">

        <div class="col-xs-3">
            <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left">
            <li class="active"><a href="#que_saber" data-toggle="tab">¿Qué quieres saber?</a>
            </li>
            <li><a href="#evento" data-toggle="tab">Eventos</a>
            </li>
            <li><a href="#uestudio" data-toggle="tab">Unidades de estudio</a>
            </li>
            <li><a href="#contexto" data-toggle="tab">Contexto</a>
            </li>
            <li><a href="#temporalidad" data-toggle="tab">Temporalidad</a>
            </li>
            </ul>
        </div>

        <div class="col-xs-9">
            <!-- Tab panes -->
            <div class="tab-content">
            <div class="tab-pane active" id="que_saber">
                <p class="lead">Pregunta principal de qué hacer</p>
                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                synth. Cosby sweater eu banh mi, qui irure terr.</p>
            </div>
            <div class="tab-pane" id="evento">
                <p class="lead">Pregunta principal de evento</p>
                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                    synth. Cosby sweater eu banh mi, qui irure terr.</p>
            </div>
            <div class="tab-pane" id="uestudio">
            <p class="lead">Pregunta principal de unidad de estudio</p>
                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                    synth. Cosby sweater eu banh mi, qui irure terr.</p>
            </div>
            <div class="tab-pane" id="contexto">
            <p class="lead">Pregunta principal de contexto</p>
                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                    synth. Cosby sweater eu banh mi, qui irure terr.</p>
            </div>
            <div class="tab-pane" id="temporalidad">
            <p class="lead">Pregunta principal de temporalidad</p>
                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                    synth. Cosby sweater eu banh mi, qui irure terr.</p>
            </div>
            </div>
        </div>

        <div class="clearfix"></div>

        </div>

    </div>
    
    <div class="x_panel">

        <div class="x_title">
        <h2>Determinemos el enunciado holopráxico</h2>
        <div class="clearfix"></div>
        </div>

        <div class="x_content">

        <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h4>Ingrese aquí el enunciado holopráxico de la investigación:</h4>
                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                data-parsley-validation-threshold="10"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="table-title">
                    <h4>Detalle los elementos básicos abajo:</h4>

                </div>
                <div class="table-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Eventos</th>
                            <th>Algo</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Peter Parker</td>
                            <td>Customer Service</td>
                            <td>(313) 555-5735</td>
                            <td>
                                <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Fran Wilson</td>
                            <td>Human Resources</td>
                            <td>(503) 555-9931</td>
                            <td>
                                <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-round add-new"><i class="fa fa-plus"></i> Agregar</button>
                </div>
                
            </div>
        </div>

    </div>

    </div>

    </div>
</div>

@endsection

@push('js')

<!-- Script Tabla Agregar -->
<script type="text/javascript">
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    var actions = $("table td:last-child").html();
    // Append table with add row form on add new button click
        $(".add-new").click(function(){
        $(this).attr("disabled", "disabled");
        var index = $("table tbody tr:last-child").index();
            var row = '<tr>' +
                '<td><input type="text" class="form-control" name="name" id="name"></td>' +
                '<td><input type="text" class="form-control" name="department" id="department"></td>' +
                '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
        '<td>' + actions + '</td>' +
            '</tr>';
        $("table").append(row);   
        $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
            $('[data-toggle="tooltip"]').tooltip();
        });
    // Add row on add button click
    $(document).on("click", ".add", function(){
        var empty = false;
        var input = $(this).parents("tr").find('input[type="text"]');
            input.each(function(){
        if(!$(this).val()){
            $(this).addClass("error");
            empty = true;
        } else{
                    $(this).removeClass("error");
                }
        });
        $(this).parents("tr").find(".error").first().focus();
        if(!empty){
        input.each(function(){
            $(this).parent("td").html($(this).val());
        });     
        $(this).parents("tr").find(".add, .edit").toggle();
        $(".add-new").removeAttr("disabled");
        }   
        });
    // Edit row on edit button click
    $(document).on("click", ".edit", function(){    
            $(this).parents("tr").find("td:not(:last-child)").each(function(){
                $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });   
            $(this).parents("tr").find(".add, .edit").toggle();
            $(".add-new").attr("disabled", "disabled");
    });
    // Delete row on delete button click
    $(document).on("click", ".delete", function(){
            $(this).parents("tr").remove();
            $(".add-new").removeAttr("disabled");
        });
    });
</script>

@endpush
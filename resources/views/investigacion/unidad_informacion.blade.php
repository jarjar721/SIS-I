@extends('layouts.gentemplate')
@section('Content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="page-title">
            <h4>(AQUI VA EL TEMA DE LA INVESTIGACION)</h4>
        </div>
    </div>
</div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">

    <div class="x_panel">
      <div class="x_title">
        <h2>Destaquemos las unidades de información</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <form method="POST" action="/unidad_informacion/store">
          <p>Agregue la unidades de información asociadas al tema de investigación:</p>

          <div class="row">
            <div class="col-md-6">
              <div class="form-horizontal form-label-left">
                <div class="form-group">
                  <label>Categoría</label>
                  <input type="text" id="categoria" name="categoria" class="form-control" placeholder="Título de la categoría">
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-horizontal form-label-left">
                <div class="form-group">
                  <label>Categoría padre:</label>
                  <select id="fk_unidad_info" name="fk_unidad_info" class="form-control">
                    <option value=""></option>
                    <option value="1">Categoría padre 1</option>
                    <option value="2">Categoría padre 2</option>
                    <option value="3">Categoría padre 3</option>
                    <option value="4">Categoría padre 4</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-horizontal form-label-left">
                <div class="form-group">
                  <label>Nivel de elaboración:</label>
                  <select id="nivel" name="nivel" class="form-control" required>
                    <option value=""></option>
                    <option value="monografico">Monográfico</option>
                    <option value="hermeneutico">Hermenéutico</option>
                    <option value="paradigmatico">Paradigmático</option>
                    <option value="sintagmatico">Sintagmático</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="form-horizontal form-label-left">
                <div class="form-group">
                  <label>Referencia</label>
                  <input type="text" id="referencia" name="referencia" class="form-control" placeholder="Estilo APA, IEEE, etc">
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div id="alerts">
            </div>
            <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">

              <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a data-edit="fontSize 5">
                      <p style="font-size:17px">Huge</p>
                    </a>
                  </li>
                  <li>
                    <a data-edit="fontSize 3">
                      <p style="font-size:14px">Normal</p>
                    </a>
                  </li>
                  <li>
                    <a data-edit="fontSize 1">
                      <p style="font-size:11px">Small</p>
                    </a>
                  </li>
                </ul>
              </div>

              <div class="btn-group">
                <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
              </div>

              <div class="btn-group">
                <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
              </div>

              <div class="btn-group">
                <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
              </div>

              <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                <div class="dropdown-menu input-append">
                  <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                  <button class="btn" type="button">Add</button>
                </div>
                <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
              </div>

              <div class="btn-group">
                <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
              </div>
            </div>
            <div id="editor-one" class="editor-wrapper"></div>
            <div class="form-group"></div>
            <textarea name="cita" id="cita" style="display:none;"></textarea>
          </div>

          <div class="ln_solid"></div>

          <button type="submit" class="btn btn-round btn-lg btn-success pull-right">Guardar</button>
        </form>
      </div>
    </div>
  </div>

  <div class="x_panel">
    <div class="x_title">
      <h2>Unidades de información en la investigación <small>Guardadas hasta la fecha</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up pull-right"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Categoría</th>
            <th>Nivel</th>
            <th>Referecia</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
          
        </tbody>

      </table>

    </div>
  </div>

</div>

@endsection

@push('js')

<!-- bootstrap-wysiwyg -->
<script src="{{asset('bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
<script src="{{asset('jquery.hotkeys/jquery.hotkeys.js')}}"></script>
<script src="{{asset('google-code-prettify/src/prettify.js')}}"></script>

@endpush
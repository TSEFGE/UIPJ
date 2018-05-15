<div class="modal fade" id="asignar">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <div class="modal-header">
        <h4 class="modal-title">Asignar Carpeta</h4>
        <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        
<div class="modal-body">
   <ul id="" class="nav nav-tabs">
        <li class="nav-item " id="datosPer">
            <a class="nav-link tab active pestaña " id="nuevo" data-toggle="tab" href="#nAsignacion"><i class="fa fa-user-plus" aria-hidden="true"></i>
            </a>
            </li>
            <li class="nav-item" id="datosDir">
            <a class="nav-link" data-toggle="tab" id="lista" href="#listaAsignacion"><i class="fa fa-users" aria-hidden="true"></i>
            </a>
        </li>                            
    </ul>

    <div class="tab-content" id="contenedor">
            <div class="tab-pane active container" id="nAsignacion">

            <div class="form-group">
            <div class="form-check form-check-inline">
            <label class="form-check-label col-form-label col-form-label-sm">
            <input class="form-check-input" type="radio" id="fiscal" name="asigna" value="1" required> Fiscal
            </label>
            </div>
            <div class="form-check form-check-inline">
            <label class="form-check-label col-form-label col-form-label-sm">
            <input class="form-check-input" type="radio" id="auxiliar" name="asigna" value="0" required> Auxiliar 
            </label>
            </div>
            </div>

            </div>
            <div class="tab-pane container" id="listaAsignacion">
            @include('tables.lista-asignaciones')
            </div>
                       
    </div>


</div>
        
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    </div>
        
    </div>
    </div>
</div>

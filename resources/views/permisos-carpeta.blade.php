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
        @include('asignar-carpeta')      
        </div>
        <div class="tab-pane container" id="listaAsignacion">
        @include('tables.lista-asignaciones')
        </div>                       
    
</div>
        
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    </div>
        
       </div>
   </div>
</div>
@push('scripts')
<script src="{{ asset('js/selects/async.js') }}"></script>
{{-- <script src="{{ asset('js/selects/select-tipo.js') }}"></script> --}}
 
@endpush


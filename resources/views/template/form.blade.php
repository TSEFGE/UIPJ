@extends('template.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/tempusdominus-bootstrap-4.min.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">@yield('title')</div>
            <div class="card-body boxone">
                @yield('contenido')
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/es.js') }}"></script>
    <script src="{{ asset('js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('js/sisyphus.js')}}" ></script>
    <script src="{{ asset('js/selects.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/validations.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('form').sisyphus({
            });
            $("#numInterno").val("S/N");
            $("#numInterno2").val("S/N");
            $("#numInterno3").val("S/N");
            $("#numInternoC").val("S/N");
            $("#fax").val("SIN INFORMACION");
        });
        		$(function() {
        			 maxVal = 17;
        			 $('#curp').focusout(function(){
        					var insertedVal = $(this).val();
        					if (insertedVal.length < maxVal){
        							$(this).css({"border-color":"red"});
        								$("#validarRFCFisico").show();
        					}else{
        							$(this).css({"border-color":"green"});
        							$("#validarRFCFisico").hide();
        					}
        			 });
               $('#narracion').focusout(function(){
                 narraMax=5;
                 var narraVal = $(this).val();
                 if (narraVal.length < narraMax){
                     $(this).css({"border-color":"red"});
                       $("#ValidarNarracion").show();
                 }else{
                     $(this).css({"border-color":"green"});
                     $("#ValidarNarracion").hide();
                 }
              });
              des=false;
              $('#narracionIph').focusout(function(){
                narraMax=5;
                var narraVal = $(this).val();
                if (narraVal.length < narraMax){
                    $(this).css({"border-color":"red"});
                      $("#ValidarNarracionIph").show();
                }else{
                    $(this).css({"border-color":"green"});
                    $("#ValidarNarracionIph").hide();
                }
             });
             $('#descripcionHechos').focusout(function(){
               narraMax=5;
               var narraVal = $(this).val();
               if (narraVal.length < narraMax){
                 true
                   $(this).css({"border-color":"red"});
                     $("#ValidarNarracionHechos").show();
               }else{
                   $(this).css({"border-color":"green"});
                   $("#ValidarNarracionHechos").hide();
               }
            });
            $('#motivoEstancia').focusout(function(){
              narraMax=5;
              var narraVal = $(this).val();
              if (narraVal.length < narraMax){
                true
                  $(this).css({"border-color":"red"});
                    $("#validarEstancia").show();
              }else{
                  $(this).css({"border-color":"green"});
                  $("#validarEstancia").hide();
              }
           });
           });



    </script>
    {{--<script src="{{ asset('js/selectsChoosen.js') }}"></script>--}}
    @stack('PilaScripts')
@endsection

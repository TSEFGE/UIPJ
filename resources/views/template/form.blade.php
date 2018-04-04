@extends('template.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/tempusdominus-bootstrap-4.min.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">            
                @yield('contenido')
            </div>
        </div>
    </div>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center">@yield('titulo-tabla')</h5>
            </div>
            @yield('tabla')
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
    <script src="{{ asset('js/validations.js') }}"></script>
    <script src="{{ asset('js/selects.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script>
        //$('#narracionIph').restrictLength($('#contaNarr'));
        //$('#descripcionHechos').restrictLength($('#contaDesc'));
        $(document).on('focus', '.select2', function (e) {
            if (e.originalEvent) {
                $(this).siblings('select').select2('open');
            }
        });
           
    </script>
    <script src="{{ asset('js/curp.js') }}"></script>
    @include('fields.rfcMoral');
    @include('fields.rfcFisico')
    @stack('PilaScripts')
@endsection

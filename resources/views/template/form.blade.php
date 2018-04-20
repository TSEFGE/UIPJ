@extends('template.main')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/jquery-validator/css/theme-jquery-validation.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            @yield('contenido')
        </div>
    </div>
</div>

@isset($idCarpeta)
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
@endif
@endsection

@push('scripts')
    <script src="{{ asset('plugins/select2/js/select2.min.js')}}" ></script>
    <script src="{{ asset('plugins/jquery-validator/js/jquery.form-validator.min.js')}}" ></script>
    <script src="{{ asset('plugins/jquery-ui/js/jquery-ui.js')}}" ></script>
    <script src="{{ asset('plugins/sisyphus/js/sisyphus.js')}}" ></script>
    <script src="{{ asset('js/selects/sisy.js') }}"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->   
    {{-- Subdividir --}}
    <script src="{{ asset('js/scripts.js') }}"></script>
@endpush

@push('docready-js')
    $('select').select2({
        language: "es"
    });

    $(document).on('focus', '.select2', function (e) {
        if (e.originalEvent) {
            $(this).siblings('select').select2('open');
        }
    });
    
    $.validate({
        lang : 'es'
    });
@endpush

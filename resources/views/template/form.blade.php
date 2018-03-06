@extends('template.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/tempusdominus-bootstrap-4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/chosen/chosen.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/select2.css') }}">
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
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/es.js') }}"></script>
    <script src="{{ asset('js/tempusdominus-bootstrap-4.js') }}"></script>
    <script src="{{ asset('plugins/chosen/chosen.jquery.js')}}" ></script>
    <script src="{{ asset('plugins/select2/select2.min.js')}}" ></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/selects.js') }}"></script>
    {{--<script src="{{ asset('js/selectsChoosen.js') }}"></script>--}}
@endsection
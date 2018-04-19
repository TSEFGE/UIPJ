@extends('template.main')

@section('title', 'Agenda')

@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/css/fullcalendar.min.css') }}">
@endpush

@section('content')
    <div class="card">
        <div class="card-header">
            Agenda
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col"></div>
                <div class="col-8">
                    {!! $calendar->calendar() !!}
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('plugins/fullcalendar/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/js/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/js/es.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/js/fullcalendar-es.js') }}"></script>
    <script>setTimeout('document.location.reload()',60000); </script>
    {!! $calendar->script() !!}
@endpush

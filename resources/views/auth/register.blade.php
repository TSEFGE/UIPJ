@extends('template.main')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/select2.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrarse</div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group row{{ $errors->has('idUnidad') ? ' has-error' : '' }}">
                            {!! Form::label('idUnidad', 'Unidad', ['class' => 'col-md-4 col-form-label text-right']) !!}
                            <div class="col-md-6">
                                {{--<input id="idUnidad" type="number" class="form-control" name="idUnidad" value="{{ old('idUnidad') }}" required autofocus>--}}
                                {!! Form::select('idUnidad', $unidades, null, ['class' => 'form-control select2', 'required']) !!}
                                @if ($errors->has('idUnidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idUnidad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('nombres') ? ' has-error' : '' }}">
                            <label for="nombres" class="col-md-4 col-form-label text-right">Nombre</label>
                            <div class="col-md-6">
                                <input id="nombres" type="text" class="form-control" name="nombres" value="{{ old('nombres') }}" required autofocus>
                                @if ($errors->has('nombres'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombres') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('primerAp') ? ' has-error' : '' }}">
                            <label for="primerAp" class="col-md-4 col-form-label text-right">Primer apellido</label>
                            <div class="col-md-6">
                                <input id="primerAp" type="text" class="form-control" name="primerAp" value="{{ old('primerAp') }}" required autofocus>
                                @if ($errors->has('primerAp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('primerAp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('segundoAp') ? ' has-error' : '' }}">
                            <label for="segundoAp" class="col-md-4 col-form-label text-right">Segundo apellido</label>
                            <div class="col-md-6">
                                <input id="segundoAp" type="text" class="form-control" name="segundoAp" value="{{ old('segundoAp') }}" required autofocus>
                                @if ($errors->has('segundoAp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('segundoAp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('numFiscal') ? ' has-error' : '' }}">
                            <label for="numFiscal" class="col-md-4 col-form-label text-right">Número de fiscal</label>
                            <div class="col-md-6">
                                <input id="numFiscal" type="number" class="form-control" name="numFiscal" value="{{ old('numFiscal') }}" required autofocus min="1" max="100">
                                @if ($errors->has('numFiscal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numFiscal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 col-form-label text-right">Correo electrónico</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 col-form-label text-right">Contraseña</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-right">Confirmar contraseña</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-md-center">
                            <div class="col-md-auto">
                                <button type="submit" class="btn btn-secondary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('plugins/select2/select2.min.js')}}" ></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("input:text").keyup(function() {
                $(this).val($(this).val().toUpperCase());
            });

            $('.select2').select2();
        });
    </script>
@endsection
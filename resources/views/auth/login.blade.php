{{-- @extends('template.main') --}}
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script type="text/javascript">
Cookies.remove('isLiveC');
//localStorage.clear();
localStorage.removeItem('isLiveLocal');
sessionStorage.removeItem('isLive');
</script>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de inicio de Carpetas de Investigación</title>
	<link rel="icon" href="{{ asset('img/iconofge.png') }}">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">--}}
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{asset ('admin/dist/css/adminlte.css')}}">
	<link rel="stylesheet" href="{{ asset('css/cssfonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>

<body class="hold-transition login-page">
        <div class="login-box rounded">
                <div class="card-body arriba rounded-top">
                  <a id="login-logo" ><img src="{{ asset('img/logo-fge-svg.svg') }}" alt=""></a>
                </div>
                <!-- /.login-logo -->                
                  <div class="card-body login-card-body abajo rounded-bottom">                                
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <input type="hidden" id="email" name="email" value="">
                        <div id="usuario" class="form-row align-items-center">
                            <div class="col form-group has-feedback row{{ $errors->has('password') ? ' has-error' : '' }} inputrow">
                              <input type="text" class="form-control mb-2" id="name" name="name" placeholder="Usuario">
                              <label class="fa fa-user fa-lg" for="name"></label> 
                            </div>
                            <div class="col form-group has-feedback">
                              <label class="sr-only" for="inlineFormInputGroup" style="white">Username</label>
                              <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div id="dominio" class="input-group-text rounded">@fiscaliaveracruz.gob.mx</div>
                                </div>
                                </div>
                            </div>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif           
                      </div>
                      <div class="form-group has-feedback row{{ $errors->has('password') ? ' has-error' : '' }} inputrow">
                        <input id="password" type="password" class="form-control" name="password"  placeholder="Contraseña">
                        <label class="fa fa-lock fa-lg" for="password" ></label>
                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                      </div>                      
                      <div class="row">
                        <!-- /.col -->
                        <div class="col-12 ">
                          <button id="iniciar" type="submit" class="btn btn-primary btn-block btn-flat rounded">Entrar</button>
                        </div>
                        <!-- /.col --> 
                      </div>
                    </form>           
                  </div>
                  <!-- /.login-card-body -->
                
              </div>            
	
<script src="{{ asset('js/jquery-3.2.1.min.js')}}" ></script>
<script src="{{ asset('js/popper.min.js')}}" ></script>
<script src="{{ asset('js/bootstrap.min.js')}}" ></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<script type="text/javascript">
	function borrarlsc(){
		Cookies.remove('isLiveC');
		localStorage.clear();
		sessionStorage.removeItem('isLive');
	}

    $(document).ready(function() {
        $("#name").focusout(function() {
            $("#email").val($(this).val()+"@fiscaliaveracruz.gob.mx".toLowerCase());
        });
        $('input:text').focus(function(){
            $(this).css( "color","#6b6b6b");
        });
    });
</script>

@yield('scripts')
  @include('sweet::alert')
</body>
</html>

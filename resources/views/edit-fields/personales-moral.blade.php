	
                              <!--      DATOS DE PERSONA MORAL       -->
                              <div class="col-12" id="personaMoral">
                                  <div class="row">
                                      <div class="col-6">
                                          <div class="form-group">
                                              {!! Form::label('nombres2', 'Nombre', ['class' => 'col-form-label-sm']) !!}
                                              {!! Form::text('nombres2', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre', 'required','data-validation'=>'custom' ,'data-validation-regexp'=>'^(([A-ZÁÉÑÍÓÚ]|[0-9])(-|,|.|\s)*){1,100}$', 'data-validation-error-msg'=>'Nombre debe contener al menos una letra']) !!}
                                          </div>
                                      </div>
                                      <div class="col-6">
                                          <div class="form-group">
                                              {!! Form::label('fechaAltaEmpresa', 'Fecha de alta de persona moral', ['class' => 'col-form-label-sm']) !!}<div class="input-group date" id="fechaAlta" data-target-input="nearest">
                                                  {!! Form::text('fechaAltaEmpresa', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechaAlta', 'data-toggle' => 'datetimepicker', 'placeholder' => 'AAAA-MM-DD','data-validation'=>'date', 'data-validation-format'=>'dd-mm-yyyy','data-validation-error-msg'=>'Ingrese fecha en el formato correcto AAAA-MM-DD']) !!}
                                                  <div class="input-group-append" data-target="#fechaAlta" data-toggle="datetimepicker">
                                                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                          
                                      <div class="col-6">
                                          <div class="row no-gutters">
                                              <div class="col-7">
                                                  {!! Form::label('rfc2', 'R.F.C.', ['class' => 'col-form-label-sm']) !!}
                                                  {!! Form::text('rfc2', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el R.F.C.', 'required','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-Z,Ñ,&]{3}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))$','data-validation-error-msg'=>'RFC inválido']) !!}
                                              </div>
                          
                                              <div class="col-5">
                                                  {!! Form::label('homo2', 'Homoclave', ['class' => 'col-form-label-sm']) !!}
                                                  {!! Form::text('homo2', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Homoclave', 'required','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-Z\d]{2}([A\d]))$','data-validation-error-msg'=>'Homoclave inválida']) !!}
                          
                                              </div>
                                          </div>
                          
                                      </div>
                                      <div class="col-6">
                                          <div class="form-group">
                                              {!! Form::label('representanteLegal', 'Representante legal', ['class' => 'col-form-label-sm']) !!}
                                              {!! Form::text('representanteLegal', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre del representante legal','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-ZÁÉÑÍÓÚ]|[\s]|[.]){1,300}$', 'data-validation-error-msg'=>'Nombre del representante legal no debe estar vacio']) !!}
                          
                                          </div>
                                      </div>
                                      <div class="col-12">
                                  <div class="form-group">
                                      {!! Form::label('narracionUnoM', 'Narración', ['class' => 'col-form-label-sm']) !!}
                                      {!! Form::textarea('narracionUnoM', null, ['class' => 'form-control form-control-sm','id' => 'narracionUnoM','rows' => '3']) !!}
                                  </div>
                              </div>
                                  </div>
                              </div>
                          </div>
                          
                          {{--<div id="accordion" role="tablist">
                              <div class="card">
                                  <div class="card-header" role="tab" id="headingGenerales">
                                      <h5 class="mb-0">
                                          <a data-toggle="collapse" href="#collapseGen" aria-expanded="true" aria-controls="collapseGen">
                                              Datos personales
                                          </a>
                                      </h5>
                                  </div>
                                  <div id="collapseGen" class="collapse show boxcollapse" role="tabpanel" aria-labelledby="headingGenerales" data-parent="#accordion">
                                      <div class="boxtwo">
                                          @include('fields.personales')
                                      </div>
                                  </div>
                              </div>
                          </div>--}}
@extends('layouts.admlay')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<h1>Editar Modelo</h1>
			<hr>
		</div>
	</div>	
</div>
@if (session('status'))
<div class="alert alert-success">
  <strong>Exito!</strong> {{ session('status') }}
</div>
@endif

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			   <div class="panel panel-default">
                        <div class="panel-heading">
                            Modelos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							<form class="form-horizontal" method="POST" action="edicion" accept-charset="UTF-8" enctype="multipart/form-data">
							<fieldset>
							@if($errors->any())
								<h4>{{$errors->first()}}</h4>
							@endif
							<!-- Form Name -->
							<legend>Formulario de Edicion de Modelos</legend>
							
							<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
							<input type="hidden" name="id" value="{{ $producto['id'] }}">
										
							<!-- Text input-->
							<div class="form-group">	
							  <label class="col-md-4 control-label" for="Nombre">Nombre</label>  
							  <div class="col-md-4">
							  <input id="name" name="name" type="text" placeholder="Nombre" value="{{ $producto['name'] }}" class="form-control input-md" required="">
							  <span class="help-block">Intoduzca su nombre tal como desee que aparezca</span>  
							  </div>
							</div>
							
										
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="Edad">Edad</label>  
							  <div class="col-md-4">
							  <input id="age" name="age" type="number" placeholder="Edad" value="{{ $producto['age'] }}"  class="form-control input-md" required="">
							  <span class="help-block">Introduzca su Edad real</span>  
							  </div>
							</div>
							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="selectbasic">Ciudad de los servicios</label>
							  <div class="col-md-4">
							    <select id="city" name="city" class="form-control" required="">
							    	  <option value="{{ $producto['city'] }}" selected="selected">{{ $producto['city'] }}</option>
								      <option value="Bogota">Bogot&aacute;</option>
								      <option value="Medellin">Medell&iacute;n</option>
								      <option value="Cali">Cali</option>
								      <option value="Barranquilla">Barranquilla</option>
								      <option value="Cartagena">Cartagena</option>
							    </select>
							  </div>
							</div>
							
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Color Ojos</label>  
							  <div class="col-md-4">
							  <input id="colojo" name="colojo" type="text" placeholder="Color Ojos"  value="{{ $producto['colojo'] }}" class="form-control input-md" required="">
							  <span class="help-block">Introduzca su Color de Ojos real</span>  
							  </div>
							</div>
							
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Color de Pelo</label>  
							  <div class="col-md-4">
							  <input id="colpel" name="colpel" type="text" placeholder="Color de Pelo" value="{{ $producto['colpel'] }}" class="form-control input-md" required="">
							  <span class="help-block">Introduzca su color de pelo actual</span>  
							  </div>
							</div>
				
							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="selectbasic">Color de Piel</label>
							  <div class="col-md-4">
							    <select id="colpil" name="colpil" class="form-control" required="">
							    	  <option value="{{ $producto['colpil'] }}" selected="selected">{{ $producto['colpil'] }}</option>
								      <option value="Blanca">Blanca</option>
								      <option value="Morena">Morena</option>
								      <option value="Negra">Negra</option>
							    </select>
							  </div>
							</div>
							
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Tama&ntildeo de Busto</label>  
							  <div class="col-md-4">
							  <input id="tambus" name="tambus" type="text" placeholder="Tamano de Busto" value="{{ $producto['tambus'] }}" class="form-control input-md" required="">
							  <span class="help-block">Introduzca su tama&ntildeo de busto en Talla incluya copa</span>  
							  </div>
							</div>
							
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Tama&ntildeo de Cola</label>  
							  <div class="col-md-4">
							  <input id="tamcol" name="tamcol" type="number" placeholder="Tamano de Cola" value="{{ $producto['tamcol'] }}" class="form-control input-md" required="">
							  <span class="help-block">Introduzca su tama&ntildeo de cola en centimetros, solo el valor en n&uacute;meros</span>  
							  </div>
							</div>
							
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Tama&ntildeo de Cintura</label>  
							  <div class="col-md-4">
							  <input id="tamcin" name="tamcin" type="number" placeholder="tamano de Cintura" value="{{ $producto['tamcin'] }}" class="form-control input-md" required="">
							  <span class="help-block">Introduzca su tama&ntildeo de cintura en centimetros, solo el valor en n&uacute;meros</span>  
							  </div>
							</div>
							
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Estatura</label>  
							  <div class="col-md-4">
							  <input id="estat" name="estat" type="number" placeholder="Estatura" value="{{ $producto['estat'] }}" class="form-control input-md" required="">
							  <span class="help-block">Introduzca su estatura en centimetros, solo el valor en n&uacute;meros</span>  
							  </div>
							</div>
							
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Costos 1 Hora</label>  
							  <div class="col-md-4">
							  <input id="estat" name="v_one_h" type="number" placeholder="Valor hora" value="{{ $producto['v_one_h'] }}" class="form-control input-md" required="">
							  <span class="help-block">Introduzca el valor de una hora de servicio</span>  
							  </div>
							</div>
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Costos 2 Hora</label>  
							  <div class="col-md-4">
							  <input id="estat" name="v_two_h" type="number" placeholder="Valor 2 horas" value="{{ $producto['v_two_h'] }}" class="form-control input-md" required="">
							  <span class="help-block">Introduzca el valor de dos horas de servicio</span>  
							  </div>
							</div>
							
								<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Costos 3 Horas</label>  
							  <div class="col-md-4">
							  <input id="estat" name="v_three_h" type="number" placeholder="Valor 3 horas" value="{{ $producto['v_three_h'] }}" class="form-control input-md" required="">
							  <span class="help-block">Introduzca el valor de tres horas de servicio</span>  
							  </div>
							</div>
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Costos fin de semana</label>  
							  <div class="col-md-4">
							  <input id="estat" name="v_fds" type="number" placeholder="Valor fin de semana" value="{{ $producto['v_fds'] }}" class="form-control input-md" required="">
							  <span class="help-block">Introduzca el valor de un fin de semana de servicio</span>  
							  </div>
							</div>
							
							
							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="selectbasic">Contextura fisica</label>
							  <div class="col-md-4">
							    <select id="confis" name="confis" class="form-control" required="">
							    	  <option value="{{ $producto['confis'] }}" selected="selected">{{ $producto['confis'] }}</option>
								      <option value="Delgada">Delgada</option>
								      <option value="Normal">Normal</option>
								      <option value="Obesa">Obesa</option>
							    </select>
							  </div>
							</div>
							
							<!-- Multiple Checkboxes -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="language">Idiomas</label>
							  <div class="col-md-4">
							  <div class="checkbox">
							    <label for="language-0">
							      <input type="checkbox" name="language1" id="language-0" value="Espanol">
							      Espa&ntilde;ol
							    </label>
								</div>
							  <div class="checkbox">
							    <label for="language-1">
							      <input type="checkbox" name="language2" id="language-1" value="Ingles">
							      Ingl&eacute;s
							    </label>
								</div>
							  <div class="checkbox">
							    <label for="language-2">
							      <input type="checkbox" name="language3" id="language-2" value="Aleman">
							      Alem&aacute;n
							    </label>
								</div>
							  <div class="checkbox">
							    <label for="language-3">
							      <input type="checkbox" name="language4" id="language-3" value="Frances">
							      Franc&eacute;s
							    </label>
								</div>
							  </div>
							</div>
											
							
							<!-- Textarea -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="Intereses">Intereses</label>
							  <div class="col-md-4">                     
							    <textarea class="form-control" id="intereses" name="intereses"  placeholder="Cuentanos algo de ti..." required="">{{ $producto['interest'] }}</textarea>
							  </div>
							</div>
							
							
							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="selectbasic">VIP?</label>
							  <div class="col-md-4">
							    <select id="vip" name="vip" class="form-control" required="">
							    	  <option value="{{ $producto['vip'] }}" selected="selected">{{ $producto['vip'] }}</option>
								      <option value="SI">SI</option>
								      <option value="NO">NO</option>
							    </select>
							  </div>
							</div>
							
							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="selectbasic">Ranking</label>
							  <div class="col-md-4">
							    <select id="rank" name="rank" class="form-control" required="">
							    	  <option value="{{ $producto['rank'] }}" selected="selected">{{ $producto['rank'] }}</option>
								      <option value="1">1</option>
								      <option value="2">2</option>
								      <option value="3">3</option>
								      <option value="4">4</option>
								      <option value="5">5</option>
							    </select>
							  </div>
							</div>
							
							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="selectbasic">Activo?</label>
							  <div class="col-md-4">
							    <select id="activo" name="activo" class="form-control" required="">
							    	  <option value="{{ $producto['activo'] }}" selected="selected">{{ $producto['activo'] }}</option>
								      <option value="SI">SI</option>
								      <option value="NO">NO</option>
							    </select>
							  </div>
							</div>
							
							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="selectbasic">Modulo de Negocio prepago?</label>
							  <div class="col-md-4">
							    <select id="prepay" name="prepay" class="form-control" required="">
							    	  <option value="{{ $producto['prepay'] }}" selected="selected">{{ $producto['prepay'] }}</option>
								      <option value="SI">SI</option>
								      <option value="NO">NO</option>
							    </select>
							  </div>
							</div>
							
							<!-- File Button --> 
							<div class="form-group">
								<label class="col-md-4 control-label" for="Foto No.4">Intrucciones de carga de fotos:</label>
									<div class="col-md-4">
										<p>1) Con el bot&oacute;n examinar ubique las fotos a subir, se recomienda tener m&iacute;nimo 4 fotos.</p>
										<p>2) Seleccione todas las fotos a subir (ctrl + click).</p>
										<p>3) Una vez est&eacute;n todas seleccionadas pulsar OK.</p>
										<p>4) Se mostrar&aacute; una previsualizaci&oacute;n de estas.</p>
										<p>4) Tener en cuenta que es mejor fotos con resoluci&oacute;n mayor a 1440 x 1080, s&oacute;lo formato jpeg.</p>
									</div>
							</div>
							
							<div class="form-group">
							  <label class="col-md-4 control-label" for="Foto">Carga de fotos:</label>
							  	<div class="col-md-4">
									<input id="foto" name="foto[]" type="file" multiple class="file-loading" required="">
								</div>
							</div>	
							
										
							<!-- Button -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="singlebutton">Enviar Registro</label>
							  <div class="col-md-4">
							    <button id="singlebutton" name="singlebutton" class="btn btn-primary">OK</button>
							  </div>
							</div>
							</fieldset>
							
							
						</form>

                       </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
		</div>
	</div>
</div>
<script>
   $("#foto").fileinput({
        maxFilePreviewSize: 10240,
		language: "es",
		allowedFileExtensions: ["jpg", "png"],
		uploadAsync: false,
		//minFileCount: 4,
		maxFileCount: 9,
		autoReplace: true,
		overwriteInitial: false	,
		showUpload: false,
		dropZoneEnabled: true			
    });
</script>
@endsection
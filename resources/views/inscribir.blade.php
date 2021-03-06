 @includeIf('layouts.header') 
 <!-- Fotos -->
<script src="{{ asset('js/fileinput.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/plugins/sortable.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/locales/es.js') }}" type="text/javascript"></script>
<link href="{{ asset('css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
<link href="{{ asset('themes/explorer/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>
<script src="{{ asset('themes/explorer/theme.js') }}" type="text/javascript"></script>
<!--Fin fotos -->
  <div class="container">
	 <div class="row">
	 	<div class="col-xs-12 col-md-12">
	 	@if (session('status'))
		<div class="alert alert-success">
		  <strong>Exito!</strong> {{ session('status') }}
		</div>
		@endif
			<form class="form-horizontal" method="POST" action="inscribirse" accept-charset="UTF-8" enctype="multipart/form-data">
				<fieldset>
				@if($errors->any())
					<h4>{{$errors->first()}}</h4>
				@endif
				<!-- Form Name -->
				<legend>Formulario de Registro de Modelos</legend>
				
				<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
							
				<!-- Text input-->
				<div class="form-group">	
				  <label class="col-md-4 control-label" for="Nombre">Nombre</label>  
				  <div class="col-md-4">
				  <input id="name" name="name" type="text" placeholder="Nombre" class="form-control input-md" required>
				  <span class="help-block">Intoduzca su nombre art&iacute;stico tal como desee que aparezca</span>  
				  </div>
				</div>
				
							
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Edad">Edad</label>  
				  <div class="col-md-4">
				  <input id="age" name="age" type="number" min="18" max="50" placeholder="Edad" class="form-control input-md" required="">
				  <span class="help-block">Introduzca su Edad real</span>  
				  </div>
				</div>
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="selectbasic">Ciudad de los servicios</label>
				  <div class="col-md-4">
				    <select id="city" name="city" class="form-control" required="">
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
				  <input id="colojo" name="colojo" type="text" placeholder="Color Ojos" class="form-control input-md" required="" maxlength="12">
				  <span class="help-block">Introduzca su Color de Ojos real</span>  
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Color de Pelo</label>  
				  <div class="col-md-4">
				  <input id="colpel" name="colpel" type="text" placeholder="Color de Pelo" class="form-control input-md" required="" maxlength="12">
				  <span class="help-block">Introduzca su color de pelo actual</span>  
				  </div>
				</div>
	
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="selectbasic">Color de Piel</label>
				  <div class="col-md-4">
				    <select id="colpil" name="colpil" class="form-control" required="">
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
				  <input id="tambus" name="tambus" type="text" placeholder="Tamano de Busto" class="form-control input-md" required="" maxlength="4">
				  <span class="help-block">Introduzca su tama&ntildeo de busto en Talla incluya copa</span>  
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Tama&ntildeo de Cola</label>  
				  <div class="col-md-4">
				  <input id="tamcol" name="tamcol" type="number" placeholder="Tamano de Cola" class="form-control input-md" required="">
				  <span class="help-block">Introduzca su tama&ntildeo de cola en centimetros, solo el valor en n&uacute;meros</span>  
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Tama&ntildeo de Cintura</label>  
				  <div class="col-md-4">
				  <input id="tamcin" name="tamcin" type="number" placeholder="tamano de Cintura" class="form-control input-md" required="">
				  <span class="help-block">Introduzca su tama&ntildeo de cintura en centimetros, solo el valor en n&uacute;meros</span>  
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Estatura</label>  
				  <div class="col-md-4">
				  <input id="estat" name="estat" type="number" placeholder="Estatura" class="form-control input-md" required="">
				  <span class="help-block">Introduzca su estatura en centimetros, solo el valor en n&uacute;meros</span>  
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Costos 1 Hora</label>  
				  <div class="col-md-4">
				  <input id="estat" name="v_one_h" type="number" placeholder="Valor hora" class="form-control input-md" required="">
				  <span class="help-block">Introduzca el valor de una hora de servicio</span>  
				  </div>
				</div>
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Costos 2 Hora</label>  
				  <div class="col-md-4">
				  <input id="estat" name="v_two_h" type="number" placeholder="Valor 2 horas" class="form-control input-md" required="">
				  <span class="help-block">Introduzca el valor de dos horas de servicio</span>  
				  </div>
				</div>
				
					<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Costos 3 Horas</label>  
				  <div class="col-md-4">
				  <input id="estat" name="v_three_h" type="number" placeholder="Valor 3 horas" class="form-control input-md" required="">
				  <span class="help-block">Introduzca el valor de tres horas de servicio</span>  
				  </div>
				</div>
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Costos fin de semana</label>  
				  <div class="col-md-4">
				  <input id="estat" name="v_fds" type="number" placeholder="Valor fin de semana" class="form-control input-md" required="">
				  <span class="help-block">Introduzca el valor de un fin de semana de servicio</span>  
				  </div>
				</div>
				
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="selectbasic">Contextura fisica</label>
				  <div class="col-md-4">
				    <select id="confis" name="confis" class="form-control" required="">
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
				  <label class="col-md-4 control-label" for="intereses">Intereses</label>
				  <div class="col-md-4">                     
				    <textarea class="form-control" id="intereses" name="intereses" placeholder="Cuentanos algo de ti..." required=""></textarea>
				  </div>
				</div>
				<!-- Text input Telefono-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Tel&eacute;fono de contacto</label>  
				  <div class="col-md-4">
				  <input id="phone_number" name="phone_number" type="number" placeholder="Tel&eacute;fono de contacto" class="form-control input-md" required="">
				  <span class="help-block">Introduzca el Tel&eacute;fono donde te contactar&aacute;n</span>  
				  </div>
				</div>
				
				
				<!--Obligatoriosa -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="condiciones">Soy mayor de edad</label>
				  <div class="col-md-4">                     
				    <input type="checkbox" name="condiciones" id="condiciones" value="mayor" required="">
				    Verifico que soy mayor de edad
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-md-4 control-label" for="condiciones">Acepto los t&eacute;rminos y condiciones</label>
				  <div class="col-md-4">                     
				    <input type="checkbox" name="condiciones" id="condiciones" value="mayor" required="">
				    	<a href="#" data-toggle="modal" data-target="#myModal">Acepto los t&eacute;rminos y condiciones</a> de la prestaci&oacute;n del servicio
				    	<!-- Modal -->
							<div id="myModal" class="modal fade" role="dialog">
							  <div class="modal-dialog">
							
							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title">T&eacute;rminos y condiciones de la publicaci&oacute;n en esta p&aacute;gina</h4>
							      </div>
							      <div class="modal-body">
							        <p>Some text in the modal.</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
							      </div>
							    </div>
							
							  </div>
							</div>
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
				
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">C&oacute;digo de descuento</label>  
				  <div class="col-md-4">
				  <input id="suscode" name="suscode" type="text" placeholder="Codigo de descuento" class="form-control input-md">
				  <span class="help-block">Si tienes un C&oacute;digo de descuento introducelo aqu&iacute; y obt&eacute;n el primer mes gratis</span>  
				  </div>
				</div>
				<!-- Campo de correo -->
				 <input type="hidden" name="email" value="{{Auth::user()->email}}">
		
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
 @includeIf('layouts.footer')  
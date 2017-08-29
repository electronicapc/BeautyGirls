 @includeIf('layouts.header') 
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
				  <input id="name" name="name" type="text" placeholder="Nombre" class="form-control input-md" required="">
				  <span class="help-block">Intoduzca su nombre tal como desee que aparezca</span>  
				  </div>
				</div>
				
							
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Edad">Edad</label>  
				  <div class="col-md-4">
				  <input id="age" name="age" type="number" placeholder="Edad" class="form-control input-md" required="">
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
				  <input id="colojo" name="colojo" type="text" placeholder="Color Ojos" class="form-control input-md" required="">
				  <span class="help-block">Introduzca su Color de Ojos real</span>  
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Color de Pelo</label>  
				  <div class="col-md-4">
				  <input id="colpel" name="colpel" type="text" placeholder="Color de Pelo" class="form-control input-md" required="">
				  <span class="help-block">Introduzca su color de pelo actual</span>  
				  </div>
				</div>
	
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="selectbasic">Color de Piel</label>
				  <div class="col-md-4">
				    <select id="colpil" name="colpil" class="form-control" required="">
				      <option value="1">Blanca</option>
				      <option value="2">Morena</option>
				      <option value="2">Negra</option>
				    </select>
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Tama&ntildeo de Busto</label>  
				  <div class="col-md-4">
				  <input id="tambus" name="tambus" type="text" placeholder="Tamano de Busto" class="form-control input-md" required="">
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
				  <label class="col-md-4 control-label" for="Intereses">Intereses</label>
				  <div class="col-md-4">                     
				    <textarea class="form-control" id="intereses" name="intereses" placeholder="Cuentanos algo de ti..." required=""></textarea>
				  </div>
				</div>
				
				<!-- File Button --> 
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Foto No.1">Foto No.1</label>
				  <div class="col-md-4">
				    <input id="foto1" name="foto1" class="input-file" type="file" required="">
				  </div>
				</div>
				
				<!-- File Button --> 
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Foto No.2">Foto No.2</label>
				  <div class="col-md-4">
				    <input id="foto2" name="foto2" class="input-file" type="file" required="">
				  </div>
				</div>
				
				<!-- File Button --> 
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Foto No.3">Foto No.3</label>
				  <div class="col-md-4">
				    <input id="foto3" name="foto3" class="input-file" type="file" required="">
				  </div>
				</div>
				
				<!-- File Button --> 
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Foto No.4">Foto No.4</label>
				  <div class="col-md-4">
				    <input id="foto4" name="foto4" class="input-file" type="file" required="">
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
  	 </div>
  </div>	
 
 @includeIf('layouts.footer')  
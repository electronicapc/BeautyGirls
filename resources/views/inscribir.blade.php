 @includeIf('layouts.header') 
  <div class="container">
	 <div class="row">
	 	<div class="col-xs-12 col-md-12">
			<form class="form-horizontal" action="inscribirse">
				<fieldset>
				
				<!-- Form Name -->
				<legend>Formulario de Registro de Modelos</legend>
				
							
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
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="selectbasic">Contextura fisica</label>
				  <div class="col-md-4">
				    <select id="confis" name="confis" class="form-control" required="">
				      <option value="1">Delgada</option>
				      <option value="2">Normal</option>
				      <option value="2">Obesa</option>
				    </select>
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Idiomas">Idiomas</label>
				  <div class="col-md-4">
				    <select id="Idiomas" name="Idiomas" class="form-control" required="">
				      <option value="1">Espa&ntildeol</option>
				      <option value="2">Ingl&eacutes</option>
				      <option value="3">Alem&aacuten</option>
				      <option value="4">Franc&eacutes</option>
				    </select>
				  </div>
				</div>
				
				<!-- File Button --> 
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Foto No.1">Foto No.1</label>
				  <div class="col-md-4">
				    <input id="Foto1" name="Foto1" class="input-file" type="file" required="">
				  </div>
				</div>
				
				<!-- File Button --> 
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Foto No.2">Foto No.2</label>
				  <div class="col-md-4">
				    <input id="Foto2" name="Foto2" class="input-file" type="file" required="">
				  </div>
				</div>
				
				<!-- File Button --> 
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Foto No.3">Foto No.3</label>
				  <div class="col-md-4">
				    <input id="Foto3" name="Foto3" class="input-file" type="file" required="">
				  </div>
				</div>
				
				<!-- File Button --> 
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Foto No.4">Foto No.4</label>
				  <div class="col-md-4">
				    <input id="Foto4" name="Foto4" class="input-file" type="file" required="">
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
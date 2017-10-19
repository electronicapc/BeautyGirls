 @includeIf('layouts.header') 
  <div class="container">
	 <div class="row">
	 	<div class="col-xs-12 col-md-12">
	 	@if (session('status'))
		<div class="alert alert-success">
		  <strong>Exito!</strong> {{ session('status') }}
		</div>
		@endif
			<form class="form-horizontal" method="post" action="../../../payfull" accept-charset="UTF-8" enctype="multipart/form-data">
				<fieldset>
				@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
				<!-- Form Name -->
				<legend>Formulario de registro de pago</legend>
				
				<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
							
				<!-- Text input-->
				<div class="form-group">	
				  <label class="col-md-4 control-label" for="Nombre">Nombre Modelo seleccionada</label>  
				  <div class="col-md-4">
				  <p class="lead">{{ $name }}</p>				  
				  <input id="name" name="name" value="{{ $name }}" type="hidden" placeholder="Nombre" class="form-control input-md" required="">
				  <input id="id" name="id" value="{{ $id }}" type="hidden" placeholder="id" class="form-control input-md" required="">
				  <input id="value" name="value" value="{{ $value }}" type="hidden" placeholder="id" class="form-control input-md" required="">
				  <input id="time" name="time" value="{{ $time }}" type="hidden" placeholder="id" class="form-control input-md" required="">
				  </div>
				</div>
				
							
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Edad">Valor</label>  
				  <div class="col-md-4">
				  <p class="lead">${{ $value }}</p>
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Edad">Tiempo de servicio</label>  
				  <div class="col-md-4">
					  @php
						  switch($time){
							    case 1:
							        $time = "Una hora";
							        break;
				
							    case 2:
							      	 $time = "Dos horas";
							        break;
						      
								case 3:
							        $time = "Tres horas";
							       break;
							    
							   case 4:
							        $time = "Cuatro horas";
							        break; 
		
							}
					  @endphp
					  <p class="lead">{{$time }}</p>
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Nombre cliente</label>  
				  <div class="col-md-4">
				  <input id="nomcli" name="nomcli" type="text" placeholder="Nombre del cliente" class="form-control input-md" required="">
				  <span class="help-block">Introduzca su nombre</span>  
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">E-mail</label>  
				  <div class="col-md-4">
				  <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md" required="">
				  <span class="help-block">Introduzca su e-mail para la transacci&oacuten</span>  
				  </div>
				</div>
	
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Confirme su E-mail</label>  
				  <div class="col-md-4">
				  <input id="email_confirmation" name="email_confirmation" type="email" placeholder="Email" class="form-control input-md" required="">
				  <span class="help-block">Confirme su e-mail para la transacci&oacuten</span>  
				  </div>
				</div>

											
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="singlebutton">Realizar pago</label>
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
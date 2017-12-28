@extends('layouts.admlay')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<h1>Editar Pago</h1>
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
                            Pagos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							<form class="form-horizontal" method="POST" action="edicionp" accept-charset="UTF-8" enctype="multipart/form-data">
							<fieldset>
							@if($errors->any())
								<h4>{{$errors->first()}}</h4>
							@endif
							<!-- Form Name -->
							<legend>Formulario de Edicion de pagos</legend>
							
							<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
							<input type="hidden" name="id" value="{{ $producto['id'] }}">
										
							<!-- Text input-->
							<div class="form-group">	
							  <label class="col-md-4 control-label" for="Nombre">Id cliente</label>  
							  <div class="col-md-4">
							  <input id="idg" name="idg" type="text" placeholder="idGirl" value="{{ $idgirl }}" class="form-control input-md" disabled>
							  
							  </div>
							</div>
							
										
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="medpag">Medio de Pago</label>  
							  <div class="col-md-4">
							  <input id="medpag" name="medpag" type="text" placeholder="Medio de Pago" value="{{ $producto['medpag'] }}"  class="form-control input-md" required="">
							  <span class="help-block">Introduzca el medio de pago</span>  
							  </div>
							</div>
							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="mes">Mes</label>
							  <div class="col-md-4">
							    <select id="mes" name="mes" class="form-control" required="">
							    	  <option value="{{ $producto['mes'] }}" selected="selected">{{ $producto['mes'] }}</option>
								      <option value="ENERO">ENERO</option>
								      <option value="FEBRERO">FEBRERO</option>
								      <option value="MARZO">MARZO</option>
								      <option value="ABRIL">ABRIL</option>
								      <option value="MAYO">MAYO</option>
								      <option value="JUNIO">JUNIO</option>
								      <option value="JULIO">JULIO</option>
								      <option value="AGOSTO">AGOSTO</option>
								      <option value="SEPTIEMBRE">SEPTIEMBRE</option>
								      <option value="OCTUBRE">OCTUBRE</option>
								      <option value="NOVIEMBRE">NOVIEMBRE</option>
								      <option value="DICIEMBRE">DICIEMBRE</option>
							    </select>
							  </div>
							</div>
							
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Referencia de pago</label>  
							  <div class="col-md-4">
							  <input id="refpag" name="refpag" type="text" placeholder="Referencia de Pago"  value="{{ $producto['refpag'] }}" class="form-control input-md" required="">
							  <span class="help-block">Introduzca la referencia de pago</span>  
							  </div>
							</div>
							
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Email</label>  
							  <div class="col-md-4">
							  <input id="email" name="email" type="text" placeholder="Email" value="{{ $producto['email'] }}" class="form-control input-md" required="">
							  <span class="help-block">Introduzca su coorreo electronico</span>  
							  </div>
							</div>
				
							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="confirmado">Confirmado</label>
							  <div class="col-md-4">
							    <select id="confirmado" name="confirmado" class="form-control" required="">
							    	  <option value="{{ $producto['confirmado'] }}" selected="selected">{{ $producto['confirmado'] }}</option>
								      <option value="SI">SI</option>
								      <option value="NO">NO</option>
							    </select>
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
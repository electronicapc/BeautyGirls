 @includeIf('layouts.header')  
@if($errors->any())
	<h4>{{$errors->first()}}</h4>
@endif
 <div class="container-fluid">
	 <div class="row">
		 	<div class="col-xs-12 col-md-7">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  @php 
	                 $imgpath  = asset('../storage/app/models').'/'.$girls->id.'_0.jpg';
	                 $imgpath1 = asset('../storage/app/models').'/'.$girls->id.'_1.jpg';
	                 $imgpath2 = asset('../storage/app/models').'/'.$girls->id.'_2.jpg';
	                 $imgpath3 = asset('../storage/app/models').'/'.$girls->id.'_3.jpg';
					
					$imagpath = array();	                 
	                for ($i = 0; $i <= 8; $i++) 
					{
						if ( file_exists('../storage/app/models/'.$girls->id.'_'.$i.'.jpg'))
						{
							$imagpath[$i] = asset('../storage/app/models').'/'.$girls->id.'_'.$i.'.jpg';
						}
					}
	                 
	              @endphp
	              <ol class="carousel-indicators">	
					    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					    @for ($i = 0; $i < 10; $i++) 
							@if(isset($imagpath[$i]))
					    		<li data-target="#myCarousel" data-slide-to="{{ $i }}"></li>
					    	@endif
						@endfor   
		  
				  </ol>
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
					   <div class="item active">
					      <img src="{{isset($imagpath[0]) ? $imagpath[0] : asset('../storage/app/models/Noexistefoto.jpg') }}" alt="{{ $girls->name}}" class="img-rounded">
					    </div>
					@for ($i = 0; $i < 10; $i++) 
						@if(isset($imagpath[$i]))	   
						   <div class="item">
						      <img src="{{ isset($imagpath[$i]) ? $imagpath[$i] : asset('../storage/app/models/Noexistefoto.jpg') }}" alt="{{ $imgpath1 }}" class="img-rounded">
						   </div>
					   @endif
					@endfor   
				
					  <!-- Left and right controls -->
					  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left"></span>
					    <span class="sr-only">Anterior</span>	
					  </a>
					  <a class="right carousel-control" href="#myCarousel" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right"></span>
					    <span class="sr-only">Siguiente</span>
					  </a>
				</div> 
			</div> 
			<br>
			<div class="col-xs-12 col-md-12" >		
				<div>
			 	    <div class="panel panel-primary" style="color: #2E2E2E; font: oblique 105% cursive;">
				      <div class="panel-heading"><strong>Costos de compa&ntilde;&iacute;a</strong></div>
				      	<div class="panel-body">
				      		<ul class="list-group" id="adquirir">
					  			<li class="list-group-item"><strong>Una hora: </strong><p>${{ $girls->v_one_h}}</p><a href="../pay/{{$girls->id}}/{{ $girls->v_one_h}}/1"><button class="btn btn-warning btn-sm">Lo quiero</button></a></li>
					  			<li class="list-group-item"><strong>Dos horas: </strong><p> ${{ $girls->v_two_h}}</p><a href="../pay/{{$girls->id}}/{{ $girls->v_two_h}}/2"><button class="btn btn-warning btn-sm">Lo quiero</button></a></li>
					  			<li class="list-group-item"><strong>Tres horas: </strong><p> ${{ $girls->v_three_h}}</p><a href="../pay/{{$girls->id}}/{{ $girls->v_three_h}}/3"><button class="btn btn-warning btn-sm">Lo quiero</button></a></li>
					  			<li class="list-group-item"><strong>Fin de Semana: </strong><p>${{ $girls->v_fds}}</p><a href="../pay/{{$girls->id}}/{{ $girls->v_fds}}/4"><button class="btn btn-warning btn-sm">Lo quiero</button></a></li>
					  		</ul>	
				      	
						</div>
				    </div>		
				</div> 
				<div>
					<!--     <a href="categorias/add"><button type="submit" class="btn btn-success btn-lg pull-left">
								<span class="glyphicon glyphicon-plus"></span>
							</button>
						</a>  -->
				</div>
			</div>
		</div>	
		<div class="col-xs-12 col-md-5 col-lg-5">
			<div class="panel panel-default" style="color: #2E2E2E; font: oblique 105% cursive;" id="elpanel">
			      <div class="panel-heading"><strong>Nuestra Modelo</strong></div>
			      <div class="panel-body">
					  <ul class="list-group" id="caract">
					  	 <li class="list-group-item">  
					  	 	<dl>
							    <dt>Nombre:</dt>
							    <dd><p>&#8212; {{ $girls->name}}</p></dd>
							    <dt>Idiomas:</dt>
							    @php
							    	$patronFin 	= "/\/$/";
							    	$cadena 	= preg_replace( $patronFin, "", $girls->language );
							    @endphp
							    <dd><p>&#8212; {{ $cadena}}</p></dd>
							</dl>
						 </li>
					  	 <li class="list-group-item">
					  	 	<dl>
							    <dt>Edad:</dt>
							    <dd><p>&#8212; {{ $girls->age}}</p></dd>
							    <dt>Color de Pelo:</dt>
							    <dd><p>&#8212; {{ $girls->colpel}}</p></dd>
							</dl>
						 </li>
					  	 <li class="list-group-item">  	 
					  		<dl>
							    <dt>Color de Ojos:</dt>
							    <dd><p>&#8212; {{ $girls->colojo}}</p></dd>
							    <dt>Color de Piel:</dt>
							    <dd><p>&#8212; {{ $girls->colpil}}</p></dd>
							    <dt>Estatura:</dt>
							    <dd><p>&#8212; {{ $girls->estat}}</p></dd>
							</dl>
					  	 </li>
					  	 <li class="list-group-item">  	 
					  		<dl>
							    <dt>Tama&ntilde;o de cintura:</dt>
							    <dd><p>&#8212; {{ $girls->tamcin}}</p></dd>
							</dl>
					  	 </li>
					  	 <li class="list-group-item">  	 
					  		<dl>
							    <dt>Tama&ntilde;o de cola:</dt>
							    <dd><p>&#8212; {{ $girls->tamcol}}</p></dd>
							    <dt>Ciudad:</dt>
							    <dd><p>&#8212; {{ $girls->city}}</p></dd>
							</dl>
					  	 </li>
					  	 <li class="list-group-item">  	 
					  		<dl>
							    <dt>Contextura fisica:</dt>
							    <dd><p>&#8212; {{ $girls->confis}}</p></dd>
							    <dt>Tama&ntilde;o de busto:</dt>
							    <dd><p>&#8212; {{ $girls->tambus}}</p></dd>
							    <dt>Afinidades:</dt>
							    <dd><p>&#8212; {{ $girls->interest}}</p></dd>
							</dl>
					  	 </li>  	  				   
					 </ul>
				 </div> 
			</div> 
		</div>
	</div>
</div>
<!-- <div class="container">
	<div class="row">
		 	<div class="col-xs-12 col-md-6">
		 	    <div class="panel panel-primary"	>
			      <div class="panel-heading">Costos de compa&ntilde;&iacute;a</div>
			      <div class="panel-body">Panel Content</div>
			    </div>		
			</div> 
			<div>
				     <a href="categorias/add"><button type="submit" class="btn btn-success btn-lg pull-left">
							<span class="glyphicon glyphicon-plus"></span>
						</button>
					</a>  
				</div>
	 </div>
 </div> -->
<div style="margin-top : 50px"></div> 

<script>
$('#filtro').click(function () {
    $('.navbar-collapse').collapse('hide');
});
</script>
@includeIf('layouts.footer')
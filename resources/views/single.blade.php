 @includeIf('layouts.header')  
 <div class="container-fluid">
	 <div class="row">
		 	<div class="col-xs-12 col-md-7">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">	
					    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="1"></li>
					    <li data-target="#myCarousel" data-slide-to="2"></li>
					    <li data-target="#myCarousel" data-slide-to="3"></li>				  
				  </ol>
				  @php 
	                 $imgpath  = asset('../storage/app/models').'/'.$girls->id.'.jpg';
	                 $imgpath1 = asset('../storage/app/models').'/'.$girls->id.'_1.jpg';
	                 $imgpath2 = asset('../storage/app/models').'/'.$girls->id.'_2.jpg';
	                 $imgpath3 = asset('../storage/app/models').'/'.$girls->id.'_3.jpg'
	              @endphp
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
					   <div class="item active">
					      <img src="{{ $imgpath }}" alt="{{ $girls->name}}" class="img-rounded">
					    </div>
					   <div class="item">
					      <img src="{{ $imgpath1 }}" alt="{{ $imgpath1 }}" class="img-rounded">
					   </div>
					   <div class="item">
					      <img src="{{ $imgpath2 }}" alt="{{ $imgpath2 }}" class="img-rounded">
					   </div>
					   <div class="item">
					      <img src="{{ $imgpath3 }}" alt="{{ $imgpath3 }}" class="img-rounded">
					   </div>
				
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
			<div class="col-xs-12 col-md-6" id="costos">		
				<div>
			 	    <div class="panel panel-primary"	>
				      <div class="panel-heading"><strong>Costos de compa&ntilde;&iacute;a</strong></div>
				      	<div class="panel-body">
				      		<ul class="list-group">
					  			<li class="list-group-item"><strong>Una hora: </strong>{{ $girls->v_one_h}}</li>
					  			<li class="list-group-item"><strong>Dos horas: </strong>{{ $girls->v_two_h}}</li>
					  			<li class="list-group-item"><strong>Tres horas: </strong>{{ $girls->v_three_h}}</li>
					  			<li class="list-group-item"><strong>Fin de Semana: </strong>{{ $girls->v_fds}}</li>
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
			<div class="panel panel-default" style="color: #2E2E2E; font: oblique 130% cursive;" id="elpanel">
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
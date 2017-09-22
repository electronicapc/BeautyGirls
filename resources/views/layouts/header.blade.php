<html>
<head>
<title>Beauty Girls - Modelos</title>
<!--Librerias bootstrap y Jquery-->	
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{  asset('css/bootstrap.min.css') }}"  crossorigin="anonymous">
<link rel="stylesheet" href="{{  asset('css/bootstrap.min.css') }}"  crossorigin="anonymous">
<link rel="stylesheet" href="{{  asset('css/bootstrap-theme.min.css') }}"  crossorigin="anonymous">
<link rel="stylesheet" href="{{  asset('css/style.css') }}" >
<script src="{{  asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{  asset('js/bootstrap.min.js') }}"></script>
<!--  Condicional internet explorer-->
<!--[if lt IE 10]>
    <div id="yourID" class="yourClass">
        Para poder visualizar correctamente esta p&aacute;gina, se debe usar navegador Chrome versiones superiores a 40, Mozilla Firefox versiones superiores a 40, Internet Explorer 10 o superior
    </div>
<![endif]-->

<!-- Custom CSS -->
<link href="{{  asset('css/sb-admin-2.css') }}" rel="stylesheet">
<!--
<script>
function myFunction() {
    document.getElementById("myForm").reset();
}
</script>-->

<!-- Fin Librerias bootstrap y Jquery-->	
<style>
	body { padding-top: 70px; }
	
	.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
   		 background:#6E6E6E !important;
	}
	.carousel-inner{
	    height: 500px;
	}	
	
	@media (max-width: 767px) {
	.carousel-inner {
			height: 350px;
		}
	}
	
	.carousel-inner > .item > img {
	  height:500px;
	}
	@media (max-width: 767px) {
	.carousel-inner > .item > img {
			height: 350px;
		}
	}

	.panel-heading, .panel-heading:hover, .panel-heading:active {
   		 background:#6E6E6E !important;
	}
	.dropdown-menu.columns-2 {
		min-width: 400px;
	}
	.dropdown-menu.columns-3 {
		min-width: 600px;
	}
	
	.multi-column-dropdown {
	list-style: none;
	  margin: 0px;
	  padding: 0px;
	}
	.multi-column-dropdown li a {
		display: block;
		clear: both;
		line-height: 1.428571429;
		color: #333;
		white-space: normal;
	}
	.multi-column-dropdown li a:hover {
		text-decoration: none;
		color: #262626;
		background-color: #999;
	}
	 
	@media (max-width: 767px) {
		.dropdown-menu.multi-column {
			min-width: 240px !important;
			overflow-x: hidden;
		}
	}
	#costos{
		width: 100%;
	}
	
	@media (max-width: 767px) {
		#costos {
			min-width: 240px !important;
			overflow-x: hidden;
		}
	}
	
	@media (min-width: 768px){  
		#caract {
		  columns: 2;
		  -webkit-columns: 2;
		  -moz-columns: 2;
		}	 
		
	@media (min-width: 768px){  
	#adquirir {
	 		columns: 4;
	 		-webkit-columns: 4;
		 	-moz-columns: 4;
		}	 
	}
</style>
</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="{{  url('/') }}" style="color: #fAfAfA; font: oblique 120% cursive;">BeautyLies</a>
		    </div>
		
		    <!-- Collect the nav links, forms, and other content for toggling -->
		      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		   <!-- <ul class="nav navbar-nav">
		         <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>
		      </ul> 
		      <form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>
		      </form> -->
				<ul class="nav navbar-nav navbar-right">
					<li><button data-toggle="collapse" data-target="#demo" class="btn btn-info navbar-btn" id="filtro">Filtrar Modelos</button></li>
			        <li><a href="{{  url('contacto') }}" style="color: #fAfAfA; font: oblique 130% cursive;">Contactenos</a></li>			        
			        <li class="dropdown">			    				
		        </li>
		      </ul>    
		    </div><!-- /.navbar-collapse -->
		   </nav> 
		  </div><!-- /.container-fluid -->
		
		<div id="demo" class="collapse">
			<div class="container-fluid">
				<div class="row">
				     <div class="col-sm-4 col-md-12">
							<div class="panel-group">
								<div class="panel panel-info">
							      <div class="panel-heading"><font color="white">Escoge tu modelo a tu gusto</font></div>
							      	<div class="panel-body">							      	
								      	<div class="col-md-3"> 	
								      		<form action="{{ url('filmod') }}" method="post" id="myForm">
									      		<dl class="dl-horizontal">
										      		<dt><label>Estatura	en cm</label></dt>	
										      		<dd><span class="button-checkbox">
												        <button type="button" class="btn btn-md btn-block" data-color="primary">150 a 160</button>
												        <input type="checkbox" name="E1" class="hidden"  />
												    </span>	
												    <span class="button-checkbox">
												        <button type="button" class="btn btn-md btn-block" data-color="primary">160 a 170</button>
												        <input type="checkbox" name="E2" class="hidden"  />
												    </span>	
												    <span class="button-checkbox">
												        <button type="button" class="btn btn-md btn-block" data-color="primary">+ 170</button>
												        <input type="checkbox" name="E3" class="hidden"  />
												    </span>	</dd>
												    <hr />
												    <div class="form-group">
													    <dt><label>Color piel</label></dt>
											      		<dd><span class="button-checkbox">
													        <button type="button" class="btn btn-md btn-block" data-color="primary">Blanca</button>
													        <input type="checkbox" name="CP1" class="hidden" />
													    </span>
													    <span class="button-checkbox">
													        <button type="button" class="btn btn-md btn-block" data-color="primary">Morena</button>
													        <input type="checkbox" name="CP2" class="hidden"  />
													    </span>
													    <span class="button-checkbox">
													        <button type="button" class="btn btn-md btn-block" data-color="primary">negra</button>
													        <input type="checkbox" name="CP3" class="hidden" />
													    </span></dd>
												    </div>		
												</dl>  
											</div>		    
										<div class="col-md-3">	
										<dl class="dl-horizontal"> 
											<div class="form-group">   												    
											    <dt><label>Edad A&ntilde;os</label></dt>
									      		<dd><span class="button-checkbox">
											        <button type="button" class="btn btn-md btn-block" data-color="primary">18 a 22</button>
											        <input type="checkbox" name="A1" class="hidden" />
											    </span>
											    <span class="button-checkbox">
											        <button type="button" class="btn btn-md btn-block" data-color="primary">22 a 26</button>
											        <input type="checkbox" name="A2" class="hidden"/>
											    </span>
											    <span class="button-checkbox">
											        <button type="button" class="btn btn-md btn-block" data-color="primary">M&aacute;s de 26</button>
											        <input type="checkbox" name="A3" class="hidden" />
											    </span></dd>
											   </div>
											    <hr />
											    <dt><label>Valor Hora en Miles</label></dt>	
										    
									      		<dd><span class="button-checkbox">
											        <button type="button" class="btn btn-md btn-block" data-color="primary">100 a 200</button>
											        <input type="checkbox" name="H1" class="hidden"/>
											    </span>
											    <span class="button-checkbox">
											        <button type="button" class="btn btn-md btn-block" data-color="primary">200 a 300</button>
											        <input type="checkbox" name="H2" class="hidden" />
											    </span>

											    <span class="button-checkbox">
											        <button type="button" class="btn btn-md btn-block" data-color="primary">300 a 400</button>
											        <input type="checkbox" name="H3" class="hidden" />
											    </span>	
											    <span class="button-checkbox">
											        <button type="button" class="btn btn-md btn-block" data-color="primary">+ 400</button>
											        <input type="checkbox" name="H4" class="hidden"  />
											    </span></dd>  
											    
											   <!--  <span class="button-checkbox">
											        <button type="button" class="btn" data-color="default">Default</button>
											        <input type="checkbox" class="hidden" checked />
											    </span>
											    <span class="button-checkbox">
											        <button type="button" class="btn" data-color="primary">Primary</button>
											        <input type="checkbox" class="hidden" checked />
											    </span> -->
											<!--    <span class="button-checkbox">
											        <button type="button" class="btn" data-color="info">Info</button>
											        <input type="checkbox" class="hidden" checked />
											    </span> -->
											  <!--   <span class="button-checkbox">
											        <button type="button" class="btn" data-color="warning">Warning</button>
											        <input type="checkbox" class="hidden" checked />
											    </span>
											    <span class="button-checkbox">
											        <button type="button" class="btn" data-color="danger">Danger</button>
											        <input type="checkbox" class="hidden" checked />
											    </span>
											    <span class="button-checkbox">
											        <button type="button" class="btn" data-color="link">Link</button>
											        <input type="checkbox" class="hidden" checked />
											    </span>	 -->	    
											  	
												<br>
											    <button type="submit" class="btn btn-primary">Buscar</button>
											   <!--  <button type="reset" class="btn btn-warning" onclick="myFunction()">Limpiar filtro</button> -->
											    <button type="reset" data-toggle="collapse" data-target="#demo" class="btn btn-info navbar-btn">Cerrar Filtro</button>
										    </dl>    
										</div>	
									    <input type="hidden" name="_token" value="{{ csrf_token() }}">
									    </form> 
									 </div>							    	
							    </div>
							 </div>  
					    </div>
					 </div>  
				</div>     
		</div>
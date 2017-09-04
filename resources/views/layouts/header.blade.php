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

<!-- Custom CSS -->
<link href="{{  asset('css/sb-admin-2.css') }}" rel="stylesheet">



<!-- Fin Librerias bootstrap y Jquery-->	
<style>

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
	
	body { padding-top: 70px; }

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
		      <a class="navbar-brand" href="" style="color: #fAfAfA; font: oblique 120% cursive;">BeautyLies</a>
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
					<li><button data-toggle="collapse" data-target="#demo" class="btn btn-info navbar-btn">Filtrar Modelos</button></li>
			        <li><a href="contacto" style="color: #fAfAfA; font: oblique 130% cursive;">Contactenos</a></li>			        
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
							      <div class="panel-heading">Escoge tu modelo a tu gusto</div>
							      	<div class="panel-body">							      	
								      	<div class="col-md-6"> 	
								      		<form action="filmod" method="post">
									      		<dl class="dl-horizontal">
										      		<dt><label>Estatura	</label></dt>	
										      		<dd><span class="button-checkbox">
												        <button type="button" class="btn btn-md btn-block" data-color="default">150 cm a 160 cm</button>
												        <input type="checkbox" name="E1" class="hidden" checked />
												    </span>	
												    <span class="button-checkbox">
												        <button type="button" class="btn btn-md btn-block" data-color="primary">160 cm a 170 cm</button>
												        <input type="checkbox" name="E2" class="hidden" checked />
												    </span>	
												    <span class="button-checkbox">
												        <button type="button" class="btn btn-md btn-block" data-color="primary">+ 170 cm</button>
												        <input type="checkbox" name="E3" class="hidden" checked />
												    </span>	</dd>
												    <hr />
												    <div class="form-group">
													    <dt><label>Color piel</label></dt>
											      		<dd><span class="button-checkbox">
													        <button type="button" class="btn" data-color="primary">Blanca</button>
													        <input type="checkbox" name="CP1" class="hidden" checked />
													    </span>
													    <span class="button-checkbox">
													        <button type="button" class="btn" data-color="primary">Morena</button>
													        <input type="checkbox" name="CP2" class="hidden" checked />
													    </span>
													    <span class="button-checkbox">
													        <button type="button" class="btn" data-color="primary">negra</button>
													        <input type="checkbox" name="CP3" class="hidden" checked />
													    </span></dd>
												    </div>		
												</dl>  
											</div>		    
										<div class="col-md-6">	
										<dl class="dl-horizontal"> 
											<div class="form-group">   												    
											    <dt><label>Edad</label></dt>
									      		<dd><span class="button-checkbox">
											        <button type="button" class="btn btn-md btn-block" data-color="primary">18 a 22 A&ntilde;os</button>
											        <input type="checkbox" name="A1" class="hidden" checked />
											    </span>
											    <span class="button-checkbox">
											        <button type="button" class="btn btn-md btn-block" data-color="primary">22 a 26 A&ntilde;os</button>
											        <input type="checkbox" name="A2" class="hidden" checked />
											    </span>
											    <span class="button-checkbox">
											        <button type="button" class="btn btn-md btn-block" data-color="primary">M&aacute;s de 26 A&ntilde;os</button>
											        <input type="checkbox" name="A3" class="hidden" checked />
											    </span></dd>
											   </div>
											    <hr />
											    <dt><label>Valor Hora en Miles</label></dt>	
										    
									      		<dd><span class="button-checkbox">
											        <button type="button" class="btn btn-md btn-block" data-color="primary">100 a 200 COP</button>
											        <input type="checkbox" name="H1" class="hidden" checked />
											    </span>
											    <span class="button-checkbox">
											        <button type="button" class="btn btn-md btn-block" data-color="primary">200 a 300 COP</button>
											        <input type="checkbox" name="H2" class="hidden" checked />
											    </span>

											    <span class="button-checkbox">
											        <button type="button" class="btn btn-md btn-block" data-color="primary">300 a 400 COP</button>
											        <input type="checkbox" name="H3" class="hidden" checked />
											    </span>	
											    <span class="button-checkbox">
											        <button type="button" class="btn btn-md btn-block" data-color="primary">+ 400 COP</button>
											        <input type="checkbox" name="H4" class="hidden" checked />
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
	

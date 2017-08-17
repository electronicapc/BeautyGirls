<html>
<head>
<title>Softecol -Admin</title>
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
	
</style>
</head>
	<body>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">BeautyLies</a>
		    </div>
		
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		   <!--   <ul class="nav navbar-nav">
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
					<button data-toggle="collapse" data-target="#demo" class="btn btn-info navbar-btn">Filtrar Modelos</button>
			        <li><a href="#">Contactenos</a></li>
			        <li class="dropdown">			    				
		        </li>
		      </ul>    
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<div id="demo" class="collapse">
			<div class="container-fluid">
				<div class="row">
				     <div class="col-sm-4 col-md-12">
							<div class="panel-group">
								<div class="panel panel-primary">
							      <div class="panel-heading">Escoge tu modelo a tu gusto</div>
							      	<div class="panel-body">
							      		<form action="filmod" method="post">
								      		<dl class="dl-horizontal">
									      		<dt><label>Estatura	</label></dt>	
									      		<dd><span class="button-checkbox">
											        <button type="button" class="btn" data-color="success">150 cm a 160 cm</button>
											        <input type="checkbox" class="hidden" checked />
											    </span>	
											    <span class="button-checkbox">
											        <button type="button" class="btn" data-color="success">160 cm a 170 cm</button>
											        <input type="checkbox" class="hidden" checked />
											    </span>	
											    <span class="button-checkbox">
											        <button type="button" class="btn" data-color="success">+ 170 cm</button>
											        <input type="checkbox" class="hidden" checked />
											    </span>	</dd>
											    <hr />
											    <dt><label>Color piel</label></dt>
									      		<dd><span class="button-checkbox">
											        <button type="button" class="btn" data-color="success">Blanca</button>
											        <input type="checkbox" class="hidden" checked />
											    </span>
											    <span class="button-checkbox">
											        <button type="button" class="btn" data-color="success">Morena</button>
											        <input type="checkbox" class="hidden" checked />
											    </span>
											    <span class="button-checkbox">
											        <button type="button" class="btn" data-color="success">negra</button>
											        <input type="checkbox" class="hidden" checked />
											    </span></dd>
											    <hr />	
											    <dt><label>Inversi&oacuten Hora en miles</label></dt>	
									      		<dd><span class="button-checkbox">
											        <button type="button" class="btn" data-color="success">100 a 200 COP</button>
											        <input type="checkbox" class="hidden" checked />
											    </span>
											    <span class="button-checkbox">
											        <button type="button" class="btn" data-color="success">200 a 300 COP</button>
											        <input type="checkbox" class="hidden" checked />
											    </span>
											    <span class="button-checkbox">
											        <button type="button" class="btn" data-color="success">300 a 400 COP</button>
											        <input type="checkbox" class="hidden" checked />
											    </span>	
											    <span class="button-checkbox">
											        <button type="button" class="btn" data-color="success">+ 400 COP</button>
											        <input type="checkbox" class="hidden" checked />
											    </span>	</dd>  
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
											    <hr />
											    <button type="submit" class="btn btn-success">Buscar</button>
										    </dl>
									    </form> 
									 </div>							    	
							    </div>
							 </div>  
					    </div>
					 </div>  
			</div>	 	    
		</div>	

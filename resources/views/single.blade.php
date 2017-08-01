 @includeIf('layouts.header')  
 <div class="container">
	 <div class="row">
	 	<div class="col-xs-12 col-md-6">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>
			
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="la.jpg" alt="Los Angeles">
			    </div>
			
			    <div class="item">
			      <img src="chicago.jpg" alt="Chicago">
			    </div>

			
			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>	
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div> 
		</div> 
	</div>		
		<div class="col-xs-12 col-md-6">
		<div class="panel panel-default">
		      <div class="panel-heading">Nuestra Modelo</div>
		      <div class="panel-body">Panel Content</div>
		    </div>	
		</div> 
	</div>
	<div class="row">
	 	<div class="col-xs-12 col-md-8">
	 	    <div class="panel panel-primary">
		      <div class="panel-heading">Comentarios</div>
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
</div>  
 @includeIf('layouts.footer')
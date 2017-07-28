 @includeIf('layouts.header')  
 <div class="container">
	 <div class="row">
	 @for ($i = 0; $i < 10; $i++)
		  <div class="col-md-4">
		    <div class="thumbnail">
		      <a href="/w3images/lights.jpg">
		        <img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
		        <div class="caption">
		          <p>Lorem ipsum...</p>
		        </div>
		      </a>
		    </div>
		  </div>
	@endfor  
	</div>
</div>  
 @includeIf('layouts.footer')  
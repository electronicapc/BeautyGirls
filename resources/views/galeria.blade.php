 @includeIf('layouts.header')  
 <div class="container">
	 <div class="row">
	 @foreach ($girls as $list)
	 	 @php 
        	$imgpath = asset('../storage/app/models').'/'.$list->id.'.jpg'
    	 @endphp
		  <div class="col-md-4">
		    <div class="thumbnail">
		      <a href="/single/lights.jpg">
		        <img src="{{ $imgpath }}" alt="Lights" style="width:100%">
		        <div class="caption">
		          <p>{{ $list->name }}</p>
		        </div>
		      </a>
		    </div>
		  </div>
	@endforeach  
	</div>
</div>  
 @includeIf('layouts.footer')  
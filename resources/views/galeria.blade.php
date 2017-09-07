 @includeIf('layouts.header')  
 <div class="container">
	 <div class="row">
	 @foreach ($girls as $list)
	 	 @php 
        	$imgpath = asset('../storage/app/models').'/'.$list->id.'.jpg'
    	 @endphp
		  <div class="col-md-4">
		    <div class="thumbnail">
		      <a href="single/{{$list->id }}">
		        <img src="{{ $imgpath }}" alt="Lights" style="width: 100%; height: 400px;" >
		        <div class="caption">
		          <p class="text-right">{{ $list->name }}  {{ $list->age }} A&ntildeos</p>
		        </div>
		      </a>
		    </div>
		  </div>
	@endforeach  
	</div>
</div>  
<script>
$('#filtro').click(function () {
    $('.navbar-collapse').collapse('hide');
});
</script>
@includeIf('layouts.footer')  
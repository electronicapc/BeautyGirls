 @includeIf('layouts.header') 

    <div class="container">
    	<div class="row" style="margin-top:15px">
    					@if(($arrcp['forpa'] == 'Consignacion') )
							{!! Form::open(['url' => 'ins_ven','method' => 'post']) !!}
    					@elseif ($arrcp['forpa'] == 'efectivo')
    						{!! Form::open(['url' => 'ins_ven','method' => 'post']) !!}
    					@else
    						{!! Form::open(['url' => 'https://sandbox.gateway.payulatam.com/ppp-web-gateway','method' => 'post']) !!}    					
    					@endif  					
			                
				            <div class="col-md-5 col-xs-12 col-lg-5 col-md-offset-4">
				            	<div class="panel panel-success">
					                <div class="panel-heading text-center"><h4>Revisa tu informaci&oacute;n</h4></div>
						                <div class="panel-body">
											<dl class="dl-horizontal">
											  <dt><h5><strong>DATOS PERSONALES</strong></h5></dt>
											  <dd></dd>
											  <dt><h4>Nombre:</h4></dt>
											  <dd><h4>{{Auth::user()->name}}</h4></dd>
											  <dt><h4>Dir Entrega:</h4></dt>
											  <dd><h4>{{$arrcp['dir']}}</h4></dd>
											  
											  <dt><h4>Depto. Entrega:</h4></dt>
											  <dd><h4>{{$arrcp['depto']}}</h4></dd>
											 
											  <dt><h4>Lugar Entrega:</h4></dt>
											  <dd><h4>{{$arrcp['mun']}}</h4></dd>
											
											  <dt><h4>Barrio:</h4></dt>
											  <dd><h4>{{$arrcp['barr']}}</h4></dd>
										
											  <dt><h4>Tel. Contacto:</h4></dt>
											  <dd><h4>{{$arrcp['tel']}}</h4></dd>
											  <hr>
											  
											  <dt><h5><strong>VALOR ITEMS</strong></h5></dt>
											  <dd></dd>
											  <dt><h4><p class="bg-info">M&eacute;todo pago:</p></h4></dt>
											  <dd><h4><p class="bg-info">{{$arrcp['forpa']}}</p></h4></dd>
											  
											  <dt><h4><p class="text-success">Total productos:</p></h4></dt>
											  <dd><h4><p class="text-success">${{number_format($arrcp['ctbrt'],2)}}</p></h4></dd>
											  
											  <dt><h4>Costos financieros:</h4></dt>
											  <dd><h4 id="totalcost">${{number_format($arrcp['ctfin'],2)}}</h4></dd>
											  
											  <dt><h4>Gastos de envio:</h4></dt>
											  <dd><h4 id="totalenv">${{number_format($arrcp['ctenv'],2)}}</h4></strong></dd>
											  
											  <dt><h4><p class="text-danger">TOTAL A PAGAR:</p></h4></dt>
											  <dd><h4><p class="text-danger" id="totalpago">${{ number_format($arrcp['ctota'],2)}}</p></h4></dd>
											</dl>
											<button type="submit" class="btn btn-success">Realizar pago/Confirmar</button>
											<a href="{{ url('/pago') }}"> <button type="button" class="btn btn-default">
	                                			<span class="fa fa-shopping-cart"></span> Corregir	                            						</button>
                        					</a>
									</div>           
				                </div>	            
				            </div>
				            {{-- Form::hidden('merchantId', 505232) }}
				            {{ Form::hidden('forpa', $arrcp['forpa']) }}
							{{ Form::hidden('referenceCode', $arrcp['last_id']) }}
							{{ Form::hidden('description', "Venta de productos Softecol") }}
							{{ Form::hidden('amount',$arrcp['ctota'] ) }}
							{{ Form::hidden('tax', $arrcp['ctiva']) }}
							{{ Form::hidden('valbru', $arrcp['ctbrt']) }}
							{{ Form::hidden('gasfin', $arrcp['ctfin']) }}
							{{ Form::hidden('gasenv', $arrcp['ctenv']) }}
							@php
								$taxReturnBase = round(($arrcp['ctbrt']-$arrcp['ctiva']),2);
							@endphp
							{{ Form::hidden('taxReturnBase',$taxReturnBase) }}
							{{ Form::hidden('signature',$arrcp['signature']) }}
							{{ Form::hidden('accountId', 512321) }}
							{{ Form::hidden('currency', "COP") }}
							{{ Form::hidden('buyerFullName', Auth::user()->name) }}
							{{ Form::hidden('buyerEmail', Auth::user()->email) }}
							{{ Form::hidden('shippingAddress', $arrcp['dir']) }}
							{{ Form::hidden('shippingCity', $arrcp['mun']) }}
							{{ Form::hidden('shippingCountry', "Colombia") }}
							{{ Form::hidden('telephone', $arrcp['tel']) }}
							{{ Form::hidden('test', 1) }}
							{{ Form::hidden('responseUrl', "http://www.electronicapcolombia.w.pw/Include/Payu_response.php")
							{{ Form::hidden('confirmationUrl', "http://www.electronicapcolombia.w.pw/Include/Payu_conf.php") }}
							{{ Form::hidden('extra1', $arrcp['ctbrt']) }}
							{{ Form::hidden('extra2', $arrcp['ctfin']) }}
							{{ Form::hidden('extra3', $arrcp['ctenv']) }} 
							{{ Form::hidden('algorithmSignature', "SHA") --}}
							
							
							{{ Form::hidden('merchantId', 508029) }}
							{{ Form::hidden('forpa', $arrcp['forpa']) }}
							{{ Form::hidden('referenceCode', $arrcp['last_id']) }}
							{{ Form::hidden('description', "Venta de productos Softecol") }}
							{{ Form::hidden('amount',$arrcp['ctota'] ) }}
							{{ Form::hidden('tax', $arrcp['ctiva']) }}
							{{ Form::hidden('valbru', $arrcp['ctbrt']) }}
							{{ Form::hidden('gasfin', $arrcp['ctfin']) }}
							{{ Form::hidden('gasenv', $arrcp['ctenv']) }}
							@php
								$taxReturnBase = round(($arrcp['ctbrt']-$arrcp['ctiva']),2);
							@endphp
							{{ Form::hidden('taxReturnBase',$taxReturnBase) }}
							{{ Form::hidden('signature',$arrcp['signature']) }}
							{{ Form::hidden('accountId', 512321) }}
							{{ Form::hidden('currency', "COP") }}
							{{ Form::hidden('buyerFullName', Auth::user()->name) }}
							{{ Form::hidden('buyerEmail', Auth::user()->email) }}
							{{ Form::hidden('shippingAddress', $arrcp['dir']) }}
							{{ Form::hidden('shippingCity', $arrcp['mun']) }}
							{{ Form::hidden('shippingCountry', "Colombia") }}
							{{ Form::hidden('telephone', $arrcp['tel']) }}
							{{ Form::hidden('test', 1) }}
							{{ Form::hidden('responseUrl', "http://www.electronicapcolombia.w.pw/Include/Payu_response.php") }}
							{{ Form::hidden('confirmationUrl', "http://www.electronicapcolombia.w.pw/Include/Payu_response_system.php") }}
							{{ Form::hidden('algorithmSignature', "SHA") }}
							{{ Form::hidden('lafirma', $arrcp['lafirma']) }}
							{{ Form::hidden('extra1', $arrcp['ctbrt']) }}
							{{ Form::hidden('extra2', $arrcp['ctfin']) }}
							{{ Form::hidden('extra3', $arrcp['ctenv']) }}
				            {!! Form::close() !!} 
				      </div>      
 		</div>
 @includeIf('layouts.footer')      
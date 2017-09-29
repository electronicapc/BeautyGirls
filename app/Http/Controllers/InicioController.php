<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Girl;
use App\Servshow;
use DB;
use Carbon\Carbon;

class InicioController extends Controller
{

    public function index()
    {
    	$girls		= Girl::where('activo', 'SI')->where('prepay', 'NO')->select('id','name','age')->get();
        return view('galeria')->with('girls', $girls);
    }
    
    public function filter(Request $request)
    { 
    	//Filtro Estatura
    	if ($request->has("E1") && $request->has("E2") && $request->has("E3") ){
    		//$filterE1 = "['estat', '>=', '150']";
    		$filterE1 = "estat  >= 150";
    	}
    	elseif ($request->has("E1") && $request->has("E2")){
    		//$filterE1 = "['estat', '>=', '150'],['estat', '<=', '170']";
    		$filterE1 = "(estat >= '150 AND estat <= 170)";
    	}
    	elseif ($request->has("E1") && $request->has("E3") ){
    		//$filterE1 = "['estat', '>=', '150'],['estat', '<=', '160'],['estat', '>=', '170']";
    		$filterE1 = "estat >= 150 AND estat <= 160 AND estat >= 170)";
    	}
    	elseif ($request->has("E2") && $request->has("E3") ){
    		//$filterE1 = "['estat', '>=', '160']";
    		$filterE1 = "estat >= 160";
    	}
    	elseif ($request->has("E1")){
    		//$filterE1 = "['estat', '>=', '160']";
    		$filterE1 = "estat <= 160";
    	}
    	elseif ($request->has("E2")){
    		//$filterE1 = "['estat', '>=', '160']";
    		$filterE1 = "(estat >= 160 AND estat <= 170)";
    	}
    	elseif ($request->has("E3")){
    		//$filterE1 = "['estat', '>=', '160']";
    		$filterE1 = "estat >= 170";
    	}
    	//Filtro Color de piel
    	if ($request->has("CP1") && $request->has("CP2") && $request->has("CP3") ){
    		$filterC1 = "colpil = 'Blanca' AND colpil ='Negra' AND colpil = 'Morena'";
    	}
    	elseif ($request->has("CP1") && $request->has("CP2")){
    		$filterC1 = "colpil = 'Blanca' AND colpil = 'Negra'";
    	}
    	elseif ($request->has("CP1") && $request->has("CP3") ){
    		$filterC1 = "colpil = 'Blanca' AND colpil = 'Morena'";
    	}
    	elseif ($request->has("CP2") && $request->has("CP3") ){
    		$filterC1 = " colpil = 'Negra' AND colpil = 'Morena'";
    	}
    	elseif ($request->has("CP1")){
    		$filterC1 = " colpil = 'Blanca'";
    	}
    	elseif ($request->has("CP2")){
    		$filterC1 = "colpil = 'Negra'";
    	}
    	elseif ($request->has("CP3")){
    		$filterC1 = "colpil = 'Morena'";
    	}
    	
    	
    	//Filtro Edad
    	if ($request->has("A1") && $request->has("A2") && $request->has("A3") ){
    		$filterA1 = "age >= 18";
    	}
    	elseif ($request->has("A1") && $request->has("A2")){
    		$filterA1 = "age >= 18 AND age <= 26";
    	}
    	elseif ($request->has("A1") && $request->has("A3") ){
    		$filterA1 = "age >= 18 AND age <= 22 AND age >= 26";
    	}
    	elseif ($request->has("A2") && $request->has("A3") ){
    		$filterA1 = "age >= 22";
    	}
    	elseif ($request->has("A1")){
    		$filterA1 = "age <= 22";
    	}
    	elseif ($request->has("A2")){
    		$filterC1 = "age >= 22 AND age <=26";
    	}
    	elseif ($request->has("A3")){
    		$filterC1 = "age >= 26";
    	}
    	 
    	//Filtro Costo

    	if ($request->has("H1") && $request->has("H2") && $request->has("H3") && $request->has("H4")){
    		$filterV1 = "[['v_one_h', '>=', '100000'],]";
    	}
    	else 
    	{	
	    	if ($request->has("H1") && $request->has("H2") && $request->has("H3")){
	    		$filterV1 = "[['v_one_h', '<', '400000']]";
	    	}
	    	else 
	    	{	
	    		if ($request->has("H1") && $request->has("H3") && $request->has("H4")){	    			
	    			$filterV1 = "[['v_one_h', '>=', '100000'],['v_one_h', '<', '200000'],['v_one_h', '>', '300000']]";
	    			
	    		}
	    		else 
	    		{
	    			if (($request->has("H2") && $request->has("H3") && $request->has("H4")))
	    			{
	    				$filterV1 = "[['v_one_h', '>=', '200000'],]";
	    			}
	    			else 
	    			{
	    				if(($request->has("H1") && $request->has("H2") && $request->has("H4")))
	    				{
	    					$filterV1 = "[['v_one_h', '<', '300000'],['v_one_h', '>', '400000'],]";
	    				}
	    				else 
	    				{
	    					if(($request->has("H1") && $request->has("H2") ))
	    					{
	    						$filterV1 = "[['v_one_h', '<', '300000']]";
	    					}
	    					else 
	    					{
	    						if(($request->has("H1") && $request->has("H3") ))
	    						{
	    							$filterV1 = "[['v_one_h', '<', '200000'],['v_one_h', '>', '300000'],['v_one_h', '<', '400000']]";
	    						}
	    						else 
	    						{
	    							if(($request->has("H1") && $request->has("H4") ))
	    							{
	    								$filterV1 = "[['v_one_h', '<', '200000'],['v_one_h', '>', '400000']]";
	    							}
	    							else 
	    							{
	    								if(($request->has("H2") && $request->has("H3") ))
	    								{
	    									$filterV1 = "[['v_one_h', '>', '200000'],['v_one_h', '<', '400000']]";
	    								}
	    								else
	    								{
	    									if(($request->has("H2") && $request->has("H4") ))
	    									{
	    										$filterV1 = "[['v_one_h', '>', '200000'],['v_one_h', '<', '300000'],['v_one_h', '>', '400000']]";
	    									}
	    									else 
	    									{
	    										if(($request->has("H3") && $request->has("H4") ))
	    										{
	    											$filterV1 = "[['v_one_h', '>', '300000'],]";
	    										}
	    										else 
	    										{
	    											if(($request->has("H1")))
	    											{
	    												$filterV1 = "[['v_one_h', '<', '200000'],]";
	    											}
	    											else 
	    											{
	    												if(($request->has("H2")))
	    												{
	    													$filterV1 = "[['v_one_h', '>', '200000'],['v_one_h', '<', '300000']]";
	    												}
	    												else 
	    												{
	    													if(($request->has("H3")))
	    													{
	    														$filterV1 = "[['v_one_h', '>', '300000'],['v_one_h', '<', '400000']]";
	    													}
	    													else 
	    													{
	    														if(($request->has("H4")))
	    														{
	    															$filterV1 = "[['v_one_h', '>', '400000']]";
	    														}
	    													}
	    												}
	    												
	    											}
	    										}
	    										
	    									}
	    									
	    								}
	    								
	    							}
	    						}
	    						
	    					}
	    				}
	    			}
	    				
	    		}
	    	}
    	}
    	
    	
    	
    	//echo $filterE1;
    	//dd($request);
    	//$girls		= Girl::select(DB::raw('activo = 'SI' AND $filterE1'))->select('id','name')->get();
    	$girls		= DB::select(DB::raw("SELECT id, name, age FROM girls WHERE activo = 'SI' AND prepay = 'NO' AND $filterE1"));
    	//dd($girls);
    	return view('galeria')->with('girls', $girls);
    }
    
    public function inscribir(Request $request)
    {

		$name		= $request->input('name');
		$age		= $request->input('age');
		$colojo		= $request->input('colojo');
		$city		= $request->input('city');
		$colpel		= $request->input('colpel');
		$colpil		= $request->input('colpil');
		$tambus		= $request->input('tambus');
		$tamcol		= $request->input('tamcol');
		$tamcin		= $request->input('tamcin');
		$estat		= $request->input('estat');
		$confis 	= $request->input('confis');
		$interest 	= $request->input('intereses');
		//valores
		$v_one_h	= $request->input('v_one_h');
		$v_two_h	= $request->input('v_two_h');
		$v_three_h	= $request->input('v_three_h');
		$v_fds		= $request->input('v_fds');
		//
		$language1	= $request->input('language1');
		$language2	= $request->input('language2');
		$language3	= $request->input('language3');
		$language4	= $request->input('language4');
		(isset($language1)) ? $sep1 = '/' : $sep1 = '';  
		(isset($language2)) ? $sep2 = '/' : $sep2 = '';
		(isset($language3)) ? $sep3 = '/' : $sep3 = '';
		//(isset($language4)) ? $sep4 = '/' : '';
		$language 	= $language1 .$sep1. $language2.$sep2.$language3.$sep3.$language4;
	
		
		if ($request->hasFile('foto1') && $request->hasFile('foto2') && $request->hasFile('foto3') && $request->hasFile('foto4'))
		{
			if ($request->file('foto1')->isValid() && $request->file('foto2')->isValid() && $request->file('foto3')->isValid() && $request->file('foto4')->isValid())
			{
				$idgirl = new girl;
				$idgirl->name 			= $name;
				$idgirl->tambus 		= $tambus;
				$idgirl->colpel			= $colpel;
				$idgirl->colojo	 		= $colojo;
				$idgirl->colpil 		= $colpil;
				$idgirl->confis 		= $confis;
				$idgirl->tamcin			= $tamcin;
				$idgirl->tamcol 		= $tamcol;
				$idgirl->estat 			= $estat;
				$idgirl->v_one_h 		= $v_one_h;
				$idgirl->v_two_h 		= $v_two_h ;
				$idgirl->v_three_h 		= $v_three_h;
				$idgirl->v_fds 			= $v_fds;
				$idgirl->age 			= $age;
				$idgirl->city 			= $city;
				$idgirl->language 		= $language ;
				$idgirl->interest 		= $interest;
				$idgirl->vip 			= 'NO';
				$idgirl->rank 			= 5;
				$idgirl->activo			= 'NO';
				$idgirl->prepay			= 'NO';

				//obtenemos el campo file definido en el formulario
				$idgirl->save();
				$request->file('foto1')->storeAs('models', $idgirl->id.'.jpg');
				$request->file('foto2')->storeAs('models', $idgirl->id.'_1.jpg');
				$request->file('foto3')->storeAs('models', $idgirl->id.'_2.jpg');
				$request->file('foto4')->storeAs('models', $idgirl->id.'_3.jpg');
				//return $path;
				return redirect('/inscribir')->with('status', 'Se agreg&oacute; la modelo correctamente');
			}
			else 
			{
				return back()->withErrors(['fotos' => ['Las fotos no son validas.']]);
			}
		}
		else 
		{
			return back()->withErrors(['fotos' => ['Las fotos deben estar completas.']]);
		}
		
    	
    	//return view('single')->with('lists', $lists)->with('girls', $girls);
    }
    
    
    public function single($id)
    {
    
    	$girls		= Girl::where('id', $id)->get()->first();
    	$lists		= DB::table('services')
    	->join('servshows', 'services.id', '=', 'servshows.idService')
    	->where('servshows.idGirl', '=', $id)
    	->get();
    	 
    	return view('single')->with('lists', $lists)->with('girls', $girls);
    }
    
    public function contacto(Request $request)
    {
    	$name		= $request->input('Nombre');
    	$motivo		= $request->input('Motivo');
    	$telefono	= $request->input('telefono');
    	$correo		= $request->input('Correo');
    	$mensaje	= $request->input('Mensaje');
    	
    	//Email
    	$to = "gunsnjrc@yahoo.com, gunsnjrc_999@hotmail.com";
    	$subject = "Cuestionario pagina BeautyGirls";
    	
    	$message = "
		<html>
		<head>
		<title>Beauty Girls</title>
		</head>
		<body>
		<p>Nuevo contacto pagina Web</p>
		<table>
		<tr>
		<th>Nombre:</th>
		<th>Motivo:</th>
    	<th>telefono:</th>
		<th>Mensaje:</th>
    	<th>Correo:</th>
		</tr>
		<tr>
		<td>$name</td>
		<td>$motivo	</td>
    	<td>$telefono</td>
		<td>$mensaje</td>
    	<td>$correo</td>	
		</tr>
		</table>
		</body>
		</html>
		";
		    	
    	// Always set content-type when sending HTML email
    	$headers = "MIME-Version: 1.0" . "\r\n";
    	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    	
    	// More headers
    	$headers .= 'From: <webmaster@beautygirls.com>' . "\r\n";
    	$headers .= 'Cc: gunsnjrc@gmail.com' . "\r\n";
    	
    	mail($to,$subject,$message,$headers);
    	
		//FIn email
    	return redirect('/contacto')->with('status', 'Su solicitud fue recibida, pronto nos comunicaremos con usted');
    	
    }

    public function payu($id,$pago,$time)
    {
    
    	if($time == 1)
    	{
    		$prepay	= Girl::where('id', $id)->select('v_one_h','name')->first();
    		$name	= $prepay->name;
    		$value	= $prepay->v_one_h;
    	}
    	elseif($time == 2)
    	{
    		$prepay	= Girl::where('id', $id)->select('v_two_h','name')->first();
    		$name	= $prepay->name;
    		$value	= $prepay->v_two_h;
    	}
    	elseif($time == 3)
    	{
    		$prepay	= Girl::where('id', $id)->select('v_three_h','name')->first();
    		$name	= $prepay->name;
    		$value	= $prepay->v_three_h;
    	}
    	elseif($time == 4)
    	{
    		$prepay	= Girl::where('id', $id)->select('v_fds','name')->first();
    		$name	= $prepay->name;
    		$value	= $prepay->v_fds;
    	}
    	if ($pago != $value)
    	{
    		return back()->withErrors(['fotos' => ['Se detecto un proceso anormal, favor vuelva a intentar.'. $pago.' diferente'. $value]]);
    	}
    	else
    	{
    		return view('checkout')->with('id', $id)->with('name', $name)->with('value', $value);
    	}
    
    }
    
    public function formpayu(Request $request)
    {
    	$this->validate($request, [
    			'nomcli'				=> 'required|max:255',
    			'email' 				=> 'required|confirmed',
    			'email_confirmation'	=> 'required',
    	]);
    	
    	$id			= $request->input('id');
    	$name		= $request->input('name');
    	$nomcli		= $request->input('nomcli');
    	$email		= $request->input('email');
    	$value		= $request->input('value');
    	//Ingreso datos de preventa
    	$idven = new Pago;
    	$idven->idGirl 			= $id;
    	$idven->valpag			= $value;
    	$idven->medpag			= 'PAYU';
    	$idven->mes				= Carbon::now('America/Bogota')->month;
    	$idven->confirmado		= 'NO';
    	$idven->save();
    	//Fin datos preventa
    	return view('confpago')->with('id', $id)->with('name', $name)->with('value', $value)->with('email', $email)->with('nomcli', $nomcli);
    }
    
}

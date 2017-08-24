<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Girl;
use App\Servshow;
use DB;

class InicioController extends Controller
{
    public function index()
    {
    	$girls		= Girl::where('activo', 'SI')->select('id','name')->get();
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
    	$girls		= DB::select(DB::raw("SELECT id, name FROM girls WHERE activo = 'SI' AND $filterE1"));
    	//dd($girls);
    	return view('galeria')->with('girls', $girls);
    }
    
    public function inscribirse(Request $request)
    {

		$name		= $request->input('name');
		$age		= $request->input('age');
		$colojo		= $request->input('colojo');
		$colpel		= $request->input('colpel');
		$colpil		= $request->input('colpil');
		$tambus		= $request->input('tambus');
		$tamcol		= $request->input('tamcol');
		$tamcin		= $request->input('tamcin');
		$estat		= $request->input('estat');
		$confis 	= $request->input('confis');
		$language	= $request->input('language');
	
		
		if ($request->hasFile('foto1') && $request->hasFile('foto2') && $request->hasFile('foto3') && $request->hasFile('foto4'))
		{
			if ($request->file('foto1')->isValid() && $request->file('foto2')->isValid() && $request->file('foto3')->isValid() && $request->file('foto4')->isValid())
			{
				$idprd = new girl;
				$idprd->name 			= $request->input('nombre');
				$idprd->categoria 		= $request->input('categoria');
				$idprd->precpu 			= $request->input('ppublico');
				$idprd->costo 			= $request->input('costo');
				$idprd->ReferenciaOEM 	= $request->input('referencia');
				$idprd->iva 			= $request->input('iva');
				$idprd->ivap 			= $request->input('piva');
				$idprd->activo 			= $request->input('activo');
				$idprd->destacado 		= $request->input('destacado');
				$idprd->cantidadex 		= $request->input('cexist');
				$idprd->Descripcion		= $request->input('descripcion');
				$idprd->foto		= '../storage/app/PrdImages/';
				$idprd->save();
				
			}
			else 
			{
				return back()->withErrors(['fotos' => ['Las fotos deben estar completas.']]);
			}
		}
		else 
		{
			return back()->withErrors(['fotos' => ['Las fotos deben estar completas.']]);
		}
		
    	
    	return view('single')->with('lists', $lists)->with('girls', $girls);
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
}

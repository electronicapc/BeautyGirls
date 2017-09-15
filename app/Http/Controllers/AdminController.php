<?php

namespace App\Http\Controllers;

use App\Girl;
use App\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function addmodel()
	{
		$lists 	= Girl::all();
		return view('lstmod')->with('girl', $lists);
	
	}
	
	public function addmods(Request $request)
	{
		//$lafoto[0]->storeAs('models', 'pruebasdragdrop.jpg');
		//dd($request);
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
		//Request de fotos
		$lafoto 	= $request->file('foto');		
		//
		$language 	= $language1 .$sep1. $language2.$sep2.$language3.$sep3.$language4;
		
		
		//if ($request->hasFile($lafoto[0]) && $request->hasFile($lafoto[1]) && $request->hasFile($lafoto[2]) && $request->hasFile($lafoto[3]))
		//{
		//	if ($request->file('foto[0]')->isValid() && $request->file('foto[1]')->isValid() && $request->file('foto[2]')->isValid() && $request->file('foto[3]')->isValid())
		//	{
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
				
				for ($i = 0; $i <= 8; $i++) 
				{
					if ( !empty ($lafoto[$i]) ) {
						$lafoto[$i]->storeAs('models', $idgirl->id.'_'.$i.'.jpg');
					}
				}

				//return $path;
				return redirect('/admin/modelos/add')->with('status', 'Se agreg&oacute; la modelo correctamente');
			//}
			//else
			//{
			//	return back()->withErrors(['fotos' => ['Las fotos no son validas.']]);
			//}
		//}
		//else
		//{
		//	return back()->withErrors(['fotos' => ['Las fotos deben estar completas.']]);
		//}
	
	}
	
	public function edtmods($id)
	{
		$lists 	= Girl::findOrFail($id);
		return view('edmod')->with('producto', $lists);
	
	}
	
	public function edtmosv(Request $request)
	{
		$name				= $request->input('name');
		$age				= $request->input('age');
		$colojo				= $request->input('colojo');
		$city				= $request->input('city');
		$colpel				= $request->input('colpel');
		$colpil				= $request->input('colpil');
		$tambus				= $request->input('tambus');
		$tamcol				= $request->input('tamcol');
		$tamcin				= $request->input('tamcin');
		$estat				= $request->input('estat');
		$confis 			= $request->input('confis');
		$interest 			= $request->input('intereses');
		//valores
		$v_one_h			= $request->input('v_one_h');
		$v_two_h			= $request->input('v_two_h');
		$v_three_h			= $request->input('v_three_h');
		$v_fds				= $request->input('v_fds');
		//Valores administrados
		$vip				= $request->input('vip');
		$rank				= $request->input('rank');
		$activo				= $request->input('activo');
		$prepay				= $request->input('prepay');
		//
		$language1			= $request->input('language1');
		$language2			= $request->input('language2');
		$language3			= $request->input('language3');
		$language4			= $request->input('language4');
		(isset($language1)) ? $sep1 = '/' : $sep1 = '';
		(isset($language2)) ? $sep2 = '/' : $sep2 = '';
		(isset($language3)) ? $sep3 = '/' : $sep3 = '';
		//(isset($language4)) ? $sep4 = '/' : '';
		$language 	= $language1 .$sep1. $language2.$sep2.$language3.$sep3.$language4;
		//Inicio update
		$idgirl 			= Girl::find($request->input('id'));
		$idgirl->name 		= $name;
		$idgirl->tambus 	= $tambus;
		$idgirl->colpel		= $colpel;
		$idgirl->colojo	 	= $colojo;
		$idgirl->colpil 	= $colpil;
		$idgirl->confis 	= $confis;
		$idgirl->tamcin		= $tamcin;
		$idgirl->tamcol 	= $tamcol;
		$idgirl->estat 		= $estat;
		$idgirl->v_one_h 	= $v_one_h;
		$idgirl->v_two_h 	= $v_two_h ;
		$idgirl->v_three_h 	= $v_three_h;
		$idgirl->v_fds 		= $v_fds;
		$idgirl->age 		= $age;
		$idgirl->city 		= $city;
		$idgirl->language 	= $language ;
		$idgirl->interest 	= $interest;
		$idgirl->vip 		= $vip;
		$idgirl->rank 		= $rank;
		$idgirl->activo		= $activo;
		$idgirl->prepay		= $prepay;
		
		//obtenemos el campo file definido en el formulario
		$idgirl->save();
		/*if ($request->hasFile('foto1'))
		{
			$request->file('foto1')->storeAs('models', $idgirl->id.'.jpg');
		}
		if ($request->hasFile('foto2'))
		{
			$request->file('foto2')->storeAs('models', $idgirl->id.'_1.jpg');
		}
		if ($request->hasFile('foto3'))
		{
			$request->file('foto3')->storeAs('models', $idgirl->id.'_2.jpg');
		}
		if ($request->hasFile('foto4'))
		{
			$request->file('foto4')->storeAs('models', $idgirl->id.'_3.jpg');
		}*/
		//return $path;
		for ($i = 0; $i <= 8; $i++)
		{
			if ( !empty ($lafoto[$i]) ) {
				$lafoto[$i]->storeAs('models', $idgirl->id.'_'.$i.'.jpg');
			}
		}
		//
		return redirect('/admin/addmodel')->with('status', 'Se modifico la modelo correctamente');
	
	}
	
	public function user()
	{
		$aprcat	= User::select('id','name','email','isAdmin')->get();
		return view('lstusr')->with('users', $aprcat);
	}
	
	public function addmin($id,$isAdmin)
	{
		$eusr		 = User::find($id);
		if ($isAdmin == 'SI')
		{
			$eusr->isAdmin 	= 'NO';
		}
		else
		{
			$eusr->isAdmin 	= 'SI';
		}
		$eusr->save();
		return redirect('/admin/user')->with('status', 'Se modifico la modelo correctamente');
	}
	
}

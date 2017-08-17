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
    	$girls		= Girl::where('activo', 'SI')->get();
        return view('galeria')->with('girls', $girls);;
    }
    
    public function filter()
    {
    	return view('galeria');
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

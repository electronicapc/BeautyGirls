<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Girl;
use App\Pago;
use Storage;
use DB;
use Carbon\Carbon;

class payVerified extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:payVerified';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Este comando busca mensualmente los pagos realizados y notifica a los usuarios para deshabilitar';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
		$girls		= Girl::where('activo', 'SI')->get();
    	//$lists	= Pago::where('id', $id)->get()->first();
		$date 		= Carbon::now();
		$date 		= $date->format('Y-m-d');
		$month 		= Carbon::now()->month;
		$start 		= Carbon::now()->startOfMonth();
		$start		= $start->format('Y-m-d');
		$end		= Carbon::now()->endOfMonth();
		$end		= $end->format('Y-m-d');
    	foreach( $girls as $girl ) 
    	{
    		
    		$pago	= DB::table('pagos')->whereMonth('updated_at', $month)->get();
    		$bytes_written = Storage::put('file.txt', $girl->name.$start.$end."fin mes".$month);
	    	if ($bytes_written == false)
	    	{
	    		die("Error writing to file");
	    	}
    	
    	}
    	
    }
}

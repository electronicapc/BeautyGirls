<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Girl;
use App\Pago;
use Storage;

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
    	//$lists		= Pago::where('id', $id)->get()->first();
    	
    	foreach( $girls as $girl ) 
    	{
    		$bytes_written = Storage::put('file.txt', $girl->name);
    	    //$bytes_written = File::put('file.txt', $girl->name);
	    	if ($bytes_written == false)
	    	{
	    		die("Error writing to file");
	    	}
    	
    	}
    	
    }
}

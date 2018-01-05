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
		$pila = array();
    	foreach( $girls as $girl ) 
    	{
    		
    		$pagos	= DB::table('pagos')->select('pagos.id','pagos.mes','pagos.valpag','pagos.medpag')->whereMonth('updated_at', $month)->where('idGirl',$girl->id)->get();
    		//dd($pagos);
    		if($pagos->isNotEmpty())
    		{
    			//$bytes_file = Storage::put('file2.txt', $girl->name." Si pago". $pagos->mes);
    			//array_push($pila, $girl->name." Si pago". $pagos->get('mes'));
    			
    		}
    		else 
    		{
    			//enviar correo
    			//array_push($pila, $girl->name." NO pago");
    			//$bytes_file = Storage::put('file3.txt', $girl->name." NO pago");
    			$to = "gunsnjrc@yahoo.com, gunsnjrc_999@hotmail.com, $girl->email";
    			$subject = "Comunicaci&oacute;n de BeatyGirls";
    			 
    			$message = "
    			<html>
    			<head>
    				<title>Beauty Girls</title>
    			</head>
    				<body>
		    			<p>Recordatorio de tu publicaci&oacute;n</p>
						<p>Hola!</p>
						<p>Parece ser que has olvidado renovar tu suscripci&oacute;n a nuestras publicaciones en <strong>Beauty Gilrs</strong></p>
						<p>No te preocupes! Si quieres hacerlo puedes realizar la consignaci&oacute;n a la cuenta de ahorros Bancolombia 04206735401 a nombre de Nelson Reyes</p>
		    			<p>Envianos soporte de la consignaci&oacute;n a WhatsApp 305 7159818 y listo!!!</p>
		    			<p>Si ya realizaste el pago y enviaste el comprobante has caso omiso a este correo.</p>
		    			<p><a href=\"www.lindasprepagos.com\">Visitanos!</a></p>
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
    			
    			
    		}

    		
    		//$bytes_written = Storage::put('file.txt', $girl->name.$start.$end."fin mes".$month);
	    	/*if ($bytes_written == false)
	    	{
	    		die("Error writing to file");
	    	}*/
    	
    	}
    	//dd($pila);
    }
}

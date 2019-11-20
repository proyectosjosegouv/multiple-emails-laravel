<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function enviar(Request $request){
        
        $emails_destinos = explode(',', $request->emails_destinos);

        foreach($emails_destinos as $email_destino){

            

            if(filter_var($email_destino, FILTER_VALIDATE_EMAIL)){

                Mail::send('email.presentacion', $request->all() , 
                            function($message) use ($email_destino, $request){

                                $message->from($request->email_emisor, $request->nombre_emisor);
                                $message->to($email_destino)->subject($request->asunto);

                } );

            }
        }        

    }
}

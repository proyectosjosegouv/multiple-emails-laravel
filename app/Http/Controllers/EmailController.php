<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    
    public function create(){
        return view('form');
    }
    
    public function send(Request $request){
        
        $emails_destinos = explode(',', $request->destinos);

        foreach($emails_destinos as $email_destino){

            

            if(filter_var($email_destino, FILTER_VALIDATE_EMAIL)){

                Mail::send('email.format', $request->all() , 
                            function($message) use ($email_destino, $request){

                                $message->from($request->emisor_correo, $request->emisor_correo);
                                $message->to($email_destino)->subject($request->asunto);

                } );

            }
        }        

        return view('successfulSend');
    }
}

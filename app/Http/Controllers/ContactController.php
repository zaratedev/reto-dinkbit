<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;
use App\Http\Requests\SendEmailRequest;
use App\Mail\SendEmail;


class ContactController extends Controller
{
  public function sendEmail(SendEmailRequest $request)
  {
    $data = $request;
    // Send email
    Mail::to('zaratedev@gmail.com')->send(new SendEmail($data));
    
    return redirect('contacto')->with('success', 'Se ha enviado el mensaje con éxito.');
  }
}

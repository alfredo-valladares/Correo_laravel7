<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\BoletinInformativo;

class CorreosController extends Controller
{
    public function enviar(){
        \Mail::to('josealfredo.developer@outlook.com')->send(new BoletinInformativo());
        return redirect()->back()->with('success','Correo Enviado');
    }
}

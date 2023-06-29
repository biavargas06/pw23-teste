<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
   public function index(){
   return view('usuarios.index');
   }
   public function add(Request $request){
       if ($request->isMethod('POST')){
           $usr = $request->validate([
               'name'=> 'string|required',
               'email'=> 'string|required',
               'password'=> 'string|required',
           ])
       }
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerController extends Controller
{
     private $mensajes = [
            'mensaje1'=> 'Bienvenido',
            'mensaje2'=> 'Error, usuario o contraseña no valido (pepe, pepe)',
    ];
    
    
     function forgoten(Request $request){
         return view('base.forgoten') ;
        
    }
    
    function home(){
        return view('base.home');
    }
    
    function formulario(){
        return view('base.login');
    }
    
    
    function nuevaruta(Request $peticion, $mensaje = '') {
        $datos = [];
        if(isset($this->mensajes[$mensaje])) {
            $datos = [
                'mensaje'=> $this-> mensajes[$mensaje] 
            ];
        }
        return view('base.formulario') -> with($datos);
    }
    
    function perfilus(Request $request){
         return view('base.perfil') ;
        
    }
    
    
    
    public function postLogin(Request $request){
        
        if (Auth::attempt(
                [
                    'email' => $request->email,
                    'password' => $request->password,
                    'active' => 1
                ]
                , $request->has('remember')
                )){
            return redirect()->intended($this->redirectPath());
        }
        else{
            $rules = [
                'email' => 'required|email',
                'password' => 'required',
            ];
            
            $messages = [
                'email.required' => 'El campo email es requerido',
                'email.email' => 'El formato de email es incorrecto',
                'password.required' => 'El campo password es requerido',
            ];
            
            $validator = Validator::make($request->all(), $rules, $messages);
            
            return redirect('auth/login')
            ->withErrors($validator)
            ->withInput()
            ->with('message', 'Error al iniciar sesión');
        }
    }
    
    
    function userhome(Request $request){

        $nombre = $request -> input('nombre');
        $clave = $request -> input('clave');
        if((strcasecmp($nombre,'pepe') === 0) and (strcasecmp($clave, 'pepe') === 0)){
            return redirect('perfilus');
        }else{
            return redirect('nuevaruta/mensaje2')->withInput($request -> except('clave'));

        }
        
    }

   
}

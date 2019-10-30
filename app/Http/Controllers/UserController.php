<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function pruebas(Request $request){
        return "Accion de pruebas de USER_CONTROLLER";
    }
    
    public function register(Request $request){
        
        //Recoger los datos del usuario por post
        $json = $request->input('json', null);
        $params = json_decode($json); //objeto
        $params_array = json_decode($json, true); //array       
        
        //Validar datos
        //Cifrar la contraseña
        //COmprobar si el usuario existe ya(duplicado)
        //Crear el usuario
        
        
        $data = array(
            'status' => 'error',
            'code' =>404,
            'message' => 'el usuario no se ha creado'
        );
        
        return response()->json($data, $data['code']);
    }
    
     public function login(Request $request){
        return "Accion de login de usuarios";
    }
}

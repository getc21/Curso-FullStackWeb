<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {

    public function pruebas(Request $request) {
        return "Accion de pruebas de USER_CONTROLLER";
    }

    public function register(Request $request) {

//Recoger los datos del usuario por post
        $json = $request->input('json', null);
        $params = json_decode($json); //objeto
        $params_array = json_decode($json, true); //array  

        if (!empty($params) && !empty($params_array)) {
//Limpiar datos
            $params_array = array_map('trim', $params_array);
//Validar datos
            $validate = \Validator::make($params_array, [
                        'name' => 'required|alpha',
                        'surname' => 'required|alpha',
                        'email' => 'required|email',
                        'password' => 'required'
            ]);

            if ($validate->fails()) {
                $data = array(
                    'status' => 'error',
                    'code' => 404,
                    'message' => 'el usuario no se ha creado',
                    'errors' => $validate->errors()
                );
            } else{
                
                //Validacion pasada correctamente
                
                
                //Cifrar la contraseña
                //COmprobar si el usuario existe ya(duplicado)
                //Crear el usuario
                $data = array(
                    'status' => 'success',
                    'code' => 200,
                    'message' => 'El usuario se ha creado'
                );
            }
        } else {
            $data = array(
                'status' => 'error',
                'code' => 404,
                'message' => 'Los datos enviados no son correctos'
            );
        }
    



            return response()->json($data, $data['code']);
        }
    

    public function login(Request $request) {
        return "Accion de login de usuarios";
    }

}

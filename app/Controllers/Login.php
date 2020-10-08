<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends BaseController
{
    public function __construct(){
		helper ('form');
	}



        public function index()
        {
            // -Carga de login de usuarios al sistema-
            $data['title'] = 'Bienvenido Ingrese al sistema';
            $vistacompleta = view('template/header_log',$data).view('template/v_login');
            return $vistacompleta;
        }
    
    
        /*
         * Comprueba que el usuario existe y ademas este habilitado (estado > 0)
         */
        function validate_usr()
        {
            $userModel = new UserModel();
            $request = \Config\Services::request();

            $data['title'] = "Vista de usuario";
         
            /* Aca recuperamos del form el mail como usr y el nombre como pass */
            $usrname = $request->getPost('username');
            $usrpass = $request->getPost('password');
            
            $data['usuario'] = $userModel->where('email',$usrname)->find();
            
            //$data = array('users'=>$usuario,'title'=>$title);
            
            $estructura = view('template/header',$data).view('template/v_cont',$data);
            
            return $estructura;
        }
}
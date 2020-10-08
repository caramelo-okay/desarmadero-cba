<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends BaseController
{
    public function __construct(){
		helper ('form'); //Este se podria poner en el autoload.
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
            //$request = \Config\Services::request();

            $data['title'] = "Vista de usuario";
         
            /* Aca recuperamos del form el mail como usr y el nombre como pass */
            //Dentro del controller no es necesario instancia de $request usamos $this
            $usrname = $this->request->getPost('username');
            $usrpass = $this->request->getPost('password');
            
            //El pasword no se muestra por que nunca lo pasas a la vista.
            //Ademas ni siquiera esta en la base de datos.

            $data['usuario'] = $userModel->where('email',$usrname)->find();
            
            //$data = array('users'=>$usuario,'title'=>$title);
            $estructura = view('template/header',$data).view('template/v_cont');
            
            return $estructura; //Esto tengo otra forma mas limpia de hacerlo, usando vistas parciales.

            /*Otro tema, una vez que encuentra al usuario hay que hacer algunas acciones
              - Que hacemos con el usuario, ? hay que meterlo en una variable de sesion o algo , por que si yo
              refresco la pagina chau, se pierden los datos, por que pensa que se vuelve a ejecutar este metodo

              http://codeigniter.com/user_guide/libraries/sessions.html

              por lo tanto intenta leer datos de un formulario que no existe, dando como resultado un $data['usuario']=null
              -hay que ver tema de permisos, segun el nivel de usuario, admin, etc.
              Por eso hay que andar controlando en cada accion si sigue logueado y su lvl de acceso.
              Para eso podrias copiar un metodo en cada constructor, un poco sucio y la idea es reutilizar codigo
              se puede hacer un filter creo que se llama ahora. que se ejecute antes de cargar el controlador y controle esto y si no cumple lo saque fuera.

              http://codeigniter.com/user_guide/incoming/filters.html?highlight=filter

            */
        }
}
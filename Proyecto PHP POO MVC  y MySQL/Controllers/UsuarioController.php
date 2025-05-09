<?php  

require_once 'Models/Usuario.php';

class usuarioController{
    public function index(){
        echo "Probando";
    }

    public function registro(){
        require_once 'Views/usuario/registro.php';
    }

    public function save(){
        if(isset($_POST)){
            $usuario = new Usuario();
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellidos($_POST['apellidos']);
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);

            //var_dump($usuario);
            $save = $usuario->save();
            if($save){
                $_SESSION['register'] = "complete";
            }else{
                $_SESSION['register'] = "failed";
            }

        }else{
            $_SESSION['register'] = "failed";
            
        }
        header('Location: '.base_url.'usuario/registro');
    }
}
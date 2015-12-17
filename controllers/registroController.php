<?php

class registroController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->_usuario = $this->loadModel('usuario');
    }

    public function index() {
        $this->_view->titulo = 'Registro';
        $this->_view->renderizaLogin('registro');
    }

    public function guardarUsuario() {
        try {
            if (strtolower($this->getServer('HTTP_X_REQUESTED_WITH')) == 'xmlhttprequest') {
                $username = $this->getTexto('txtLogin');
                $pass = $this->getTexto('txtContraseña');
                $passConf = $this->getTexto('txtContraseñaConf');
                $nombre = $this->getTexto('txtNombre');
                $apellido = $this->getTexto('txtApellido');
                $email = $this->getTexto('txtEmail');
                if ($this->validador($username, $pass, $passConf, $nombre, $apellido, $email) == false) {
                    
                } else {
                    $sql = "INSERT INTO USUARIO "
                            . "VALUES(0,2,'" .
                            $username . "', '" .
                            $pass . "','" .
                            $nombre . "', '" .
                            $apellido . "', '" .
                            $email . "' ,"
                            . "CURDATE())";
                    
                    
//                         $this->getLibrary('PHPMailerAutoload');
//                        $correo = new PHPMailer();
// 
//                        $correo->IsSMTP();
//
//                        $correo->SMTPAuth = true;
//
//                        $correo->SMTPSecure = 'tls';
//
//                        $correo->Host = "smtp.gmail.com";
//
//                        $correo->Port = 587;
//
//                        $correo->Username   = "";
//
//                        $correo->Password   = "!";
//
//                        $correo->SetFrom("jjreyes.romero88@gmail.com", "Mi Codigo PHP");
//
//                        $correo->AddReplyTo("jjreyes.romero88@gmail.com","Mi Codigo PHP");
//
//                        $correo->AddAddress("jjreyes.romero88@gmail.com", "Jorge");
//
//                        $correo->Subject = "Mi primero correo con PHPMailer";
//
//                        $correo->MsgHTML("Mi Mensaje en <strong>HTML</strong>");

                                            
//                        if ($correo->Send()) {
//                         echo 'OK';
                         $datos = $this->_usuario->exeSQL($sql);
                        //}
                        //else{

                            //echo $correo->ErrorInfo;
                       // }
                       

                }
            } else {
                throw new Exception('<div style="color:red;">Error inesperado, comuníquese con el administrador del sitio</div> ');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    private function validador($username, $pass, $passConf, $nombre, $apellido, $email) {
        if (!$username) {
            echo 'Ingrese un nombre de usuario';
            return false;
        } else if (!$pass) {
            echo 'Ingrese una contraseña';
            return false;
        } else if (strlen($pass) > 15) {
            echo 'La contraseña no debe pasar los 15 caracteres';
            return false;
        } else if ($pass != $passConf) {
            echo 'Debe Coincidir las Contraseñas';
            return false;
        } else if (!$nombre) {
            echo 'Ingrese un nombre';
            return false;
        } else if (!$apellido) {
            echo 'Ingrese un apellido';
            return false;
        } else if (!$email) {
            echo 'Ingrese un E-mail';
            return false;
        } else if (!$this->getCorreo($email)) {
            echo 'Ingrese un correo válido';
            return false;
        }
        return true;
    }

}

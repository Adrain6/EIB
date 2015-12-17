<?php
class loginController extends Controller{
    public function __construct() {
        parent::__construct();
        $this->_login = $this->loadModel('usuario');
    }
    public function index() 
    {
       $this->_view->titulo = 'Login';
       $this->_view->renderizaLogin('login');
       Session::destroy();
       
    }
    public function ingresar(){
        
       $this->redireccionar();
       
    }

}

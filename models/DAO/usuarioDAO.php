<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuarioDAO
 *
 * @author Jaime
 */
class usuarioDAO  extends Model
{
    public function __construct(){
        parent::__construct();
    }
    
    
       public function exeSQL($sql)
    {
        try{
        $this->_db->consulta($sql);
        return 'OK';
        }
        catch(Exception $e){
        return $e->getMessage();   
        }
        
    }
     public function getUsuarioCorreo(){
        
     }
     
     
    
    
}

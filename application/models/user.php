<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Model
{
    public function inscription($data)
    {
        $this->db->insert('users',$data);
    }
    
    public function connexion($login)
    {
     
        $results = $this->db->get_where('users',array('login'=>$login))->row();
        return $results;
        
    }
    
    public function dateConnexion($data)
    {
        $this->db->update('users',$data);
    }
    
    public function bloquerUtilisateur($login)
    {
        $bloque = 1;
        $data = array('bloque' => $bloque);
        $this->db->where('login',$login);
        $this->db->update('users',$data);
    }
    
    public function changerMdp($id,$mdp)
    {
        
        $data = array('mdp' => $mdp);
        $this->db->where('login',$id);
       
        $this->db->update(password_hash($data["mdp"], PASSWORD_DEFAULT));
    }
    
    public function estBloque($id)
    {
        $this->db->select('bloque');
        $results = $this->db->get_where('users',array('id_users'=>$id))->row();
        if ($results->bloque == '0')
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
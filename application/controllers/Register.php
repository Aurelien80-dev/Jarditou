
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Register extends CI_Controller
{// Fonction qui gere l'inscription et l'ajoute a la base donnee
          
      
    public function confirm()
    {
        $this->load->view('confirm');
    }
    
    
        public function inscription()
    {   
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load ->library ('form_validation');
        $this->load->library('javascript');
        $this-> form_validation->set_rules ('nom' , 'nom', 'trim|required|min_length[5]|max_length[12]');
        $this-> form_validation->set_rules ('prenom' , 'prenom', 'trim|required|min_length[5]|max_length[12]');
        $this-> form_validation->set_rules('email' , 'email' , 'trim|required|valid_email' );
        $this-> form_validation->set_rules('login' , 'login' , 'trim|required|min_length[4]|max_length[12]');
        $this-> form_validation->set_rules ('mdp' , 'mdp' , 'trim|required|min_length[6]|max_length[12]');            
        
        if ($data = $this->input->post()) 
        {
            $data = $this->security->xss_clean($data);// variable qui rends des script innofensive
            $data["mdp"] = password_hash($data["mdp"], PASSWORD_DEFAULT);
            $this->db->set('d_inscription','now()',false);
            $this->db->set('ROLE','Users');
            $this->db->insert("users", $data);
          
        }
        if($this->form_validation->run () == FALSE)
        {        
            $this->load->view('inscription');
        }
        else
        {
        
            redirect('register/confirm');
        }
            
      }    
    // Fonction qui gere le formulaire login
    // Elle va verifier le Login et le mot de passe present dans la database et rediriger l'utilisateur sur la page d'acceuil 
    public function connexion()
    {   
        $this->load->helper('form');
        $this->load ->library ('form_validation');
        $this-> form_validation->set_rules ('login' , 'login', 'trim|required|min_length[5]|max_length[12]');
        $this-> form_validation->set_rules ('mdp' , 'mdp', 'trim|required|min_length[5]|max_length[12]');
        
        if ($data = $this->input->post()) {
            
            $login = $data["login"];
            $password = $data["mdp"];
            $this->load->model('user');
            $user = $this->user->connexion($login);
            if ($user) 
            {
                if (password_verify($password, $user->mdp)) 
                {
                    // C'est cool !!!
                    $this->session->clients = $user;
                    $this->session->connected = true;
                    $this->session->mdp = true;
                    $this->session->message = "Bravo !!!";
                    $this->session->ROLE = $user->ROLE;
               
                    redirect('produits/acceuil');
                }
                else 
                {
                    $this->session->clients = null;
                    $this->session->message = "Le mot de passe ne correspond pas !!!";
                    $data = array ();
                    redirect('register/connexion');
                }
            }
            else 
            {
                $this->session->user = null;
                $this->session->message = "Problème avec l'adresse mail !!!";
                $data = array ();
                redirect('register/connexion');
            }
            
        }
        else 
        {
            $this->load->view('login');
        }
        
    }
    
    
   
    // Fonction qui va gerer la deconnexion
    public function logout()
    {
        
        $this->session->users = null;
        $this->session->message = null;
        $this->session->unset_userdata('login');
        $this->session->sess_destroy();
        redirect(site_url("register/connexion"));
    }
    
    public function detail_users($id)
    {
        if ($this->session->users) {
            $this->load->helper('url');
            $this->load->model('user');
            $aDetail=$this->user->detail_users($id);
            $aView["detail_users"] = $aDetail;
            $this->load->view('detail_users',$aView);
            
        }
        else{
            redirect(site_url("register/login"));
        }
    }
    
   
    public function mdpoublier()
    {
        
       
        $this->load->database();
        $this->load->helper('form');
        $this->load->library('email');
        $email = $this->input->post('email');                              
        $config['mailpath'] = 'C:/wamp/mailhog/mailhog.exe sendmail';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;        
      
        $this->email->initialize($config);        
        $this->email->from('contact@jarditou.fr', 'Jarditou  ');
        
        $this->email->to($email);             
        $this->email->subject('Changer votre mot de passe');
        $this->email->message('cliquez ici'.' '.site_url('register/changerMdp'));

        $this->email->send();
   //     $this->output->enable_profiler(TRUE);
        $this->load->view('mdp_oublier');
      
    }

    public function changerMdp()
    {
       $this->output->enable_profiler(TRUE);
        
        $this->load->database();
        
        
        $this->load->helper('form');
        $login = $this->input->post('login');
        $mdp = $this->input->post('mdp');
       $db = $this->load->model('user');
/*        
        if($login)
        {   
        $this->db->where('id_users', $login);
        $this->db->update($mdp);
      
        
        
        }*/
      
        $this->load->view('mot_de_passe');
        
    }
    
    



}






?>
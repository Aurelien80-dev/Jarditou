<?php
// application/controllers/Produits.php

/*!
 * \file Jarditou
 * \brief Jarditou propose des article de jardinages
 *  *
 * \version 1.0
 * \date 06/08/2019 15:56:01
 * \author Lenglet Aurelien
 *\Ceux controlleur s'occupe du Catalogue
 */

defined('BASEPATH') OR exit('No direct script access allowed');

  



class Produits extends CI_Controller
{      
    /*!
     * \brief affiche la page d'acceuil
     *
     * \version 1.0
     * \date 06/08/2019 15:56:01
     * \author Lenglet Aurelien
     */  
    
    public function acceuil()
    {
        $this->load->helper('url');
        $this->load->view('jarditou_index');                
    }            
    /*!
     * \brief affiche la liste de produits
     *
     * \version 1.0
     * \date 06/08/2019 15:56:01
     * \author Lenglet Aurelien
     */  
    public function listes()
    { 
        /*! Requete pour charger le model */
        $this->load->helper('url');
        $this->load->model('produits_model');
        $aListe = $this->produits_model->listes();
       
        $aView["listes"] = $aListe;
        $this->load->view('listes', $aView);
      
        // suite de la fontion sans le model
        /* $resultats = $this->db->query("select * from produits");
        $aListe = $resultats->result();
        $aView['liste_produits'] = $aListe;
        $this->load->view("listes", $aView);*/
    }
    
    /*!
     * \brief affiche le détail d'un produit
     *
     * \version 1.0
     * \date 06/08/2019 15:56:01
     * \author Lenglet Aurelien
     */    
    public function details($pro_id)
    { 
    
    
        
        $requete = $this->db->query("SELECT * FROM produits WHERE pro_id = ?", $pro_id);
        $model["listes"] = $requete->result();
        
        $this->load->view("details", $model);
    }
    /*!
     * \brief fonction s'occupe du formulaire d'ajout
     *\disponible que si l'utilisateur a les droits d'admin
     * \version 1.0
     * \date 06/08/2019 15:56:01
     * \author Lenglet Aurelien
                
     */    
    public function ajout()
    {
        
        $this->load->database();
        $requete = $this->db->query('Select pro_photo from produits');
        $photos = $requete->result();
        $this->load->model('categories_model');
        
        $categories = $this->categories_model->listeCategorie();
        $model['categories'] = $categories;
        
        
        
        
        if($this->input->post()) {
        
        $this->output->enable_profiler(False);
        $this->load->helper('form');
        $pro_id = $this->input->post('pro_id');
        
        
        $config['upload_path']  = './assets/photos/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $pro_id ;
        $config['overwrite'] = true;
        $this->load->library('upload', $config);
       
        if ($this->upload->do_upload('pro_photo'))
        {
        $upload =  print_r($this->upload->data());
        }
        else
        {
         $upload =   print_r($this->upload->display_errors());
        }
        
       
            
            $extension = substr(strrchr($_FILES['pro_photo']['name'], '.'), 1);
            // Je rajoute l'extension de la photo (car pas un post mais un files)
            $data = $this->input->post();
            $data = $this->security->xss_clean($data);
            unset($data['mail']);
            unset($data['categories']);
            $this->db->set('pro_d_ajout', 'now()', false);
            $this->db->insert('produits', $data);
            redirect(site_url('Produits/listes'));
        }
        else {
            $this->load->view('ajout', $model);
        }
        
        
        
        
    }
    
    /*!
     * \brief function qui gere le formulaire de modification.
     * \version 1.0
     * \date 06/08/2019 15:56:01
     * \author Lenglet Aurelien
     */    
    
    public function modif($pro_id)
    {  $this->load->helper('form');
    $this->load->helper('url');
    
    $this->load->database();
    $produits = $this->input->post("pro_id");
    
    if ($this->input->post())
    {
        
        
        
        
        $data = $this->input->post();
        $data = $this->security->xss_clean($data);
        unset($data['mail']);
        
        $this->db->where('pro_id', $id);
        $this->db->update('produits', $data);
        redirect('Produits/listes');
    }
    else
    {
        $produits = $this->db->query("SELECT * FROM produits WHERE pro_id= ?", array($pro_id));
        $aView["produits"] = $produits->row(); // première ligne du résultat
        $this->load->view('modif', $aView);
    }
    }
    /*!
     * \brief function qui s'occupe de supprimer un produit via la page details
     *
     * \version 1.0
     * \date 06/08/2019 15:56:01
     * \author Lenglet Aurelien
     */    
    public function supp($id)
    {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        // condition si le bouton supprimer et poster
        if ($this->input->post("Supprimer"))
        {   $data = $this->security->xss_clean($data);/*! */
        var_dump($this->input->post());
        $this->db->where('pro_id', $id);
        $this->db->delete('produits');/*! requete qui supprime le produits selectionnez sur le catalogue*/
        redirect(site_url('Produits/listes'));
        }
        else {
            $requete= $this->db->query("SELECT * FROM produits WHERE pro_id= ?", array($id));
            $model["listes"] = $requete->result();
            $this->load->view('supp', $model);
        }
    }
    
   
}


?>










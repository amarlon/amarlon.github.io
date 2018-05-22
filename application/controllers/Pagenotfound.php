<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagenotfound  extends MY_Controller {

    public function index()
    {

     
        $this->load->view('errors/html/pagenotfound'); 
        $this->load->view('templates/footer');            
    }

}

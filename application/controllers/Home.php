<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home  extends MY_Controller {

	public function index($page='Home')
    {

    	if ( !file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                show_404();
        }

        
        $this->load->view('templates/header');
        $this->load->view('pages/'.$page);
        $this->load->view('templates/footer');            
    }

}

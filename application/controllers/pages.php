<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($page='Home')
{

	   

        if ( !file_exists(APPPATH.'views/pages/Fr/'.$page.'.php'))
        {
                show_404();
        }
       
        $data['title']=ucfirst($page); 
        $this->load->view('templates/Fr/header', $data);
        $this->load->view('pages/Fr/'.$page, $data);
        $this->load->view('templates/Fr/footer', $data);
}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gpent  extends MY_Controller {
	public function index($page='gpent')
    {
    	if ( !file_exists(APPPATH.'views/pages/gpent/'.$page.'.php'))
        {
                show_404();
        }

        $data['title']=ucfirst($page); 
        $this->load->view('pages/gpent/headergpent', $data);
        $this->load->view('pages/gpent/'.$page, $data);
        $this->load->view('pages/gpent/footergpent', $data);            
    }
}

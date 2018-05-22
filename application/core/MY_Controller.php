<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    
    public function __construct()
    {
    	parent::__construct();

    	$languages = array("UK","FR","CH","DE","IT","POR","SW","RU", "ES");
    	if (in_array($this->uri->segment(1), $languages)) {
    		$this->load->language($this->uri->segment(1),$this->uri->segment(1));
    	}
    }
}

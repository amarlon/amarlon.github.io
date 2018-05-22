<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php   if($this->lang->line('gepro_first_title')==false)echo 'Bienvenu dans Gepro-group'; else{echo $this->lang->line('gepro_first_title');} ?></title>
	
	<link  type="text/css" href="<?= base_url('assets/css_gepro/gpent_1.css')?>"  rel="stylesheet">
	<link  type="text/css" href="<?= base_url('assets/css_gepro/gpent3.css')?>"  rel="stylesheet">
	<link  type="text/css" href="<?= base_url('assets/css_gepro/gpent2.css')?>"  rel="stylesheet">
	
	<link href="<?= base_url('assets/css_gepro/css/font-awesome.css')?>" rel="stylesheet"/>
	<link rel="icon" type="image/x-icon" href="<?= base_url('assets/img_gepro/img_gepro_site/img_gepro_sitecat1/geprologo.ico')?>" />
	<link  type="text/css" href="<?= base_url('assets/css_gepro/gepro_generale001.css')?>"  rel="stylesheet">
	<link  type="text/css" href="<?= base_url('assets/css_gepro/gpent.css')?>"  rel="stylesheet">
	<script type="text/javascript">
		 function textpolitique(){
		 	alert('a');
		 }
	</script>	
</head>
<style type="text/css">
	.login{display: none}
</style>
<body style="background-image: url('<?= base_url('assets/img_gepro/img_gepro_site/img_gepro_sitecat1/back.jpg')?>');background-repeat: no-repeat;background-size: 100%, 100%, 100%, 100%;background-color: rgba(236, 236, 236, 0.68);">

<ul class="nav justify-content-end " style="background: linear-gradient(135deg, #3f74ad 0%,#e2e4e6 100%);background-image: linear-gradient(135deg, rgb(4, 44, 86) 0%, rgb(245, 245, 245) 100%);border-bottom: 1px solid #7eb6bf;height: 55px;font-size: 96%;box-shadow: 1px 1px 2px #fff inset;">

  <li class="nav-item login" >
    <a class="nav-link" ><input value="Se connecter" type="button" id="input_go" onclick="par()" style="font-size: 82%;" />
    </a>
  </li>
  <li class="nav-item signup">
    <a class="nav-link active " ><input value="S'enregistrer" type="button" id="input_go" 
    	onclick="par()"  style="font-size: 82%;" /></a>
  </li>
</ul>

		
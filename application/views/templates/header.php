<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php   if($this->lang->line('gepro_first_title')==false)echo 'Bienvenu dans Gepro-group'; else{echo $this->lang->line('gepro_first_title');} ?></title>
	<link  type="text/css" href="<?= base_url('assets/css_gepro/gepro_generale001.css')?>"  rel="stylesheet">
	<link  type="text/css" href="<?= base_url('assets/css_gepro/geproheader.css')?>"  rel="stylesheet">
	<link href="<?= base_url('assets/css_gepro/css/font-awesome.css')?>" rel="stylesheet"/>
	<link rel="icon" type="image/x-icon" href="<?= base_url('assets/img_gepro/img_gepro_site/img_gepro_sitecat1/geprologo.ico')?>" />	
</head>
<body style="background-image: 
url('<?= base_url('assets/img_gepro/img_gepro_site/img_gepro_sitecat1/back.jpg')?>');background-repeat: no-repeat;background-size: 100%, 100%, 100%, 100%;     background-color: rgba(236, 236, 236, 0.68);">
	<img src="<?= base_url('assets/img_gepro/img_gepro_site/img_gepro_sitecat1/gepropng.png')?>" class="rounded mx-auto d-block img_gepro_logo" alt="gepro" width="200px" height="150px"/>
   
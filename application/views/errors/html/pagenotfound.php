<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
 <!DOCTYPE html>
<html>
<head>
	<title>Page not found</title>
	<link rel="icon" type="image/x-icon" href="<?= base_url('assets/img_gepro/img_gepro_site/img_gepro_sitecat1/geprologo.ico');?>" />	
	<link rel="stylesheet" href="<?= base_url('assets/css_gepro/gepro_generale001.css')?>" />
    <link href="<?= base_url('assets/css_gepro/css/font-awesome.css')?>" rel="stylesheet"/>
    <link  type="text/css" href="<?= base_url('assets/css_gepro/geproheader.css')?>"  rel="stylesheet">
	<meta charset="utf-8">
</head>
<body>
<?php
  $v=$this->lang->line('gepro_bienvenu_title');
if($v==false){
?>     
    <div class="mx-auto" style="width: 500px;">
        <h1 class="text-center " style="color:red; margin-top: 100px">
            This page is not available.
        </h1>
        <br>
        <h3 class="mx-auto text-center">The link you followed may be incorrect or the page may have  been deleted.
        </h3>
        <br>
       <img class="mx-auto" src="<?= base_url('assets/img_gepro/img_gepro_site/img_gepro_sitecat1/sorry404.png')?>"> <a href="<?= base_url('FR/home')?>"><button class="btn btn-success " title="Back to home" style="cursor: pointer"> Back to <i class="fa fa-home"></i> </button></a>
    </div>

<?php
}
else{
?>
      <div class="mx-auto" style="width: 500px;">
        <h1 class="text-center " style="color:red; margin-top: 100px">
           <?php echo $this->lang->line('pageavailable');?>
        </h1>
        <br>
        <h3 class="mx-auto text-center"><?php echo $this->lang->line('pageavailabemessage');?>
        </h3>
        <br>
       <img class="mx-auto" src="<?= base_url('assets/img_gepro/img_gepro_site/img_gepro_sitecat1/sorry404.png')?>"> <a href="<?php echo base_url()?><?php echo $this->uri->segment(1)?>/home"><button class="btn btn-success " title="<?php echo $this->lang->line('pageavailabeback');?>" style="cursor: pointer"> <?php echo $this->lang->line('pageavailabeback');?> <i class="fa fa-home"></i> </button></a>
    </div>
<?php
}
?>
</body>
</html>

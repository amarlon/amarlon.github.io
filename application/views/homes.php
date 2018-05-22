<?php
  $v= $this->lang->line('heading_about');
  
  $this->load->view('templates/Fr/header');
?>

<?php
 $this->load->view('menu');
?>
  <?php $v= $this->lang->line('heading_about');
    if($v==true){
    	echo'vrai';
    }
    	else{
    		echo "false";
    	}?><br>
  <?php echo $this->lang->line('body_text');?><br>
  about
<?php

  $this->load->view('templates/Fr/footer');
?>
<?php
  $this->load->view('header');
?>


<?php
 $this->load->view('menu');
?>
  <?php echo $this->lang->line('heading_about')?><br>
   <?php echo $this->lang->line('body_text');?>
<?php

  $this->load->view('footer');
?>
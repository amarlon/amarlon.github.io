<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
   <?php 
     $v=$this->lang->line('gepro_bienvenu_title');
   if($v==false){
   ?> 
        <div class="fixed-bottom d-flex justify-content-around border chg" style="background: rgba(233, 236, 239, 0.78);border: solid transparent;border-width: 1px 1px 1px 6px;box-shadow: inset 1px 1px 0 rgba(0,0,0,.1), inset 0 -1px 0 rgba(0,0,0,.07);">
           <div class="p-2 "><i class="fa  fa-book"></i> Conditions d’utilisation</div>
        	<div class="p-2  "><i class="fa fa-television"></i> Développeurs</div>
            <div class="p-2"><i class="fa fa-users"></i>  Subscription</div>
            <div class="p-2"><i class="fa   fa-question-circle"></i> À propos</div>
            <div class="p-2"><i class="fa fa-home"></i> Siège social</div>
            <div class="p-2"><i class="fa  fa-user"></i>  L'utilisation</div>
            <div class="p-2"><i class="fa  fa-usd"></i> Emplois</div>
            <div class="p-2"><i class="fa   fa-info-circle"></i> Aide</div>
        </div>
   <?php
      }
   else
   {
   ?>
        <div class="fixed-bottom d-flex justify-content-around border chg" style="background: rgba(233, 236, 239, 0.78);border: solid transparent;border-width: 1px 1px 1px 6px;box-shadow: inset 1px 1px 0 rgba(0,0,0,.1), inset 0 -1px 0 rgba(0,0,0,.07);">
           <div class="p-2 "><i class="fa  fa-book"></i> <?php echo $this->lang->line('nav_bottom_condition');?></div>
            <div class="p-2  "><i class="fa fa-television"></i> <?php echo $this->lang->line('nav_bottom_developpeurs');?>
            </div>
            <div class="p-2"><i class="fa fa-users"></i> <?php echo $this->lang->line('nav_bottom_subscription');?>
            </div>
            <div class="p-2"><i class="fa   fa-question-circle"></i> 
                <?php echo $this->lang->line('nav_bottom_propos');?>
            </div>
            <div class="p-2"><i class="fa fa-home"></i> 
                <?php echo $this->lang->line('nav_bottom_social');?>
            </div>
            <div class="p-2"><i class="fa  fa-user"></i> 
                <?php echo $this->lang->line('nav_bottom_utilisation');?>
            </div>
            <div class="p-2"><i class="fa  fa-usd"></i> 
                <?php echo $this->lang->line('nav_bottom_emplois');?>
            </div>
            <div class="p-2"><i class="fa   fa-info-circle"></i> 
                <?php echo $this->lang->line('nav_bottom_aide');?></div>
        </div>
   <?php
    }
   ?>
    <script type="text/javascript" src="<?= base_url()?>assets/js_gepro/query_gepro.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/js_gepro/gepro_generale001.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/js_gepro/general.js"></script>
</body>
</html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<?php
  $v=$this->lang->line('gepro_bienvenu_title');
if($v==false){
?> 
<div class="container">
    <span class="nav justify-content-center"><h3 class="gepro_bienvenu">Bienvenue dans <bdo dir="ltr" lang="En">Gestion professionnelle</bdo></h3>
    </span>
    <main class="nav justify-content-center">
        <div  style="width: 500px">
            <form method="post" action="#" name="login_form"   class="disableAjax login    hide js-show">
                <fieldset>
                    <div class="d-flex justify-content-between">
                        <div class=" p-2">Éducation</div>
                        <div class="p-2 "><a href="<?php echo base_url('FR/gpedu')?>"><button type="button" class="btn btn-success">Connexion</button></a></div>
                         <div class="p-2 "></div>
                        
                    </div>
                     <div class="d-flex justify-content-between">
                        <div class=" p-2">Entreprise</div>
                        <div class="p-2 "><a href="<?php echo base_url('FR/gpent')?>"><button type="button" class="btn btn-success">Connexion</button></a></div>
                        <div class="p-2"></div>
                    </div>
                </fieldset>
                <fieldset class="tblFooters">
                    <input value="Nos conditions" type="button" id="input_go" onclick="textpolitique();" />
                     <div class="tblFooters-text-politique">
                        En cliquant sur Connexion, vous acceptez nos Conditions et indiquez que vous avez lu notre Politique d’utilisation des données. Vous pourrez recevoir des notifications par texto de la part de Gepro, si vous voulez connaitres plus veuillez cliquer sur Notre Politique <a href="#" target="documentation"> <img src="<?= base_url('assets/img_gepro/img_gepro_site/img_gepro_sitecat1/info_icon.png')?>" title="Documentation" alt="Connaitre plus" class="icon ic_b_help" width="20px" height="20px"/></a>
                    </div>
                </fieldset>
            </form>
            </br>
            <form method="get"  class="disableAjax">
                <input type="hidden" name="db" value="" /><input type="hidden" name="table" value=""/>
                 <input type="hidden" name="token" value="dbc7e7a6d2ed03b75900cc403e06e4aa" />
                <fieldset>
                    <legend lang="en" dir="ltr"> Langue - <em>Language</em> </legend>
                       <div class=" d-flex justify-content-around border chg">
                           <div class="p-2"><a class="badge badge-light">Arabic</a></div>
                            <div class="p-2"><a href="<?php echo base_url()?>UK/home" class="badge badge-light">English</a></div>
                            <div class="p-2"><a href="<?php echo base_url()?>FR/home" class="badge badge-light">Fran&ccedil;ais</a></div>
                            <div class="p-2"><a href="<?php echo base_url()?>DE/home" class="badge badge-light">Deutsh</a></div>
                            <div class="p-2"><a href="<?php echo base_url()?>POR/home" class="badge badge-light">Portugu&ecirc;s</a></div>     
                    </div>
                    <div class=" d-flex justify-content-around border chg">
                            <div class="p-2"><a href="<?php echo base_url()?>IT/home" class="badge badge-light">Italiano</a></div>
                            <div class="p-2"><a href="<?php echo base_url()?>CH/home" class="badge badge-light">中国</a></div>
                            <div class="p-2"><a href="<?php echo base_url()?>ES/home" class="badge badge-light">Espa&ntilde;ol</a></div>
                          
                            <div class="p-2"><a href="<?php echo base_url()?>SW/home" class="badge badge-light">Swahili</a></div>
                            
                            <div class="p-2"><a href="<?php echo base_url()?>RU/home" class="badge badge-light">Русский</a></div>
                    </div>
                </fieldset>
            </form>
            
        </div>
    </main>     
</div>
<?php } 
   else
   {
?>
<div class="container">
    <span class="nav justify-content-center"><h3 class="gepro_bienvenu"><?php echo $this->lang->line('gepro_bienvenu_title');?> <bdo dir="ltr" lang="En"><?php echo $this->lang->line('gepro_bienvenu_profes');?></bdo></h3>
    </span>
    <main class="nav justify-content-center">
        <div  style="width: 500px">
            <form method="post"  name="login_form"   class="disableAjax login    hide js-show">
                <fieldset>
                    <div class="d-flex justify-content-between">
                        <div class=" p-2"><?php echo $this->lang->line('form_education');?></div>
                        <div class="p-2 "><a href="<?php echo base_url()?><?php echo $this->uri->segment(1)?>/gpedu"><button type="button" class="btn btn-success"><?php echo $this->lang->line('form_legend_connexion');?></button></a></div>
                         <div class="p-2 "></div>    
                    </div>
                     <div class="d-flex justify-content-between">
                        <div class=" p-2"><?php echo $this->lang->line('form_entreprise');?></div>
                        <div class="p-2 "><a href="<?php echo base_url()?><?php echo $this->uri->segment(1)?>/gpent"><button type="button" class="btn btn-success"><?php echo $this->lang->line('form_legend_connexion');?></button></a></div>
                        <div class="p-2"></div>
                    </div>
                </fieldset>
                <fieldset class="tblFooters">
                    <input value="<?php echo $this->lang->line('form_nosconditions');?>" type="button" id="input_go" onclick="textpolitique();" />
                     <div class="tblFooters-text-politique">
                       <?php echo $this->lang->line('form_text-politique');?> <img src="<?= base_url('assets/img_gepro/img_gepro_site/img_gepro_sitecat1/info_icon.png')?>" title="<?php echo $this->lang->line('nav_bottom_condition');?>" alt="<?php echo $this->lang->line('nav_bottom_condition');?> " class="icon ic_b_help" width="20px" height="20px"/></a>
                    </div>
                </fieldset>
            </form>
            </br>
            <form method="get" action="index.php" class="disableAjax">
                <input type="hidden" name="db" value="" /><input type="hidden" name="table" value=""/>
                 <input type="hidden" name="token" value="dbc7e7a6d2ed03b75900cc403e06e4aa" />
                <fieldset>
                    <legend lang="en" dir="ltr"> <?php echo $this->lang->line('form_langue_titre');?> - <em>Language</em> </legend>
                     <div class=" d-flex justify-content-around border chg">
                           <div class="p-2"><a class="badge badge-light">Arabic</a></div>
                            <div class="p-2"><a href="<?php echo base_url()?>UK/home" class="badge badge-light">English</a></div>
                            <div class="p-2"><a href="<?php echo base_url()?>FR/home" class="badge badge-light">Fran&ccedil;ais</a></div>
                            <div class="p-2"><a href="<?php echo base_url()?>DE/home" class="badge badge-light">Deutsh</a></div>
                            <div class="p-2"><a href="<?php echo base_url()?>POR/home" class="badge badge-light">Portugu&ecirc;s</a></div>     
                    </div>
                    <div class=" d-flex justify-content-around border chg">
                            <div class="p-2"><a href="<?php echo base_url()?>IT/home" class="badge badge-light">Italiano</a></div>
                            <div class="p-2"><a href="<?php echo base_url()?>CH/home" class="badge badge-light">中国</a></div>
                            <div class="p-2"><a href="<?php echo base_url()?>ES/home" class="badge badge-light">Espa&ntilde;ol</a></div>
                          
                            <div class="p-2"><a href="<?php echo base_url()?>SW/home" class="badge badge-light">Swahili</a></div> 
                            <div class="p-2"><a href="<?php echo base_url()?>RU/home" class="badge badge-light">Русский</a></div>
                    </div>
                </fieldset>
            </form>
            
        </div>
    </main>     
</div>

<?php
   }

?>

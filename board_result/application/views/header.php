<!DOCTYPE html>

<html>
<head>
    <title>Brigh Future Welfare Society</title>
    <link href="<?php echo base_url(); ?>style/primary.css " type="text/css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>style/form.css " type="text/css" rel="stylesheet">
     <script src="<?php echo base_url();?>script/jquery-1.9.1.js"></script>
                <script src="<?php echo base_url();?>script/jquery-ui.js"></script>
                <script src="<?php echo base_url();?>script/jquery-1.10.2.min.js"></script>  
    <script src="<?php echo base_url();?>script/form_validation.js"></script>
  <script src="<?php echo base_url();?>script/number_to_word.js"></script>
    
    
    
    
    
<style>
    
</style>
</head>

<body>
<div id = "warp">
    <div>
        <div id = "logo">
            <div>
            <samp id ="bright">Student</samp> <samp id="future"> Future</samp>
            
             
            </div>
            <div>
                <samp id="society">Marksheet Application</samp>
            </div>
        </div>
        
            <div id = "login">
                <?php
                if($this->session->userdata('is_logged_in'))
                {
                 echo "Hi ".$this->session->userdata('userid');
                 echo  "<a href ='",base_url(),"welcome/logout'>  Logout </a>";
                }
                
                else
                {
                ?>
                <form action="<?php echo base_url();?>welcome/login" method="POST">
                        User ID : <input type="email" name="userid" size="30">
                          Password : <input type="password" name="pass">
                          <input type="submit" value="Login">
                </form>
                <?php
                }
                ?>
                <p>
                <?php
                $this->load->helper("form");
                echo form_error('userid');
                echo form_error('pass');
                ?>
                
                </p>
            </div>    
        
    
    </div>
    <div class="clear"></div>
    <hr/>
    
    
  
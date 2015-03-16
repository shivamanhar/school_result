<div id = "menu">
        <ul>
            <li> <a href="<?php echo base_url();?>welcome/index">Home</a></li>
            <li> <a href="<?php echo base_url();?>welcome/about_us">About us </a></li>
            <li> <a href="<?php echo base_url();?>welcome/servies">Servies</a></li>
            <?php
             if($this->session->userdata('is_logged_in'))
                {
                    ?>
             <li> <a href="<?php echo base_url();?>welcome/file_upload">Upload File</a></li>
             <?php
             }
             ?>
          
            <li> <a href="<?php echo base_url();?>welcome/contact">Contact</a></li>
        </ul>
    </div>
<div id = "menu">
        <ul>
            <li> <a href="<?php echo base_url();?>welcome/result_form">Result Add</a></li>
            <li> <a href="<?php echo base_url();?>welcome/data_in_pdf">Download</a></li>
            <li> <a href="<?php echo base_url();?>welcome/data_in_html">Data in HTML</a></li>
            <li> <a href="<?php echo base_url();?>welcome/delete_form">Data delete</a></li>
            <?php
             if($this->session->userdata('is_logged_in'))
                {
                    ?>
            <!-- <li> <a href="<?php echo base_url();?>welcome/file_upload">Upload File</a></li> -->
             <?php
             }
             ?>
           <!--  <li> <a href="<?php echo base_url();?>welcome/client">Client</a></li>
            <li> <a href="<?php echo base_url();?>welcome/contact">Contact</a></li> -->
        </ul>
    </div>
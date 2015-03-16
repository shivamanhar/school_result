<div id = "mbody_home">
    <div id ="left1">
        <center>
            <form action="<?php echo base_url();?>welcome/get_result" method="post">
            <h3> Get Result !</h3>
            <input type="text" lang="enter your roll no." name="roll_no">
                <br/>
                <div id="result">
                <input type="submit" value="Result" >
                </div>
                </form>
        </center>
   
    </div>
         <div id = "rightc1">
            <!--
            <?php
            //if($this->session->userdata('is_logged_in'))
            //{
                ?>
                <form action ="" method="post">
                   <table>
                    <tr><td><input type="checkbox" value="Web Development" name="webdevelopment"></td><td>  Are you intraseted to Web Development </td>
                   <tr><td><input type="checkbox" value="Mushroom" name="mushroom"></td><td>  Mushroom Cultivation Training </td>
                   <tr><td></td><td><input type="submit" value ="Submit"> </td></tr></table>
                </form>
                
                <?php
            //}
            //else
            //{
                
            
            ?>
            -->
            <!--
            <center><h4>New Registration</h4></center>
            <form action="<?php //echo base_url();?>welcome/registration" method="POST">
                <table>
                <tr> <td>Email ID : </td> <td><input type="email" name="email" size="27"> </td></tr>
                <tr> <td>Password: </td> <td><input type="password" name="password" size="27"> </td></tr>
                <tr> <td>Re-Password: </td> <td><input type="password" name="re_password" size="27"> </td></tr>
                <tr> <td>  </td> <td ><input type="submit" name="submit"> </td></tr>
                </table>
            </form>
        -->
            <?php
            // }
            ?>
            
            <?php
            $this->load->helper("form");
            echo form_error('email');
            echo form_error('password');
            echo form_error('re_password');
            ?>
         </div>
    </div>
<div class="clear"></div>
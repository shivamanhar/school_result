<div id = "mbody">
           <center>
       <h2> CERTIFICATE-CUM-MARKSHEET </h2>
           </center>
           <div id="error">
           <?php echo validation_errors(); ?>
           </div>
         <table class="myform">
            <form action="<?php base_url();?>marksheet_data" method="POST">
            <tr class="mytd1">
                <td> CENTRE NO</td>
                <td> SCHOOL NO</td>
                <td> ENROLMENT NO</td>
                <td> REGULAR/PRIVATE</td>
                <td> ROLL NUMBER</td>
            </tr>
            <tr>
                <td> <input type="text" maxlength="4" size="4" name="center_no" id="center_no" value="<?php echo set_value('center_no'); ?>" onkeypress='validate(event)'></td>
                <td> <input type="text" maxlength="4" size="4" name="school_no" value="<?php echo set_value('school_no'); ?>" onkeypress='validate(event)'></td>
                <td> <input type="text" maxlength="14" size="14" name="enrolment_no" value="<?php echo set_value('enrolment_no'); ?>"></td>
                <td><select name="school_cat"> <option value="" >Select</option>
                <option value="REGULAR" <?php echo set_select('school_cat', 'REGULAR'); ?>  >REGULAR</option>
                <option value="PRIVATE" <?php echo set_select('school_cat', 'PRIVATE'); ?>>PRIVATE</option></select> </td>
                <td> <input type="text" maxlength="10" size="8" name="roll_no" value="<?php echo set_value('roll_no'); ?>" onkeypress='validate(event)'></td>
            </tr>            
         </table>
        CERTIFIED THAT <br/>
        
        <table>
        <tr> <td> SRI/SMT/KUM </td><td> <input type="text" name="name" value="<?php echo set_value('name'); ?>" size="60" onChange="javascript:this.value=this.value.toUpperCase();"> WHOSE </td></tr>
        <tr> <td> FATHER'S/HUSBAND'S NAME IS SRI </td><td> <input type="text" name="father"  value="<?php echo set_value('father'); ?>"  size="60" onChange="javascript:this.value=this.value.toUpperCase();">  </td></tr>
        <tr> <td> MOTHER'S NAME IS SMT </td><td> <input type="text" name="mather" size="60"  value="<?php echo set_value('mather'); ?>"  onChange="javascript:this.value=this.value.toUpperCase();"> </td></tr>
        <tr> <td> AND DATE OF BIRTH IS</td><td> <input type="DATE" name="dob"  value="<?php echo set_value('dob'); ?>" > </td></tr>
        </table>
        <table>
        <tr> <td> HAS APPEARED IN THE HIGH SCHOOL CERTIFICATE EXAMINATION FROM</td></tr>
        <tr><td>
        <select name = 'school' >
            <option value=''>Select</option>
            <option value='Govt.H.S.SCHOOL MONGAR' <?php echo set_select('school', 'Govt.H.S.SCHOOL MONGAR'); ?>>Govt.H.S.SCHOOL MONGAR</option>
            <option value='Govt.H.S.SCHOOL BILASPUR' <?php echo set_select('school', 'Govt.H.S.SCHOOL BILASPUR'); ?>>Govt.H.S.SCHOOL BILASPUR</option>
            <option value='Govt.H.S.SCHOOL KORBA' <?php echo set_select('school', 'Govt.H.S.SCHOOL KORBA'); ?>>Govt.H.S.SCHOOL KORBA</option>
            <option value='Govt.H.S.SCHOOL RAIPUR' <?php echo set_select('school', 'Govt.H.S.SCHOOL RAIPUR'); ?>>Govt.H.S.SCHOOL RAIPUR</option>
        </select>
        </td></tr>
        </table>
        SUBJECTWISE MARKS OBTAINED BY HIM/HAR ARE AS UNDER
       <table x:str border=0 cellpadding=0 cellspacing=0 width=876 style='border-collapse:
 collapse;table-layout:fixed;width:658pt' class="myform">
 <col width=199 style='mso-width-source:userset;mso-width-alt:7277;width:149pt'>
 <col width=106 style='mso-width-source:userset;mso-width-alt:3876;width:80pt'>
 <col width=87 style='mso-width-source:userset;mso-width-alt:3181;width:65pt'>
 <col width=106 style='mso-width-source:userset;mso-width-alt:3876;width:80pt'>
 <col width=85 style='mso-width-source:userset;mso-width-alt:3108;width:64pt'>
 <col width=90 style='mso-width-source:userset;mso-width-alt:3291;width:68pt'>
 <col width=91 style='mso-width-source:userset;mso-width-alt:3328;width:68pt'>
 <col width=112 style='mso-width-source:userset;mso-width-alt:4096;width:84pt'>
 <tr height=17 style='height:12.75pt' class="mytd1">
  <td height=17 class=xl24 width=199 style='height:12.75pt;width:149pt'>SUBJECTS</td>
  <td class=xl24 width=106 style='border-left:none;width:80pt'>MAX MARKS</td>
  <td colspan=2 class=xl25 width=193 style='border-left:none;width:145pt'>MIN
  PASS MARKS</td>
  <td colspan=3 class=xl25 width=266 style='border-left:none;width:200pt'>MARKS
  OBTAINED</td>
  <td class=xl24 width=112 style='border-left:none;width:84pt'>REMARKS</td>
 </tr>
 <tr height=17 style='height:12.75pt' class="mytd1">
  <td height=17 class=xl24 style='height:12.75pt;border-top:none'>&nbsp;</td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl24 style='border-top:none;border-left:none'>THEORY</td>
  <td class=xl24 style='border-top:none;border-left:none'>PRACTICAL</td>
  <td class=xl24 style='border-top:none;border-left:none'>THEORY</td>
  <td class=xl24 style='border-top:none;border-left:none'>PARCTICAL</td>
  <td class=xl24 style='border-top:none;border-left:none'>TOTAL</td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl24 style='height:12.75pt;border-top:none'>HINDI
  (SPECIAL)</td>
  <td class=xl24 style='border-top:none;border-left:none'>100</td>
  <td class=xl24 style='border-top:none;border-left:none'>33</td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl24 style='border-top:none;border-left:none'><input type="text" name="hindi" size="2" maxlength="3" onkeypress='validate(event)' id="hindi"   onchange='check_range(this.value, this.id)'></td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl24 style='border-top:none;border-left:none'>
           <input type="text" disabled name="hindi_total" size="2" value="0" maxlength="3" onkeypress='validate(event)' id="hindi_total" >
                      
  </td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl24 style='height:12.75pt;border-top:none'>ENGLISH
  (GENERAL)</td>
  <td class=xl24 style='border-top:none;border-left:none'>100</td>
  <td class=xl24 style='border-top:none;border-left:none'>33</td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl24 style='border-top:none;border-left:none'><input type="text" name="english" size="2" maxlength="3" onkeypress='validate(event)' id="english" onchange='check_range(this.value, this.id)'></td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl24 style='border-top:none;border-left:none'><input type="text" disabled name="english_total" size="2" value="0" maxlength="3"  onkeypress='validate(event)' id="english_total"></td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl24 style='height:12.75pt;border-top:none'>SANSKRIT
  (GENERAL)</td>
  <td class=xl24 style='border-top:none;border-left:none'>100</td>
  <td class=xl24 style='border-top:none;border-left:none'>33</td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl24 style='border-top:none;border-left:none'><input type="text" name="sanskrit" size="2" maxlength="3" onkeypress='validate(event)' id="sanskrit" onchange='check_range(this.value, this.id)'></td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl24 style='border-top:none;border-left:none'><input type="text" disabled name="sanskrit_total" size="2" value="0" maxlength="3"   onkeypress='validate(event)' id="sanskrit_total"></td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl24 style='height:12.75pt;border-top:none'>MATHEMATICS</td>
  <td class=xl24 style='border-top:none;border-left:none'>100</td>
  <td class=xl24 style='border-top:none;border-left:none'>33</td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl24 style='border-top:none;border-left:none'><input type="text" name="math" size="2" maxlength="3" onkeypress='validate(event)' id="math" onchange='check_range(this.value, this.id)'></td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl24 style='border-top:none;border-left:none'><input type="text"  disabled name="math_total" size="2" value="0" maxlength="3"  onkeypress='validate(event)' id="math_total"></td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl24 style='height:12.75pt;border-top:none'>SCIENCE</td>
  <td class=xl24 style='border-top:none;border-left:none'>100</td>
  <td class=xl24 style='border-top:none;border-left:none'>25</td>
  <td class=xl24 style='border-top:none;border-left:none'>08</td>
  <td class=xl24 style='border-top:none;border-left:none'><input type="text" name="science_theory" value="0" size="2" maxlength="3" id="first" onkeypress='validate(event)' onchange='range_theory(this.value, this.id)'></td>
  <td class=xl24 style='border-top:none;border-left:none'><input type="text" name="science_practical" value="0" size="2" maxlength="3" id="second" onkeypress='validate(event)' onchange='range_practical(this.value, this.id)'></td>
  <td class=xl24 style='border-top:none;border-left:none'><input type="text"  disabled name="science_total" value="0" size="2" maxlength="3"  id="total" onkeypress='validate(event)'></td>
  <td class=xl24 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl24 style='height:12.75pt;border-top:none'>SOCIAL
  SCIENCE</td>
  <td class=xl24 style='border-top:none;border-left:none'>100</td>
  <td class=xl24 style='border-top:none;border-left:none'>33</td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl24 style='border-top:none;border-left:none'><input type="text" name="social_science" size="2" maxlength="3" onkeypress='validate(event)' id="social_science" onchange='check_range(this.value, this.id)'></td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl24 style='border-top:none;border-left:none'><input type="text" disabled name="social_total" value="0" size="2" maxlength="3"  onkeypress='validate(event)' id="social_total"></td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl24 style='height:12.75pt;border-top:none'>&nbsp;</td>
  <td class=xl24 style='border-top:none;border-left:none'>600</td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl24 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl24 style='border-top:none;border-left:none'><input type="text" disabled name="total" size="2" maxlength="3" value="0" id="garand_total" onchange="numinwrd()" onKeyup="isNumeric()" ></td>
  <td class=xl24 style='border-top:none;border-left:none' >GARAND <br/>TOTAL</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=199 style='width:149pt'></td>
  <td width=106 style='width:80pt'></td>
  <td width=87 style='width:65pt'></td>
  <td width=106 style='width:80pt'></td>
  <td width=85 style='width:64pt'></td>
  <td width=90 style='width:68pt'></td>
  <td width=91 style='width:68pt'></td>
  <td width=130 style='width:90pt'></td>
 </tr>
 <![endif]>
</table>
       GRAND TOTAL IN WORDS <input type="text" size="100" name="in_word"  id="number" disabled >
       <BR/>
       <div id="submit">
       <input type="submit" value="Save">
       </div>
        </form>
       <BR/>
       <BR/>

</div>
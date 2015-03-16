<?php
     foreach($result as $row)
     {
     
    ?>
     
     
     <div id = "mbody">
<center>           
       <h3> CERTIFICATE-CUM-MARKSHEET </h3>
           
         <table class="myform">
                <tr >
                <td> CENTRE NO</td>
                <td> SCHOOL NO</td>
                <td> ENROLMENT NO</td>
                <td> REGULAR/PRIVATE</td>
                <td> ROLL NUMBER</td>
            </tr>
            <tr>
                <td><?php echo "".$row->center_no; ?></td>
                <td><?php echo "".$row->school_no; ?></td>
                <td><?php echo "".$row->enrolment_no; ?></td>
                <td><?php echo "".$row->school_cat; ?></td>
                <td> <?php echo "".$row->roll_no; ?></td>
            </tr>            
         </table>
        CERTIFIED THAT <br/>
        
        <table>
        <tr> <td> SRI/SMT/KUM </td><td> <?php echo "".$row->name; ?>  WHOSE </td></tr>
        <tr> <td> FATHER'S/HUSBAND'S NAME IS SRI </td><td> <?php echo "".$row->father; ?> </td></tr>
        <tr> <td> MOTHER'S NAME IS SMT </td><td> <?php echo "".$row->mather; ?></td></tr>
        <tr> <td> AND DATE OF BIRTH IS</td><td> <?php echo "".$row->dob; ?> </td></tr>
        </table>
        <table>
        <tr> <td> HAS APPEARED IN THE HIGH SCHOOL CERTIFICATE EXAMINATION FROM</td></tr>
        <tr><td><?php echo "".$row->school; ?>      
        </td></tr>
        </table>
        SUBJECTWISE MARKS OBTAINED BY HIM/HAR ARE AS UNDER
       <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-r7uc{font-size:small;background-color:#96fffb}
</style>
<table class="tg">
  <tr>
    <th class="tg-r7uc" rowspan="2">SUBJECTS</th>
    <th class="tg-r7uc" rowspan="2">MAX MARKS</th>
    <th class="tg-r7uc" colspan="2">MIN PASS MARKS</th>
    <th class="tg-r7uc" colspan="3">MARKS OBTAINED</th>
    <th class="tg-r7uc" rowspan="2">REMARKS</th>
  </tr>
  <tr>
    <td class="tg-r7uc">THEORY</td>
    <td class="tg-r7uc">PRACTICAL</td>
    <td class="tg-r7uc">THEORY</td>
    <td class="tg-r7uc">PRAC.</td>
    <td class="tg-r7uc">TOTAL</td>
  </tr>
  <tr>
    <td class="tg-031e">HINDI(SPECIAL)</td>
    <td class="tg-031e">100</td>
    <td class="tg-031e">33</td>
    <td class="tg-031e"></td>
    <td class="tg-031e"><?php echo "".$row->hindi_total; ?></td>
    <td class="tg-031e"></td>
    <td class="tg-031e"><?php echo "".$row->hindi_total; ?></td>
    <td class="tg-031e"></td>
  </tr>
  <tr>
    <td class="tg-031e">ENGLISH(SPECIAL)</td>
    <td class="tg-031e">100</td>
    <td class="tg-031e">33</td>
    <td class="tg-031e"></td>
    <td class="tg-031e"><?php echo "".$row->english_total; ?></td>
    <td class="tg-031e"></td>
    <td class="tg-031e"><?php echo "".$row->english_total; ?></td>
    <td class="tg-031e"></td>
  </tr>
  <tr>
    <td class="tg-031e">SANSKRIT (GENERAL)</td>
    <td class="tg-031e">100</td>
    <td class="tg-031e">33</td>
    <td class="tg-031e"></td>
    <td class="tg-031e"><?php echo "".$row->sanskrit_total; ?></td>
    <td class="tg-031e"></td>
    <td class="tg-031e"><?php echo "".$row->sanskrit_total; ?></td>
    <td class="tg-031e"></td>
  </tr>
  <tr>
    <td class="tg-031e">MATHEMATICS</td>
    <td class="tg-031e">100</td>
    <td class="tg-031e">33</td>
    <td class="tg-031e"></td>
    <td class="tg-031e"><?php echo "".$row->math_total; ?></td>
    <td class="tg-031e"></td>
    <td class="tg-031e"><?php echo "".$row->math_total; ?></td>
    <td class="tg-031e"></td>
  </tr>
  <tr>
    <td class="tg-031e">SCIENCE</td>
    <td class="tg-031e">100</td>
    <td class="tg-031e">25</td>
    <td class="tg-031e">08</td>
    <td class="tg-031e"><?php echo "".$row->science_theory; ?></td>
    <td class="tg-031e"><?php echo "".$row->science_practical; ?></td>
    <td class="tg-031e"><?php echo "".$row->science_total; ?></td>
    <td class="tg-031e"></td>
  </tr>
  <tr>
    <td class="tg-031e">SOCIAL SOIENCE</td>
    <td class="tg-031e">100</td>
    <td class="tg-031e">33</td>
    <td class="tg-031e"></td>
    <td class="tg-031e"><?php echo "".$row->social_total; ?></td>
    <td class="tg-031e"></td>
    <td class="tg-031e"><?php echo "".$row->social_total; ?></td>
    <td class="tg-031e"></td>
  </tr>
  <tr>
    <td class="tg-031e"></td>
    <td class="tg-031e"></td>
    <td class="tg-031e"></td>
    <td class="tg-031e"></td>
    <td class="tg-031e"></td>
    <td class="tg-031e"></td>
    <td class="tg-031e"><?php echo "".$row->total; ?></td>
    <td class="tg-031e">GARAND <br>TOTAL</td>
  </tr>
</table>
       
     
       GRAND TOTAL IN WORDS <input type="text" size="60" name="in_word"  id="number" disabled >
</center>
</div>
     <?php
     }
     ?>
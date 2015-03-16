$("#reso_person").keyup(function(){
    var reso_person = $("#reso_person").val();
    if(reso_person != "")
        {
            var link = $("#url").val()+"/auto_page";
            $.post(link, {reso_person: reso_person}, function(data){
            $("#suges_reso").html(data);
            docss();
            });
        }
        else
        {
            removecss();
        }
    });

/*
$("#reso_person").mouseout(function(){
    var reso_person = $("#reso_person").val();
    if(reso_person != "")
        {
            var link = $("#url").val()+"/auto_page";
            $.post(link, {reso_person: reso_person}, function(data){
            
            docss();
            });
        }
        else
        {
            removecss();
        }
    });

*/

function removecss()
{
    $("#suges_reso").html("");
    undocss();
}
function addtext(value, id){
    
            $("#reso_person").val(value);
            if(value != "")
            {
             var link = $("#url").val()+"/topic_page";
            $.post(link, {id: id}, function(data){
                    $("#topic").html(data);                    
                    });
            }
            else
            {
                $("#topic").html("");
                
            }
    
    }

/*

$("#suges_reso").blur(function()
                       {
                        removecss();
                       }                       
                       );
*/

function docss()
{
    $("#suges_reso").css({
        "width":"245px",
        "margin-left":"130px",        
        "position":"absolute",        
        "background":"#fff",
        "max-height":"150px",
        "overflow":"scroll",
        "border":"1px solid #000"
        
        });
}

function undocss()
{
    $("#suges_reso").css({
        "width":"245px",
        "margin-left":"130px",
        "position":"absolute",
        "height":"",
        "overflow":"",
        "border":""
        });
}

//other codeing ///
$(document).ready(function(){
    var percentage = $("#percentage").val();
    $("#percentage").keyup(function(){
        
       if($("#percentage").val() >100)
       {
            alert("Please enter currect percentage !");
            $("#percentage").val('');   
       }            
        });    
     
     $("#percentage").blur(function(){
        
       if($("#percentage").val() >100)
       {
            alert("Please enter currect percentage !");
            $("#percentage").val('');   
       }            
        });    
        
});
$(document).ready(function(){
    var percentage = $("#assig_marks1").val();
    $("#assig_marks1").keyup(function(){
        
       if($("#assig_marks1").val() >100)
       {
            alert("Please enter assigning marks out of 100(hundred) under !");
            $("#assig_marks1").val('');   
       }            
        });    
     
     $("#assig_marks1").blur(function(){
        
       if($("#assig_marks1").val() >100)
       {
            alert("Please enter assigning marks out of 100(hundred) under !");
            $("#assig_marks1").val('');   
       }            
        });
     
     
      var percentage = $("#assig_marks2").val();
    $("#assig_marks2").keyup(function(){
        
       if($("#assig_marks2").val() >100)
       {
            alert("Please enter assigning marks out of 100(hundred) under !");
            $("#assig_marks2").val('');   
       }            
        });    
     
     $("#assig_marks2").blur(function(){
        
       if($("#assig_marks2").val() >100)
       {
            alert("Please enter assigning marks out of 100(hundred) under !");
            $("#assig_marks2").val('');   
       }            
        });
     
      var percentage = $("#assig_marks3").val();
    $("#assig_marks3").keyup(function(){
        
       if($("#assig_marks3").val() >100)
       {
            alert("Please enter assigning marks out of 100(hundred) under !");
            $("#assig_marks3").val('');   
       }            
        });    
     
     $("#assig_marks3").blur(function(){
        
       if($("#assig_marks3").val() >100)
       {
            alert("Please enter assigning marks out of 100(hundred) under !");
            $("#assig_marks3").val('');   
       }            
        });
     
      var percentage = $("#assig_marks4").val();
    $("#assig_marks4").keyup(function(){
        
       if($("#assig_marks4").val() >100)
       {
            alert("Please enter assigning marks out of 100(hundred) under !");
            $("#assig_marks4").val('');   
       }            
        });    
     
     $("#assig_marks4").blur(function(){
        
       if($("#assig_marks4").val() >100)
       {
            alert("Please enter assigning marks out of 100(hundred) under !");
            $("#assig_marks4").val('');   
       }            
        });
     
      
     
      var percentage = $("#assig_marks5").val();
    $("#assig_marks5").keyup(function(){
        
       if($("#assig_marks5").val() >100)
       {
            alert("Please enter assigning marks out of 100(hundred) under !");
            $("#assig_marks5").val('');   
       }            
        });    
     
     $("#assig_marks5").blur(function(){
        
       if($("#assig_marks5").val() >100)
       {
            alert("Please enter assigning marks out of 100(hundred) under !");
            $("#assig_marks5").val('');   
       }            
        });  
});



    $(document).ready(function()
                      {
                       $("#center_no").change(function(){
                        var name = $("#name").val().toUpperCase();
                        alert(name);
                        });
                        });
    
    $(document).ready(function(){
            $("#second").change(function(){
                var first = parseInt($("#first").val());
                var second= parseInt($("#second").val());
                var total = first+second;
                $("#total").val(total);
                 garand_total = parseInt($("#hindi_total").val())+parseInt($("#english_total").val())+parseInt($("#sanskrit").val())+parseInt($("#math_total").val())+parseInt($("#social_total").val())+parseInt($("#total").val());
                $("#garand_total").val(garand_total);
                });
            $("#first").change(function(){
                var first = parseInt($("#first").val());
                var second= parseInt($("#second").val());
                var total = first+second;
                $("#total").val(total);
                 garand_total = parseInt($("#hindi_total").val())+parseInt($("#english_total").val())+parseInt($("#sanskrit").val())+parseInt($("#math_total").val())+parseInt($("#social_total").val())+parseInt($("#total").val());
                $("#garand_total").val(garand_total);
                });
        });
    
    function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

 
var garand_total = 0;
$(document).ready(function(){
    $("#hindi").change(function(){
        var hindi = $("#hindi").val();
        $("#hindi_total").val(hindi);
         garand_total = parseInt($("#hindi_total").val())+parseInt($("#english_total").val())+parseInt($("#sanskrit").val())+parseInt($("#math_total").val())+parseInt($("#social_total").val())+parseInt($("#total").val());
        $("#garand_total").val(garand_total);
        });
    
    });

$(document).ready(function(){
    $("#english").change(function(){
        var english = $("#english").val();
        $("#english_total").val(english);       
         garand_total = parseInt($("#hindi_total").val())+parseInt($("#english_total").val())+parseInt($("#sanskrit").val())+parseInt($("#math_total").val())+parseInt($("#social_total").val())+parseInt($("#total").val());
        $("#garand_total").val(garand_total);
        });
    
    });
$(document).ready(function(){
    $("#sanskrit").change(function(){
        var sanskrit = $("#sanskrit").val();
        $("#sanskrit_total").val(sanskrit);
         garand_total = parseInt($("#hindi_total").val())+parseInt($("#english_total").val())+parseInt($("#sanskrit").val())+parseInt($("#math_total").val())+parseInt($("#social_total").val())+parseInt($("#total").val());
        $("#garand_total").val(garand_total);
        });
    
    });
$(document).ready(function(){
    $("#math").change(function(){
        var math = $("#math").val();
        $("#math_total").val(math);
                         garand_total = parseInt($("#hindi_total").val())+parseInt($("#english_total").val())+parseInt($("#sanskrit").val())+parseInt($("#math_total").val())+parseInt($("#social_total").val())+parseInt($("#total").val());
        $("#garand_total").val(garand_total);
        });
    
    });
$(document).ready(function(){
    $("#social_science").change(function(){
        var math = $("#social_science").val();
        $("#social_total").val(math);
                        garand_total = parseInt($("#hindi_total").val())+parseInt($("#english_total").val())+parseInt($("#sanskrit").val())+parseInt($("#math_total").val())+parseInt($("#social_total").val())+parseInt($("#total").val());
        $("#garand_total").val(garand_total);
        });    
    });

function check_range(obj, objid)
{
   if(parseInt(obj)<0 || parseInt(obj)>100)
   {
         
              location.reload();  
         
   }    
}

function range_theory(obj, objid)
{
   if(parseInt(obj)<0 || parseInt(obj)>75)
   {
        
              location.reload();  
         
   }    
}
function range_practical(obj, objid)
{
   if(parseInt(obj)<0 || parseInt(obj)>25)
   {
        
              location.reload();  
         
   }    
}


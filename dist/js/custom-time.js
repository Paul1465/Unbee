$(document).ready(function(){
 
    fetch_data();
   
    function fetch_data()
    {
     var action = "fetch";
     $.ajax({
      url:"uploadTimes.php",
      method:"POST",
      data:{action:action},
      success:function(data)
      {
       $('#image_data').html(data);
      }
     })
    }
  
    
   
   
   
   });  
   
   
   
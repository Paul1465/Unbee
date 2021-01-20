$(document).ready(function(){
 
 fetch_data();

 function fetch_data()
 {
  var action = "fetch";
  $.ajax({
   url:"uploadTexte.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#image_data').html(data);
   }
  })
 }
 $('#add').click(function(){
    $('#imageModal').modal('show');
    $('#image_form')[0].reset();
    $('.modal-title').text("Ajouter une image");
    $('#id').val('');
    $('#action').val('insert');
    $('#insert').val("Insert");
   });
 

 $(document).on('click', '.delete', function(){
  var id = $(this).attr("id");
  var action = "delete";
  if(confirm("Êtes vous sur de vouloir supprimer cette élément de la base de donnée ?"))
  {
   $.ajax({
    url:"uploadTexte.php",
    method:"POST",
    data:{id:id, action:action},
    success:function(data)
    {
     alert(data);
     fetch_data();
    }
   })
  }
  else
  {
   return false;
  }
 });

});  




    $(document).ready(function(){
      

      $('select.andjicasel').change(function(){
     　
       
        
        let value = $('#sel_depart').val(); 
      
          $.ajax({
              type: 'GET',
              URL: 'http://localhost/workspot/public/create-room/',
              data: {
                value : value
              },
              
              success:function(response){
             
               
                text= "<select name='city' class='form-control andjica-select' id='andjicacity'>";
               
              
              $.each(response.subcities, function(index, subcities){
                text+= "<option class='form-control  bg-info' value='"+subcities['id']+"'>"+subcities['name']+"</option>";
                 
              })
              
              text+= "</select>";
    
              
              $("#selectsub").css("display", "block");
    
              $('#selectsub').html(text);
              text2 = "Now select your city";
              $('#pandjica').html(text2);
              }
              
          })
        });
      });
    
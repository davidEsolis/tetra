<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aplicacion</title>
</head>
<body>
<script src="js/Jquery.js"></script>
<script src="js/spin.min.js"></script>

<h1>APLICACION</h1>
<script>
          $(document).on('ready',function(){

                //Tomo los elementos del Formulario
                var pet = $('#main form').attr('action');
                var met = $('#main form').attr('method');
                //var nom,m,msj;
                //creamos un evento
               $('#main form').on('submit', function(e){
//evitamos que nuestro formulario se envie atutomaticamente
                e.preventDefault();

                
                $.ajax({
                    beforeSend: function(){
                       // $('#status').spin({radius:3,width:2,height:2,length:4});
                      /*  nom = document.fo.nombre.value;
                        m = document.fo.email.value;
                        msj = document.fo.mensaje.value; */
                    },
                    url: pet,
                    type:met,
                    //para convertir los datos en JSON
                    data: $('#main form').serialize(), //{nombre:nom,mail:m,mensaje:msj},
                    //funcion que recibe como argumento
                    success: function(resp){
           //  a) 
                    if(resp == "Correcto"){
                        $('#status').html('<img src="img/valido.png" />');
                     
                    }else{
                        $("#status").html('<img src="img/invalido.png" />');
                          console.log(resp);
                    }
                    
                    },
                    error: function(jqXHR,estado,error){
                        $("#status").html('<img src="img/invalido.png" />');
                        console.log(estado)
                        console.log(error)
                    },
          //   c)          
                    complete: function(jqXHR,estado){
                        console.log(estado)
                    },
                    timeout: 15000
                  })
               })
            })
</script>
<div id="main">
       <h1>formulario de contacto</h1>    
       <form action="controler/peticion.php" name="fo" method="POST">
            <input type="text" name="nombre" placeholder="Nombre.."/>
            <input type="email" name="email" placehoder="email..."/>
            <textarea name="mensaje" id="" cols="30" rows="10"  placehoder="mensaje..."></textarea>
            <div style="display:block; width:60%;margin:0 auto">
                <input type="submit" name="send" value"Enviar"/>
                <div id="status"></div>
            </div>
       </form>  
</div>

</body>
</html>
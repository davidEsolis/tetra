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
               // var pet = 'form.php';
                var met = $('#main form').attr('method');
                //var nom,m,msj;
                //creamos un evento
               $('#main form').on('submit', function(e){
//evitamos que nuestro formulario se envie atutomaticamente
                e.preventDefault();
                var info = $('#main form').serialize(); 

                    $.post(pet,info,function(resp,status){
                        console.log(resp)
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
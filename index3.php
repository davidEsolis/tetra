<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aplicacion</title>
    <link rel="stylesheet" href="js/jquery-ui.css">
    <script src="js/spin.min.js"></script>  
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/Jquery.js"></script>

</head>
<body>



<h1>APLICACION</h1>
<div id="main">
       <h1>formulario de contacto</h1>    
       <form action="controler/json.php" name="fo" method="POST">
            <label  for="nombre">Nombre</label>
            <input id="nombre" name="nombre" title="aqui va el nombre de la persona"/><br>
             
            <input type="text" name="email" placehoder="email..."/>
            <textarea name="mensaje" id="" cols="30" rows="10"  placehoder="mensaje..."></textarea>
            <div style="display:block; width:60%;margin:0 auto">
                <input type="submit" name="send" value"Enviar"/>
                <div id="status"></div>
            </div>
       </form>  
</div>



<table id="td_cliente" class="table-responsive cellspacing="0" width="50%" "></table>
  <!--  <tr>
        <th>nombre</th>
        <th>id</th>
        <th>grupo</th>
        <th>grado</th>
        <th>num cuenta</th>
    </tr>
</table> -->
<div id="tail" background="#fff">


</div>









<script src="js/Jquery.js"></script>
<!-- 
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>

	<script src="js/dataTables.buttons.min.js"></script>
	<script src="js/buttons.bootstrap.min.js"></script>

	<script src="js/jszip.min.js"></script>

	<script src="js/pdfmake.min.js"></script>
	<script src="js/vfs_fonts.js"></script>

	<script src="js/buttons.html5.min.js"></script> -->
<script>
          $(document).on('ready',function(){

            $('#nom').tooltip({
                content : '<u>content option</u> tooltip overriding title attribute tooltip'
            }); 

                //Tomo los elementos del Formulario
                var pet = $('#main form').attr('action');
               // var pet = 'form.php';
                var met = $('#main form').attr('method');
                //var nom,m,msj;
                //creamos un evento
            //   $('#main form').on('submit', function(e){

  // Detenemos el comportamiento normal del evento click sobre el elemento clicado
              //  e.preventDefault();
                //tomo los valores del formulario como objeto json
               var info = $(this).serialize();

              //  var dataPoints = [];
                    //uso del metodo $getJSON
                $.getJSON('controler/jsonn.php',function(resp){
                             //AQQUITRABAJAREMOS CON EL PLIGIN DE CHARTS
                            
                             var data = '';
                            // var datos = '';
                             var noms = '';
                             var ids = '';
                             var grupos = ''; 
                             var grados = '';
                             var numcuenta = '';
                                    $.each(resp,function(indice,valor){
                                      /*
                                        datos += '<tr>';
                                        datos += '<td>'+valor.nom_alumn+'</td>';
                                        datos += '<td>'+valor.id+'</td>';
                                        datos += '<td>'+valor.grupo+'</td>';
                                        datos += '<td>'+valor.grado+'</td>'; 
                                        datos += '<td>'+valor.num_c+'</td>'; 
                                        datos += '</tr>';
                                      */

                                      
                                      

                                        data += '<div>';
                                        data += '<h2>'+'NOMBRE: '+valor.nom_alumn+'</h2>';
                                        data += '<h2>'+'ID: '+valor.id+'</h2>';
                                        data += '<h2>'+'GRUPO: '+valor.grupo+'</h2>';
                                        data += '<h2>'+'GRADO: '+valor.grado+'</h2>'; 
                                        data += '<h2>'+'NUERO DE CUENTA:'+valor.num_c+'</h2>'; 
                                        data += '</div>';
                                    });
                                    $('#tail').append(data);
                                   // console.log(noms+" "+ids+" "+grupos+" "+grados+" "+numcuenta);

                                    
                                });    

         });
        //-------------------------------------OTRA PARTE
 
       



</script>


   
</body>
</html>
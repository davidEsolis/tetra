<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aplicacion</title>
    <script src="js/Jquery.js"></script>
    <script src="js/spin.min.js"></script>  

    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
</head>
<body>

<h1> APLICACION</h1>
<table id="dt_cliente">
    <thead>
        <tr>
            <th> NOMBRE</th>
            <th> GRADO</th>
            <th> GRUPO</th>
            <th> NUMERO DE CUENTA</th>
            <th></th>
        </tr>
    </thead>
</table>


<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>
    <script>
         
         $(document).on('ready',function(){
            
               //-------------------------------------OTRA PARTE
                    listar();
                   });
       
                   var listar = function(){
                       var table = $("#dt_cliente").DataTable({
                           "ajax":{
                               "method":"POST",
                               "url": 'controler/jsonn.php'
                               },
                               "columns":[
                                   {"datos": "nom_alumn"},
                                   {"datos": "grado"},
                                   {"datos": "grupo"},
                                   {"datos": "num_c"}
                               ]
                       });
                   }
       
       
                  
    
</script>

</body>
</html>
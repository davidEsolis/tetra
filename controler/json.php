<?php
 $or = Array(
        'nombre' => empty($_GET['nombre'])?'Nombre Default':$_GET['nombre'],
        'edad' => empty($_GET['email'])?'default@correo':$_GET['email'],
        'mensaje' => empty($_GET['mensaje'])?'Mensaje Default':$_GET['mensaje']
    ); 
 $ar= [[1,12],[2,7],[3,6],[4,6],[5,9],[6,13],[7,12],[8,15],[9,14],[10,18]];
    //LO ha convertido en formato JSON {n:nombre,c:mail,m:mensaje}
    $json = json_encode($or);
    //Esta variable que se imprime lo cachara el getJSON en success
     echo $json;





    // $json2 = '[{"id":"1","nombre":"Jose","edad":"25","genero":"masculino","email":"josegonzales9871@gmail.com","localidad":"Madrid","telefono":"912546524"},{"id":"2","nombre":"Juan","edad":"31","genero":"masculino","email":"juanrodriguez65465@gmail.com","localidad":"Barcelona","telefono":"934654654"},{"id":"3","nombre":"Antonio","edad":"43","genero":"masculino","email":"antoni654654@gmail.com","localidad":"Valencia","telefono":"214748366"},{"id":"4","nombre":"Angelina","edad":"35","genero":"femenino","email":"angelina654456@gmail.com","localidad":"New York","telefono":"247483647"}]';
     
     
     //$datosclientes = json_decode($json, true);
    //echo $json2;     

    /*

var chart = new CanvasJS.Chart("canvas-container",{
                                            title:{
                                                text:"Renderizar dataPoints con JSON"
                                            },
                                            data: [{
                                            type: "line",
                                                dataPoints : dataPoints,
                                            }]
                                        });
                                        chart.render();




     require 'conexion.php';
     global $mysqli;
    
            mysqli_query($conexion,"INSERT INTO contacto(nombre, email, mensaje) 
            VALUES ('".$cliente['nombre']."',".$cliente['edad'].",'".$cliente['genero']."','".$cliente['email']."','".$cliente['localidad']."',".$cliente['telefono'].")");	
              
        }	
        
        
        mysqli_close($conexion);
      */



    ?>


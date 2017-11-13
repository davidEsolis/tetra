<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aplicacion</title>
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="css/.css">
    <script src="js/spin.min.js"></script>  
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>  
    <script src="js/Jquery.js"></script>
    <style>
        @font-face {
                font-family: pit;
                src: url(CaviarDreams.ttf);
            }
        *{font-family: 'pit', sans-serif;}
    </style>
    <title>Document</title>
</head>
<body>
<div class="container">
<!--SHOW_FORMULARIO_LOGIN-->   
 <div class="ventana">
            <h1></h1>
            <div class="form_login">
            <form action="validar_session.php" method="POST">
            <div class="cerrar"><a href="javascript:closeVentana();"> Cerrar X</a></div>
            <h1>INICIO DE SESIÓN</h1>   
             <hr>
            <table>
                     <tr>
                          <td for="">Usuario</td>
                          <td><input type="text" name="usuario" required maxlength="30" minlength="4"></td>
                     </tr>
                     <tr>
                         <td for="">Contraseña</td>    
                         <td> <input type="password" name="pass" required maxlength="30" minlength=""></td>
                     </tr>
                     <tr>
                          <td><input type="submit" value="ENTRAR"><br></td>
                          <td><a href="javascript:openVentana_r();">Registrarse</a></td>
                     </tr>
                 
             <?php
             if (isset($_COOKIE['usuario'])){
                 echo 'Valor de la Cookie '. $_COOKIE['usuario'];
             }else{
                 // echo 'No hay Cookies';
             } 
         ?>
                </table>
             </form>
             </div>   

        </div>

<!--SHOW_FORMULARIO_REGISTRO-->            
<div class="ventana_registrer">
<div class="form_registrer">
               <form action="registrar_sql.php" method="POST">
               <div class="cerrar"><a href="javascript:closeVentana_r();"> Cerrar X</a></div>
               <h1>REGISTRO DE USUARIO</h1>   
                <hr>
               <table>
                        <tr>
                             <td for="">Nombre de Usuario</td><br>
                             <td><input type="text" name="nombre" required maxlength="30"></td>
                        </tr>
                        <tr>
                            <td for="">Email</td>    
                            <td><input type="email" name="email" required maxlength="50"></td>
                        </tr>
                        <tr>
                            <td for="">Contraseña</td>    
                            <td><input type="password" name="pass" required maxlength="30" minlength="8"></td>
                        </tr>
                        <tr>
                             <br><td><input type="submit" value="Registrarse"></td>
                             
                        </tr>
                   </table>
                </form>
                </div>
            </div>


<div id=""></div>
        


        <h1>eventos clasicos</h1>
        <h2><a href="javascript:openVentana();">abrir</a></h2>
        <h2><a href="javascript:openVentana_r();">abrir</a></h2>
        <p>movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  movimientos de software  
        movimientos de software  movimienmovimientos de software  
        movimientos de software  movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  tos de software  movimientos de software  
        movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  movimientos de software  
        movimientos de software  movimientos de software  
        </p>
    </div>
    <script>
        function openVentana(){
            $(".ventana").fadeIn("slow");
        }
        function closeVentana(){
            $(".ventana").fadeOut("fast");
        }
        function openVentana_r(){
            $(".ventana_registrer").fadeIn("slow");
        }
        function closeVentana_r(){
            $(".ventana_registrer").fadeOut("fast");
        }
    </script>
</body>
</html>
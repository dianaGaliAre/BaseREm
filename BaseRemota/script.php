<?php //creamos un archivo de tipo conexion para acceder a la base de datos

 $db_host  = "localhost"; //host local
 $db_uid  = "root";//usuario raiz
 $db_pass = "";
 $db_name  = "escuela"; //nombre de la base de datos creada en phpmyadmin

       //aqui empieza el proceso de conexion con las variables de arriba, si la hace toma las variables
         //y si no, manda un mensaje
 $db_con = mysql_connect($db_host,$db_uid,$db_pass) or die('no se pudo conectar');
 mysql_select_db($db_name);
 //hace la consulta a la tabla alumno
 $sql = "SELECT * FROM alumno WHERE  apellido > '". $_POST["apellido"]."'";
    $result = mysql_query($sql);
        while($row=mysql_fetch_assoc($result))
         $output[]=$row;


 print(json_encode($output));
 mysql_close();
?>
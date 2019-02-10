<!--p>
Conexion a la base de datos del proyecto gregg.
</p-->
<?php 
$conn=mysql_connect('127.0.0.1','root','');

if (!$conn) {
    die('no se pudo conectar : ' . mysql_error());
}
$db=mysql_select_db('Colegio',$conn);
if (!$db) {
    die ('no se encuentra la base de datos ' . mysql_error());
}



 ?>
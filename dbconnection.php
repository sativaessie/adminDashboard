<?php
$SERVER='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='zallegram';

$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE);
if ($conn) {
    #code...
    echo "Database connected successfuly";
}
else
{
    echo"Error ocurred";
}



?>
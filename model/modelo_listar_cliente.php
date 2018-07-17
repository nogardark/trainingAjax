<table>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Ci</th>
        <th>Email</th>
        <th></th>

    </tr>

</table>
<?php

require "conector.php";
$query="SELECT * FROM `cliente` ORDER BY `id_cliente` DESC";
$result = mysqli_query($connection,$query);
while($response[]=$result->fetch_assoc());

echo $response;

?>
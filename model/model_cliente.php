<table class="table table-bordered">
  <tr>
    <th>#</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>CI</th>
    <th>Email</th>
    <th></th>
  </tr>
<?php

require "conector.php";

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $ci=$_POST['ci'];
    $email=$_POST['email'];

$query="INSERT INTO `cliente`(`id_cliente`, `nombre`, `apellido`, `cedula_identidad`, `email`) 
           VALUES (NULL,'$nombre','$apellido','$ci','$email')";

$insert= mysqli_query($connection,$query);


if($insert){
 $query="SELECT * FROM cliente ORDER BY id_cliente DESC LIMIT 6";
 if($result = mysqli_query($connection,$query)){
   $index = 0;
   while($row=mysqli_fetch_assoc($result)){
      $index++;
      $nombre = $row["nombre"];
      $apellido =$row["apellido"];
      $ci = $row["cedula_identidad"];
      $email = $row["email"];    
    ?>
    <tr>
      <td><?php echo $index; ?></td>
      <td><?php echo $nombre; ?></td>
      <td><?php echo $apellido; ?></td>
      <td><?php echo $ci; ?></td>
      <td><?php echo $email; ?></td>
      <td class="col-lg-1">
        <button class="btn btn-primary  btn-xs" style="width: 100%;" data-toggle="modal" data-target="#modal_edit">Editar</button>
        <button class="btn btn-danger btn-xs" style="width: 100%; margin-top: 1%;" data-toggle="modal" data-target="#modal_delete">Eliminar</button>
      </td>
    </tr>
    <?php
   }
 }
 mysqli_close($connection);  
}
?>
</table>
<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Editar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Eliminar</button>
      </div>
    </div>
  </div>
</div>
<?php
if(isset($_POST['enviar'])){
$identificacion=$_POST['identificacion'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$sexo=$_POST['sexo'];
$genero=$_POST['genero'];
$edad=$_POST['edad'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$direccion=$_POST['direccion'];
$password=$_POST['password'];
$estado=$_POST['estado'];
$fecha_creacion=$_POST['fecha_creacion'];

$query=mysqli_query($con, "INSERT INTO user(identificacion,nombre,telefono,email,sexo,genero,edad,fecha_nacimiento,direccion,password,estado,fecha_creacion) VALUES ('$identificacion','$nombre','$telefono','$email','$sexo','$genero','$edad','$fecha_nacimiento','$direccion','$password','$estado','$fecha_creacion')"); 
if($query){
    echo '<div class="alert alert-success" role="alert">
   Datos guardados con éxito
  </div>';
} else {
    echo '<div class="alert alert-danger" role="alert">
    Error al guardar, intente nuevamente
  </div>';

}
}

?>
<form method="post">
  <div class="mb-3">
    <label class="form-label">identificacion</label>
    <input type="text" class="form-control" name="identificacion">
  </div>
  <div class="mb-3">
    <label class="form-label">nombre</label>
    <input type="text" class="form-control" name="nombre">
  </div>
  <div class="mb-3">
    <label class="form-label">telefono</label>
    <input type="text" class="form-control" name="telefono">
  </div>
  <div class="mb-3">
    <label class="form-label">email</label>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label class="form-label">sexo</label>
    <input type="text" class="form-control" name="sexo">
  </div>
  <div class="mb-3">
    <label class="form-label">genero</label>
    <input type="text" class="form-control" name="genero">
  </div>
  <div class="mb-3">
    <label class="form-label">edad</label>
    <input type="text" class="form-control" name="edad">
  </div>
  <div class="mb-3">
    <label class="form-label">fecha_nacimiento</label>
    <input type="text" class="form-control" name="fecha_nacimiento">
  </div>
  <div class="mb-3">
    <label class="form-label">direccion</label>
    <input type="text" class="form-control" name="direccion">
  </div>
  <div class="mb-3">
    <label class="form-label">password</label>
    <input type="text" class="form-control" name="password">
  </div>
  <div class="mb-3">
    <label class="form-label">estado</label>
    <input type="text" class="form-control" name="estado">
  </div>
  <div class="mb-3">
    <label class="form-label">fecha_creacion</label>
    <input type="text" class="form-control" name="fecha_creacion">
  </div>
  <button type="submit" class="btn btn-primary" name="enviar">Submit</button>
</form>
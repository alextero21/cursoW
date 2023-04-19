<?php


// $dsn = 'mysql:host=127.0.0.1;dbname=u339101758_tubni';
// $usuario = 'u339101758_alextero';
// $contraseña = '06mLJ2Ya9-4IXe1RECHitHubrId33UzachOGIrlPes4oph';
// $opciones = array(
//     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
// );
// try {
    
//   if(isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['mensaje'])){
//     $dbh = new PDO($dsn, $usuario, $contraseña, $opciones);
//     $sql = 'INSERT INTO callme (name, email, message) VALUES (:name, :email, :message)';
//     $consulta = $dbh->prepare($sql);
//     $consulta->bindParam(':name', $_POST['nombre']);
//     $consulta->bindParam(':email', $_POST['correo']);
//     $consulta->bindParam(':message', $_POST['mensaje']);
//     $consulta->execute(); 

//   }

// } catch (PDOException $e) {
//   // echo 'Error al conectarse con la base de datos: ' . $e->getMessage();
// } 


$dsn = 'mysql:host=localhost;dbname=test';
$usuario = 'root';
$contraseña = '';
$opciones = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
    
    if(isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['mensaje'])){
      $dbh = new PDO($dsn, $usuario, $contraseña, $opciones);
      $sql = 'INSERT INTO callme (name, email, message) VALUES (:name, :email, :message)';
      $consulta = $dbh->prepare($sql);
      $consulta->bindParam(':name', $_POST['nombre']);
      $consulta->bindParam(':email', $_POST['correo']);
      $consulta->bindParam(':message', $_POST['mensaje']);
      $consulta->execute(); 
      if ($consulta->rowCount() > 0) {
        // echo "El usuario se ha insertado correctamente.";
        header("Location: http://localhost/cursow/alexiscuaranquintero");
        exit();
      } 

    }

} catch (PDOException $e) {
    // echo 'Error al conectarse con la base de datos: ' . $e->getMessage();
} 




?>
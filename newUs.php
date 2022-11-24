<html>
  <link href="login.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <script>
    function valiteForm(){
        var ok = true;
        var nombre = document.forma01.nombre.value;
        var apellido = document.forma01.apellido.value;
        var mail = document.forma01.mail.value;
        var password = document.forma01.password.value;
        if(!nombre){ok=false}
        if(!mail){ok=false}
        if(!nombre){ok=false}
        if(!password){ok=false}
        if (ok == false){
            alert("Faltan campos por llenar");
        }else{
            document.forma01.method = 'post';
            document.forma01.action = './modelo/registro.php'
            document.forma01.submit();
        }

    }
  </script>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <!-- Icon -->
      <div class="fadeIn first">
        <img src="./public/Logo.png" id="icon" />
      </div>
  
      <!-- Login Form -->
      <form action="" method="post" name="forma01">
        <input type="text" id="name" class="fadeIn second" name="nombre" placeholder="Nombre">
        <input type="text" id="second" class="fadeIn second" name="apellido" placeholder="Apellido">
        <input type="text" id="email" class="fadeIn second" name="mail" placeholder="Correo">
        <input type="password" id="password" class="fadeIn second" name="password" placeholder="Contraseña">
        <input type="text" id="rfc" class="fadeIn third" name="rfc" placeholder="RFC">
        <input type="text" id="empresa" class="fadeIn third" name="empresa" placeholder="Empresa">
        <input type="text" id="tel" class="fadeIn third" name="telefono" placeholder="Telefono">
        <input type="submit" class="fadeIn fourth" value="Registrar" name="submit" onClick="valiteForm(); return false" value="Enviar">
      </form>
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Iniciar Sesion</a>
      </div>
  
    </div>
  </div>
</html>
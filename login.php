<html>
  <link href="login.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <!-- Icon -->
      <div class="fadeIn first">
        <img src="./public/Logo.png" id="icon" />
      </div>
  
      <!-- Login Form -->
      <form action="" method="post">
        <input type="text" id="login" class="fadeIn second" name="user" placeholder="mail" required>
        <input type="text" id="password" class="fadeIn third" name="password" placeholder="password" required>
        <input type="submit" class="fadeIn fourth" value="Log In" name="loginb">
      </form name="submit">
      <?php
        include "controlador/control.php";
      ?>
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Recuperar Contraseña</a>
      </div>
  
    </div>
  </div>
</html>

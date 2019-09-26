<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include "head.php"?>
  <body>
  <?php include "navigation.php"?>
    <div class="container welcome">
      <h1>Bienvenido</h1>
      <form class="" action="login.html" method="get">
        <div class="form-group">
          <label for="email">email</label>
          <input id="email" type="text" name="email" value="" placeholder="email">
        </div>
        <div class="form-group">
          <label for="password">password</label>
          <input id="password" type="password" name="password" value="" placeholder="password">
        </div>
        <div class="form-group right">
          <input class="notfullwidth" id="rememberme" type="checkbox" name="rememberme" value="">
          <label for="rememberme">Recordarme</label>
        </div>
        <p class="mismatch">La combinación ingresada no es válida.</p>
        <button class="submit" type="submit">Ingresar</button>

      </form>
    </div>


  </body>
</html>

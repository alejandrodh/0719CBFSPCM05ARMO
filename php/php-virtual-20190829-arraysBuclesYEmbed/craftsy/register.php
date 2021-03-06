<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include "head.php"?>
  <body>
    <?php include "navigation.php"?>
    <div class="container welcome">
      <h1>Registrarse</h1>
      <form class="" action="register.html" method="get">
        <div class="form-group">
          <label for="first_name">Nombre</label>
          <input id="first_name" type="text" name="first_name" value="" placeholder="nombre">
          <small class="mismatch required">Obligatorio</small>
        </div>
        <div class="form-group">
          <label for="email">email</label>
          <input id="email" type="text" name="email" value="" placeholder="email">
          <small class="mismatch required">Obligatorio</small>
        </div>
        <div class="form-group">
          <label for="password">password</label>
          <input id="password" type="password" name="password" value="" placeholder="password">
          <small class="mismatch required">Obligatorio</small>
        </div>
        <h2>Pais de nacimiento</h2>
        <select class="paises" name="paises" required>
          <option value="" selected>Por favor elija un pais</option>
          <option value="ar">Argentina</option>
          <option value="uru">Uruguay</option>
          <option value="ven">Venezuela</option>
          <option value="ch">Chile</option>
        </select>
        <small class="mismatch required">Obligatorio</small>

        <h2>Género</h2>
        <input id="masc" type="radio" name="gender" value="m">
        <label for="masc">Masculino</label>
        <input id="fem" type="radio" name="gender" value="f">
        <label for="fem">Femenino</label>
        <input id="pnd" type="radio" name="gender" value="x">
        <label for="pnd">Prefiero no decirlo</label>

        <h2>Hobbies</h2>
        <input id="musica" type="checkbox" name="hobbies" value="musica">
        <label for="musica">Música</label>
        <input id="leer" type="checkbox" name="hobbies" value="leer">
        <label for="leer">Leer</label>
        <input id="programar" type="checkbox" name="hobbies" value="programar">
        <label for="programar">Programar</label>

        <h2>Comentarios</h2>
        <textarea name="name" rows="8" cols="40"></textarea>

        <div class="form-group">
          <input class="notfullwidth" id="tyc" type="checkbox" name="tyc" value="tycaceptado">
          <label for="tyc">Por favor acepte los términos y condiciones</label>
        </div>

        <div class="form-group">
          <button class="submit" type="submit">Ingresar</button>
          <button class="submit" type="reset">Cancelar</button>
        </div>

      </form>
    </div>


  </body>
</html>

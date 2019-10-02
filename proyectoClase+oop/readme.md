### Pasos de la migración a Objetos
Corresponde a la clase virtual del día 26/9/19.

0. Creamos la carpeta "/clases".
1. Crear clase DbJson y configurar el Constructor.
2. Migrar las funciones de funciones.php a métodos de la clase.
3. Hacer chequeos intermedios de como deberían funcionar los metodos.
4. Creamos el archivo "init.php" con la información que vamos a necesitar incluir en todos los archivos "php". Por el momento tiene la llamada a la clase dbjson y la creación de la instancia con el archivo ".json".
4. Crear la clase Usuario.
5. Incluir la función nextId(). Atención que es un método de otra clase.
6. Modificar guardarUsuario() para que procese un Objeto de tipo Usuario.
7. Crear getteres en la clase Usuario para resolver el punto anterior.

### Pasos finales de migración a OOP clase 1/10/2019
1. Creamos clases Validator para las funciones de validación (`validarLogin()` y `validarRegistro()`)
2. Creamos la clase Auth para manejar el inicio de sessión y las funciones `usuarioLogueado()` y `loguearUsuario()`.
3. Adaptamos la clase Usuario para que cree un objeto usuario identificando si viene desde el form de registro o desde la base json. Lo hicimos preguntando si existe la posición "id" dentro del array.
4. Reemplazamos en login.php, register.php e index.php todas las llamadas a funciones por llamadas a métodos de clases.
5. Refactorizamos la función `buscarUsuarioPorMail()` para que develva un objeto Usuario en lugar de un array con los datos del usuario.
6. Restringimos el acceso a login.php y a register.php a los usuarios que ya están logueados.
7. Modificamos los atributos "name" de las contraseñas para que todos estén definidos con el valor "password".

### Novedades post clase
1. Agregamos validaciones para subir imágenes.
2. Agregamos controles en el login para que no rompa si el archivo `.json` no existe.
3. Agregamos controles para crear el archivo `.json` en caso de que no exista aún. Se crea con con el primer usuario que se registra.
4. Autologueamos al usuario al terminar la registración.
5. Modificamos `.gitignore` para que no suba al repo el archivo `db.json` ni las imágenes a la carpeta `/avatar`. Todo el sistema debería funcionar correctamente desde el primer registro de un usuario.

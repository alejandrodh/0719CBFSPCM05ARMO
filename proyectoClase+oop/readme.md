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

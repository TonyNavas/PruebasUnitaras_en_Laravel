# Pruebas unitarias en laravel

para dar solucion a este ejercicio se crea un nuevo proyecto de laravel al que llamaremos test-app.
````
laravel new test-app
````

![alt text](Capturas\1.png)

luego de haber creado el proyecto, generamos la migracion de la tabla de base de datos, en este caso Usuarios, yo uso el siguiente comando porque genera la migracion, el modelo y el controlador.

````
Php artisan make:model Usuarios -mcr
````
Luego de que se cree la migracion, hacemos los campos que llevara la tabla.

![alt text](Capturas\2.PNG)

El siguiente paso es crear los metodos en el controlador del modelo de usuarios, para crear el controlador que realizara las operaciones CRUD por medio de API, cree una carpeta API en la carpeta controller y ahi se crea el controlador.
```
php artisan make:controller API/UsuariosAPIController
```

Dentro de la funcion index creamos el codigo para que nos muestre los usuarios.

![alt text](Capturas\3.PNG)

Para poder probar que los usuarios se muestran correctamente primero debemos añadir la ruta en la carpeta routes y el fichero api.php, utilizamos un metodo de tipo get para obtener los usuarios y llamamos la función index.

![alt text](Capturas\4.PNG)

Ahora accedemos a la url, aqui aparece un usuario agregado porque se agrego de forma manual en la base de datos luego de migrar la tabla.

![alt text](Capturas\5.PNG)

Ahora en las demas funciones del controlador de usuarios, creamos el codigo para cuando se ingrese un usuario por medio de la api.

El request de arriba "GuardarUsuarioRequest" se encarga de validar los campos que se van a recibir.

![alt text](Capturas\6.PNG)

Aqui se pueden ver los campos del request:

![alt text](Capturas\7.PNG)

Para la funcion update tambien se debe crear un request igual al anterior y con los mismos campos ya que solo se encarga de validar los campos que se reciben.

![alt text](Capturas\8.PNG)

En la funcion destroy no es necesario crear un request ya que los datos se eliminan mediante el ID.

![alt text](Capturas\9.PNG)

Ahora para poder usar todas estas funciones y realizar las operaciones de CRUD mediante API debemos ir al fichero de rutas api.php y añadir las rutas, el metodo y la funcion.

Cada una de las rutas tiene un metodo diferente, el post se usa para la inserción de datos y este se encuentra en la funcion store, el metodo put se encarga de actualizar o modificar los datos y se encuentra en la funcion update, el metodo get se utiliza para mostrar los datos y esta en la función show y el metoddo delete se utiliza para eliminar los datos y esta en la funcion destroy.

![alt text](Capturas\10.PNG)

Para probar las operaciones de CRUD mediante API se utiliza la aplicacion Postman.

Ponemos la url de la API en postman y probamos el metodo GET

![alt text](Capturas\11.PNG)

Podemos ver que obtinene los datos desde la API:

![alt text](Capturas\12.PNG)

Ahora probamos el metodo POST para insertar un nuevo usuario, para eso debemos escribir codigo con los campos que recibe la base de datos en formato JSON.

Seleccionamos el metodo POST, enviamos los datos y podemos ver que nos devuelve un mensaje de que el usuario se guardo con exito.

![alt text](Capturas\13.PNG)

Podemos ver el nuevo usuario:

![alt text](Capturas\14.PNG)

Ahora para editar un usuario debemos pasar el ID del usuario que queremos modificar.

![alt text](Capturas\15.PNG)

Podemos ver el usuario modificado:

![alt text](Capturas\16.PNG)

Y el ultimo metodo DELETE para eliminar un usuario, igual le pasamos el ID en la url.

![alt text](Capturas\17.PNG)

Podemos ver que ya no esta el usuario:

![alt text](Capturas\18.PNG)
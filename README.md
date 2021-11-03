# Pruebas unitarias en laravel

para dar solucion a este ejercicio se crea un nuevo proyecto de laravel al que llamaremos test-app.
````
laravel new test-app
````

![alt text](https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2F1.PNG?alt=media&token=63b818d5-7277-410c-a9f7-d5bb00295286)

luego de haber creado el proyecto, generamos la migracion de la tabla de base de datos, en este caso Usuarios, yo uso el siguiente comando porque genera la migracion, el modelo y el controlador.

````
Php artisan make:model Usuarios -mcr
````
Luego de que se cree la migracion, hacemos los campos que llevara la tabla.

![alt text](https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2F2.PNG?alt=media&token=bdbf7928-f672-4107-862f-4df107cbf57a)

El siguiente paso es crear los metodos en el controlador del modelo de usuarios, para crear el controlador que realizara las operaciones CRUD por medio de API, cree una carpeta API en la carpeta controller y ahi se crea el controlador.
```
php artisan make:controller API/UsuariosAPIController
```

Dentro de la funcion index creamos el codigo para que nos muestre los usuarios.

![alt text](https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2F3.PNG?alt=media&token=dcc2803b-1bd7-48ac-be90-0dea30458559)

Para poder probar que los usuarios se muestran correctamente primero debemos añadir la ruta en la carpeta routes y el fichero api.php, utilizamos un metodo de tipo get para obtener los usuarios y llamamos la función index.

![alt text](https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2F4.PNG?alt=media&token=3da09a7b-a236-47c0-ab67-25beb137f65d)

Ahora accedemos a la url, aqui aparece un usuario agregado porque se agrego de forma manual en la base de datos luego de migrar la tabla.

![alt text](https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2F5.PNG?alt=media&token=48ca7d1d-2017-43d8-9daa-d934fbf8c532)

Ahora en las demas funciones del controlador de usuarios, creamos el codigo para cuando se ingrese un usuario por medio de la api.

El request de arriba "GuardarUsuarioRequest" se encarga de validar los campos que se van a recibir.

![alt text](https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2F6.PNG?alt=media&token=d7907a7a-f1ac-4123-bbc2-c4d33e72b13a)

Aqui se pueden ver los campos del request:

![alt text](https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2F7.PNG?alt=media&token=019f5194-c809-42c3-953b-f23e62b52fee)

Para la funcion update tambien se debe crear un request igual al anterior y con los mismos campos ya que solo se encarga de validar los campos que se reciben.

![alt text](https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2F8.PNG?alt=media&token=87518ff5-37de-447e-bbb0-9259347969a2)

En la funcion destroy no es necesario crear un request ya que los datos se eliminan mediante el ID.

![alt text](https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2F9.PNG?alt=media&token=cf960f65-9aa5-466b-85b5-a2eb5a44decb)

Ahora para poder usar todas estas funciones y realizar las operaciones de CRUD mediante API debemos ir al fichero de rutas api.php y añadir las rutas, el metodo y la funcion.

Cada una de las rutas tiene un metodo diferente, el post se usa para la inserción de datos y este se encuentra en la funcion store, el metodo put se encarga de actualizar o modificar los datos y se encuentra en la funcion update, el metodo get se utiliza para mostrar los datos y esta en la función show y el metoddo delete se utiliza para eliminar los datos y esta en la funcion destroy.

![alt text](https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2F10.PNG?alt=media&token=2961bf62-1987-413f-b6ac-11827aa40a16)

Para probar las operaciones de CRUD mediante API se utiliza la aplicacion Postman.

Ponemos la url de la API en postman y probamos el metodo GET

![alt text](https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2F11.PNG?alt=media&token=90f1eb78-2b31-495c-8b72-f5eaed7eed0f)

Podemos ver que obtinene los datos desde la API:

![alt text](https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2F12.PNG?alt=media&token=ab25e7ee-1092-479c-967a-cb966122a465)

Ahora probamos el metodo POST para insertar un nuevo usuario, para eso debemos escribir codigo con los campos que recibe la base de datos en formato JSON.

Seleccionamos el metodo POST, enviamos los datos y podemos ver que nos devuelve un mensaje de que el usuario se guardo con exito.

![alt text](https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2F13.PNG?alt=media&token=8d96d9cc-2a7b-4107-955b-ccbb62ee8a97)

Podemos ver el nuevo usuario:

![alt text](https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2F14.PNG?alt=media&token=c38258a8-4df4-4f01-b8bc-2daa9fa76607)

Ahora para editar un usuario debemos pasar el ID del usuario que queremos modificar.

![alt text](https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2F15.PNG?alt=media&token=b0a357c5-9183-424b-a46e-8100dfcad21e)

Podemos ver el usuario modificado:

![alt text](https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2F16.PNG?alt=media&token=88fd3107-7039-4709-bff9-e957a031219f)

Y el ultimo metodo DELETE para eliminar un usuario, igual le pasamos el ID en la url.

![alt text](https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2F17.PNG?alt=media&token=b2969df4-6958-47b4-aa3c-430aa58bf220)

Podemos ver que ya no esta el usuario:

![alt text](https://firebasestorage.googleapis.com/v0/b/restaurant-687a2.appspot.com/o/productos%2F18.PNG?alt=media&token=3753150c-000d-46ab-9657-9be247c0baa6)
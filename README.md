# haulmer
PracticeTest


ARCHIVO DE EVIDENCIA:

INICIO 
JUEVES 30 DE DICIEMBRE 2021 14:00 PM

TERMINO 
VIERNES 31 DE DICIEMBRE 2021 17:00 PM

PRUEBA:

desarrollo de un servicio, que debe exponer una API REST a través de
HTTP utilizando JSON para el traspaso de mensajes.

![image](https://user-images.githubusercontent.com/51177606/147837503-67b49646-6e1d-43fa-944a-4837622a41a4.png)


**REPASO**

Desgloce de problema:


 EL servicio debe encargarse de gestionar el perfil del usuario.

gestionar  ------->editar,borrar,agregar.

autenticación y autorización --> LOG IN

paso 1:
          -------->/login para ingresa de usuarios solicitando Correo y contraseña<-------

paso 2:
    -----> /me para funciones de gestionar<-----
DEBE tener seguridad, solo es accesible por usuario que este logeado. se debe utilizar json web tokens
    
paso 3:

  --------> /new registrar un usuario con nombre,correo y contraseña<------
    
 
  persistencia de datos solicitada en mockapi.io.

Dificultades:

estudio de plataforma y documentacion de laravel:
se logra primer  despligue de primer prototipo para conocer entorno de trabajo.

conceptos importantes:
carpeta public -> carpeta que puede ver  el usuario
carpeta routes/web.php

se declaran todas las vistas.
 metodos :
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);


capeta /views vistas de usuario,login,contenido etc.

/http/controladores
CONTROLADORES DE VISTA.

se utilizó XAMPP para realizar el desplige:

archivo xampp/htdocs/haulmer
![image](https://user-images.githubusercontent.com/51177606/147837851-38167334-6d8c-4b94-ae4f-7093be7c0e51.png)

**como comentario, framework modelo vista controlador. con estructura un poco más compleja que codeignater 3. 




archivo xampp/htdocs/haulmer2


Primer prototipo de basd de datos:
![image](https://user-images.githubusercontent.com/51177606/147838212-101a320c-4cb7-4f70-8050-ce392d9290c0.png)


**se trabajo  base de datos en entorno de php, pero luego vi que  en laravel las bases de datos se manejan desde el editor de texto. **
conceptos importantes conocidos:

Migrations, modelo/User,seeders
carpeta middleware.

**se intenta usar tailwild y se hace intento de usar compose require laravel/ui ya que contiene plantilla pre-hecha para logear y registrar usuario.

 para insertar estilos 
https://tailwindcss.com/


haulmer2 interior
![image](https://user-images.githubusercontent.com/51177606/147838398-9c54a379-c940-4a3b-bbff-e5742e45a003.png)






archivo xampp/htdocs/haulmer3



**se trabajo en migraciones, base de datos, enlaces de claves foraneas y modelos aun no hay despliegue
haulmer3 interior:

![image](https://user-images.githubusercontent.com/51177606/147838465-9bba46b8-a008-4286-96e1-cf06e5a9d78f.png)



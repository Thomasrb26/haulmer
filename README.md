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
se logra primer  despligue de primer prototipo para conocer el entorno de trabajo.

se utilizó XAMPP para realizar el desplige:

archivo xampp/htdocs/haulmer
![image](https://user-images.githubusercontent.com/51177606/147837851-38167334-6d8c-4b94-ae4f-7093be7c0e51.png)


**como comentario, framework modelo vista controlador. con estructura un poco más compleja que codeignater 3. 




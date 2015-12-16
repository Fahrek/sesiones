# Sistema Básico de Gestión de Sesiones con PHP

El código de este sencillo proyecto nos permite ver de manera muy sencilla cómo gestionar sesiones con PHP.

El proyecto está estructurado fundamentalmente en tres páginas:

* **Login**: Página que genera el formulario donde el usuario accederá al área privada introduciendo los datos.
* **Welcome**: Página del área privada que solo será accesible introduciendo usuario y contraseña correctos de login.
* **Error**: Página a la que nos redigirá el sistema si se intenta acceder al área privada sin estar logueados.

## Funcionamiento

Podemos probar el funcionamiento del sitio cargando la página de login e introduciendo los datos de prueba:

* Usuario: homer
* Password: simpson

Seguidamente, si los datos han sido introducidos correctamente, el sistema nos dirigirá al área privada. Nos informará de ello y nos proveerá un enlace para cerrar la sesión.

Si, los datos introducidos no son correctos, el sistema nos informará de este hecho.

## Control de Sesión

Si no tenemos creada una sesión e intentamos acceder a la zona privada, el sistema nos redirigirá a la página de login. Es decir, si sin haber iniciado sesión intentamos acceder a la página **welcome** nos mandará a **login**.

De la misma forma, si con la sesión iniciada intentamos acceder a las páginas de **login** o **error**, el sistema nos redirigirá a **welcome**.
# fuerza_aerea

"Fuerza Aérea" es una repositorio creado para dar respuesta al Trabajo Práctico Especial de la materia Web 2 de la carrera TUDAI dicatada en la facultada de Exactas de la UNICEN.
Su desarrollar,Guillermo Castiglioni (GuilleAlbCasti), propone diseñar una base de datos que pueda almacenar un conjunto de elementos clasificados en categorías y consecuentemente con un subconjunto de detalles a fin de que sea expuesta y administrada vía web.
La temática elegida crea un marco "ficticio" en donde se logre aplicar los distintos requerimientos exigidos para alcanzar la aprobación en éste. En tal sentido, hemos buscado catalogar la diversidad de aeronaves que pueden llegar a conformar una fuerza aérea generando un entorno creativo para la creación de diversos objetos de elementos interrelacionados para poner en práctica los contenidos aprendidos en la materia.

- Despliegue del Sitio en un Servidor con Apache y MySQL

  Para desplegar este proyecto en un servidor con Apache y MySQL, sigue estos pasos:

  - Requisitos Previos:

    Asegúrate de tener un servidor que tenga instalado Apache y MySQL. Puedes usar un servicio de alojamiento web o configurar tu propio servidor utilizando herramientas como XAMPP, LAMP o MAMP.
    Verifica que PHP esté instalado y que sea compatible con la versión utilizada en el proyecto.
    Configurar Apache:

    Copia los archivos del proyecto en el directorio raíz de tu servidor Apache. En sistemas Linux, este directorio suele ser /var/www/html/, mientras que en XAMPP se encuentra en C:\xampp\htdocs\.
    Si es necesario, ajusta la configuración del archivo .htaccess para manejar la reescritura de URL y asegurar que el servidor funcione correctamente. Este archivo se encuentra en la raíz del proyecto.
    Configurar la Base de Datos:

    Accede a phpMyAdmin o a la línea de comandos de MySQL en tu servidor.
    Crea una nueva base de datos para tu proyecto. Puedes nombrarla según tu preferencia, como mi_proyecto.
    Ejecuta los scripts SQL necesarios para crear las tablas requeridas (como categoria, base, avion, y usuario) en la base de datos recién creada. Asegúrate de que los scripts estén correctamente configurados según la estructura de tu base de datos.
    Configurar el Archivo de Conexión:

    Modifica el archivo de configuración (por ejemplo, config.php) para establecer la conexión a la base de datos. Asegúrate de que las credenciales (nombre de usuario, contraseña y nombre de la base de datos) sean correctas y se correspondan con la configuración de tu servidor MySQL.
    Probar la Aplicación:

    Una vez que todo esté configurado, accede a tu sitio web a través del navegador utilizando la dirección de tu servidor (por ejemplo, http://tu_dominio.com o http://localhost/mi_proyecto).
    Verifica que todas las funcionalidades estén operativas y que no haya errores en la conexión a la base de datos.
  
  - Solución de Problemas:

    Si encuentras problemas al desplegar el sitio, revisa los archivos de registro de Apache (como error.log) para obtener información detallada sobre los errores.
    Asegúrate de que los permisos de los archivos y carpetas sean correctos, permitiendo que Apache acceda a los recursos necesarios.
    Siguiendo estos pasos, deberías poder desplegar tu sitio correctamente en un servidor con Apache y MySQL. Si necesitas más información o asistencia, consulta la documentación oficial de Apache y MySQL o contacta al soporte técnico de tu proveedor de alojamiento.

- Información necesaria para pruebas

  - Ingreso como administrador:

    Usuario: "webadmin"
    Contraseña: "admin"











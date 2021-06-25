## Proyecto: TuPan


Integrantes:
Lian Uriel Maldonado Galan 219296172

Programación para internet 2021A D12  
Profesor: SAMUEL MERCADO GARIBAY  

30/06/2021

## Descripción:

Este proyecto tiene como finalidad crear un sitio web para una panadería y por el mostrar los productos que se venden algunos de manera estática y otros de manera dinámica.
Se simula que se quiere ir poco a poco implementar el negocio online para la venta de producto, pero por el momento basta con implementar ciertas funcionalidades en el sitio web para empezar a innovar en sus servicios.
Se tiene pensado evolucionar el proyecto o sitio a futuro para implementar cada vez más y mejores módulos dentro de este, como podría ser venta en línea, registro de información de ventas, ampliar los modulos de productos, generar reportes de ventas, generar PDF para cliente, etc.
Como por el momento solo se necesitan ciertas funcionalidades y no se cuenta con tanto presupuesto para cubrir todas las que se tienen planeadas a futuro, se eligieron las más básicas para empezar.


Las principales características a implementar por el momento son:  

- **Sitio Web con informacion principal acerca de la panadería.**  
- **Mostrar los productos de la base de datos.**  
- **Que los usuarios se puedan registrar y loguear.**  
- **Panel de administración (Para los productos por el momento).**
- **Autenticación de usuario y tipos de usuario.**
- **Registro de nuevos productos.**
- **Mostrar informacion del producto.**
- **Modificar la informacion del producto.**
- **Eliminar productos.**


## Funcionalidades del proyecto implementadas: 


- Almacenamiento de información en base de datos: 
  - Migraciones
  - Seeders
  - Factories
  - TimeStamps
- Autenticación y autorización:
    - LogIn/LogOut
    - Sessions
    - MiddleWare
- Validación:
    - Del lado de servidor
    - Por formulario
- UI
    - Diseño responsivo (Bootstrap)
    - Reutilizacion de elementos comunes (layouts)
    - Mostrar logIn/logOut
    - Mostrar errores de Validación
    - Mostrar mensajes de éxito en los procesos
    - Navegación (Menú)
- ORM
    - Modelos
    - Se usan los modelos para las consultas en bases de datos
- MVC
    - Se implementó un CRUD para los productos
- Relaciones
    - Uno a muchos
- Consulta, cración y eliminación de información
    - SoftDeletes
    - EagerLoading (para las relaciones)
    - Accessors y Mutators al consultar o guardar
- API
    - API que devuelve la información de los productos en formato JSON
- Archivos
    - Carga de archivos
    - Eliminación de archivos
    - Mostrar archivos
- Correo electrónico
    - Correo de verificación

## Cosas a tomar en cuenta:

- Solo los administradores pueden acceder al dashboard de administración
- Para iniciar sesión como administrador: Correo: c@live.com Contraseña: password1234
- Los correos de verificación se mandan a mailtrap (no se usa un servicio real como gmail por el momento)
- Se tienen que correr las migraciones para tener productos en la base de datos, asi como los usuarios.


---


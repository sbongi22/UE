Universidad de Edifier - Sistema de Gestión Académica

Este proyecto es una plataforma web integral diseñada para la gestión de inscripciones y administración de datos estudiantiles. Fue desarrollado utilizando el patrón MVC (Modelo-Vista-Controlador) en PHP, garantizando una arquitectura limpia, escalable y profesional.

🚀 Características Principales
Gestión de Inscripciones: Formulario dinámico para que los estudiantes se postulen a diversas carreras.

Panel Administrativo: Interfaz protegida para la visualización, edición y eliminación de registros (CRUD completo).

Validación Asíncrona: Uso de AJAX y jQuery para verificar la existencia de correos electrónicos en tiempo real sin recargar la página.

Seguridad: Implementación de sentencias preparadas y controladores para mitigar riesgos de inyección SQL.

Diseño Institucional: Interfaz estructurada mediante una plantilla maestra (plantilla.php) que unifica la experiencia de usuario.

🛠️ Tecnologías Utilizadas
Backend: PHP (Arquitectura MVC).

Frontend: HTML5, CSS3, JavaScript y jQuery.

Base de Datos: MySQL (utilizando PDO/MySQLi).

Herramientas: AJAX para interactividad fluida.

📂 Estructura del Proyecto
El proyecto se organiza de la siguiente manera para separar la lógica de negocio de la visualización:

Bash
├── ajax/               # Archivos para el procesamiento de peticiones AJAX
├── controladores/      # Lógica de negocio (ControladorFormularios)
├── modelos/            # Interacción con la base de datos
├── paginas/            # Vistas individuales (home, admin, registro, etc.)
├── vistas/             # Carpeta principal de archivos front-end
│   ├── css/            # Estilos del sistema
│   ├── js/             # Lógica de cliente (script.js)
│   └── plantilla.php   # Estructura maestra del sitio
└── index.php           # Punto de entrada único del sistema
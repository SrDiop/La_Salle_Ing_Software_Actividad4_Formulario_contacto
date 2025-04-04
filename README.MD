# INGENIERIA DE SOFTWARE - ACTIVIDAD 5 -  FORMULARIO DE CONTACTO

## 📏 Descripción
Este proyecto es un formulario web que permite a los usuarios enviar información (nombre, correo, teléfono, asunto, mensaje) y almacena los datos en una base de datos MySQL. Además, cuenta con una página para visualizar todos los registros enviados.

## Tecnologías Utilizadas
- HTML5
- CSS3
- PHP
- MySQL
- XAMPP (Servidor local)

## Estructura
- **/FORMULARIO**
    - index.html **Formulario principal**
    - styles.css **Estilos personalizados**
    - procesar_formulario.php **Lógica para procesar y guardar datos**
    - ver_datos.php **Página para visualizar los registros**
    - mostrar_datos.php **Opcional:archivo auxiliar de visualización** 
    - README.md **Documentacipon del proyecto**

## 📌 Requisitos Previos
- Tener instalado [XAMPP](https://www.apachefriends.org/index.html)
- Apache y MySQL deben estar activados
- PHP habilitado (XAMPP ya lo incluye)
- Navegador web actualizado (Chrome, Firefox, Edge)

## 🚀 Configuración Inicial
1. Clona este repositorio o copia los archivos en la ruta:
2. Abre **phpMyAdmin** y crea una base de datos llamada:
```sql
formularios_db
CREATE TABLE contactos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  correo VARCHAR(100) NOT NULL,
  telefono VARCHAR(20),
  asunto VARCHAR(100),
  mensaje TEXT,
  fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
## 🚀 Cómo Usar
1. Abre tu navegador e ingresa a: http://localhost/formulario/index.html
2. **Rellena** el formulario y haz clic en **Enviar**
![Llenado de Formulario](Resources/Formulario.JPG)
3. Despues de enviado confirara que lso datos fueron guardados
![Datos Guardados](Resources/Envio_Formulario.JPG)
5. Seguido haz clic en **Volver** para regresar al formulario
![Menú principal](Resources/Redirecion_Formulario.JPG)
6. Por ultimo haz clic en **Ver datos registrados**
7. Esto te redirecionara a http://localhost/formulario/ver_datos.php (Aqui podras visualizar la informacion almacenada previamente)
![Menú principal](Resources/Ver_Datos.JPG)

## 👤 Participación y Trabajo Individual

Este proyecto fue desarrollado de manera **individual** por **Diego Rojas González**, cumpliendo con todos los objetivos establecidos en la actividad.

### 📌 Detalles del trabajo realizado:

- Se creó y configuró un repositorio en GitHub.
- Se configuró Git en el entorno local con nombre de usuario y correo electrónico.
- Se inicializó un repositorio local y se enlazó correctamente con GitHub.
- Se subió el código fuente de la actividad 5 (Formulario de contacto U La Salle).
- Se realizaron múltiples cambios al código y se documentaron con commits descriptivos.
- Se realizaron pruebas y validaciones para asegurar el correcto funcionamiento de la aplicación.
- Se mantuvo una estructura organizada y profesional, tanto en el código como en el diseño visual.

> ⚠️ **Nota:** Aunque la actividad sugiere trabajo en equipo, en este caso el proyecto fue desarrollado de forma individual debido a que no fue posible conformar un equipo de trabajo. GitHub muestra un único colaborador porque **todo el desarrollo, configuración y documentación fue realizado por una sola persona :D.**

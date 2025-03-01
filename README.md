# API RESTful con CodeIgniter 4

## 📌 Descripción
Este proyecto es una API RESTful construida con **CodeIgniter 4** y **MySQL**, que permite realizar operaciones CRUD sobre una tabla de Productos.

## 🚀 Instalación y Configuración
### **1️⃣ Clonar el repositorio**
```bash
 git clone https://github.com/cristianzambrano/apirestful_biu
 cd apirestful_biu
```

### **2️⃣ Instalar CodeIgniter 4**
```bash
composer install
```

### **3️⃣ Configurar la base de datos**
Editar el archivo `.env` y configurar los datos de la base de datos:
```ini
database.default.hostname = localhost
database.default.database = nombre_de_tu_base_de_datos
database.default.username = tu_usuario
database.default.password = tu_contraseña
database.default.DBDriver = MySQLi
```

### **4️⃣ Ejecutar las migraciones**
```bash
php spark migrate
```

### **5️⃣ Insertar datos de prueba (Seeder)**
```bash
php spark db:seed ProductoSeeder
```

### **6️⃣ Iniciar el servidor**
```bash
php spark serve
```

La API estará disponible en:
📍 `http://localhost:8080/`

---

## 📌 Endpoints Disponibles

### **🔹 Obtener todos los productos**
📌 `GET /productos`

**Respuesta:**
```json
[
    {
        "id": 1,
        "nombre": "Producto 1",
        "categoria": "Categoría A",
        "valor": 10.50
    }
]
```

---
### **🔹 Obtener un producto por ID**
📌 `GET /productos/{id}`

**Ejemplo:**
```bash
curl -X GET http://localhost:8080/productos/4
```

**Respuesta:**
```json
{
    "id": 4,
    "nombre": "Producto 4",
    "categoria": "Categoría B",
    "valor": 20
}
```

---
### **🔹 Crear un nuevo producto**
📌 `POST /productos`

**Ejemplo:**
```bash
curl -X POST http://localhost:8080/productos \
     -H "Content-Type: application/json" \
     -d '{"nombre": "Nuevo Producto", "categoria": "Categoría C", "valor": 30}'
```

**Respuesta:**
```json
{
    "id": 21,
    "nombre": "Nuevo Producto",
    "categoria": "Categoría C",
    "valor": 30
}
```

---
### **🔹 Actualizar un producto**
📌 `PUT /productos/{id}`

**Ejemplo:**
```bash
curl -X PUT http://localhost:8080/productos/4 \
     -H "Content-Type: application/json" \
     -d '{"nombre": "Producto Actualizado", "categoria": "Categoría D", "valor": 50}'
```

**Respuesta:**
```json
{
    "id": 4,
    "nombre": "Producto Actualizado",
    "categoria": "Categoría D",
    "valor": 50
}
```

---
### **🔹 Eliminar un producto**
📌 `DELETE /productos/{id}`

**Ejemplo:**
```bash
curl -X DELETE http://localhost:8080/productos/4
```

**Respuesta:**
```json
{
    "message": "Producto eliminado exitosamente"
}
```

---

## 📌 Tecnologías Utilizadas
✅ **CodeIgniter 4** - Framework PHP
✅ **MySQL** - Base de datos relacional
✅ **Faker** - Generación de datos de prueba
✅ **Postman / cURL** - Para pruebas de API

## 📌 Autor
✍️ Desarrollado por [Tu Nombre]

🚀 ¡Listo para usar en tus proyectos! Si tienes dudas, contáctame. 😃
# Tienda Mascotas

Sistema de gestión de mascotas y tienda online desarrollado con Laravel para la cátedra de **Programación III** de la UTN.

## Stack Tecnológico

- **Framework:** Laravel 13.x (v13.17.0)
- **PHP:** ^8.3
- **Base de datos:** SQLite (por defecto) / MySQL
- **Frontend:** CSS personalizado, Font Awesome 6.5
- **Paginación:** Tailwind CSS (vista personalizada)
- **API:** RESTful con rutas tipo `apiResource`

## Funcionalidades

### Módulo Mascotas (Web)
- Listado paginado de mascotas (15 por página) con ordenamiento por ID
- Buscador por nombre con filtro `LIKE`
- Formulario de registro de nuevas mascotas (nombre, especie, edad)
- Diseño responsive con header, tabla y paginación estilizada

### Módulo Tienda (API REST)
- CRUD completo de **Artículos** (con relación a categorías)
- CRUD completo de **Categorías**
- CRUD completo de **Clientes** (con email, teléfono y DNI)

## Estructura del Proyecto

```
├── app/
│   ├── Http/Controllers/
│   │   ├── Api/
│   │   │   ├── ArticuloController.php
│   │   │   ├── CategoriaController.php
│   │   │   └── ClienteController.php
│   │   └── PetController.php
│   └── Models/
│       ├── Articulo.php
│       ├── Categoria.php
│       ├── Cliente.php
│       └── Pet.php
├── database/
│   ├── factories/          # PetFactory, ArticuloFactory, etc.
│   ├── migrations/         # Migraciones de todas las tablas
│   └── seeders/            # DatabaseSeeder con datos de prueba
├── resources/views/
│   ├── layouts/app.blade.php
│   ├── pets/
│   │   ├── index.blade.php
│   │   └── create.blade.php
│   └── vendor/pagination/  # Vista personalizada de paginación
├── routes/
│   ├── web.php             # Rutas del módulo Mascotas
│   └── api.php             # Rutas del módulo Tienda (API)
└── public/css/style.css    # Estilos de la aplicación
```

## Instalación y Uso Local

```bash
# 1. Clonar el repositorio
git clone https://github.com/UTN-Estudio-programacion/tienda-mascotas.git
cd tienda-mascotas

# 2. Instalar dependencias
composer install

# 3. Configurar el entorno
cp .env.example .env
# Editar .env si se desea cambiar la base de datos (por defecto SQLite)

# 4. Generar clave de aplicación
php artisan key:generate

# 5. Ejecutar migraciones y seeders (carga datos de prueba)
php artisan migrate --seed

# 6. Iniciar servidor de desarrollo
php artisan serve
```

Luego abrir `http://localhost:8000` en el navegador.

## Endpoints Disponibles

### Web (navegador)

| Ruta | Método | Descripción |
|------|--------|-------------|
| `/` | GET | Redirige a `/mascotas` |
| `/mascotas` | GET | Listado paginado de mascotas (acepta `?search=`) |
| `/mascotas/crear` | GET | Formulario de registro |
| `/mascotas` | POST | Guarda una nueva mascota |

### API REST

| Endpoint | Métodos | Descripción |
|----------|---------|-------------|
| `/api/articulos` | GET, POST | Listar / Crear artículos |
| `/api/articulos/{id}` | GET, PUT, DELETE | Ver / Actualizar / Eliminar artículo |
| `/api/categorias` | GET, POST | Listar / Crear categorías |
| `/api/categorias/{id}` | GET, PUT, DELETE | Ver / Actualizar / Eliminar categoría |
| `/api/clientes` | GET, POST | Listar / Crear clientes |
| `/api/clientes/{id}` | GET, PUT, DELETE | Ver / Actualizar / Eliminar cliente |

Ejemplo de uso con `curl`:

```bash
curl http://localhost:8000/api/articulos
curl -X POST http://localhost:8000/api/clientes \
  -H "Content-Type: application/json" \
  -d '{"nombre":"Juan Pérez","email":"juan@example.com","telefono":"123456789"}'
```

## Datos de Prueba

Al ejecutar `php artisan migrate --seed` se cargan automáticamente:

- **500 mascotas** con nombres y especies aleatorias (Perro, Gato, Loro, Hámster, Conejo)
- **10 categorías** de artículos
- **30 artículos** asociados a categorías
- **20 clientes** con datos de contacto

## Créditos

Proyecto desarrollado por [Mauricio-bb](https://github.com/Mauricio-bb) para la cátedra de Programación III - UTN.

# 🚀 Guía Rápida - Ejecutar el Proyecto

## ✅ Paso 1: Instalar Dependencias

Abre una terminal en el directorio del proyecto y ejecuta:

```bash
# Instalar dependencias PHP
composer install

# Instalar dependencias JavaScript
npm install
```

## ⚙️ Paso 2: Configurar .env

```bash
# Copiar el archivo de ejemplo
copy .env.example .env

# Generar la clave de aplicación
php artisan key:generate
```

Edita el archivo `.env` y configura la base de datos a SQLite (para desarrollo rápido):

```env
DB_CONNECTION=sqlite
# Comenta o elimina estas líneas:
# DB_HOST=127.0.0.1
# DB_PORT=5432
# DB_DATABASE=project
```

Crea el archivo de base de datos:

```bash
type nul > database\database.sqlite
```

## 🎯 Paso 3: Ejecutar el Proyecto

Necesitas **2 terminales** abiertas en el directorio del proyecto:

### Terminal 1 - Servidor Laravel
```bash
php artisan serve
```

### Terminal 2 - Vite (Hot Reload)
```bash
npm run dev
```

## 🎨 Paso 4: Ver tu Vista

Abre tu navegador en:

**http://localhost:8000/evento-demo**

Esta es la ruta temporal para ver tu vista del evento sin necesidad de autenticación.

## 📁 Archivos Creados

- **Vista:** `resources/views/evento-detalle.blade.php`
- **Ruta:** Agregada en `routes/web.php`

## 🔧 Para Modificar el Diseño

1. Edita el archivo: `resources/views/evento-detalle.blade.php`
2. Guarda los cambios
3. El navegador se recargará automáticamente (gracias a Vite)

## 📚 Recursos Útiles

- **Tailwind CSS:** https://tailwindcss.com/docs
- **Laravel Blade:** https://laravel.com/docs/blade
- **Alpine.js:** https://alpinejs.dev/ (ya está incluido)

## ⚡ Tips

- Mantén `npm run dev` corriendo siempre para ver cambios en tiempo real
- Usa las clases de Tailwind para estilos
- El layout base está en `resources/views/layouts/app.blade.php`

## 🐛 Solución de Problemas

**Si PHP no se reconoce:**
- Verifica que PHP esté instalado: `php --version`
- Agrega PHP al PATH de Windows

**Si Composer no se reconoce:**
- Descarga e instala desde: https://getcomposer.org/download/

**Si npm no se reconoce:**
- Descarga e instala Node.js desde: https://nodejs.org/

**Si tienes errores de permisos:**
- Ejecuta las terminales como Administrador

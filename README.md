# 🎼 El Bardo de Euterpe

**El Bardo de Euterpe** es una tienda musical web desarrollada como proyecto práctico para dominar Laravel y Vue.js. Inspirada por la musa griega de la música, esta aplicación busca unir funcionalidad moderna con una experiencia estética que celebre el arte sonoro.

---

## 🚀 Objetivos del Proyecto

- Practicar arquitectura moderna de aplicaciones web
- Aprender y aplicar Laravel (backend, API, middleware)
- Dominar Vue 3 con Pinia y Vue Router
- Implementar segmentación por roles (comprador / administrador)
- Diseñar paneles segmentados para compradores y administradores, implementando flujos personalizados y control de acceso por rol para optimizar la experiencia y seguridad de cada tipo de usuario.
- Diseñar una experiencia de usuario inspirada en tiendas musicales reales

---

## 🧪 Stack Tecnológico

| Tecnología   | Rol en el Proyecto                                  |
|--------------|------------------------------------------------------|
| Laravel      | Backend, API REST, autenticación con Sanctum         |
| Vue.js       | Frontend SPA, enrutamiento, estado global            |
| MySQL        | Base de datos relacional                             |
| Supabase     | Almacenamiento de imágenes de productos              |
| Pinia        | Gestión del estado del frontend                      |
| Vue Router   | Enrutamiento dinámico de vistas                      |
| Tailwind CSS | Estilización moderna y responsiva                    |
| Axios        | Consumo de API desde el frontend                     |

---

## 📦 Funcionalidades

### 🛍️ Comprador
- Registro/login con email
- Vista de catálogo por categoría
- Buscador y filtros (precio, marca)
- Carrito y simulación de checkout
- Historial de compras y wishlist
- Sistema de recomendaciones básicas
- Contacto con servicio al cliente

### 🧑‍💼 Administrador
- CRUD de productos y categorías
- Administración de imágenes
- Configuración de banners promocionales
- Creación de descuentos y sección “Outlet”
- Envío de emails a compradores
- Panel de métricas de ventas

---

## 🧱 Instalación Local

### 🔧 Backend (Laravel)

```bash
git clone https://github.com/tu_usuario/el-bardo-euterpe.git
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve

### 🎨 Frontend (Vue)
cd frontend
npm install
npm run dev

📂 Estructura del Proyecto
el-bardo-euterpe/
├── backend/             # Laravel API
│   ├── app/
│   ├── routes/
│   └── database/
├── frontend/            # Vue 3 SPA
│   ├── src/
│   │   ├── views/
│   │   ├── components/
│   │   └── stores/
└── README.md

✨ Identidad Visual
- Logo: ![Logo El Bardo de Euterpe](https://qqxcerjymfulpjkpcpbd.supabase.co/storage/v1/object/public/business-logos/1/logo.png)
- Eslogan: “Donde cada instrumento guarda una historia, y cada nota encuentra su destino.”

🛤️ Roadmap
Consulta el tablero [Trello](https://trello.com/b/czDEP12d/el-bardo-de-euterpe) para seguir
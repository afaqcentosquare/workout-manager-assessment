# 🧩 Workout Manager Assessment

A Laravel-based web application.

---

## 🚀 Getting Started

You can run the project in **three ways**:

- [✅️ Without Docker](#️-without-docker)
- [🐳 With Docker](#-with-docker)
- [⛵ With Laravel Sail](#-with-laravel-sail)

---

## ✅️ Without Docker

### 1. Clone the repository
```bash
git clone https://github.com/afaqcentosquare/workout-manager-assessment.git
cd your-repo
```

### 2. Install dependencies
```bash
composer install
```

### 3. Copy `.env` file
```bash
cp .env.example .env
```

### 4. Generate application key
```bash
php artisan key:generate
```

### 5. Run database migrations
```bash
php artisan migrate:fresh --seed
```

### 6. Start the development server
```bash
php artisan serve
```

> App will be available at: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 🐳 With Docker

### 1. Start the containers
```bash
docker compose up -d
```

### 2. Generate application key
```bash
docker compose exec app php artisan key:generate
```

### 3. Run migrations
```bash
docker compose exec app php artisan migrate:fresh --seed
```

> App will be available at: [http://localhost](http://localhost)

---

## ⛵ With Laravel Sail

> Make sure Docker is installed and running on your system.

### 1. Clone the repository
```bash
git clone https://github.com/afaqcentosquare/workout-manager-assessment.git
cd your-repo
```

### 2. Install dependencies
```bash
composer install
```

### 3. Start Sail
```bash
./vendor/bin/sail up -d
```

### 4. Generate application key
```bash
./vendor/bin/sail artisan key:generate
```

### 5. Run migrations
```bash
./vendor/bin/sail artisan migrate:fresh --seed
```

> App will be available at: [http://localhost](http://localhost)

---

## ⚙️ Project Structure

```
app/            # Application logic (Models, Controllers, etc.)
routes/         # Route definitions
database/       # Migrations and seeders
resources/      # Views and frontend assets
```

---

## ✅ Requirements

- PHP 8.3+
- Composer
- MySQL (or Docker with DB)
- Docker (optional for Docker/Sail setup)

## 🔒 Environment Setup

Make sure your `.env` file includes the correct configuration for:

- Database

---

#

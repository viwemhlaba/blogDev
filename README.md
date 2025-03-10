# BlogDev - Laravel Blog Platform

BlogDev is a Laravel-based blog platform that allows users to create, manage, and publish blog posts easily.

## 🚀 Features

- User authentication (login, register, password reset)
- CRUD functionality for blog posts
- Livewire components for dynamic UI updates
- Database migrations and seeders
- Tailwind CSS for styling

## 🛠 Installation

### 1. Clone the Repository

```bash
git clone https://github.com/viwemhlaba/blogDev.git
cd blogDev
```

### 2. Install Dependencies

```bash
composer install
npm install && npm run dev
```

### 3. Set Up Environment

Copy `.env.example` to `.env` and update database credentials:

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Run Migrations

```bash
php artisan migrate --seed
```

### 5. Start the Development Server

```bash
php artisan serve
```

## 📄 Usage

1. Register or log in.
2. Create and manage blog posts.
3. Edit your profile settings.

## 📌 Technologies Used

- Laravel
- Livewire
- Tailwind CSS
- MySQL / SQLite
- Vite

## 📜 License

This project is open-source and available under the MIT License.

---

💡 **Contributions are welcome!** If you find a bug or want to add features, feel free to fork the repo and submit a pull request.

---
Made with ❤️ by [viwemhlaba](https://github.com/viwemhlaba)

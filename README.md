## 🚀 Laravel Project Setup Guide

Welcome! Follow these steps to get your Laravel project up and running:

### 🛠️ Installation Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/username/repo-name.git
   cd repo-name
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Storage Link**
   ```bash
   php artisan storage:link
   ```

5. **Database Configuration**
   - Edit your `.env` file with your database credentials.
   - Run migrations:
     ```bash
     php artisan migrate
     ```

6. **Start the Development Server**
   ```bash
   php artisan serve
   ```

---

Happy coding! 🎉

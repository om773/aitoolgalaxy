# Installation Guide

## Requirements
- PHP 8.0+ with PDO MySQL
- MySQL 5.7+ / MariaDB 10.3+
- Apache with mod_rewrite (or Nginx with equivalent rewrite)

## Steps

1. **Copy files**
   - XAMPP: copy `aihub/` to `xampp/htdocs/aihub`
   - LAMP: copy to `/var/www/html/aihub`

2. **Create database**
   ```sql
   CREATE DATABASE aihub CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   ```

3. **Import schema + seed**
   ```bash
   mysql -u root aihub < database/schema.sql
   mysql -u root aihub < database/seed.sql
   php database/create_admin.php
   ```

4. **(Optional) Generate ~1000 dummy tools**
   ```bash
   php database/generate_tools.php > database/tools_1000.sql
   mysql -u root aihub < database/tools_1000.sql
   ```

5. **Configure** — edit `config/config.php`:
   ```php
   define('BASE_URL', 'http://localhost/aihub/public');
   define('DB_USER', 'root');
   define('DB_PASS', '');
   ```

6. **Open**
   - Site: http://localhost/aihub/public/
   - Admin: http://localhost/aihub/public/admin/login → `admin@aihub.io` / `Admin@123`

## Apache pretty URLs
Enable mod_rewrite (`sudo a2enmod rewrite` or in `httpd.conf` uncomment LoadModule).
AllowOverride All must be set on the project directory.

## Nginx example
```
location / {
  try_files $uri $uri/ /index.php?$query_string;
}
```

## Production hardening checklist
- Set `display_errors = 0` in `config/config.php` and `php.ini`
- Use HTTPS, set `session.cookie_secure = 1`
- Rotate admin password
- Configure SMTP for verification/reset emails
- Add server-level caching (OPcache, Cloudflare)

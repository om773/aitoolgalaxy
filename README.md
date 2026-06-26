# AIHub — Ultimate AI Tools Directory

Production-ready PHP 8 + MySQL AI Tools Directory (Product Hunt / Futurepedia / Toolify style).

## Stack
- PHP 8+ (PDO, MVC)
- MySQL 5.7+/8+
- Bootstrap 5, Font Awesome, AOS, Swiper.js (CDN)
- AJAX search & filters
- Glassmorphism + gradient UI, dark/light mode

## Features
- 1000+ AI tools support (seeder generates ~1000 dummy tools)
- Categories, tags, pricing filters
- Tool detail pages: features, pros/cons, screenshots, ratings, views, clicks
- AJAX instant search & filtering
- User auth (signup, login, forgot password, email verification stub)
- User dashboard, bookmarks, favorites, recently viewed
- Admin panel: users, tools, categories, tags, blogs, testimonials, ads, contact, newsletter
- Blog with SEO friendly URLs, comments, related posts
- SEO: meta tags, OG, Twitter cards, sitemap.xml, robots.txt, canonical, schema.org
- Security: PDO prepared statements, CSRF tokens, XSS escape helpers, password_hash(), session hardening
- Performance: lazy loading, pagination, AJAX, simple file cache

## Quick Install
1. Copy folder to `htdocs/aihub` (XAMPP) or `/var/www/html/aihub` (LAMP).
2. Create MySQL database: `CREATE DATABASE aihub CHARACTER SET utf8mb4;`
3. Import schema: `mysql -u root aihub < database/schema.sql`
4. Import seed: `mysql -u root aihub < database/seed.sql`
5. (Optional) Generate 1000 tools: `php database/generate_tools.php > database/tools_1000.sql && mysql -u root aihub < database/tools_1000.sql`
6. Edit `config/config.php` with DB credentials and BASE_URL.
7. Open `http://localhost/aihub/public/`.
8. Admin: `http://localhost/aihub/public/admin/login` — `admin@aihub.io` / `Admin@123`
9. For pretty URLs ensure mod_rewrite is enabled. `.htaccess` is included in `public/`.

See INSTALL.md, STRUCTURE.md, API.md for details.

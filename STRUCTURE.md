# Folder Structure

```
aihub/
├── config/
│   ├── config.php          App config + session start
│   └── database.php        PDO singleton
├── controllers/            MVC controllers (public + admin)
├── models/                 Eloquent-style PDO models
├── views/
│   ├── layouts/main.php    Public layout
│   ├── partials/           header, footer, tool_card
│   ├── pages/              Home, tools, tool, category, search, static
│   ├── auth/               login, register, forgot, reset
│   ├── user/               dashboard, list, profile
│   ├── blog/               index, show
│   └── admin/              layout, login, dashboard, tools, generic CRUD
├── helpers/functions.php   csrf, view(), url(), e(), paginate, ...
├── middleware/             (place auth middleware here)
├── routes/web.php          Front controller routing
├── database/
│   ├── schema.sql          Tables
│   ├── seed.sql            Categories, tags, blogs, 6 featured tools
│   ├── create_admin.php    Bootstrap admin
│   └── generate_tools.php  Generates ~1000 tools SQL
├── public/                 Web root
│   ├── index.php
│   ├── .htaccess
│   ├── css/app.css
│   ├── js/app.js
│   └── uploads/
├── assets/                 (optional source assets)
├── README.md
├── INSTALL.md
├── STRUCTURE.md
└── API.md
```

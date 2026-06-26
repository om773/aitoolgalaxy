# API Documentation

All endpoints return JSON. Base: `BASE_URL/api`.

## GET /api/search?q=...
Instant tool search (top 10 by views).
```json
{ "results": [ { "id": 1, "name": "ChatGPT", "slug": "chatgpt", "tagline": "...", "logo": "...", "pricing": "Freemium", "rating": "4.80" } ] }
```

## POST /api/track
Records a click on a tool.
Body: `id=<tool_id>` → `{ "ok": true }`

## POST /api/bookmark
Toggles bookmark for the logged-in user. Requires session.
Body: `id=<tool_id>` → `{ "bookmarked": true|false }`

## SEO endpoints
- `GET /sitemap.xml` – all tool / category / blog URLs
- `GET /robots.txt`

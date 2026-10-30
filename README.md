# OsunBiz

The project currently contains static design previews in `Osun-BizWireframes/` and a minimal PHP page at the repository root.

## Run the first PHP page

Requirements: PHP CLI.

From the repository root, start PHP's built-in development server:

```powershell
php -S 127.0.0.1:8000
```

Open <http://127.0.0.1:8000> in a browser. Keep the terminal running while you use the page; stop the server with `Ctrl+C`.

Do not open `index.php` directly as a file: PHP must be served by PHP or a configured web server to execute.

## Environment configuration

The first PHP page currently needs no `.env` variables and does not load `.env` files. `.env.example` lists the planned application, database, session, logging, and optional mail settings. Copy it to `.env` when those features are implemented, then set local values there. Never commit `.env` or put real credentials in `.env.example`.

## Phases to build the application

1. **Run the PHP shell** — serve `index.php` locally and confirm the PHP status and server-rendered time appear.
2. **Define the application foundation** — choose the PHP structure, configuration approach, and database before adding dependencies or credentials.
3. **Build the public directory** — implement the homepage, business search/listing, and business detail pages using the wireframes as references.
4. **Add data and accounts** — introduce database-backed businesses, categories, locations, and the required owner/admin workflows.
5. **Validate and deploy** — test the main user flows, configure production hosting, and deploy only after the security and operational settings are defined.

The wireframes are design references, not executable application pages; the PHP application starts at the repository root.

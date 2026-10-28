# Gorgaslian (WordPress)

This project is a WordPress site prepared for **Local by Flywheel**.

## Run locally (recommended)
1. Install **Local by Flywheel**.
2. Create or import a site pointing at this folder.
3. Set the site domain to `gorgaslian.local`.
4. Start the site in Local.
5. Import the database dump from `app/sql/local.sql`.

Database values (from `app/public/wp-config.php`):
- DB name: `local`
- User: `root`
- Password: `root`
- Host: `localhost`

## Login / registration
- Login page: `/shesvla`
- Registration page: `/registracia`
- Logout link appears in the header when logged in.

## Notes
- There is no `docker-compose.yml`. Local by Flywheel handles the services.
- WordPress core lives in `app/public`.

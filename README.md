# Incub8 Space WordPress replica

This directory is a deployable WordPress replica of the Incub8 Space Jekyll site. It uses the official WordPress and MariaDB images, persists both volumes, and ships the custom `incub8-space` theme with the initial homepage layout and source imagery.

## Coolify deployment

Create a separate Docker Compose application using this directory as the base directory. Set `WP_DOMAIN` to the assigned HTTPS hostname and create strong values for `WORDPRESS_DB_PASSWORD` and `MARIADB_ROOT_PASSWORD` in Coolify environment variables. Keep the existing Jekyll application and domain unchanged. After the first boot, complete the WordPress installer and create pages for `/workspaces/`, `/stories/`, and `/contact/`; the bundled homepage is selected automatically.

## Local smoke test

```sh
docker compose up --build
```

FROM wordpress:php8.2-apache
COPY wp-content/themes/incub8-space /usr/src/wordpress/wp-content/themes/incub8-space
COPY wp-content/mu-plugins /usr/src/wordpress/wp-content/mu-plugins

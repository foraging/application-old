FROM php:7.4-apache

# Set the working directory
WORKDIR /var/www

# Copy the VHOST
COPY ./docker/apache/000-default.conf /etc/apache2/sites-enabled/000-default.conf

# Enable mod rewrite
RUN a2enmod rewrite headers

# Copy the source files into the image
COPY --chown=www-data:www-data ./ /var/www/

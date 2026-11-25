# ════════════════════════════════════════════════════
# Kapotaksha High School – Production Dockerfile
# Optimized for Render Web Service Deployment
# ════════════════════════════════════════════════════

FROM php:8.2-apache

# Enable necessary Apache modules for .htaccess
RUN a2enmod rewrite headers deflate expires

# Configure Apache DocumentRoot permissions
RUN sed -ri -e 's!/var/www/html!/var/www/html!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!/var/www/html!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Allow .htaccess overrides
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Copy application files
WORKDIR /var/www/html
COPY . /var/www/html/

# Set file permissions for web server
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]

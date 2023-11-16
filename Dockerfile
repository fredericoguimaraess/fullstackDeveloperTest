# Use a imagem oficial do PHP com Apache para Laravel
FROM php:8.0-apache

# Atualize e instale as dependências necessárias
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install zip pdo pdo_mysql

# Copie os arquivos do Laravel para o contêiner
COPY . /var/www/html

# Instale as dependências do Laravel
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN cd /var/www/html && composer install

# Copie o arquivo de ambiente do exemplo
COPY .env.example /var/www/html/.env

# Configure a chave de aplicativo do Laravel
RUN cd /var/www/html && php artisan key:generate

# Defina as permissões corretas
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exponha a porta 80
EXPOSE 80

# Inicie o Apache
CMD ["apache2-foreground"]

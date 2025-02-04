FROM php:8.1-apache

# Устанавливаем расширение mysqli
RUN docker-php-ext-install mysqli

# Копируем приложение в контейнер
COPY . /var/www/html/

# Открываем порт
EXPOSE 80

CMD ["apache2-foreground"]

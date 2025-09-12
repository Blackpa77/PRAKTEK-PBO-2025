# Gunakan official PHP image dengan Apache
FROM php:8.2-apache

# Ini adalah perbaikannya: "." berarti "semua yang ada di sini"
COPY . /var/www/html/

# (Opsional) Tambahkan ekstensi PHP jika diperlukan
# RUN docker-php-ext-install mysqli pdo pdo_mysql

# Ubah port Apache dari 80 ke 7860 sesuai standar Hugging Face
RUN sed -i 's/80/7860/g' /etc/apache2/ports.conf /etc/apache2/sites-enabled/000-default.conf

# Server akan otomatis dijalankan oleh Apache
CMD ["apache2-foreground"]

# Usando a imagem oficial do PHP como base
FROM php:8.0-apache

# Definindo o diretório de trabalho
WORKDIR /var/www/html

# Copiando o código do repositório para o diretório de trabalho no container
COPY . .

# Instalando as dependências do PHP (caso o projeto use Composer)
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev && docker-php-ext-configure gd --with-freetype --with-jpeg && docker-php-ext-install gd

# Habilitando o módulo mod_rewrite do Apache, caso seja necessário para o seu projeto
RUN a2enmod rewrite

# Expondo a porta 80 (porta padrão do Apache)
EXPOSE 80

# Comando para rodar o Apache em segundo plano
CMD ["apache2-foreground"]

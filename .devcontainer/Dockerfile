# .devcontainer/Dockerfile
FROM php:8.3-cli-bookworm

# 1. Instala las extensiones de PHP para conectar con MySQL/MariaDB
# y otras utilidades comunes como git, unzip y wget.
RUN apt-get update && \
    apt-get install -y git unzip wget && \
    docker-php-ext-install pdo_mysql mysqli && \
    rm -rf /var/lib/apt/lists/*

# 2. Instala Composer (el gestor de dependencias para PHP)
# Copia el instalador oficial desde la imagen de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 3. Opcional: Crea un usuario no-root para mejorar la seguridad
# Esto evita ejecutar todos los comandos como superusuario.
ARG USERNAME=vscode
ARG USERID=1000
RUN useradd -m -u ${USERID} -s /bin/bash ${USERNAME}
USER ${USERNAME}

# Establece el directorio de trabajo
WORKDIR /workspace
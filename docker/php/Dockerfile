FROM php:8.2-fpm

ENV TZ=Asia/Tokyo

# 必要なパッケージとPHP拡張をインストール
RUN apt-get update && \
    apt-get install -y git unzip libzip-dev libicu-dev libonig-dev curl && \
    docker-php-ext-install intl pdo_mysql zip bcmath

# Node.jsとnpmをインストール
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - \
    && apt-get install -y nodejs

# Node.jsとnpmのバージョン確認（デバッグ用）
RUN node -v && npm -v

# カスタムのphp.iniをコピー
COPY docker/php/php.ini /usr/local/etc/php/php.ini

# Composerをインストール
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

# 作業ディレクトリを設定
WORKDIR /app

# 依存関係を先にコピーしてインストール
COPY src/laravelozi/composer.json src/laravelozi/composer.lock ./
RUN composer install --no-scripts --no-autoloader

COPY src/laravelozi/package.json src/laravelozi/package-lock.json ./
RUN npm install

# アプリケーションのソースコードをコピー
COPY src ./

# エントリポイントスクリプトをコピーし、実行権限を付与
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# エントリポイントの設定
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

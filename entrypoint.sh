#!/bin/bash

# npm installとnpm run devを実行
cd /app

npm run dev 

# PHP-FPMをフォアグラウンドで実行
exec php-fpm
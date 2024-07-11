FROM nginx:1.21-alpine

ENV TZ Asia/Tokyo

RUN rm -f /etc/nginx/conf.d/*

COPY ./docker/web/default.conf /etc/nginx/conf.d/default.conf

COPY ./docker/web/*.pem /etc/nginx/conf.d/


ARG DOCKER_REPOSITORY=docker.io/library
FROM $DOCKER_REPOSITORY/nginx:1.21.6-alpine as base

RUN ln -sf /dev/stdout /var/log/nginx/access.log && \
    ln -sf /dev/stderr /var/log/nginx/error.log && \
    rm -rf /etc/nginx/conf.d/*

COPY docker/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf

ARG PHP_FPM=127.0.0.1
RUN sed -i "s/127\.0\.0\.1/${PHP_FPM}/" /etc/nginx/conf.d/default.conf

EXPOSE 80

FROM base as deploy-push


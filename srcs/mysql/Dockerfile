FROM alpine:latest

RUN apk update \
    && apk add mariadb mariadb-client openrc

COPY srcs/config_mysql.sh .
COPY srcs/wordpress.sql .

EXPOSE 3306

CMD ["sh", "config_mysql.sh"]
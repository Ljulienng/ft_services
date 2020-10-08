FROM alpine:latest

RUN apk update

RUN apk --update add \
      php7 php7-mbstring php7-session php7-bcmath php7-cli php7-ctype php7-curl php7-fpm php7-gd php7-json php7-mcrypt php7-mysqli \
      php7-opcache  php7-openssl php7-pdo php7-pdo_mysql php7-phar php7-xml php7-zip php7-zlib ca-certificates \
      nginx mysql-client

RUN wget http://files.directadmin.com/services/all/phpMyAdmin/phpMyAdmin-5.0.2-all-languages.tar.gz \
      && tar -xvf phpMyAdmin-5.0.2-all-languages.tar.gz \
      && mkdir www/ \
      && mkdir www/phpmyadmin/
 
RUN mv phpMyAdmin-5.0.2-all-languages/* www/phpmyadmin/
COPY srcs/config.inc.php www/phpmyadmin
COPY srcs/livenessprobe.sh .
EXPOSE 5000

COPY srcs/start.sh .
RUN chmod +x start.sh
CMD ./start.sh
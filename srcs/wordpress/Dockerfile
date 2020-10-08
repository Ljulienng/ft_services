FROM alpine:latest

RUN apk update

RUN apk --update add \
      php7 php7-mbstring php7-session php7-bcmath php7-cli php7-ctype php7-curl php7-fpm php7-gd php7-json php7-mcrypt php7-mysqli \
      php7-opcache  php7-openssl php7-pdo php7-pdo_mysql php7-phar php7-xml php7-zip php7-zlib ca-certificates

RUN wget https://wordpress.org/latest.tar.gz \
      && tar -xvf latest.tar.gz \
      && mkdir www/
RUN mv wordpress/ www/
COPY srcs/livenessprobe.sh .

EXPOSE 5050

COPY srcs/start.sh .
RUN chmod +x start.sh
CMD ./start.sh
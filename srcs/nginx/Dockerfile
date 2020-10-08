FROM alpine:latest

RUN apk upgrade --update-cache --available 
RUN apk add nginx openrc openssl openssh

RUN mkdir /www

COPY srcs/index.html www/
COPY srcs/style.css www/
COPY srcs/google.png www/
COPY srcs/nginx.conf etc/nginx/
COPY srcs/livenessprobe.sh .

RUN openssl req -x509 -nodes -subj '/C=FR/ST=PARIS/L=PARIS/O=jnguyen/CN=localhost' \
		 -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key \
		 -out /etc/ssl/certs/nginx-selfsigned.crt

ADD /srcs/sshd_config 		/etc/ssh/

EXPOSE 80 443 22

COPY srcs/start.sh .
RUN chmod +x start.sh
CMD  sh ./start.sh
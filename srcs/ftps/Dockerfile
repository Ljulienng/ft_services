FROM alpine:latest

RUN apk update && apk add vsftpd && apk add openssl curl


COPY srcs/start.sh      .
COPY srcs/livenessprobe.sh .
ADD  srcs/vsftpd.conf   /etc/vsftpd/vsftpd.conf

RUN	openssl req -x509 -nodes -days 7300 -newkey rsa:2048 -subj "/C=FR/ST=fr/L=Paris/O=jnguyen/CN=localhost" -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/vsftpd.key -out /etc/ssl/certs/vsftpd.crt

EXPOSE 20 21 21000-21010

COPY srcs/start.sh .
RUN chmod +x start.sh
CMD  sh ./start.sh
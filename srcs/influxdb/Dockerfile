FROM alpine:latest

RUN apk add openrc influxdb
COPY srcs/setup.sh .

EXPOSE 8086

COPY srcs/setup.sh .
RUN chmod +x setup.sh
CMD ./setup.sh
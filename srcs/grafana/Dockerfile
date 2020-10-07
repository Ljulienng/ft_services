FROM alpine:latest

RUN apk add openrc
RUN wget https://dl.grafana.com/oss/release/grafana-7.1.5.linux-amd64.tar.gz \
    && tar -zxf grafana-7.1.5.linux-amd64.tar.gz \
    && mv grafana-7.1.5 grafana \
    && rm -r grafana-7.1.5.linux-amd64.tar.gz

RUN mkdir /lib64 && ln -s /lib/libc.musl-x86_64.so.1 /lib64/ld-linux-x86-64.so.2
ADD /srcs/datasource.yaml 			grafana/conf/provisioning/datasources/
ADD /srcs/dashboard.yaml 			grafana/conf/provisioning/dashboards/
ADD /srcs/dashboard_overview.json 	/var/lib/grafana/dashboards/

EXPOSE 3000

COPY srcs/start.sh .
RUN chmod +x start.sh
CMD  sh ./start.sh
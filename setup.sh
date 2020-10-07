metallb_build()
{ 
    kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/namespace.yaml > /dev/null
    kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/metallb.yaml > /dev/null
    kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)" > /dev/null
    kubectl apply -f yaml/secret.yaml > /dev/null
    printf "\n---------------------------"
    printf "\n Metallb + secret: Done"
    printf "\n*---------------------------\n\n"
}

docker_build()
{
    docker build -t ftps-alpine srcs/ftps > /dev/null;
    docker build -t grafana-alpine srcs/grafana > /dev/null;
    docker build -t nginx-alpine srcs/nginx > /dev/null;
    docker build -t mysql-alpine srcs/mysql > /dev/null;
    docker build -t phpmyadmin-alpine srcs/phpmyadmin > /dev/null;
    docker build -t wp-alpine srcs/wordpress > /dev/null;
    docker build -t telegraf-alpine srcs/telegraf > /dev/null;
    docker build -t influxdb-alpine srcs/influxdb > /dev/null;
    printf "\n---------------------------"
    printf "\n Docker: Done"
    printf "\n*---------------------------\n\n"
}

kubernetes_build()
{
    kubectl create -f yaml/ftps.yaml;
    kubectl create -f yaml/grafana.yaml;
    kubectl create -f yaml/nginx.yaml;
    sleep 1;
    kubectl create -f yaml/mysql.yaml;
    kubectl create -f yaml/wordpress.yaml;
    kubectl create -f yaml/phpmyadmin.yaml;
    kubectl create -f yaml/influxdb.yaml;
    kubectl create -f yaml/telegraf.yaml;
    kubectl create -f yaml/metallb.yaml;
    printf "\n---------------------------"
    printf "\n Kubernetes: Done"
    printf "\n*---------------------------\n\n"
}

minikube start --vm-driver=docker 
minikube addons enable dashboard
echo "Minikube setup done.\n"

metallb_build;
eval $(minikube docker-env)

docker_build;
kubernetes_build;

printf "\nGrafana: admin mdp: admin \nPhpmyadmin: wp_user mdp: password\nSsh: ssh_user mdp: password\nftp: ftps_user mdp: password\n"
minikube dashboard &
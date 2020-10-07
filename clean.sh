
kubectl delete --all ingresses
kubectl delete --all deployments
kubectl delete --all pods
kubectl delete --all services
kubectl delete --all pvc
kubectl delete -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/namespace.yaml
kubectl delete -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/metallb.yaml
minikube delete
echo "Cleaned successfully"
 
set -x
openrc
touch /run/openrc/softlevel
service nginx start

# SSH starting
echo -e "$PASSWORD\n$PASSWORD" | adduser $USER
rc-update add sshd
rc-status
/etc/init.d/sshd start

tail -f /dev/null
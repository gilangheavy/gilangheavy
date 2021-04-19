## Nginx Web Server on CentOS8

### Setup Root Password
`sudo passwd`

### Install Apache Web Server
`sudo yum update`
`sudo yum install nginx`

### Install Firewall

`sudo firewall-cmd --permanent --add-service=http`
`sudo firewall-cmd --permanent --add-service=https`
`sudo firewall-cmd --reload`

### Enable Apache

`sudo systemctl enable nginx`
`sudo systemctl start nginx`
`sudo systemctl status nginx`

### Check Hostname

`hostname -I`

### Access Web Browser

`http://your_server_ip`

If Change Root Directory Don't Forget
`chcon -Rt httpd_sys_content_t /path/to/www` and `sudo setsebool -P httpd_can_network_connect on`




## Nginx Web Server on CentOS8

### Setup Root Password
`sudo passwd`

### Install Nginx Web Server
`sudo yum update`
`sudo yum install nginx`

### Install Firewall

`sudo firewall-cmd --permanent --add-service=http`
`sudo firewall-cmd --permanent --add-service=https`
`sudo firewall-cmd --reload`

### Enable Nginx

`sudo systemctl enable nginx`
`sudo systemctl start nginx`
`sudo systemctl status nginx`

### Check Hostname

`hostname -I`

### Nginx Web Browser

`http://your_server_ip`

If Change Root Directory Don't Forget
`chcon -Rt httpd_sys_content_t /path/to/www` and `sudo setsebool -P httpd_can_network_connect on`

### Server Block 
server {
        listen 80;
        server_name domain.com www.domain.com;
        root /home;
        index index.php index.html index.htm;
        location / {
                try_files $uri $uri/ /index.php?$query_string;
        }
        location ~ \.php {
                include fastcgi.conf;
                fastcgi_split_path_info ^(.+\.php)(/.+)$;
                fastcgi_pass unix:/run/php-fpm/www.sock;
        }
        location ~ /\.ht {
                deny all;
        }
}



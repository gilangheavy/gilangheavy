## Install PHP 8 on CentOS

### Enable the Remi repository
`sudo dnf install dnf-utils http://rpms.remirepo.net/enterprise/remi-release-8.rpm`

### List PHP Versions
`sudo dnf module list php`

### Enable Version
`sudo dnf module reset php` 
`sudo dnf module enable php:remi-8.0`

### Install PHP and Module
`sudo dnf install php php-opcache php-gd php-curl php-mysqlnd php-mbstring php-intl php-mcrypt`

### Configuring PHP to work with Apache 
`sudo chcon -Rt httpd_sys_rw_content_t /var/www`

### Allow SELinux to permit httpd/apache2 to make network connections
`sudo setsebool -P httpd_can_network_connect=1`

### Restart Web Server (Apache)
`sudo systemctl restart httpd`

=====================================================================

### Configuration PHP with Nginx
`sudo nano /etc/php-fpm.d/www.conf`
### Update User
`user = nginx` `group = nginx`
### Change Ownership directory
`chown -R root:nginx /var/lib/php`
### Restart PHP FPM 
`sudo systemctl restart php-fpm`

### Edit Nginx Virtual Host
   location ~ \.php$ {
        try_files $uri =404;
        fastcgi_pass unix:/run/php-fpm/www.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
### Restart Nginx
`sudo systemctl restart nginx`

### Update the SELinux security context
`sudo chcon -Rt httpd_sys_rw_content_t /var/www`
    

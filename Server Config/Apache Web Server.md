## Apache Web Server on CentOS8

### Install Apache Web Server

`sudo yum update`
`sudo yum install httpd`

### Install Firewall

`sudo firewall-cmd --permanent --add-service=http`
`sudo firewall-cmd --permanent --add-service=https`
`sudo firewall-cmd --reload`

### Enable Apache

`sudo systemctl enable httpd`
`sudo systemctl start httpd`
`sudo systemctl status httpd`

### Check Hostname

`hostname -I`

### Access Web Browser

`http://your_server_ip`

### Setup Root Password
`sudo passwd`

### List User
`cat /etc/passwd`

### Delete User and Folder
`userdel -r user`

=====================================================

### Config Apache Virtual Host
`cd /etc/httpd/conf.d` 

### Setup Virtual Host
<VirtualHost *:80>
    ServerName example.com
    ServerAlias www.example.com
    ServerAdmin webmaster@example.com
    DocumentRoot /var/www/example.com/public_html

    <Directory /var/www/example.com/public_html>
        Options -Indexes +FollowSymLinks
        AllowOverride All
    </Directory>

    ErrorLog /var/log/httpd/example.com-error.log
    CustomLog /var/log/httpd/example.com-access.log combined
</VirtualHost>

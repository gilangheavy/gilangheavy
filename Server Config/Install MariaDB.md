## Install MariaDB on CentOs 8

### Install MariaDB Server
`sudo dnf install mariadb-server`

### Enable and Start MySQL Service
`sudo systemctl enable mariadb` `sudo systemctl start mariadb`

### Securing the MariaDB Server
`sudo mysql_secure_installation`

### Testing Installation
`mysqladmin -u root -p version`

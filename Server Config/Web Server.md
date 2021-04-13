## Web Server CentOS8

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

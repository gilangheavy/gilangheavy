## Install Python 3.9 on CentOS 8

### Update OS
`sudo yum -y update`

### Install required software development tools required to build Python 3.9 on CentOS 8 :

`sudo yum groupinstall "Development Tools" -y` `sudo yum install openssl-devel libffi-devel bzip2-devel -y`

### Confirm gcc is available:
`gcc --version`

## Download latest Python 3.9

### Ensure wget is installed:
`sudo yum install wget -y`

### Use wget to download the latest Python 3.9 release.
`wget https://www.python.org/ftp/python/3.9.2/Python-3.9.2.tgz`

### Extract the archive file using tar:
`tar xvf Python-3.9.2.tgz`

### Switch to the directory created from the file extraction:
`cd Python-3.9*/`

### Install Python 3.9 on CentOS 8
`./configure --enable-optimizations`

### Build Python 3.9 on CentOS 8
`sudo make altinstall`

### Check Python 3.9 installation on CentOS 8

`python3.9 --version`

### Pip3.9 must have been installed as well:

`pip3.9 --version`

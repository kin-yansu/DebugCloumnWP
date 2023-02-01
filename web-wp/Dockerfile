FROM amazonlinux:2

RUN amazon-linux-extras install -y mariadb10.5 php7.4 epel

RUN yum install -y httpd  php-mysqlnd php-json php-common php-xml php-fpm php-mbstring php-gd
RUN yum install -y https://rpms.remirepo.net/enterprise/remi-release-7.rpm
RUN yum install -y php74-php-pecl-xdebug3

## コマンドスクリプト
COPY cmd.sh /

#CMD ["apachectl","-D","FOREGROUND"]
CMD ["./cmd.sh"]
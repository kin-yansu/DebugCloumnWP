#!/bin//bash
PHP_INI="/etc/php.ini"

## Xdebugコンフィグ構築
ls $PHP_INI
if [ $? -eq 0 ];then
  cat << EOS >> $PHP_INI
zend_extension=/opt/remi/php74/root/usr/lib64/php/modules/xdebug.so
xdebug.mode=debug
xdebug.start_with_request=yes
xdebug.client_host=host.docker.internal
xdebug.client_port=9003
EOS

fi

php-fpm

##最後にapacheの起動
apachectl -DFOREGROUND
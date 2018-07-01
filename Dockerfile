FROM ubuntu:18.04

MAINTAINER David Turati <davidturati@gmail.com>

RUN apt-get update -y
RUN apt-get install -y tzdata
RUN apt-get install -y vim
RUN apt-get install -y software-properties-common
RUN apt-get install -y php7.2
RUN apt-get install -y php7.2-mbstring
RUN apt-get install -y php7.2-gd
RUN apt-get install -y php7.2-xml
RUN apt-get install -y php7.2-gd
RUN apt-get install -y php7.2-json
RUN apt-get install -y php-xdebug
RUN apt-get install -y python3
RUN apt-get install -y htop
RUN apt-get install -y apache2
RUN apt install -y wget
RUN echo "short_open_tag = On" >> /etc/php/7.2/cli/php.ini
RUN echo "short_open_tag = On" >> /etc/php/7.2/apache2/php.ini

RUN rm /etc/apache2/sites-enabled/000-default.conf
RUN touch /etc/apache2/sites-enabled/000-default.conf

RUN printf "<VirtualHost *:80>\n \
	ServerAdmin webmaster@localhost \n \
	DocumentRoot /var/projetos/php_e_laravel/estoque/public \n \
	ErrorLog ${APACHE_LOG_DIR}/error.log \n \
	CustomLog ${APACHE_LOG_DIR}/access.log combined\n </VirtualHost>\n" >> /etc/apache2/sites-enabled/000-default.conf

RUN printf "<Directory /var/projetos/php_e_laravel/estoque/public >\n \
	Options Indexes FollowSymLinks\n \
	AllowOverride All\n \
	Require all granted\n \
</Directory>" >> /etc/apache2/apache2.conf

#RUN printf "[Xdebug]\n \
#           #zend_extension=<full_path_to_xdebug_extension> \n \
#           zend_extension=xdebug.so \n \
#           xdebug.remote_enable=1 \n \
#           xdebug.remote_handler=dbgp \n \
#           xdebug.remote_autostart=1 \n \
#           xdebug.remote_connect_back=0 \n \
#           xdebug.idekey=docker \n \
#           xdebug.remote_host=192.168.15.222 \n \
#           xdebug.remote_port=9000" >> /etc/php/5.6/apache2/php.ini
#
#RUN printf "[Xdebug]\n \
#           #zend_extension=<full_path_to_xdebug_extension> \n \
#           zend_extension=xdebug.so \n \
#           xdebug.remote_enable=1 \n \
#           xdebug.remote_handler=dbgp \n \
#           xdebug.remote_autostart=1 \n \
#           xdebug.remote_connect_back=0 \n \
#           xdebug.idekey=docker \n \
#           xdebug.remote_host=192.168.0.144 \n \
#           xdebug.remote_port=9000" >> /etc/php/7.0/apache2/php.ini

COPY xdebug.ini /etc/php/7.2/mods-available/xdebug.ini

EXPOSE 80
EXPOSE 9000

WORKDIR /var/projetos/php_e_laravel/estoque

CMD apachectl -D FOREGROUND







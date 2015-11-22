#CodeIgniter 3 Application

#Require:

#NodeJS

npm install -g bower

#Composer

#Install:
composer install
bower install

#Database
CREATE TABLE news (
        id int(11) NOT NULL AUTO_INCREMENT,
        title varchar(128) NOT NULL,
        slug varchar(128) NOT NULL,
        text text NOT NULL,
        PRIMARY KEY (id),
        KEY slug (slug)
);


CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  PRIMARY KEY (`id`)
);




References:
http://www.stepblogging.com/how-to-create-layouts-in-codeigniter-3-0/
http://www.stepblogging.com/how-to-remove-index-php-from-url-in-codeigniter/

## connection over socket
# ref: https://civicrm.stackexchange.com/questions/31343/does-civicrm-support-mysql-sockets/31346#31346
define('CIVICRM_DSN', 'mysql://USER:PASSWORD@unix(/run/mysqld/mysqld.sock)/DATABASE');

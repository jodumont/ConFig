# this is a sample from a nextcloud 16 installation

<?php
$CONFIG = array (
  'instanceid' => '',
  'passwordsalt' => '',
  'secret' => '',
  'trusted_domains' =>
  array (
    0 => '',
  ),
  'datadirectory' => '',
  'dbtype' => 'mysql',
  'version' => '',
  'overwrite.cli.url' => '',
  'dbname' => '',
  'dbhost' => 'localhost:/run/mysqld/mysqld.sock', # an example of connection to mysql through a file socket
  'dbport' => '',
  'dbtableprefix' => '',
  'mysql.utf8mb4' => true, # if you have the chance to make this happen before the installation ;) 
  'dbuser' => '',
  'dbpassword' => '',
  'installed' => ,
  'mail_smtpmode' => '',
  'mail_sendmailmode' => '',
  'memcache.local' => '\OC\Memcache\APCu',
  'memcache.locking' => '\OC\Memcache\Redis',
  'redis' => [ # https://github.com/JDmnT/Debian/blob/master/hestia-install.sh#L21
     'host' => '/run/redis/redis.sock', # file socket is faster and more secure
     'port'     => 0, # no port since we use file socket
     'dbindex'  => 0, # be sure the db is not used by another service
     'password' => '',
     'timeout'  => 1.5,
  ],
);

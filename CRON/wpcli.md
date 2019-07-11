# as USER

> ref: https://developer.wordpress.org/cli/commands/

## database backup

>  be sure your USER have the right to **write** in your `$DESTINATION`

/usr/local/bin/wp db export $DESTINATION/wp.sql --allow-root

## update core

/usr/local/bin/wp core update --yes --path=/var/www/domain.tld/

## update plugin

/usr/local/bin/wp plugin update --all --yes --path=/var/www/domain.tld/

## update theme

/usr/local/bin/wp theme update --all --yes --path=/var/www/domain.tld/

## civicrm

/usr/local/bin/wp --user=WPUSER --url=https://domain.tld --path=/var/www/domain.tld/ civicrm api job.execute auth=0

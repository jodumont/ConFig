# as USER

> ref: https://developer.wordpress.org/cli/commands/

## database backup

>  be sure your USER have the right to **write** in your `$DESTINATION`

wp db export $DESTINATION/wp.sql --allow-root

## update core

wp core update --yes --path=/var/www/domain.tld/

## update plugin

wp plugin update --all --yes --path=/var/www/domain.tld/

## update theme

wp theme update --all --yes --path=/var/www/domain.tld/

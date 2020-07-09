# cloudflare give you 5 free firewall rules

ref: https://developers.cloudflare.com/firewall/cf-firewall-rules/

## howto

1. go to https://dash.cloudflare.com
2. choose your domain
3. than goto firewall
4. and firewall-rules

which should give you an url like: `https://dash.cloudflare.com/.../YOUR-DOMAIN.TLD/firewall/firewall-rules`

### Block the top 5 spammers countries in one rules

ref: https://www.projecthoneypot.org/spam_server_top_countries.php

1. Create a Firewall Rule
2. Edit expression  
2.1. cut and paste this `(ip.geoip.country eq "CN") or (ip.geoip.country eq "BR") or (ip.geoip.country eq "US") or (ip.geoip.country eq "RU") or (ip.geoip.country eq "IN")`
3. Then… `Challenge (Captcha]`

### CF Machine Learning (cf.threat_score)

This field represents a risk score, 0 indicates low risk as determined by Cloudflare. Values above 10 may represent spammers or bots, and values above 40 point to bad actors on the Internet. It is rare to see values above 60.  
ref: https://developers.cloudflare.com/firewall/cf-firewall-rules/fields-and-expressions/

#### challenge those above 10

1. Create a Firewall Rule
2. Edit expression  
2.1 cut and paste this `(cf.threat_score ge 10)`
3. Then… `Challenge (Captcha]`  

#### block those above 50

1. Create a Firewall Rule
2. Edit expression  
2.1. cut and paste this `(cf.threat_score ge 50)`
3. Then… `Block`

## WordPress

### Protect your WordPress WP-ADMIN

1. Create a Firewall Rule
2. When incoming requests match...  
2.1 `URI Path` `contains` `/wp-admin` __AND__  
2.2 `Country` `does not equal` `YOUR COUNTRY`  
3. Then... `Block`

### Protect your Insecure WordPress Plugins

1. Create a Firewall Rule
2. When incoming requests match...  
2.1 `URI Path` `contains` `/wp-content/plugins` __AND__  
2.2 `Referer` `does not equal` `YOUR-DOMAIN.TLD`  
3. Then... `Block`

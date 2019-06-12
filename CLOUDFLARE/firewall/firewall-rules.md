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
3. cut and paste this  
`(ip.geoip.country eq "CN") or (ip.geoip.country eq "BR") or (ip.geoip.country eq "US") or (ip.geoip.country eq "RU") or (ip.geoip.country eq "IN")`
4. Then… Choose your action: __Challenge (Captcha]__
5. Deploy

### CF Machine Learning (cf.threat_score)

This field represents a risk score, 0 indicates low risk as determined by Cloudflare. Values above 10 may represent spammers or bots, and values above 40 point to bad actors on the Internet. It is rare to see values above 60.  
ref: https://developers.cloudflare.com/firewall/cf-firewall-rules/fields-and-expressions/

#### challenge those above 10

1. Create a Firewall Rule
2. Edit expression
3. cut and paste this  
`(cf.threat_score ge 10)`
4. Then… Choose your action: __Challenge (Captcha]__
5. Deploy

#### block those above 50

1. Create a Firewall Rule
2. Edit expression
3. cut and paste this  
`(cf.threat_score ge 50)`
4. Then… Choose your action: __block__
5. Deploy

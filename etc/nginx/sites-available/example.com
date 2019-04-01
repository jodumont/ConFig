server {
	listen 443 http2;
	listen [::]:443 http2;

	server_name _;
	root /home/www/example.com;

	# SSL
#	ssl_certificate /etc/letsencrypt/live/example.com/fullchain.pem;
#	ssl_certificate_key /etc/letsencrypt/live/example.com/privkey.pem;
#	ssl_trusted_certificate /etc/letsencrypt/live/example.com/chain.pem;

	include /etc/nginx/conf.d/security.server;
}
include /etc/nginx/conf.d/letsencrypt.http;

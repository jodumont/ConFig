server {
	listen 443 ssl http2;
	listen [::]:443 ssl http2;

	server_name example.com;
	root /var/www/example.com/public;

	# SSL
	ssl_certificate /etc/letsencrypt/live/example.com/fullchain.pem;
	ssl_certificate_key /etc/letsencrypt/live/example.com/privkey.pem;
	ssl_trusted_certificate /etc/letsencrypt/live/example.com/chain.pem;

	# reverse proxy
	location / {
		proxy_pass http://127.0.0.1:3000;
		include /etc/nginx/conf.d/proxy.location;
	}

	include /etc/nginx/conf.d/security.server;
}

# HTTP redirect
server {
	listen 80;
	listen [::]:80;

	server_name .example.com;

	include /etc/nginx/conf.d/letsencrypt.server;

	location / {
		return 301 https://example.com$request_uri;
	}
}

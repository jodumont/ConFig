# DASH -> DOMAIN -> CRYPTO

ie: https://dash.cloudflare.com/.../YOUR-DOMAIN.TLD/crypto

## SSL

Full Strict if on your server (locally) you use a valid certificate such Let's Encrypt (see [page-rules](page-rules.md))

## Always Use HTTPS

## HTTP Strict Transport Security (HSTS)

- Enable HSTS (Strict-Transport-Security): ON
- Max Age Header (max-age): 6months
- Apply HSTS policy to subdomains (includeSubDomains): ON
- Preload: ON
- No-Sniff Header: ON

## Authenticated Origin Pulls: ON

## Opportunistic Encryption: ON

## Onion Routing: ON

see onion traffic as legitimate

## TLS 1.3: ON

## Automatic HTTPS Rewrites: ON

redirect http to https

# DASH -> DOMAIN -> PAGE RULES

ie: https://dash.cloudflare.com/.../YOUR-DOMAIN.TLD/page-rules

## Let's Encrypt bypass

1. Create a Page Rule: `*.YOURDOMAIN.TLD/.well-known/acme-challenge/*`
2. Then the settings are:
2.1 `SSL: OFF`

## Cache Everything

1. Create a Page Rule: `YOURDOMAIN.TLD/*`
2. Then the settings are:
2.1 `SSL: Full or Strict`
2.2 `Cache Level: Cache Everything`

## Protect your WordPress WP-ADMIN

1. Create a Page Rule: `YOURDOMAIN.TLD/wp-admin*`
2. Then the settings are:
2.1 `Browser Integrity Check: On`
2.2 `Security Level: High`
2.3 `Security Level: High`
2.4 `Cache Level: Bypass`
2.5 `Disable Performance: Performance is disabled`

## Cache your WordPress uploads folder

1. Create a Page Rule: `YOURDOMAIN.TLD/wp-content/uploads*`
2. Then the settings are:
2.1 `Browser Cache TTL: 2 days`
2.2 `Cache Level: Bypass`
2.3 `Edge Cache TTL: 14 days`

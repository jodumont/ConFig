# DASH -> DOMAIN -> DNS

ie: https://dash.cloudflare.com/.../YOUR-DOMAIN.TLD/dns

## CNAME

```
www	1	IN	CNAME	YOUR-DOMAIN.TLD.
```

## MX

Be sure your mx point to a behalf of your main @

```
@	1	IN	MX	10 mail.anotherdomain.tld.
```

### but also as __TXT__

#### DKIM

```
mail._domainkey TXT "v=DKIM1; k=rsa; p=..."

```

#### _dmarc

```
_dmarc TXT "v=DMARC1; p=none"
```

#### SPF

```
@ TXT ""v=spf1 a mx ~all""
```

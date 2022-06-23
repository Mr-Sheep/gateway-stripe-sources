# Stripe WeChat/Alipay Gateway

<img src="https://raw.githubusercontent.com/Mr-Sheep/gateway-stripe-sources/master/views/default/images/logo.svg" width="20%" />


This is a nonmerchant gateway for Blesta that integrates with [Alipay](https://stripe.com/docs/payments/alipay) and [WeChat Pay](https://stripe.com/docs/payments/wechat-pay) via the stripe [source api](https://stripe.com/docs/sources).

## How to
1. Clone this project into  `/path/to/your/blesta/components/gateways/nonmerchant/stripe_sources`

2. Log in to your admin Blesta account and navigate to `> Settings > Payment Gateways`

3. Find the WeChat/Alipay Via Stripe gateway and install it

4. Click Manage and populate the required fields and setup your webhook.

5. Configure stripe to send the following event:
```
source.chargeable
charge.succeeded
source.canceled
charge.pending
```

## Blesta Compatibility

I am currently using this module on Blesta 5.4.0. Feel free to test it on other version of Blesta.

## Known Issues (TODOs)

1. When using this gateway with virtfusion, admins will have to activate servers manually. 

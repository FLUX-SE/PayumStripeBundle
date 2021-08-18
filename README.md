[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-github-actions]][link-github-actions]
[![Quality Score][ico-code-quality]][link-code-quality]

## Payum Stripe checkout session gateway bundle

This bundle is design to add a new gateway to Payum to support Stripe checkout session and Stripe JS gateways over symfony bundle

See https://stripe.com/docs/payments/checkout for more information.

## Installation

Install using Composer :

```bash
composer require flux-se/payum-stripe-bundle
```

Choose one of [php-http/client-implementation](https://packagist.org/providers/php-http/client-implementation),
the most used is [php-http/guzzle6-adapter](https://packagist.org/packages/php-http/guzzle6-adapter)

```bash
composer require  php-http/guzzle6-adapter
```

## Configuration

### API keys

Get your `publishable_key` and your `secret_key` on your Stripe account :

https://dashboard.stripe.com/test/apikeys

### Webhook key
Then get a `webhook_secret_key` configured with at least two events :
 
 - `payment_intent.canceled`
 - `checkout.session.completed`

The URL to fill is the route named `payum_notify_do_unsafe`, here is an example :

```
https://localhost/payment/notify/unsafe/stripe_checkout_session
```

https://dashboard.stripe.com/test/webhooks

### Test or dev environment

Webhooks are triggered by Stripe on their server to your server.
If the server is into a private network, Stripe won't be allowed to reach your server.

Stripe provide an alternate way to catch those webhook events, you can use
`Stripe cli` : https://stripe.com/docs/stripe-cli
Follow the link and install `Stripe cli`, then use those command line to get
your webhook key :

First login to your Stripe account (needed every 90 days) :

```bash
stripe login
```

Then start to listen for the 2 required events, forwarding request to you local server :

```bash
stripe listen \
    --events checkout.session.completed,payment_intent.canceled \
    --forward-to https://localhost/payment/notify/unsafe/stripe_checkout_session
```

> Replace the --forward-to argument value with the right one you need.

### Payum

```yaml
# config/packages/payum.yaml

payum:
  gateways:
    stripe_checkout_session:
      factory: stripe_checkout_session
      publishable_key: sk_test_secretkey
      secret_key: pk_test_publishablekey
      webhook_secret_keys:
        - whsec_test_webhookkey
    stripe_js:
      factory: stripe_js
      publishable_key: sk_test_secretkey
      secret_key: pk_test_publishablekey
      webhook_secret_keys:
        - whsec_test_webhookkey
```

To set payment-methods you can add ``payment_method_types`` to the gateway-config. This array can contain multiple gateways you want to support. For a full list see <a href="https://stripe.com/docs/api/payment_methods/object">here</a>. By default the payment_method_types is ['card'].

## Usage

See documentation here :
https://github.com/FLUX-SE/PayumStripe/blob/master/README.md 

## More

The Sylius plugin :

https://github.com/FLUX-SE/SyliusPayumStripePlugin

[ico-version]: https://img.shields.io/packagist/v/FLUX-SE/payum-stripe-bundle.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-github-actions]: https://github.com/FLUX-SE/PayumStripeBundle/workflows/Build/badge.svg
[ico-code-quality]: https://img.shields.io/scrutinizer/g/FLUX-SE/PayumStripeBundle.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/flux-se/payum-stripe-bundle
[link-github-actions]: https://github.com/FLUX-SE/PayumStripeBundle/actions?query=workflow%3A"Build"
[link-scrutinizer]: https://scrutinizer-ci.com/g/FLUX-SE/PayumStripeBundle/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/FLUX-SE/PayumStripeBundle

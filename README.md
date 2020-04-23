[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-travis]][link-travis]
[![Quality Score][ico-code-quality]][link-code-quality]

## Payum Stripe checkout session gateway bundle

This bundle is designed to add a new gateway to Payum to support Stripe checkout session over symfony bundle

See https://stripe.com/docs/payments/checkout for more information.

## Installation

Install using Composer :

```bash
composer require prometee/payum-stripe-checkout-session-bundle
```

Choose one of [php-http/client-implementation](https://packagist.org/providers/php-http/client-implementation),
the most used is [php-http/guzzle6-adapter](https://packagist.org/packages/php-http/guzzle6-adapter)

```bash
composer require  php-http/guzzle6-adapter
```

## Usage

See documentation here :
https://github.com/Prometee/PayumStripe/blob/master/README.md 

## More

The Sylius plugin :

https://github.com/Prometee/SyliusPayumStripeCheckoutSessionPlugin


[ico-version]: https://img.shields.io/packagist/v/Prometee/payum-stripe-checkout-session-bundle.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/Prometee/PayumStripeCheckoutSessionBundle/master.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/Prometee/PayumStripeCheckoutSessionBundle.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/prometee/payum-stripe-checkout-session-bundle
[link-travis]: https://travis-ci.org/Prometee/PayumStripeCheckoutSessionBundle
[link-scrutinizer]: https://scrutinizer-ci.com/g/Prometee/PayumStripeCheckoutSessionBundle/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/Prometee/PayumStripeCheckoutSessionBundle

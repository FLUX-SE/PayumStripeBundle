# UPGRADE FROM `v1.2.0` TO `v1.2.1`

The service name of stripe checkout session gateway as been renamed :
from `flux_se.payum_stripe.gateway_factory_builder` to `flux_se.payum_stripe_checkout_session.gateway_factory_builder`

# UPGRADE FROM `v1.1.0` TO `v1.2.0`

* **BC BREAK**: This bundle has been renamed from
 `PayumStripeCheckoutSessionBundle` to `PayumStripeBundle`
 to handle more than one gateway from Stripe.
* **BC BREAK**: Rename the namespace (vendor and plugin name) from
 `Prometee\PayumStripeCheckoutSessionBundle` to `FluxSE\PayumStripeBundle`
* **BC BREAK**: Rename the service name from 
 `prometee.payum_stripe_checkout_session.*` to `flux_se.payum_stripe.*`

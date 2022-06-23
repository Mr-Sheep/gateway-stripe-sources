<?php
// Errors
$lang['StripeSources.!error.auth'] = 'The gateway could not authenticate.';
$lang['StripeSources.!error.publishable_key.empty'] = 'Please enter a Publishable Key.';
$lang['StripeSources.!error.secret_key.empty'] = 'Please enter a Secret Key.';
$lang['StripeSources.!error.secret_key.valid'] = 'Unable to connect to the Stripe API using the given Secret Key.';

$lang['StripeSources.name'] = 'WeChat Pay or Alipay';
$lang['StripeSources.description'] = 'Blesta payment gateway for WeChat Pay and Alipay payments via Stripe Sources';

// Settings
$lang['StripeSources.publishable_key'] = 'API Publishable Key';
$lang['StripeSources.secret_key'] = 'API Secret Key';
$lang['StripeSources.webhook_key'] = 'Webhook Signing Secret';
$lang['StripeSources.tooltip_publishable_key'] = 'Your API Publishable Key is specific to either live or test mode. Be sure you are using the correct key.';
$lang['StripeSources.tooltip_secret_key'] = 'Your API Secret Key is specific to either live or test mode. Be sure you are using the correct key.';
$lang['StripeSources.tooltip_webhook_key'] = 'refer to https://stripe.com/docs/webhooks/signatures';


// Charge description
$lang['StripeSources.charge_description_default'] = 'Charge for specified amount';
$lang['StripeSources.charge_description'] = 'Charge for %1$s'; // Where %1$s is a comma seperated list of invoice ID display codes

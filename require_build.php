<?php
require_once __DIR__ . '/build/vendor/scoper-autoload.php';

/**
 * Here we'll map out classes used directly in OnPay woocommerce plugin or helper classes.
 * This way we'll keep class/namespace references the same in plugin code, regardless of whether plugin is built or not.
 */

/**
 * OnPay SDK classes
 */
class_alias('ThirtybeesOnpay\OnPay\OnPayAPI', 'OnPay\OnPayAPI');

class_alias('ThirtybeesOnpay\OnPay\TokenStorageInterface', 'OnPay\TokenStorageInterface');

class_alias('ThirtybeesOnpay\OnPay\API\GatewayService', 'OnPay\API\GatewayService');
class_alias('ThirtybeesOnpay\OnPay\API\PaymentWindow', 'OnPay\API\PaymentWindow');
class_alias('ThirtybeesOnpay\OnPay\API\PaymentWindow\PaymentInfo', 'OnPay\API\PaymentWindow\PaymentInfo');
class_alias('ThirtybeesOnpay\OnPay\API\SubscriptionService', 'OnPay\API\SubscriptionService');
class_alias('ThirtybeesOnpay\OnPay\API\TransactionService', 'OnPay\API\TransactionService');

class_alias('ThirtybeesOnpay\OnPay\API\Exception\ApiException', 'OnPay\API\Exception\ApiException');
class_alias('ThirtybeesOnpay\OnPay\API\Exception\ConnectionException', 'OnPay\API\Exception\ConnectionException');
class_alias('ThirtybeesOnpay\OnPay\API\Exception\InvalidFormatException', 'OnPay\API\Exception\InvalidFormatException');
class_alias('ThirtybeesOnpay\OnPay\API\Exception\TokenException', 'OnPay\API\Exception\TokenException');

class_alias('ThirtybeesOnpay\OnPay\API\Gateway\Information', 'OnPay\API\Gateway\Information');
class_alias('ThirtybeesOnpay\OnPay\API\Gateway\PaymentWindowDesignCollection', 'OnPay\API\Gateway\PaymentWindowDesignCollection');
class_alias('ThirtybeesOnpay\OnPay\API\Gateway\PaymentWindowIntegrationSettings', 'OnPay\API\Gateway\PaymentWindowIntegrationSettings');
class_alias('ThirtybeesOnpay\OnPay\API\Gateway\SimplePaymentWindowDesign', 'OnPay\API\Gateway\SimplePaymentWindowDesign');

class_alias('ThirtybeesOnpay\OnPay\API\Subscription\DetailedSubscription', 'OnPay\API\Subscription\DetailedSubscription');
class_alias('ThirtybeesOnpay\OnPay\API\Subscription\SimpleSubscription', 'OnPay\API\Subscription\SimpleSubscription');
class_alias('ThirtybeesOnpay\OnPay\API\Subscription\SubscriptionCollection', 'OnPay\API\Subscription\SubscriptionCollection');
class_alias('ThirtybeesOnpay\OnPay\API\Subscription\SubscriptionHistory', 'OnPay\API\Subscription\SubscriptionHistory');

class_alias('ThirtybeesOnpay\OnPay\API\Transaction\DetailedTransaction', 'OnPay\API\Transaction\DetailedTransaction');
class_alias('ThirtybeesOnpay\OnPay\API\Transaction\SimpleTransaction', 'OnPay\API\Transaction\SimpleTransaction');
class_alias('ThirtybeesOnpay\OnPay\API\Transaction\TransactionCollection', 'OnPay\API\Transaction\TransactionCollection');
class_alias('ThirtybeesOnpay\OnPay\API\Transaction\TransactionHistory', 'OnPay\API\Transaction\TransactionHistory');

class_alias('ThirtybeesOnpay\OnPay\API\Util\Converter', 'OnPay\API\Util\Converter');
class_alias('ThirtybeesOnpay\OnPay\API\Util\Link', 'OnPay\API\Util\Link');
class_alias('ThirtybeesOnpay\OnPay\API\Util\Pagination', 'OnPay\API\Util\Pagination');
class_alias('ThirtybeesOnpay\OnPay\API\Util\Currency', 'OnPay\API\Util\Currency');

/**
 * Other Classes
 */
class_alias('ThirtybeesOnpay\Alcohol\ISO4217', 'Alcohol\ISO4217');
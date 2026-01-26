<?php

require_once('PaymentGateway.php');
require_once('BankTransfer.php');

require_once('PaymentProcessor.php');
require_once('PaypalPaymentGateway.php');
require_once('StripePaymentGateway.php');

$bankTranferPayment = new BankTransfer();

$payPalPayment = new PaypalPaymentGateway();

$stripePayment = new StripePaymentGateway();

$bankTranferPayment = new PaymentProcessor($bankTranferPayment);
echo $bankTranferPayment->procesarPago(12.34) . "\n";

$payPalPayment = new PaymentProcessor($payPalPayment);
echo $payPalPayment->procesarPago(07.5) . "\n";

$stripePayment = new PaymentProcessor($stripePayment);
echo $stripePayment->procesarPago(123456.978) . "\n";
?>
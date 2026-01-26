<?php

class PayPalPaymentGateway implements PaymentGateway
{
    public function sendAmount(float $amount): string
    {
        return "Pago de {$amount} procesado por Paypal";
    }
}
?>
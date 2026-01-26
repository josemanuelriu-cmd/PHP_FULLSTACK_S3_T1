<?php 

class StripePaymentGateway implements PaymentGateway
{
    public function sendAmount(float $amount): string
    {
        return "Pago de {$amount} procesado con Stripe";
    }
}
?>
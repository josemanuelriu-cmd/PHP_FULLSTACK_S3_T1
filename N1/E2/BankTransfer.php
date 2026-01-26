<?php 

class BankTransfer implements PaymentGateway
{
    public function sendAmount(float $amount): string
    {
        return "Transferencia de {$amount} realizada con éxito";
    }
}
?>
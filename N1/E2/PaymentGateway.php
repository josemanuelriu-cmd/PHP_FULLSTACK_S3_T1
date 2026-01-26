<?php

interface PaymentGateway
{
    public function sendAmount(float $amount);
}
?>
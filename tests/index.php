<?php
    require_once 'vendor/autoload.php'; // You have to require the library from your Composer vendor folder

    MercadoPago\SDK::setAccessToken("YOUR_TOKEN"); // Either Production or SandBox AccessToken

    $payment = new MercadoPago\Payment();
    
    $payment->transaction_amount = 141;
    $payment->token = "YOUR_CARD_TOKEN";
    $payment->description = "Ergonomic Silk Shirt";
    $payment->installments = 1;
    $payment->payment_method_id = "visa";
    $payment->payer = array(
      "email" => "teste@sabidos.com.br"
    );

    $payment->save();

    echo $payment->status;
  ?>
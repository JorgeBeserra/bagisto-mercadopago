<?php

use Jorgebeserra\Mercadopago\Payment\MercadoPago;

/** @var MercadoPago $mercadopago */
$mercadopago = app(MercadoPago::class);
$mercadopago->init();
$response = $mercadopago->send();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagamento MercadoPago</title>
    <script src="{{ $mercadopago->getJavascriptUrl() }}" data-preference-id="{{ $mercadopago->getPreferenceId() }}"></script>
</head>
<body>
    Você será redirecionado para o Mercado Pago em poucos segundos.<br><br>
    <form action="{{ $mercadopago->getinitPointId() }}" id="mercadopago_standard_checkout" method="POST">
        <input value="Clique aqui se não foi redirecionado em 10 segundos ..." type="submit">
    </form>
    <script type="text/javascript">
        document.getElementById("mercadopago_standard_checkout").submit();
    </script>
</body>
</html>
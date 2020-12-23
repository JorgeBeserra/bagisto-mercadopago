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
    <script type="text/javascript" src="{{ $mercadopago->getJavascriptUrl() }}"></script>
</head>
<body>
<script type="text/javascript">
    var code = '<?= $response->getCode() ?>'
    @if(core()->getConfigData(MercadoPago::CONFIG_TYPE) === 'lightbox')
        var callback = {
            success : function(transactionCode) {
                window.location.href = '<?= route('mercadopago.success') ?>?transactionCode=' + transactionCode;
            },
            abort : function() {
                window.location.href = '<?= route('mercadopago.cancel') ?>';
            }
        };
        var isOpenLightbox = PagSeguroLightbox(code, callback);
        if (!isOpenLightbox){
            location.href= '<?= $mercadopago->getPagseguroUrl() ?>' + code;
        }
    @else
        location.href= '<?= $mercadopago->getPagseguroUrl() ?>' + code;
    @endif
</script>
</body>
</html>
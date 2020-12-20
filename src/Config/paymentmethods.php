<?php
return [
    'mercadopago'  => [
        'code'              => 'mercadopago',
        'title'             => 'MercadoPago',
        'description'       => 'Pague sua compra com MercadoPago',
        'class'             => \JorgeBeserra\Mercadopago\Payment\MercadoPago::class,
        'active'            => true,
//        'no_interest'       => 5,
        'type'              => 'redirect',
//        'max_installments'  => 10,
        'debug'              => false,
        'sort'              => 100,
    ],
];
<?php

if ( ! defined( 'MERCADOPAGO_CONTROLER')) {
    define('MERCADOPAGO_CONTROLER', 'jorgebeserra\Mercadopago\Http\Controllers\MercadopagoController@');
}

Route::group(['middleware' => ['web']], function () {
    Route::prefix('mercadopago')->group(function () {
        Route::get('/redirect', MERCADOPAGO_CONTROLER . 'redirect')->name('mercadopago.redirect');
        Route::post('/notify', MERCADOPAGO_CONTROLER . 'notify')->name('mercadopago.notify');
        Route::get('/success', MERCADOPAGO_CONTROLER . 'success')->name('mercadopago.success');
        Route::get('/cancel', MERCADOPAGO_CONTROLER . 'cancel')->name('mercadopago.cancel');
    });
});

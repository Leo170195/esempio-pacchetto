<?php

use Aulab\EsempioPacchetto\EsempioController;
use Illuminate\Support\Facades\Route;


Route::get('/prova', function(){
    echo 'benvenuti nel mio pacchetto';
});

Route::get('/controller', [EsempioController::class, 'prova']);
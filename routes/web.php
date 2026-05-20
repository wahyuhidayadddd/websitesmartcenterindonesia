<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WilayahController;

Route::get('/', function () {

    $data =
        include resource_path('data/indonesia.php');

    return view('welcome', [

        'title' => 'Indonesia',

        'items' => $data

    ]);

});

Route::get('/loginguru', function () {
    return view('loginguru');
});

Route::get('/loginsiswa', function () {
    return view('loginsiswa');
});

Route::get(
    '/{provinsi?}/{kabupaten?}/{kecamatan?}/{kelurahan?}',
    [WilayahController::class, 'index']
);
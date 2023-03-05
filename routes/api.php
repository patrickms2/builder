<?php

use App\Http\Controllers\Api\V1\Admin\UsuarioApiController;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Usuarios
    Route::apiResource('usuarios', UsuarioApiController::class);
});

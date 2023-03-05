<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable();
            $table->string('tel_fijo')->nullable();
            $table->string('usuario')->nullable();
            $table->string('password')->nullable();
            $table->string('cif')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}

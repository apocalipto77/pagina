<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) { // estructura donde se crea users " usuarios" tipo de exctructuta :Una tabla y le asignamos los campos de estos tipos
            $table->id(); //id identificador unico de usuario que se va incrementando cada vez que hay un registro
            $table->string('name');// se especifica el tipo de de dato que va a almacenar"string y luego el campo "name"
            $table->string('email')->unique();// campo string pero es un campo unico"unique"
            $table->timestamp('email_verified_at')->nullable();// siempre que termine con "at" se refiere a fecha y hora "timestamp"es como un seguimiento
            $table->string('password');//contraseña cadena de texto
            $table->rememberToken();
            $table->timestamps();// cada vez que ceamios una tabla la tabla al final se cre con dos campos por defectos ,tmas de seguridada con los dtaos de los usuarios,cecion , modoficacion y fecha : quien lo hizo
        }); // strin tipo de dato Name nombre de la columna
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

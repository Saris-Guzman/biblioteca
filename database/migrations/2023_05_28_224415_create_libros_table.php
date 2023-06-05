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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("categoria_id");
            $table->unsignedBigInteger("autor_id");
            $table->unsignedBigInteger("editorial_id");

            $table->string('titulo');
            $table->string('nautor');
            $table->string('comentario');

            $table->timestamps();

            $table->foreign("categoria_id")->references("id")->on("categorias");
            $table->foreign("autor_id")->references("id")->on("autors");
            $table->foreign("editorial_id")->references("id")->on("editorials");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};

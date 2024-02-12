<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->unique();
            $table->string('photo')->nullable();
            $table->text('description');
            $table->decimal('prix');
            $table->integer('quantite');
            $table->enum('statut',['active','inactive']);
            $table->enum('taille',['s','m','l','xl','xxl','none'])->default('none');
            $table->boolean('is_solde')->default(false);
            $table->integer('remise');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}

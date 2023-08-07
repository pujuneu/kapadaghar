<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('stock');
            $table->float('price');
            $table->string('photopath');
            $table->text('description');
<<<<<<< HEAD
            $table->foreignId('category_id')->constrained();
=======
            $table->foreignId('sub_category_id')->constrained();
>>>>>>> 55d43e69aab00fe0d6f8bca32191066f5fe15706
            $table->foreignId('brand_id')->constrained();
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
        Schema::dropIfExists('products');
    }
};

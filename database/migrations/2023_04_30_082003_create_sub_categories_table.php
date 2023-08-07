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
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('priority');
<<<<<<< HEAD:database/migrations/2023_06_05_082003_create_sub_categories_table.php
=======
            $table->foreignId('category_id')->constrained();
>>>>>>> 55d43e69aab00fe0d6f8bca32191066f5fe15706:database/migrations/2023_04_30_082003_create_sub_categories_table.php
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
        Schema::dropIfExists('sub_categories');
    }
};

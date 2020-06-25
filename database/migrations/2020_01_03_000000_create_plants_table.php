<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 255);
            $table->string('name', 255);
            $table->string('scientific', 255)->nullable();
            $table->enum('type', ['berry', 'grain', 'herb', 'mushroom', 'nut', 'root', 'seed', 'vegetable']);
            $table->text('description');
            $table->string('image', 255);
            $table->boolean('edible')->default(false);
            $table->boolean('poisonous')->default(false);
            $table->boolean('spring')->default(false);
            $table->boolean('summer')->default(false);
            $table->boolean('autumn')->default(false);
            $table->boolean('winter')->default(false);
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
        Schema::dropIfExists('plants');
    }
}

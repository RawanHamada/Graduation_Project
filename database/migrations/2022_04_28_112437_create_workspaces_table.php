<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkspacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workspaces', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->text('description',100);
            $table->string('location',100);
            $table->json('img_url');
            $table->string('price',100);
            $table->string('rating',100);

            $table->foreignId('owner_id')
            ->nullable()
            ->constrained('owners','id')
            ->nullOnDelete();

            $table->foreignId('city_id')
            ->nullable()
            ->constrained('cities','id')
            ->nullOnDelete();


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
        Schema::dropIfExists('workspaces');
    }
}
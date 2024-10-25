<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Add user_id as a foreign key
            $table->string('name');
            $table->text('description');
            $table->string('image'); // Store the image path
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
}



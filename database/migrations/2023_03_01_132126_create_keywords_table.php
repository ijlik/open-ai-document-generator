<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('keywords', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class);
            $table->text('title');
            $table->boolean('is_ready')->default(0);
            $table->boolean('is_downloaded')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('keywords');
    }
};

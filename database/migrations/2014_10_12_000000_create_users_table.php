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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('whitelist_otp')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        $user = \App\Models\User::create([
            'name' => 'Bot ijlik',
            'email' => 'bot@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('jancokasu'),
            'whitelist_otp' => 123456
        ]);
        $user->markEmailAsVerified();
        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};

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
        Schema::create('idea_creators', function (Blueprint $table) {
            $table->id();
            $table->string('profile_pic');
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string(column: 'phone_number1');
            $table->string(column: 'phone_number2');
            $table->string(column: 'address');
            $table->longText(column: 'education_status');
            $table->longText(column: 'about_me');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idea_creators');
    }
};

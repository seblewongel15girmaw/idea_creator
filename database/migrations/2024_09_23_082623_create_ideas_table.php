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
        Schema::create('ideas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idea_creator_id');
            $table->string('project_name');
            $table->longText('description');
            $table->string('target_audiance');
            $table->string('project_status');
            $table->string('user_expectations');
            $table->string('proposal');
            $table->longText('comments')->nullable();
            $table->foreign('idea_creator_id')->references('id')->on('idea_creators')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ideas');
    }
};

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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->string('slug');
            $table->longText('content');
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->boolean('status')->default(0);

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

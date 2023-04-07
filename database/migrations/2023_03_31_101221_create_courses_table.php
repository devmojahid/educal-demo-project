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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->text('content')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->unsignedBigInteger('review_id')->nullable();
            $table->integer('price')->nullable();
            $table->integer('discount_price')->nullable();
            $table->string('topic')->nullable();
            $table->string('level')->nullable();
            $table->string('language')->nullable();
            $table->string('requirement')->nullable();
            $table->string('what_you_learn')->nullable();
            $table->string('duration')->nullable();
            $table->string('lesson')->nullable();
            $table->string('video')->nullable();
            $table->string('file')->nullable();
            $table->string('quiz')->nullable();
            $table->string('certificate')->nullable();
            $table->string('access')->nullable();
            $table->string('any_device')->nullable();
            $table->string('anytime')->nullable();
            $table->string('support')->nullable();
            $table->string('rating')->nullable();
            $table->string('total_student')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            $table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

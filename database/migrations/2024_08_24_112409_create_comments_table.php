<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('content');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('post_id');
            $table->timestamps();
            $table->index('post_id', 'comment_post_idx');
            $table->foreign('post_id', 'comment_post_fk')
            ->on('posts')
            ->references('id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};

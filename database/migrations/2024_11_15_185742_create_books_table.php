<?php

use App\Models\Author;
use App\Models\Genre;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index();
            $table->text('description');
            $table->foreignIdFor(Author::class)->constrained()->onDelete('cascade');
            $table->date('published_at')->nullable();
            $table->string('isbn')->unique()->nullable();
            $table->integer('page_count')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('language')->nullable();
            $table->string('publisher')->nullable();
            $table->foreignIdFor(Genre::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

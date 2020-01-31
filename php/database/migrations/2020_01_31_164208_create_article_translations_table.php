<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateArticleTranslationsTable
 */
class CreateArticleTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lang');
            $table->bigInteger('article_id');
            $table->string('title', 512);
            $table->string('description', 1024)->nullable();
            $table->text('content')->nullable();
            $table->string('author', 512)->nullable();
            $table->string('seo_title', 512)->nullable();
            $table->string('seo_description', 1024)->nullable();
            $table->text('seo_content')->nullable();
            $table->string('seo_canonical', 512)->nullable();
            $table->string('seo_keyword', 512)->nullable();
            $table->string('seo_robots', 512)->nullable();
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
        Schema::dropIfExists('article_translations');
    }
}

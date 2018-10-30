<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url')->unique()->comment('域名');
            $table->string('title')->nullable()->comment('名称');
            $table->string('keywords')->nullable()->comment('关键词');
            $table->text('description')->nullable()->comment('网站描述');
            $table->integer('alexa')->default(0)->comment('alexa');
            $table->text('icp')->nullable()->comment('备案');
            $table->text('rank')->nullable()->comment('权重');
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
        Schema::dropIfExists('sites');
    }
}

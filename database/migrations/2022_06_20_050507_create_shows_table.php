<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('apiId');
            $table->string('name');
            $table->string('url')->nullable();
            $table->string('type')->nullable();
            $table->string('language')->nullable();
            $table->string('status')->nullable();
            $table->integer('runtime')->nullable();
            $table->integer('weight')->nullable();
            $table->date('premiered')->nullable();
            $table->date('ended')->nullable();
            $table->string('officialSite')->nullable();
            $table->string('averageRate')->nullable();
            $table->text('summary')->nullable();
            $table->string('img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shows');
    }
}

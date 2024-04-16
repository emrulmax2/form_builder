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
        Schema::create('document_genrators', function (Blueprint $table) {
            $table->id();
            $table->string('title',191)->nullable();
            $table->string('logo',191)->nullable();
            $table->integer('status')->default(1);
            $table->string('slug',191)->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->string('change_log_status',191)->nullable();
            $table->longText('change_log_json')->nullable();
            $table->string('theme',191);
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
        Schema::dropIfExists('document_genrators');
    }
};

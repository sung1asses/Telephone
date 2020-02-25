<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numbers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('position')->nullable();
            $table->string('cabinet')->nullable();
            $table->string('email')->nullable();

            $table->unsignedBigInteger('institute_id')->index();
            $table->foreign('institute_id')->references('id')->on('institutes')->onDelete('cascade');
            
            $table->string('local_number')->nullable();
            $table->string('telephone_number')->nullable();
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
        Schema::table('numbers', function (Blueprint $table) {
            $table->dropForeign('numbers_institute_id_foreign');
        });
        Schema::dropIfExists('numbers');
    }
}

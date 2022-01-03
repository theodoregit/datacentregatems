<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('requestno');
            $table->string('admin_name')->nullable();
            $table->string('visiting_date')->nullable();
            $table->string('morning_start')->nullable();
            $table->string('morning_end')->nullable();
            $table->string('afternoon_start')->nullable();
            $table->string('afternoon_end')->nullable();
            $table->longText('personnels')->nullable();
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
        Schema::dropIfExists('log_books');
    }
}

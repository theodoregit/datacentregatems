<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('access_requests');
        Schema::create('access_requests', function (Blueprint $table) {            
            $table->increments('id');
            $table->string('requestno')->default('0');
            $table->string('fullname');
            $table->string('phone_number');
            $table->integer('id_number');
            $table->date('date');
            $table->string('starting_date');
            $table->string('end_date');
            $table->integer('remaining_days');
            $table->string('access_req_location');
            $table->string('access_time');
            $table->string('areas_tobe_accessed');
            $table->string('personnel1');
            $table->string('personnel2');
            $table->string('personnel3');
            $table->string('personnel4');
            $table->string('location');
            $table->longText('impact');
            $table->longText('purpose');
            $table->string('letter');
            $table->boolean('is_confirmed')->default(0);
            $table->boolean('is_approved')->default(0);
            $table->boolean('is_denied')->default(0);
            $table->boolean('is_rejected')->default(0);
            $table->string('unit');
            $table->longText('denial_reason');
            $table->longText('rejection_reason');
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
        Schema::dropIfExists('access_requests');
    }
}

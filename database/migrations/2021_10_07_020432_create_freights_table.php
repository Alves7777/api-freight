<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreightsTable extends Migration
{

    public function up()
    {
        Schema::create('freights', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('plate');
            $table->string('vehicle_owner');
            $table->string('cost_of_freight');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', ['started', 'in_transit', 'concluded'])->default('started');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('freights');
    }
}

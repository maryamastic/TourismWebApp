<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourpackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourpackages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('PackageId')->nullable();
            $table->string('PackageName')->nullable();
            $table->string('PackageType')->nullable();
            $table->string('PackageLocation')->nullable();
            $table->text('PackagePrice')->nullable();
            $table->mediumText('PackageDetails')->nullable();
            $table->text('Duration')->nullable();
            $table->date('Deadline')->nullable();
            $table->string('Altitude')->nullable();
            $table->string('Month')->nullable();
            $table->string('feature')->nullable();
            $table->string('include')->nullable();
            $table->string('essential')->nullable();
            $table->string('not_include')->nullable();
            $table->string('PackageImage')->nullable();
            $table->timestampTz('time_stamp')->nullable();
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
        Schema::dropIfExists('tourpackages');
    }
}

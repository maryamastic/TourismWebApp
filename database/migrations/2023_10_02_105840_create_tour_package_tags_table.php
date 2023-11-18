<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateTourPackageTagsTable extends Migration
{
    public function up()
    {
        Schema::create('tour_package_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('taggable_id')->unsigned();
            $table->string('taggable_type', 255);
            $table->string('tag_name', 255);
            $table->timestamps();
            $table->index(['taggable_id', 'taggable_type', 'tag_name']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tour_package_tags');
    }
}
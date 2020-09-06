<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bugs', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->mediumText('Description');
            $table->mediumText('Solution');
            $table->string('Image');
            $table->mediumText('FeedBack');
            $table->mediumText('WrongApproach');
            // $table->string('Time');
            $table->string('Label');
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
        Schema::dropIfExists('bugs');
    }
}
